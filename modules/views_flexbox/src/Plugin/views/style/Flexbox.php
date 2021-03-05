<?php

namespace Drupal\views_flexbox\Plugin\views\style;

use Drupal\views\Plugin\views\style\StylePluginBase;

use Drupal\Component\Utility\Html;
use Drupal\Core\Form\FormStateInterface;

/**
 * Style plugin to render each item in a flexbox layout.
 *
 * @ingroup views_style_plugins
 *
 * @ViewsStyle(
 *   id = "flexbox",
 *   title = @Translation("Flexbox"),
 *   help = @Translation("Displays Items with Flexbox."),
 *   theme = "views_view_flexbox",
 *   display_types = {"normal"}
 * )
 */
class Flexbox extends StylePluginBase {

  /**
   * {@inheritdoc}
   */
  protected $usesRowPlugin = TRUE;

  /**
   * {@inheritdoc}
   */
  protected function defineOptions() {
    $options = parent::defineOptions();
    $options['style'] = ['default' => '_none_'];
    $options['link_to_content'] = ['default' => FALSE];
    $options['link_source'] = ['default' => NULL];
    $options['direction'] = ['default' => 'row'];
    $options['justify'] = ['default' => 'start'];
    $options['align_items'] = ['default' => 'stretch'];
    $options['align_content'] = ['default' => 'stretch'];
    $options['item_class_default'] = ['default' => TRUE];
    $options['item_class_custom'] = ['default' => ''];
    return $options;
  }

  /**
   * {@inheritdoc}
   */
  public function buildOptionsForm(&$form, FormStateInterface $form_state) {
    parent::buildOptionsForm($form, $form_state);
    $form['style'] = [
      '#type' => 'select',
      '#title' => $this->t('Display Style'),
      '#default_value' => $this->options['style'],
      '#required' => TRUE,
      '#options' => [
        '_none_' => $this->t('None'),
        'cards' => $this->t('Card Layout'),
      ],
    ];
    $form['link_to_content'] = [
      '#title' => $this->t('Link to content'),
      '#description' => $this->t('Link card to content.'),
      '#type' => 'checkbox',
      '#default_value' => $this->options['link_to_content'],
      '#states' => [
        // Show this textfield only if the radio 'other' is selected above.
        'visible' => [
          ':input[name="style_options[style]"]' => ['value' => 'cards'],
        ],
      ],
    ];

    if ($this->usesFields()) {
      $form['link_source'] = [
        '#title' => $this->t('Link Source'),
        '#description' => $this->t('Link URL. You may use field tokens from as per the "Replacement patterns" used in "Rewrite the output of this field" for all fields.'),
        '#type' => 'textfield',
        '#default_value' => $this->options['link_source'],
        '#states' => [
          // Show this textfield only if the radio 'other' is selected above.
          'visible' => [
            ':input[name="style_options[link_to_content]"]' => ['checked' => TRUE],
          ],
        ],
      ];
    }

    $form['direction'] = [
      '#type' => 'select',
      '#title' => $this->t('Flex Direction'),
      '#default_value' => $this->options['direction'],
      '#required' => TRUE,
      '#options' => [
        'row' => $this->t('Row'),
        'row-reverse' => $this->t('Row Reverse'),
        'column' => $this->t('Column'),
        'column-reverse' => $this->t('Column Reverse'),
      ],
    ];
    $form['justify'] = [
      '#type' => 'select',
      '#title' => $this->t('Justify Content'),
      '#default_value' => $this->options['justify'],
      '#required' => TRUE,
      '#options' => [
        'start' => $this->t('Start'),
        'end' => $this->t('End'),
        'center' => $this->t('Center'),
        'space-between' => $this->t('Space Between'),
        'space-around' => $this->t('Space Around'),
        'space-evenly' => $this->t('Space Evenly'),
      ],
    ];
    $form['align_items'] = [
      '#type' => 'select',
      '#title' => $this->t('Align Items'),
      '#default_value' => $this->options['align_items'],
      '#required' => TRUE,
      '#options' => [
        'start' => $this->t('Start'),
        'end' => $this->t('End'),
        'center' => $this->t('Center'),
        'strech' => $this->t('Stretch'),
        'baseline' => $this->t('Baseline'),
      ],
    ];
    $form['align_content'] = [
      '#type' => 'select',
      '#title' => $this->t('Align Content'),
      '#default_value' => $this->options['align_content'],
      '#required' => TRUE,
      '#options' => [
        'start' => $this->t('Start'),
        'end' => $this->t('End'),
        'center' => $this->t('Center'),
        'strech' => $this->t('Stretch'),
        'space-between' => $this->t('Space Between'),
        'space-around' => $this->t('Space Around'),
      ],
    ];

    $form['item_class_default'] = [
      '#title' => $this->t('Default item classes'),
      '#description' => $this->t('Adds the default views style classes like item-1 to the output. You can use this to quickly reduce the amount of markup the view provides by default, at the cost of making it more difficult to apply CSS.'),
      '#type' => 'checkbox',
      '#default_value' => $this->options['item_class_default'],
    ];
    $form['item_class_custom'] = [
      '#title' => $this->t('Custom item classes'),
      '#description' => $this->t('Additional classes to provide on each item. Separated by a space.'),
      '#type' => 'textfield',
      '#default_value' => $this->options['item_class_custom'],
    ];
    if ($this->usesFields()) {
      $form['item_class_custom']['#description'] .= ' ' . $this->t('You may use field tokens from as per the "Replacement patterns" used in "Rewrite the output of this field" for all fields.');
    }
  }

  /**
   * Return the token-replaced classes for the specified result.
   *
   * @param int $result_index
   *   The delta of the result item to get custom classes for.
   * @param string $type
   *   The type of custom classes to return, either "item".
   *
   * @return string
   *   A space-delimited string of classes.
   */
  public function getCustomClass($result_index, $type) {
    $class = $this->options[$type . '_class_custom'];
    if ($this->usesFields() && $this->view->field) {
      $class = strip_tags($this->tokenizeValue($class, $result_index));
    }

    $classes = explode(' ', $class);
    foreach ($classes as &$class) {
      $class = Html::cleanCssIdentifier($class);
    }
    return implode(' ', $classes);
  }

  /**
   * Return the token-replaced link for the specified result.
   *
   * @param int $result_index
   *   The delta of the result item to get link for.
   *
   * @return string
   *   A string url.
   */
  public function getLinkLocation($result_index) {
    $link = $this->options['link_source'];
    if (!empty($link) && $this->usesFields() && $this->view->field) {
      $link = strip_tags($this->tokenizeValue($link, $result_index));
    }
    elseif (isset($this->view->results[$result_index]) && isset($this->view->results[$result_index]->_entity)) {
      $link = $this->view->results[$result_index]->_entity->toUrl();
    }

    return $link;
  }

}

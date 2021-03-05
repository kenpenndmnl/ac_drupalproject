<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/views_flexbox/templates/views-view-flexbox.html.twig */
class __TwigTemplate_32c90fc86aa65dfaf69e26c063f869f2968927f4a3d4cf17e578c11cab882962 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        $context["classes"] = [0 => "views-view-flexbox", 1 => ("views-flexbox-direction-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 32
($context["options"] ?? null), "direction", [], "any", false, false, true, 32), 32, $this->source)), 2 => ("views-flexbox-justify-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 33
($context["options"] ?? null), "justify", [], "any", false, false, true, 33), 33, $this->source)), 3 => ("views-flexbox-align-items-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 34
($context["options"] ?? null), "align_items", [], "any", false, false, true, 34), 34, $this->source)), 4 => ("views-flexbox-align-content-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 35
($context["options"] ?? null), "align_content", [], "any", false, false, true, 35), 35, $this->source))];
        // line 39
        $context["item_classes"] = [0 => "views-flexbox-item"];
        // line 43
        if (($context["title"] ?? null)) {
            // line 44
            echo "  <h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 44, $this->source), "html", null, true);
            echo "</h3>
";
        }
        // line 46
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "style", [], "any", false, false, true, 46)) ? (("views-flexbox-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "style", [], "any", false, false, true, 46), 46, $this->source))) : (""))], "method", false, false, true, 46), 46, $this->source), "html", null, true);
        echo ">
    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 48
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 48)) {
                // line 49
                echo "        <a";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 49), "addClass", [0 => ($context["item_classes"] ?? null), 1 => ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "item_class_default", [], "any", false, false, true, 49)) ? (("item-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 49), 49, $this->source))) : (""))], "method", false, false, true, 49), "setAttribute", [0 => "href", 1 => twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 49)], "method", false, false, true, 49), 49, $this->source), "html", null, true);
                echo ">
      ";
            } else {
                // line 51
                echo "        <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 51), "addClass", [0 => ($context["item_classes"] ?? null), 1 => ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "item_class_default", [], "any", false, false, true, 51)) ? (("item-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 51), 51, $this->source))) : (""))], "method", false, false, true, 51), 51, $this->source), "html", null, true);
                echo ">
      ";
            }
            // line 54
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            // line 56
            if (twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 56)) {
                // line 57
                echo "        </a>
      ";
            } else {
                // line 59
                echo "        </div>
      ";
            }
            // line 61
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/views_flexbox/templates/views-view-flexbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 62,  104 => 61,  100 => 59,  96 => 57,  94 => 56,  92 => 54,  86 => 51,  80 => 49,  77 => 48,  60 => 47,  55 => 46,  49 => 44,  47 => 43,  45 => 39,  43 => 35,  42 => 34,  41 => 33,  40 => 32,  39 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/views_flexbox/templates/views-view-flexbox.html.twig", "C:\\xampp\\htdocs\\angie_collection\\modules\\views_flexbox\\templates\\views-view-flexbox.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 30, "if" => 43, "for" => 47);
        static $filters = array("escape" => 44);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}

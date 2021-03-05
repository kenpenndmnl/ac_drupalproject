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

/* core/themes/stable/templates/layout/layout--twocol-bricks.html.twig */
class __TwigTemplate_824980cb13d05716d796198c36496c7371f90c4b08e9b69cb8eb1e27e396596a extends \Twig\Template
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
        // line 15
        $context["classes"] = [0 => "layout", 1 => "layout--twocol-bricks"];
        // line 20
        if (($context["content"] ?? null)) {
            // line 21
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 21), 21, $this->source), "html", null, true);
            echo ">
    ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "top", [], "any", false, false, true, 22)) {
                // line 23
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "top", [], "any", false, false, true, 23), "addClass", [0 => "layout__region", 1 => "layout__region--top"], "method", false, false, true, 23), 23, $this->source), "html", null, true);
                echo ">
        ";
                // line 24
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "top", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 27
            echo "
    ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "first_above", [], "any", false, false, true, 28)) {
                // line 29
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "first_above", [], "any", false, false, true, 29), "addClass", [0 => "layout__region", 1 => "layout__region--first-above"], "method", false, false, true, 29), 29, $this->source), "html", null, true);
                echo ">
        ";
                // line 30
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "first_above", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 33
            echo "
    ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "second_above", [], "any", false, false, true, 34)) {
                // line 35
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "second_above", [], "any", false, false, true, 35), "addClass", [0 => "layout__region", 1 => "layout__region--second-above"], "method", false, false, true, 35), 35, $this->source), "html", null, true);
                echo ">
        ";
                // line 36
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "second_above", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 39
            echo "
    ";
            // line 40
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "middle", [], "any", false, false, true, 40)) {
                // line 41
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "middle", [], "any", false, false, true, 41), "addClass", [0 => "layout__region", 1 => "layout__region--middle"], "method", false, false, true, 41), 41, $this->source), "html", null, true);
                echo ">
        ";
                // line 42
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "middle", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 45
            echo "
    ";
            // line 46
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "first_below", [], "any", false, false, true, 46)) {
                // line 47
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "first_below", [], "any", false, false, true, 47), "addClass", [0 => "layout__region", 1 => "layout__region--first-below"], "method", false, false, true, 47), 47, $this->source), "html", null, true);
                echo ">
        ";
                // line 48
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "first_below", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 51
            echo "
    ";
            // line 52
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "second_below", [], "any", false, false, true, 52)) {
                // line 53
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "second_below", [], "any", false, false, true, 53), "addClass", [0 => "layout__region", 1 => "layout__region--second-below"], "method", false, false, true, 53), 53, $this->source), "html", null, true);
                echo ">
        ";
                // line 54
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "second_below", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 57
            echo "
    ";
            // line 58
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bottom", [], "any", false, false, true, 58)) {
                // line 59
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "bottom", [], "any", false, false, true, 59), "addClass", [0 => "layout__region", 1 => "layout__region--bottom"], "method", false, false, true, 59), 59, $this->source), "html", null, true);
                echo ">
        ";
                // line 60
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bottom", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 63
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/layout/layout--twocol-bricks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 63,  151 => 60,  146 => 59,  144 => 58,  141 => 57,  135 => 54,  130 => 53,  128 => 52,  125 => 51,  119 => 48,  114 => 47,  112 => 46,  109 => 45,  103 => 42,  98 => 41,  96 => 40,  93 => 39,  87 => 36,  82 => 35,  80 => 34,  77 => 33,  71 => 30,  66 => 29,  64 => 28,  61 => 27,  55 => 24,  50 => 23,  48 => 22,  43 => 21,  41 => 20,  39 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/stable/templates/layout/layout--twocol-bricks.html.twig", "C:\\xampp\\htdocs\\angie_collection\\core\\themes\\stable\\templates\\layout\\layout--twocol-bricks.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 15, "if" => 20);
        static $filters = array("escape" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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

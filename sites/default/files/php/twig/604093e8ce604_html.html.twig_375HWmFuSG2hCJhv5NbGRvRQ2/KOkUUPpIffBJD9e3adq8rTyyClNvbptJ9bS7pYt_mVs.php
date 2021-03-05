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

/* themes/mili/templates/layout/html.html.twig */
class __TwigTemplate_265faeca86d1f5d25f04632096e52c4fd5e2b7c7267a712e232a688288b9c40b extends \Twig\Template
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
        // line 26
        echo "
";
        // line 29
        $context["body_classes"] = [0 => (( !        // line 30
($context["root_path"] ?? null)) ? ("homepage") : ("site-page")), 1 => ((        // line 31
($context["node_type"] ?? null)) ? (("page-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 31, $this->source)))) : ("")), 2 => ((( !twig_get_attribute($this->env, $this->source,         // line 32
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 32) &&  !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 32))) ? ("no-sidebar") : ("")), 3 => (((twig_get_attribute($this->env, $this->source,         // line 33
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 33) &&  !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 33))) ? ("one-sidebar sidebar-left") : ("")), 4 => (((twig_get_attribute($this->env, $this->source,         // line 34
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 34) &&  !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 34))) ? ("one-sidebar sidebar-right") : ("")), 5 => (((twig_get_attribute($this->env, $this->source,         // line 35
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 35) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 35))) ? ("two-sidebar") : (""))];
        // line 38
        echo "<!DOCTYPE html>
<html";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 39, $this->source), "html", null, true);
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 41, $this->source));
        echo "\">
    <title>";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 42, $this->source), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 43, $this->source));
        echo "\">
    <js-placeholder token=\"";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 44, $this->source));
        echo "\">
";
        // line 45
        if (($context["styling"] ?? null)) {
            // line 46
            echo "<style>
";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["styling_code"] ?? null), 47, $this->source), "html", null, true);
            echo "
</style>
";
        }
        // line 50
        echo "  </head>
  <body";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 51), 51, $this->source), "html", null, true);
        echo ">
    ";
        // line 56
        echo "    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 59, $this->source), "html", null, true);
        echo "
    ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 60, $this->source), "html", null, true);
        echo "
    ";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 61, $this->source), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 62, $this->source));
        echo "\">
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/mili/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 62,  108 => 61,  104 => 60,  100 => 59,  95 => 57,  92 => 56,  88 => 51,  85 => 50,  79 => 47,  76 => 46,  74 => 45,  70 => 44,  66 => 43,  62 => 42,  58 => 41,  53 => 39,  50 => 38,  48 => 35,  47 => 34,  46 => 33,  45 => 32,  44 => 31,  43 => 30,  42 => 29,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/mili/templates/layout/html.html.twig", "C:\\xampp\\htdocs\\angie_collection\\themes\\mili\\templates\\layout\\html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29, "if" => 45);
        static $filters = array("clean_class" => 31, "escape" => 39, "raw" => 41, "safe_join" => 42, "t" => 57);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'raw', 'safe_join', 't'],
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

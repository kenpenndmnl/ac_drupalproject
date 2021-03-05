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

/* @mili/template-parts/header.html.twig */
class __TwigTemplate_8340dd54584477eecf350bbec6fb6c28d7261e4c6a3f3549d399acbf96fc3da1 extends \Twig\Template
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
        // line 1
        echo "<!-- Start: Header -->
<header class=\"header\">
  <div class=\"container header-main\">
    ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 4)) {
            // line 5
            echo "      <div class=\"site-brand\">
        ";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "
      </div> <!--/.site-branding -->
    ";
        }
        // line 9
        echo "    <div class=\"header-right\">
      ";
        // line 10
        $this->loadTemplate("@mili/template-parts/search.html.twig", "@mili/template-parts/header.html.twig", 10)->display($context);
        // line 11
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 11)) {
            // line 12
            echo "         <div class=\"mobile-menu\">
           <i class=\"icon-bars\" aria-hidden=\"true\"></i>
         </div>
         <div class=\"primary-menu-wrapper\">
           <div class=\"menu-wrap\">
             <div class=\"close-mobile-menu\">x</div>
             ";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "
           </div>
         </div>
       ";
        }
        // line 22
        echo "       <!-- End: primary menu region -->
    </div> <!-- /.header-right -->
  </div> <!-- /.container -->
  ";
        // line 25
        if ((($context["is_front"] ?? null) && ($context["slider_show"] ?? null))) {
            // line 26
            echo "    ";
            $this->loadTemplate("@mili/template-parts/slider.html.twig", "@mili/template-parts/header.html.twig", 26)->display($context);
            // line 27
            echo "  ";
        } elseif ( !($context["is_front"] ?? null)) {
            // line 28
            echo "    ";
            $this->loadTemplate("@mili/template-parts/page_header.html.twig", "@mili/template-parts/header.html.twig", 28)->display($context);
            // line 29
            echo "  ";
        }
        // line 30
        echo "</header>
<!-- End: Header -->
";
    }

    public function getTemplateName()
    {
        return "@mili/template-parts/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 30,  94 => 29,  91 => 28,  88 => 27,  85 => 26,  83 => 25,  78 => 22,  71 => 18,  63 => 12,  60 => 11,  58 => 10,  55 => 9,  49 => 6,  46 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@mili/template-parts/header.html.twig", "C:\\xampp\\htdocs\\angie_collection\\themes\\mili\\templates\\template-parts\\header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "include" => 10);
        static $filters = array("escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
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

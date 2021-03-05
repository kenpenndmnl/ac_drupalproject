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

/* @mili/template-parts/slider.html.twig */
class __TwigTemplate_ea65b818db416642455610136bee7c935f9d28722d5ab2f255cf822c9853b968 extends \Twig\Template
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
        echo "<section class=\"slider\">
  <div class=\"container\">
  <ul class=\"js-rotating\">
      ";
        // line 4
        if ((($context["slider_code"] ?? null) != "")) {
            // line 5
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(strip_tags($this->sandbox->ensureToStringAllowed(($context["slider_code"] ?? null), 5, $this->source), "<ol>,<ul>,<li>,<p>,<a>,<img>,<video>,<h1>,<h2>,<h3>,<h4>,<h5>,<h6>,<em>,<strong>,<br>,<i>,<button>,<mark>"));
            echo "
      ";
        } else {
            // line 7
            echo "      <li>
\t\t\t\t<h1>Mili is Multipurpose Drupal theme</h1>
\t\t\t\t<p>Mili Theme is packed full of all the amazing features and options for you to create a successful website</p>
\t\t\t\t<a class=\"button\" href=\"#\">Get Started</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<h1>Welcome To Drupar Design Studio</h1>
\t\t\t\t<p>We present you material design. We put our hearts and soul into making every project.</p>
\t\t\t\t<a class=\"button\" href=\"#\">Get Started</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<h1>We Create Awesome Drupal Themes!</h1>
\t\t\t\t<p>Our themes are of high quality, flexible and beautifully crafted that stand out of crowd.</p>
\t\t\t\t<a class=\"button\" href=\"#\">Get Started</a>
\t\t\t</li>
      ";
        }
        // line 23
        echo "    </ul> <!--/.home-slider -->
  </div> <!--/.container -->
</section>
";
    }

    public function getTemplateName()
    {
        return "@mili/template-parts/slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 23,  52 => 7,  46 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@mili/template-parts/slider.html.twig", "C:\\xampp\\htdocs\\angie_collection\\themes\\mili\\templates\\template-parts\\slider.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4);
        static $filters = array("raw" => 5, "striptags" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['raw', 'striptags'],
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

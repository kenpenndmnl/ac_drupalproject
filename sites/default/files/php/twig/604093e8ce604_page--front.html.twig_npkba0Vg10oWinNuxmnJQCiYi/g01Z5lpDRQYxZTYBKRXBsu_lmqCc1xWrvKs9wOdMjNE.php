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

/* themes/mili/templates/layout/page--front.html.twig */
class __TwigTemplate_36ce05fbfccd0caed402c7896ff769fafcdfb3232d02e43720d42f50b9e7a563 extends \Twig\Template
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
        // line 11
        $this->loadTemplate("@mili/template-parts/header.html.twig", "themes/mili/templates/layout/page--front.html.twig", 11)->display($context);
        // line 12
        $this->loadTemplate("@mili/template-parts/highlighted.html.twig", "themes/mili/templates/layout/page--front.html.twig", 12)->display($context);
        // line 13
        echo "<div id=\"main-wrapper\" class=\"main-wrapper\">
  <div class=\"container\">
\t\t<a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 16
        echo "    <main id=\"home-main\" class=\"page-content home-content\">
      ";
        // line 17
        $this->loadTemplate("@mili/template-parts/content_top.html.twig", "themes/mili/templates/layout/page--front.html.twig", 17)->display($context);
        // line 18
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "
      ";
        // line 19
        $this->loadTemplate("@mili/template-parts/content_home.html.twig", "themes/mili/templates/layout/page--front.html.twig", 19)->display($context);
        // line 20
        echo "      ";
        $this->loadTemplate("@mili/template-parts/content_bottom.html.twig", "themes/mili/templates/layout/page--front.html.twig", 20)->display($context);
        // line 21
        echo "    </main>
  </div> ";
        // line 23
        echo "</div>";
        // line 24
        $this->loadTemplate("@mili/template-parts/footer.html.twig", "themes/mili/templates/layout/page--front.html.twig", 24)->display($context);
        // line 25
        if (($context["slider_show"] ?? null)) {
            // line 26
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("mili/slider"), "html", null, true);
            echo "
<script>
jQuery(document).ready(function (\$) {
  \$(\".js-rotating\").Morphist({
  \tanimateIn: 'bounceIn',
  \tanimateOut: 'fadeOutLeft',
  \tspeed: 5000,
  });
});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/mili/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 26,  69 => 25,  67 => 24,  65 => 23,  62 => 21,  59 => 20,  57 => 19,  52 => 18,  50 => 17,  47 => 16,  43 => 13,  41 => 12,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/mili/templates/layout/page--front.html.twig", "C:\\xampp\\htdocs\\angie_collection\\themes\\mili\\templates\\layout\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 11, "if" => 25);
        static $filters = array("escape" => 18);
        static $functions = array("attach_library" => 26);

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
                ['attach_library']
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

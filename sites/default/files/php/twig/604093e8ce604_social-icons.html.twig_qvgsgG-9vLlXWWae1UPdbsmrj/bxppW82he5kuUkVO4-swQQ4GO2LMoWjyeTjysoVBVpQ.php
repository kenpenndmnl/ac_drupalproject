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

/* @mili/template-parts/social-icons.html.twig */
class __TwigTemplate_ea125e826e690dffe677c00c9fefe7bdcfac5bc82c0fe0ea0c3476cf5bf918a6 extends \Twig\Template
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
        if (($context["all_icons_show"] ?? null)) {
            // line 2
            echo "<ul class=\"social-icons\">
  ";
            // line 3
            if ((($context["facebook_url"] ?? null) != "")) {
                // line 4
                echo "    <li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 4, $this->source), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"icon-facebook\"></i></a></li>
  ";
            }
            // line 6
            echo "  ";
            if ((($context["twitter_url"] ?? null) != "")) {
                // line 7
                echo "    <li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 7, $this->source), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"icon-twitter\"></i></a></li>
  ";
            }
            // line 9
            echo "  ";
            if ((($context["instagram_url"] ?? null) != "")) {
                // line 10
                echo "    <li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 10, $this->source), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"icon-instagram\"></i></a></li>
  ";
            }
            // line 12
            echo "  ";
            if ((($context["linkedin_url"] ?? null) != "")) {
                // line 13
                echo "    <li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 13, $this->source), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"icon-linkedin\"></i></a></li>
  ";
            }
            // line 15
            echo "  ";
            if ((($context["youtube_url"] ?? null) != "")) {
                // line 16
                echo "    <li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube_url"] ?? null), 16, $this->source), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"icon-youtube\"></i></a></li>
  ";
            }
            // line 18
            echo "  ";
            if ((($context["gplus_url"] ?? null) != "")) {
                // line 19
                echo "    <li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["gplus_url"] ?? null), 19, $this->source), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"icon-google-plus\"></i></a></li>
  ";
            }
            // line 21
            echo "  ";
            if ((($context["telegram_url"] ?? null) != "")) {
                // line 22
                echo "    <li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["telegram_url"] ?? null), 22, $this->source), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"icon-telegram\"></i></a></li>
  ";
            }
            // line 24
            echo "  ";
            if ((($context["whatsapp_url"] ?? null) != "")) {
                // line 25
                echo "    <li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["whatsapp_url"] ?? null), 25, $this->source), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"icon-whatsapp\"></i></a></li>
  ";
            }
            // line 27
            echo "  ";
            if ((($context["github_url"] ?? null) != "")) {
                // line 28
                echo "    <li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["github_url"] ?? null), 28, $this->source), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"icon-github\"></i></a></li>
  ";
            }
            // line 30
            echo "  ";
            if ((($context["vk_url"] ?? null) != "")) {
                // line 31
                echo "    <li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["vk_url"] ?? null), 31, $this->source), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"icon-vk\" aria-hidden=\"true\"></i></a></li>
  ";
            }
            // line 33
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "@mili/template-parts/social-icons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 33,  127 => 31,  124 => 30,  118 => 28,  115 => 27,  109 => 25,  106 => 24,  100 => 22,  97 => 21,  91 => 19,  88 => 18,  82 => 16,  79 => 15,  73 => 13,  70 => 12,  64 => 10,  61 => 9,  55 => 7,  52 => 6,  46 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@mili/template-parts/social-icons.html.twig", "C:\\xampp\\htdocs\\angie_collection\\themes\\mili\\templates\\template-parts\\social-icons.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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

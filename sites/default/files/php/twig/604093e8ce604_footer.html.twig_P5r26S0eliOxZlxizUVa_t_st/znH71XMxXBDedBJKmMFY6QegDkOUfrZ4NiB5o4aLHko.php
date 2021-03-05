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

/* @mili/template-parts/footer.html.twig */
class __TwigTemplate_95ad64dfef9a12dc899e9f1e08cae020784f8f7ed3eaa789a03da7b15a82ad48 extends \Twig\Template
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
        echo "<!-- Start: Footer -->
<footer class=\"footer\">
  <div class=\"container\">
  ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 4)) {
            // line 5
            echo "    <section id=\"footer-top\">
      <div class=\"footer-top\">
        ";
            // line 7
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 10
        echo "<!-- /footer-top -->

  ";
        // line 12
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 12) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 12)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 12)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 12))) {
            // line 13
            echo "   <section id=\"footer-blocks\">
      <div class=\"full footer-blocks\">
         <div class=\"one_four_first footer-block\">
            ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 16)) {
                // line 17
                echo "               ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "
            ";
            }
            // line 19
            echo "         </div> <!--/footer-first -->

         <div class=\"one_four footer-block\">
            ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 22)) {
                // line 23
                echo "               ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                echo "
            ";
            }
            // line 25
            echo "         </div> <!--/footer-second -->

         <div class=\"one_four footer-block\">
            ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 28)) {
                // line 29
                echo "               ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo "
            ";
            }
            // line 31
            echo "         </div> <!--/footer-three -->

         <div class=\"one_four one_four_last footer-block\">
            ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 34)) {
                // line 35
                echo "               ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "
            ";
            }
            // line 37
            echo "         </div> <!--/footer-fourth -->
      </div> <!-- /.full -->
   </section> <!--/footer-blocks -->
 ";
        }
        // line 40
        echo " ";
        // line 41
        echo "
 ";
        // line 42
        if (((($context["copyright_text"] ?? null) || ($context["all_icons_show"] ?? null)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 42))) {
            // line 43
            echo "  <section id=\"footer-bottom\">
    ";
            // line 44
            if ((($context["copyright_text"] ?? null) || ($context["all_icons_show"] ?? null))) {
                // line 45
                echo "      <div class=\"footer-bottom-section full\">
      ";
                // line 46
                if (($context["copyright_text"] ?? null)) {
                    // line 47
                    echo "        <div class=\"one_half\">
          <div class=\"copyright\">
            &copy; ";
                    // line 49
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 49, $this->source), "html", null, true);
                    echo ", All rights reserved.
          </div>
        </div> <!-- /.one_half -->
        <div class=\"one_half text_right\">
      ";
                } else {
                    // line 54
                    echo "        <div class=\"text_right\">
      ";
                }
                // line 56
                echo "        ";
                $this->loadTemplate("@mili/template-parts/social-icons.html.twig", "@mili/template-parts/footer.html.twig", 56)->display($context);
                // line 57
                echo "      </div> <!--/.text_right -->
      </div> <!--/.full -->
    ";
            }
            // line 59
            echo " <!-- end condition if copyright or social icons -->
    ";
            // line 60
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 60)) {
                // line 61
                echo "      <div class=\"footer-bottom\">
        ";
                // line 62
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
                echo "
      </div> <!--/.footer-bottom -->
    ";
            }
            // line 65
            echo "  </section> <!-- /footer-bottom -->
  ";
        }
        // line 67
        echo "
  </div><!-- /.container -->
</footer>
";
        // line 70
        if (($context["scrolltotop_on"] ?? null)) {
            // line 71
            echo "<div class=\"scrolltop\"><i class=\"icon-angle-up\"></i></div>
";
        }
        // line 73
        echo "<!-- End: Footer -->
";
        // line 74
        if (($context["font_icon_fontawesome"] ?? null)) {
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("mili/fontawesome"), "html", null, true);
            echo "
";
        }
        // line 77
        if (($context["font_icon_material"] ?? null)) {
            // line 78
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("mili/material"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@mili/template-parts/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 78,  203 => 77,  198 => 75,  196 => 74,  193 => 73,  189 => 71,  187 => 70,  182 => 67,  178 => 65,  172 => 62,  169 => 61,  167 => 60,  164 => 59,  159 => 57,  156 => 56,  152 => 54,  142 => 49,  138 => 47,  136 => 46,  133 => 45,  131 => 44,  128 => 43,  126 => 42,  123 => 41,  121 => 40,  115 => 37,  109 => 35,  107 => 34,  102 => 31,  96 => 29,  94 => 28,  89 => 25,  83 => 23,  81 => 22,  76 => 19,  70 => 17,  68 => 16,  63 => 13,  61 => 12,  57 => 10,  50 => 7,  46 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@mili/template-parts/footer.html.twig", "C:\\xampp\\htdocs\\angie_collection\\themes\\mili\\templates\\template-parts\\footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "include" => 56);
        static $filters = array("escape" => 7, "date" => 49);
        static $functions = array("attach_library" => 75);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape', 'date'],
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

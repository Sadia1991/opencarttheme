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

/* morazzo/template/extension/module/category.twig */
class __TwigTemplate_f23a427f14d5ad782f7eec6a90f5f26f017a881114be2abfb89ab4e634f77e43 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"body-content outer-top-vs\" id=\"top-banner-and-menu\">
  <div class=\"container\">
    <div class=\"row\">
      <!-- ============================================== SIDEBAR ============================================== -->
      <div class=\"col-xs-12 col-sm-12 col-md-3 sidebar\">

        <!-- ================================== TOP NAVIGATION ================================== -->
        <div class=\"side-menu animate-dropdown outer-bottom-xs\">
            ";
        // line 9
        if (($context["categories"] ?? null)) {
            // line 10
            echo "          <div class=\"head\"><i class=\"icon fa fa-align-justify fa-fw\"></i> ";
            echo ($context["text_category"] ?? null);
            echo "</div>
          <nav class=\"yamm megamenu-horizontal\">
            <ul class=\"nav\">
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 14
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 14)) {
                    // line 15
                    echo "              <li class=\"dropdown menu-item\"> <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 15);
                    echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon fa fa-shopping-bag\" aria-hidden=\"true\"></i>";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 15);
                    echo "</a>
                <ul class=\"dropdown-menu mega-menu\">
                  <li class=\"yamm-content\">
                    <div class=\"row\">
                        ";
                    // line 19
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 19));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 20
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "gchildren", [], "any", true, true, false, 20)) {
                            // line 21
                            echo "                      <div class=\"col-sm-12 col-md-3\">
                        <ul class=\"links list-unstyled\">
                            ";
                            // line 23
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "gchildren", [], "any", false, false, false, 23));
                            foreach ($context['_seq'] as $context["_key"] => $context["gchild"]) {
                                // line 24
                                echo "                              <li><a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["gchild"], "href", [], "any", false, false, false, 24);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["gchild"], "name", [], "any", false, false, false, 24);
                                echo "</a></li>
                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gchild'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 26
                            echo "                        </ul>
                      </div>
                      <!-- /.col -->
                        ";
                        } else {
                            // line 30
                            echo "                      <div class=\"col-sm-12 col-md-3\">
                        <ul class=\"links list-unstyled\">

                              <li><a href=\"";
                            // line 33
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 33);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 33);
                            echo "</a></li>

                        </ul>
                      </div>

                        ";
                        }
                        // line 39
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 40
                    echo "                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </li>
                    ";
                }
                // line 45
                echo "                  <!-- /.yamm-content -->
                </ul>
                <!-- /.dropdown-menu --> </li>
              <!-- /.menu-item -->
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "
            </ul>
            <!-- /.nav -->
          </nav>
          <!-- /.megamenu-horizontal -->
        </div>
        <!-- /.side-menu -->
        <!-- ================================== TOP NAVIGATION : END ================================== -->
   ";
        }
    }

    public function getTemplateName()
    {
        return "morazzo/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 50,  134 => 45,  127 => 40,  121 => 39,  110 => 33,  105 => 30,  99 => 26,  88 => 24,  84 => 23,  80 => 21,  77 => 20,  73 => 19,  63 => 15,  60 => 14,  56 => 13,  49 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "morazzo/template/extension/module/category.twig", "");
    }
}

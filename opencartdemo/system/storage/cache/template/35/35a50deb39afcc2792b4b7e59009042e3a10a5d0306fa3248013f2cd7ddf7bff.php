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
class __TwigTemplate_d769b0c612963f0f3731a576286265f3a5ac99098ea0aad41d521de09bab31ca extends \Twig\Template
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
                echo "
              <li class=\"dropdown menu-item\"> <a href=\"";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 15);
                echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon fa fa-shopping-bag\" aria-hidden=\"true\"></i>";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 15);
                echo "</a>
                <ul class=\"dropdown-menu mega-menu\">
                  <li class=\"yamm-content\">
                    <div class=\"row\">
                        ";
                // line 19
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 20));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 21
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "gchildren", [], "any", true, true, false, 21)) {
                            // line 22
                            echo "                      <div class=\"col-sm-12 col-md-3\">
                        <ul class=\"links list-unstyled\">
                            ";
                            // line 24
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "gchildren", [], "any", false, false, false, 24));
                            foreach ($context['_seq'] as $context["_key"] => $context["gchild"]) {
                                // line 25
                                echo "                              <li><a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["gchild"], "href", [], "any", false, false, false, 25);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["gchild"], "name", [], "any", false, false, false, 25);
                                echo "</a></li>
                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gchild'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 27
                            echo "                        </ul>
                      </div>
                      <!-- /.col -->
                        ";
                        } else {
                            // line 31
                            echo "                      <div class=\"col-sm-12 col-md-3\">
                        <ul class=\"links list-unstyled\">

                              <li><a href=\"";
                            // line 34
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 34);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 34);
                            echo "</a></li>

                        </ul>
                      </div>

                        ";
                        }
                        // line 40
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 41
                    echo "                      <!-- /.col -->
                    </div>
                      ";
                }
                // line 44
                echo "                    <!-- /.row -->
                  </li>

                  <!-- /.yamm-content -->
                </ul>
                <!-- /.dropdown-menu --> </li>
              <!-- /.menu-item -->
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
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
        return array (  147 => 52,  134 => 44,  129 => 41,  123 => 40,  112 => 34,  107 => 31,  101 => 27,  90 => 25,  86 => 24,  82 => 22,  79 => 21,  74 => 20,  72 => 19,  63 => 15,  60 => 14,  56 => 13,  49 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "morazzo/template/extension/module/category.twig", "");
    }
}

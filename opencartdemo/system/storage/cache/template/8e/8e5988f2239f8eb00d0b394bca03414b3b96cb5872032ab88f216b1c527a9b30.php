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
class __TwigTemplate_54c0260e889a11ea2c8cbe8389a77b813b4e01459b43f8f2a250e9a580f3b074 extends \Twig\Template
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
  <div class=\"head\"><i class=\"icon fa fa-align-justify fa-fw\"></i> Categories</div>
  <nav class=\"yamm megamenu-horizontal\">
    <ul class=\"nav\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 14
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 14)) {
                // line 15
                echo "      <li class=\"dropdown menu-item \">
          ";
            } else {
                // line 17
                echo "      <li class=\"dropdown menu-item first\">
            ";
            }
            // line 19
            echo "        <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 19);
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 19);
            echo "</a>
        <ul class=\"dropdown-menu mega-menu\">
          <li class=\"yamm-content\">
            <div class=\"row\">
                ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 24
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["child"], "gchildren", [], "any", true, true, false, 24)) {
                    // line 25
                    echo "              <div class=\"col-sm-12 col-md-3\">
                <h2 class=\"title\"><a href=\"";
                    // line 26
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 26);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 26);
                    echo "</a></h2>
                <ul class=\"links list-unstyled\">
                    ";
                    // line 28
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "gchildren", [], "any", false, false, false, 28));
                    foreach ($context['_seq'] as $context["_key"] => $context["gchild"]) {
                        // line 29
                        echo "                      <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["gchild"], "href", [], "any", false, false, false, 29);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["gchild"], "name", [], "any", false, false, false, 29);
                        echo "</a></li>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gchild'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo "                </ul>
              </div>
              <!-- /.col -->
                ";
                } else {
                    // line 35
                    echo "

                  <div class=\"col-sm-12 col-md-3\">
                    <h2 class=\"title\"><a href=\"";
                    // line 38
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 38);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 38);
                    echo "</a></h2>

                  </div>
                  <!-- /.col -->




                  <!-- /.yamm-content -->


                ";
                }
                // line 50
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "            </div>
            <!-- /.row -->
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
        // line 61
        echo "    </ul>
    <!-- /.nav -->
  </nav>
  <!-- /.megamenu-horizontal -->
</div>
<!-- /.side-menu -->";
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
        return array (  157 => 61,  143 => 52,  136 => 50,  119 => 38,  114 => 35,  108 => 31,  97 => 29,  93 => 28,  86 => 26,  83 => 25,  80 => 24,  76 => 23,  66 => 19,  62 => 17,  58 => 15,  55 => 14,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "morazzo/template/extension/module/category.twig", "");
    }
}

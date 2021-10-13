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
class __TwigTemplate_2985a45a0204b765b9bce6b7f50e31bea0a90ba216f3f041ad226914d85ce2a9 extends \Twig\Template
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
          <div class=\"head\"><i class=\"icon fa fa-align-justify fa-fw\"></i> ";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</div>
          <nav class=\"yamm megamenu-horizontal\">
            <ul class=\"nav\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 13
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 13) == ($context["category_id"] ?? null))) {
                // line 14
                echo "              <li class=\"dropdown menu-item\"> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 14);
                echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 14);
                echo "</a>
                <ul class=\"dropdown-menu mega-menu\">
                  <li class=\"yamm-content\">
                    <div class=\"row\">
                        ";
                // line 18
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 18)) {
                    // line 19
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 19));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 20
                        echo "                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 20) == ($context["child_id"] ?? null))) {
                            // line 21
                            echo "                      <div class=\"col-sm-12 col-md-3\">
                        <ul class=\"links list-unstyled\">
                          <li><a href=\"";
                            // line 23
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 23);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 23);
                            echo "</a></li>

                        </ul>
                      </div>
                      ";
                        } else {
                            // line 28
                            echo "                      <div class=\"col-sm-12 col-md-3\">
                        <ul class=\"links list-unstyled\">
                          <li><a href=\"";
                            // line 30
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 30);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 30);
                            echo "</a></li>

                        </ul>
                      </div>
                        ";
                        }
                        // line 35
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 36
                    echo "                        ";
                }
                // line 37
                echo "


                    </div>
                    <!-- /.row -->
                  </li>
                  <!-- /.yamm-content -->
                </ul>
                  ";
            } else {
                // line 45
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 45);
                echo "\" class=\"list-group-item\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 45);
                echo "</a>
                <!-- /.dropdown-menu --> </li>
              <!-- /.menu-item -->
                 ";
            }
            // line 49
            echo "              ";
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
        return array (  144 => 50,  138 => 49,  128 => 45,  117 => 37,  114 => 36,  108 => 35,  98 => 30,  94 => 28,  84 => 23,  80 => 21,  77 => 20,  72 => 19,  70 => 18,  60 => 14,  57 => 13,  53 => 12,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "morazzo/template/extension/module/category.twig", "");
    }
}

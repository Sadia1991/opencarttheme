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
class __TwigTemplate_ea6af054fe684fab176b80f7d1ef02dbb8e768cf6739b7f1251dbf7c52a2fa56 extends \Twig\Template
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
        echo "<!-- ================================== TOP NAVIGATION ================================== -->
<div class=\"side-menu animate-dropdown outer-bottom-xs\">
  <div class=\"head\"><i class=\"icon fa fa-align-justify fa-fw\"></i>";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</div>
  <nav class=\"yamm megamenu-horizontal\">
    <ul class=\"nav\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 7
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 7)) {
                // line 8
                echo "      <li class=\"dropdown yamm mega-menu\">
          ";
            } else {
                // line 10
                echo "      <li class=\"dropdown mega-menu\">
          ";
            }
            // line 12
            echo "        <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 12);
            echo "\" data-hover=\"dropdown\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 12);
            echo "</a>

        <ul class=\"dropdown-menu mega-menu\">
          <li class=\"yamm-content\">
            <div class=\"row\">
                ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 18
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["child"], "gchildren", [], "any", true, true, false, 18)) {
                    // line 19
                    echo "              <div class=\"col-sm-12 col-md-3\">
                <h2 class=\"\"><a href=\"";
                    // line 20
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 20);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 20);
                    echo "</a></h2>
                <ul class=\"links list-unstyled\">
                    ";
                    // line 22
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "gchildren", [], "any", false, false, false, 22));
                    foreach ($context['_seq'] as $context["_key"] => $context["gchild"]) {
                        // line 23
                        echo "                      <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["gchild"], "href", [], "any", false, false, false, 23);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["gchild"], "name", [], "any", false, false, false, 23);
                        echo "</a></li>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gchild'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "                </ul>
              </div>
                ";
                } else {
                    // line 28
                    echo "              <div class=\"col-sm-12 col-md-3\">
                <h2 class=\"\"><a href=\"";
                    // line 29
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 29);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 29);
                    echo "</a></h2>
              </div>

                ";
                }
                // line 33
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "              <!-- /.col -->

              <!-- /.col -->
            </div>
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
        // line 46
        echo "
    </ul>
    <!-- /.nav -->
  </nav>
  <!-- /.megamenu-horizontal -->
</div>
<!-- /.side-menu -->
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
        return array (  145 => 46,  128 => 34,  122 => 33,  113 => 29,  110 => 28,  105 => 25,  94 => 23,  90 => 22,  83 => 20,  80 => 19,  77 => 18,  73 => 17,  62 => 12,  58 => 10,  54 => 8,  51 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "morazzo/template/extension/module/category.twig", "");
    }
}

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

/* morazzo/template/common/menu.twig */
class __TwigTemplate_a77c40d402080de65559c6512acfcbdd118e09ad3ba676f650b1ed68d59a96e8 extends \Twig\Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "
<div class=\"header-nav animate-dropdown\">
    <div class=\"container\">
        <div class=\"yamm navbar navbar-default\" role=\"navigation\">
            <div class=\"navbar-header\">
                <button data-target=\"#mc-horizontal-menu-collapse\" data-toggle=\"collapse\" class=\"navbar-toggle collapsed\" type=\"button\">
                    <span class=\"sr-only\">";
            // line 8
            echo ($context["text_category"] ?? null);
            echo "</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
            </div>
            <div class=\"nav-bg-class\">
                <div class=\"navbar-collapse collapse\" id=\"mc-horizontal-menu-collapse\">
                    <div class=\"nav-outer\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"active dropdown\"> <a href=\"home.html\">Home</a> </li>
                            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 16
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 16)) {
                    // line 17
                    echo "                            <li class=\"dropdown yamm mega-menu\">
                                ";
                } else {
                    // line 19
                    echo "                                    <li class=\"dropdown yamm mega-menu kids\">
                                        ";
                }
                // line 21
                echo "
                                <a href=\"";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 22);
                echo "\" data-hover=\"dropdown\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 22);
                echo "</a>
                                <ul class=\"dropdown-menu container\">
                                    <li>
                                        <div class=\"yamm-content \">
                                            <div class=\"row\">
                                                ";
                // line 27
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 27)) {
                    // line 28
                    echo "                                                <div class=\"col-xs-12 col-sm-6 col-md-2 col-menu\">
                                                    <h2 class=\"title\">";
                    // line 29
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 29);
                    echo "</h2>
                                                    <ul class=\"links\">
                                                        ";
                    // line 31
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 31));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 32
                        echo "                                                            ";
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "gchildren", [], "any", true, true, false, 32)) {
                            // line 33
                            echo "                                                        <li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 33);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 33);
                            echo "</a>
                                                                <ul class=\"rdlevel\">
                                                                    ";
                            // line 35
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "gchildren", [], "any", false, false, false, 35));
                            foreach ($context['_seq'] as $context["_key"] => $context["gchild"]) {
                                // line 36
                                echo "                                                                        <li>
                                                                            <a href=\"";
                                // line 37
                                echo twig_get_attribute($this->env, $this->source, $context["gchild"], "href", [], "any", false, false, false, 37);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["gchild"], "name", [], "any", false, false, false, 37);
                                echo "</a>
                                                                        </li>
                                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gchild'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 40
                            echo "                                                                </ul></li>
                                                            ";
                        } else {
                            // line 42
                            echo "                                                                <li class=\"ndlevel\">
                                                                    <a href=\"";
                            // line 43
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 43);
                            echo "\" class=\"ndfirst\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 43);
                            echo "</a>
                                                                </li>
                                                            ";
                        }
                        // line 46
                        echo "                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 47
                    echo "                                                    </ul>
                                                </div>
                                                <!-- /.col -->

                                                ";
                }
                // line 52
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                        </ul>
                        <!-- /.navbar-nav -->
                        <div class=\"clearfix\"></div>
                    </div>
                    <!-- /.nav-outer -->
                </div>
                <!-- /.navbar-collapse -->

            </div>
            <!-- /.nav-bg-class -->
        </div>
        <!-- /.navbar-default -->
    </div>
    <!-- /.container-class -->

</div>
";
        }
    }

    public function getTemplateName()
    {
        return "morazzo/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 53,  156 => 52,  149 => 47,  143 => 46,  135 => 43,  132 => 42,  128 => 40,  117 => 37,  114 => 36,  110 => 35,  102 => 33,  99 => 32,  95 => 31,  90 => 29,  87 => 28,  85 => 27,  75 => 22,  72 => 21,  68 => 19,  64 => 17,  61 => 16,  57 => 15,  47 => 8,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "morazzo/template/common/menu.twig", "");
    }
}

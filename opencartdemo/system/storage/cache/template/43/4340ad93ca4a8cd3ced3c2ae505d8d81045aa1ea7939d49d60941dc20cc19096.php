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
class __TwigTemplate_7ae7458203090fc5a4a5e98a46c65cbce2226a1bd04ca58cf8b9ab8650709924 extends \Twig\Template
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
            echo "<div class=\"header-nav animate-dropdown\">
    <div class=\"container\">
        <div class=\"yamm navbar navbar-default\" role=\"navigation\">
            <div class=\"navbar-header\">
                <button data-target=\"#mc-horizontal-menu-collapse\" data-toggle=\"collapse\" class=\"navbar-toggle collapsed\" type=\"button\">
                    <span class=\"sr-only\">";
            // line 7
            echo ($context["text_category"] ?? null);
            echo "</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
            </div>
            <div class=\"nav-bg-class\">
                <div class=\"navbar-collapse collapse\" id=\"mc-horizontal-menu-collapse\">
                    <div class=\"nav-outer\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"active dropdown\"> <a href=\"home.html\">Home</a> </li>
                            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 15
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "                            <li class=\"dropdown yamm mega-menu\">
                                ";
                } else {
                    // line 18
                    echo "                            <li class=\"dropdown mega-menu\">
                                ";
                }
                // line 20
                echo "                                <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 20);
                echo "\" data-hover=\"dropdown\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 20);
                echo "</a>


                                <ul class=\"dropdown-menu container\">

                                    <li>
                                        <div class=\"yamm-content \">
                                            <div class=\"row\">
                                                ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 28));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 29
                    echo "                                                ";
                    if (twig_get_attribute($this->env, $this->source, $context["child"], "gchildren", [], "any", true, true, false, 29)) {
                        // line 30
                        echo "                                                <div class=\"col-xs-12 col-sm-6 col-md-2 col-menu\">
                                                    <h2 class=\"title\"><a href=\"";
                        // line 31
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 31);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 31);
                        echo "</a></h2>
                                                    <ul class=\"links\">
                                                        ";
                        // line 33
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "gchildren", [], "any", false, false, false, 33));
                        foreach ($context['_seq'] as $context["_key"] => $context["gchild"]) {
                            // line 34
                            echo "                                                        <li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["gchild"], "href", [], "any", false, false, false, 34);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["gchild"], "name", [], "any", false, false, false, 34);
                            echo "</a></li>
                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gchild'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 36
                        echo "                                                    </ul>

                                                </div>
                                                <!-- /.col -->




                                                 <!-- /.yamm-content -->


                                    ";
                    } else {
                        // line 48
                        echo "

                                                <div class=\"col-xs-12 col-sm-6 col-md-2 col-menu\">
                                                    <h2 class=\"title\"><a href=\"";
                        // line 51
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 51);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 51);
                        echo "</a></h2>

                                                </div>
                                                <!-- /.col -->




                                                <!-- /.yamm-content -->


                                    ";
                    }
                    // line 63
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "                    </div>
                </div>


                                </ul>
                            </li>

                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
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
        return array (  172 => 72,  159 => 64,  153 => 63,  136 => 51,  131 => 48,  117 => 36,  106 => 34,  102 => 33,  95 => 31,  92 => 30,  89 => 29,  85 => 28,  71 => 20,  67 => 18,  63 => 16,  60 => 15,  56 => 14,  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "morazzo/template/common/menu.twig", "");
    }
}

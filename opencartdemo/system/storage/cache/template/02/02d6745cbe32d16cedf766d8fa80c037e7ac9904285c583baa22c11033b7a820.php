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
class __TwigTemplate_96ca83b6502811865b8dcd94fc65b42e5fd0094d874ed9d4b51636d43682e40f extends \Twig\Template
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
                                ";
                // line 24
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 24)) {
                    // line 25
                    echo "                                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 25)) {
                        // line 26
                        echo "                                        <li>
                                        <div class=\"yamm-content \">
                                            <div class=\"row\">
                                                ";
                        // line 29
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 29));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 30
                            echo "                                                ";
                            if (twig_get_attribute($this->env, $this->source, $context["child"], "gchildren", [], "any", true, true, false, 30)) {
                                // line 31
                                echo "                                                <div class=\"col-xs-12 col-sm-6 col-md-2 col-menu\">
                                                    <h2 class=\"title\"><a href=\"";
                                // line 32
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 32);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 32);
                                echo "</a></h2>
                                                    <ul class=\"links\">
                                                        ";
                                // line 34
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "gchildren", [], "any", false, false, false, 34));
                                foreach ($context['_seq'] as $context["_key"] => $context["gchild"]) {
                                    // line 35
                                    echo "                                                        <li><a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["gchild"], "href", [], "any", false, false, false, 35);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["gchild"], "name", [], "any", false, false, false, 35);
                                    echo "</a></li>
                                                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gchild'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 37
                                echo "                                                    </ul>

                                                </div>
                                                <!-- /.col -->
                                                    <div class=\"col-xs-12 col-sm-12 col-md-4 col-menu custom-banner\"> <img src=\"";
                                // line 41
                                echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 41);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 41);
                                echo "\"></div>



                                                 <!-- /.yamm-content -->


                                    ";
                            } else {
                                // line 49
                                echo "

                                                <div class=\"col-xs-12 col-sm-6 col-md-2 col-menu\">
                                                    <h2 class=\"title\"><a href=\"";
                                // line 52
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 52);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 52);
                                echo "</a></h2>

                                                </div>
                                                <!-- /.col -->
                                        <div class=\"col-xs-12 col-sm-12 col-md-4 col-menu custom-banner\"><img src=\"";
                                // line 56
                                echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 56);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 56);
                                echo "\"></div>



                                                <!-- /.yamm-content -->


                                    ";
                            }
                            // line 64
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 65
                        echo "                    </div>
                </div>
                                    </li>
                                    ";
                    }
                    // line 69
                    echo "                                ";
                }
                // line 70
                echo "
                                </ul>
                            </li>

                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
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
        return array (  194 => 75,  184 => 70,  181 => 69,  175 => 65,  169 => 64,  156 => 56,  147 => 52,  142 => 49,  129 => 41,  123 => 37,  112 => 35,  108 => 34,  101 => 32,  98 => 31,  95 => 30,  91 => 29,  86 => 26,  83 => 25,  81 => 24,  71 => 20,  67 => 18,  63 => 16,  60 => 15,  56 => 14,  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "morazzo/template/common/menu.twig", "");
    }
}

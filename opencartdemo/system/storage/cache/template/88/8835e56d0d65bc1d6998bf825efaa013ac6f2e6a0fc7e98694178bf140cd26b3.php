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
class __TwigTemplate_22a49b89bcbcbe9bdd8e5caf7eeb3d3c46be25db6d61a3306b0f927116b08934 extends \Twig\Template
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
        echo "
";
        // line 2
        if (($context["categories"] ?? null)) {
            // line 3
            echo "    <div class=\"container\">
        <nav class=\"navbar\">
            <div class=\"box-karley\">
                <ul>
                    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 8
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 8)) {
                    // line 9
                    echo "                            <li class=\"catfirst\">
                        ";
                } else {
                    // line 11
                    echo "                            <li class=\"catfirst kids\">
                        ";
                }
                // line 13
                echo "                        <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 13);
                echo "\" class=\"lfirst\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 13);
                echo "</a>

                        ";
                // line 15
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "                            <div class=\"catright\">
                                <div class=\"inner-catright\">
                                    <h2>";
                    // line 18
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 18);
                    echo "</h2>
                                    ";
                    // line 19
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 19) || twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 19))) {
                        // line 20
                        echo "                                        <div class=\"category-info\">
                                            ";
                        // line 21
                        if (twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 21)) {
                            // line 22
                            echo "                                                <div class=\"image\"><img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 22);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 22);
                            echo "\" /></div>
                                            ";
                        }
                        // line 24
                        echo "                                            ";
                        if (twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 24)) {
                            // line 25
                            echo "                                                ";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 25);
                            echo "
                                            ";
                        }
                        // line 27
                        echo "                                        </div>
                                    ";
                    }
                    // line 29
                    echo "                                    <ul>
                                        ";
                    // line 30
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 30));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 31
                        echo "                                            ";
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "gchildren", [], "any", true, true, false, 31)) {
                            // line 32
                            echo "                                                <li class=\"ndlevel\">
                                                    <a href=\"";
                            // line 33
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 33);
                            echo "\" class=\"ndfirst\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 33);
                            echo "</a>
                                                    <ul class=\"rdlevel\">
                                                        ";
                            // line 35
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "gchildren", [], "any", false, false, false, 35));
                            foreach ($context['_seq'] as $context["_key"] => $context["gchild"]) {
                                // line 36
                                echo "                                                            <li>
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
                            echo "                                                    </ul>
                                                </li>
                                            ";
                        } else {
                            // line 43
                            echo "                                                <li class=\"ndlevel\">
                                                    <a href=\"";
                            // line 44
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 44);
                            echo "\" class=\"ndfirst\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 44);
                            echo "</a>
                                                </li>
                                            ";
                        }
                        // line 47
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 48
                    echo "                                    </ul>
                                </div>
                            </div>
                            </li>
                        ";
                }
                // line 53
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                </ul>
            </div>
        </nav>
    </div>

";
        }
        // line 59
        echo " ";
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
        return array (  190 => 59,  182 => 54,  176 => 53,  169 => 48,  163 => 47,  155 => 44,  152 => 43,  147 => 40,  136 => 37,  133 => 36,  129 => 35,  122 => 33,  119 => 32,  116 => 31,  112 => 30,  109 => 29,  105 => 27,  99 => 25,  96 => 24,  88 => 22,  86 => 21,  83 => 20,  81 => 19,  77 => 18,  73 => 16,  71 => 15,  63 => 13,  59 => 11,  55 => 9,  52 => 8,  48 => 7,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "morazzo/template/common/menu.twig", "");
    }
}

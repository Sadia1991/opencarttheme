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

/* morazzo/template/common/currency.twig */
class __TwigTemplate_1d44b5b5e8b995d89505d790cf7ef344924afe685a5f778e28c0b83e34461142 extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["currencies"] ?? null)) > 1)) {
            // line 2
            echo "    <div class=\"pull-left\">
        <form action=\"";
            // line 3
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\" style=\"text-align: left;\">
            <div class=\"btn-group\">
            <ul class=\"list-unstyled list-inline\">
                <li class=\"dropdown dropdown-small\">
                    <a class=\"dropdown-toggle\" data-hover=\"dropdown\" data-toggle=\"dropdown\">
                        <span class=\"value\">";
            // line 8
            echo ($context["text_currency"] ?? null);
            echo "</span><b class=\"caret\"></b>
                    </a>
                    <ul class=\"dropdown-menu\">
                        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 12
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 12)) {
                    // line 13
                    echo "                            <li>
                                <button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    // line 14
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 14);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 14);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 14);
                    echo "</button>
                            </li>
                            ";
                } else {
                    // line 17
                    echo "                                <li>
                                    <button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    // line 18
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 18);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 18);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 18);
                    echo "</button>
                                </li>
                            ";
                }
                // line 21
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                    </ul>
                </li>
            </ul>
            </div>
            <input type=\"hidden\" name=\"code\" value=\"\" />
            <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 27
            echo ($context["redirect"] ?? null);
            echo "\" />
        </form>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "morazzo/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 27,  95 => 22,  89 => 21,  79 => 18,  76 => 17,  66 => 14,  63 => 13,  60 => 12,  56 => 11,  50 => 8,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "morazzo/template/common/currency.twig", "");
    }
}

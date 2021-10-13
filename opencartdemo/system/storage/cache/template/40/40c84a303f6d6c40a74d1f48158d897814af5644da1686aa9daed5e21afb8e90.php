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
class __TwigTemplate_670f5e920436325da1b362f8cba3a9501ce9aecc71b9357464f417dcd5794f79 extends \Twig\Template
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
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
            <ul class=\"list-unstyled list-inline\">
                <li class=\"dropdown dropdown-small\">
                    <a class=\"dropdown-toggle\" data-hover=\"dropdown\" data-toggle=\"dropdown\">
                        <span class=\"value\">";
            // line 7
            echo ($context["text_currency"] ?? null);
            echo "</span><b class=\"caret\"></b>
                    </a>
                    <ul class=\"dropdown-menu\">
                        
                    </ul>
                </li>
            </ul>
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
        return array (  49 => 7,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "morazzo/template/common/currency.twig", "");
    }
}

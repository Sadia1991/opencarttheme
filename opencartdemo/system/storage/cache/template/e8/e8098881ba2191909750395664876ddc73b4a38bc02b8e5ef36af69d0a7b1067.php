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
class __TwigTemplate_65e6c31b070c9bbc5f09e6a077454e6c6c973e99e6c380a6287ce03fce40f951 extends \Twig\Template
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
        echo "<ul class=\"list-unstyled list-inline\">
    <li class=\"dropdown dropdown-small\"> <a href=\"#\" class=\"dropdown-toggle\" data-hover=\"dropdown\" data-toggle=\"dropdown\"><span class=\"value\">USD </span><b class=\"caret\"></b></a>
        <ul class=\"dropdown-menu\">
            <li><a href=\"#\">USD</a></li>
            <li><a href=\"#\">INR</a></li>
            <li><a href=\"#\">GBP</a></li>
        </ul>
    </li>


";
    }

    public function getTemplateName()
    {
        return "morazzo/template/common/currency.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "morazzo/template/common/currency.twig", "");
    }
}

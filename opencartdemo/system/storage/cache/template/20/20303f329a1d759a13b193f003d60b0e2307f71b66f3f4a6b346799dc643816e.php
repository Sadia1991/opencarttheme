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

/* morazzo/template/common/search.twig */
class __TwigTemplate_d7576abc71d61fcf956dc044cf32b91f432f4a7b6b6d88a121c03a2e9aa04b7c extends \Twig\Template
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
        echo "<div class=\"search-area\" id=\"search-categories\">
    <div class=\"form-group\">
        <div class=\"input-group\">
            <ul class=\"categories-filter animate-dropdown\">
                <li class=\"dropdown\"> <a class=\"dropdown-toggle\"  data-toggle=\"dropdown\" href=\"category.html\">Categories <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\" role=\"menu\" >
                        <li class=\"menu-header\">Computer</li>
                        <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"category.html\">- Clothing</a></li>
                        <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"category.html\">- Electronics</a></li>
                        <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"category.html\">- Shoes</a></li>
                        <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"category.html\">- Watches</a></li>
                    </ul>
                </li>
            </ul>
            <input type=\"text\" name=\"search\" value=\"";
        // line 15
        echo ($context["search"] ?? null);
        echo "\" class=\"search-field form-control\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" />
            <button type=\"button\" class=\"btn search-button\"></button>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "morazzo/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "morazzo/template/common/search.twig", "");
    }
}

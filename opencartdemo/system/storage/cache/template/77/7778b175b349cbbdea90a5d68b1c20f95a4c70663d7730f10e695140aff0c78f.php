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
class __TwigTemplate_70672876dbf55b232c0d4b15f71e8e43189400eefaf9bce9279fc120440defa5 extends \Twig\Template
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
        echo "<div class=\"search-area\">
  <form>
    <div class=\"control-group\">
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
      <input class=\"search-field\" placeholder=\"Search here...\" />
      <a class=\"search-button\" href=\"#\" ></a> </div>
  </form>
</div>";
    }

    public function getTemplateName()
    {
        return "morazzo/template/common/search.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "morazzo/template/common/search.twig", "");
    }
}

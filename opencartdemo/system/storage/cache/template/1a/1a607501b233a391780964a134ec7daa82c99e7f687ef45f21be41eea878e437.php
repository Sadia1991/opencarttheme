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
class __TwigTemplate_1170b5581d6c8a869b730b0e10866a0ea7a6a1db5f1cd63ee9e70c8525a917ae extends \Twig\Template
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
      
      <li class=\"dropdown menu-item\"> <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon fa fa-shopping-bag\" aria-hidden=\"true\"></i>Clothing</a>
        <ul class=\"dropdown-menu mega-menu\">
          <li class=\"yamm-content\">
            <div class=\"row\">
              <div class=\"col-sm-12 col-md-3\">
                <ul class=\"links list-unstyled\">
                  <li><a href=\"#\">Dresses</a></li>
                  <li><a href=\"#\">Shoes </a></li>
                  <li><a href=\"#\">Jackets</a></li>
                  <li><a href=\"#\">Sunglasses</a></li>
                  <li><a href=\"#\">Sport Wear</a></li>
                  <li><a href=\"#\">Blazers</a></li>
                  <li><a href=\"#\">Shirts</a></li>
                  <li><a href=\"#\">Shorts</a></li>
                </ul>
              </div>
              <!-- /.col -->
              <div class=\"col-sm-12 col-md-3\">
                <ul class=\"links list-unstyled\">
                  <li><a href=\"#\">Handbags</a></li>
                  <li><a href=\"#\">Jwellery</a></li>
                  <li><a href=\"#\">Swimwear </a></li>
                  <li><a href=\"#\">Tops</a></li>
                  <li><a href=\"#\">Flats</a></li>
                  <li><a href=\"#\">Shoes</a></li>
                  <li><a href=\"#\">Winter Wear</a></li>
                  <li><a href=\"#\">Night Suits</a></li>
                </ul>
              </div>
              <!-- /.col -->
              <div class=\"col-sm-12 col-md-3\">
                <ul class=\"links list-unstyled\">
                  <li><a href=\"#\">Toys &amp; Games</a></li>
                  <li><a href=\"#\">Jeans</a></li>
                  <li><a href=\"#\">Shirts</a></li>
                  <li><a href=\"#\">Shoes</a></li>
                  <li><a href=\"#\">School Bags</a></li>
                  <li><a href=\"#\">Lunch Box</a></li>
                  <li><a href=\"#\">Footwear</a></li>
                  <li><a href=\"#\">Wipes</a></li>
                </ul>
              </div>
              <!-- /.col -->
              <div class=\"col-sm-12 col-md-3\">
                <ul class=\"links list-unstyled\">
                  <li><a href=\"#\">Sandals </a></li>
                  <li><a href=\"#\">Shorts</a></li>
                  <li><a href=\"#\">Dresses</a></li>
                  <li><a href=\"#\">Jwellery</a></li>
                  <li><a href=\"#\">Bags</a></li>
                  <li><a href=\"#\">Night Dress</a></li>
                  <li><a href=\"#\">Swim Wear</a></li>
                  <li><a href=\"#\">Toys</a></li>
                </ul>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </li>
          <!-- /.yamm-content -->
        </ul>
        <!-- /.dropdown-menu --> </li>
      <!-- /.menu-item -->



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
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "morazzo/template/extension/module/category.twig", "");
    }
}

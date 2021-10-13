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

/* morazzo/template/common/cart.twig */
class __TwigTemplate_e73acb5c37ba699420421f79af45f815958e18bf75f1fd3316388dea26daca85 extends \Twig\Template
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
        echo "<div class=\"dropdown dropdown-cart\"> <div href=\"#\" class=\"dropdown-toggle lnk-cart\" data-toggle=\"dropdown\">
    <div class=\"items-cart-inner\">
      <div class=\"basket\">
        <div class=\"basket-item-count\"><span class=\"count\">2</span></div>
        <div class=\"total-price-basket\"> <span class=\"lbl\">Shopping Cart</span> <span class=\"value\">\$4580</span> </div>
      </div>
    </div>
  </div>
  <ul class=\"dropdown-menu\">
    <li>
      <div class=\"cart-item product-summary\">
        <div class=\"row\">
          <div class=\"col-xs-4\">
            <div class=\"image\"> <a href=\"detail.html\"><img src=\"assets/images/products/p4.jpg\" alt=\"\"></a> </div>
          </div>
          <div class=\"col-xs-7\">
            <h3 class=\"name\"><a href=\"index8a95.html?page-detail\">Simple Product</a></h3>
            <div class=\"price\">\$600.00</div>
          </div>
          <div class=\"col-xs-1 action\"> <a href=\"#\"><i class=\"fa fa-trash\"></i></a> </div>
        </div>
      </div>
      <!-- /.cart-item -->
      <div class=\"clearfix\"></div>
      <hr>
      <div class=\"clearfix cart-total\">
        <div class=\"pull-right\"> <span class=\"text\">Sub Total :</span><span class='price'>\$600.00</span> </div>
        <div class=\"clearfix\"></div>
        <a href=\"checkout.html\" class=\"btn btn-upper btn-primary btn-block m-t-20\">Checkout</a> </div>
      <!-- /.cart-total-->

    </li>
  </ul>
  <!-- /.dropdown-menu-->
</div>";
    }

    public function getTemplateName()
    {
        return "morazzo/template/common/cart.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "morazzo/template/common/cart.twig", "");
    }
}

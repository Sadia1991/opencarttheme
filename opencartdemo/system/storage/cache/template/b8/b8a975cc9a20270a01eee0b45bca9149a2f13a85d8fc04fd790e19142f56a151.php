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

/* morazzo/template/common/header.twig */
class __TwigTemplate_71c9f7c19a6951150843c25f53566799603fc1f4eeff9cac9f10fed049edaae3 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<head>
  <!-- Meta -->
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    ";
        // line 8
        if (($context["description"] ?? null)) {
            // line 9
            echo "      <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
    ";
        }
        // line 11
        echo "    ";
        if (($context["keywords"] ?? null)) {
            // line 12
            echo "      <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
    ";
        }
        // line 14
        echo "  <title>";
        echo ($context["title"] ?? null);
        echo "</title>
  <base href=\"";
        // line 15
        echo ($context["base"] ?? null);
        echo "\" />
    <!-- Bootstrap Core CSS -->
    <link href=\"catalog/view/theme/morazzo/stylesheet/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
    <!-- Customizable CSS -->
    <link rel=\"stylesheet\" href=\"catalog/view/theme/morazzo/stylesheet/css/main.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"catalog/view/theme/morazzo/stylesheet/css/blue.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"catalog/view/theme/morazzo/stylesheet/css/owl.carousel.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"catalog/view/theme/morazzo/stylesheet/css/owl.transitions.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"catalog/view/theme/morazzo/stylesheet/css/animate.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"catalog/view/theme/morazzo/stylesheet/css/rateit.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"catalog/view/theme/morazzo/stylesheet/css/bootstrap-select.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"catalog/view/theme/morazzo/stylesheet/css/more.css\" type=\"text/css\">
    <!-- Icons/Glyphs -->
    <link rel=\"stylesheet\" href=\"catalog/view/theme/morazzo/stylesheet/css/font-awesome.css\" type=\"text/css\">
    <!-- Fonts -->
    <link href=\"//fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800\" rel=\"stylesheet\">
    <link href=\"//fonts.googleapis.com/css?family=Roboto:300,400,500,700\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"//fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">

    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 36
            echo "        <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 36);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 36);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 36);
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 40
            echo "      <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 40);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 40);
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 44
            echo "      <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 48
            echo "        ";
            echo $context["analytic"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
</head>
<body class=\"cnt-home\">
<!-- ============================================== HEADER ============================================== -->
<header class=\"header-style-1\">

  <!-- ============================================== TOP MENU ============================================== -->
  <div class=\"top-bar animate-dropdown\">
    <div class=\"container\">
      <div class=\"header-top-inner\">
        <div class=\"cnt-account\">
          <ul class=\"list-unstyled\">
            <li class=\"myaccount\"><a href=\"#\"><span>";
        // line 62
        echo ($context["text_account"] ?? null);
        echo "</span></a></li>
            <li class=\"wishlist\"><a href=\"#\"><span>";
        // line 63
        echo ($context["text_wishlist"] ?? null);
        echo "</span></a></li>
            <li class=\"header_cart hidden-xs\"><a href=\"#\"><span>";
        // line 64
        echo ($context["text_shopping_cart"] ?? null);
        echo "</span></a></li>
            <li class=\"check\"><a href=\"#\"><span>";
        // line 65
        echo ($context["text_checkout"] ?? null);
        echo "</span></a></li>
            <li class=\"login\"><a href=\"#\"><span>";
        // line 66
        echo ($context["text_login"] ?? null);
        echo "</span></a></li>
          </ul>
        </div>
        <!-- /.cnt-account -->

        <div class=\"cnt-block\">
          ";
        // line 72
        echo ($context["currency"] ?? null);
        echo " ";
        echo ($context["language"] ?? null);
        echo "
        </div>
        <!-- /.list-unstyled -->

        <!-- /.cnt-cart -->
        <div class=\"clearfix\"></div>
      </div>
      <!-- /.header-top-inner -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.header-top -->
  <!-- ============================================== TOP MENU : END ============================================== -->
  <!-- ============================================== TOP MENU : END ============================================== -->
  <div class=\"main-header\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-xs-12 col-sm-12 col-md-3 logo-holder\">
          <!-- ============================================================= LOGO ============================================================= -->
          <div class=\"logo\">";
        // line 91
        if (($context["logo"] ?? null)) {
            echo "<a href=\"#\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\"></a>";
        } else {
            // line 92
            echo "          <h1><a href=\"#\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
          ";
        }
        // line 93
        echo "</div>
          <!-- /.logo -->
          <!-- ============================================================= LOGO : END ============================================================= --> </div>
        <!-- /.logo-holder -->
          <div class=\"col-lg-7 col-md-6 col-sm-8 col-xs-12 top-search-holder\">
              <!-- /.contact-row -->
              <!-- ============================================================= SEARCH AREA ============================================================= -->
             ";
        // line 100
        echo ($context["searchwithcategories"] ?? null);
        echo "
              <!-- /.search-area -->
              <!-- ============================================================= SEARCH AREA : END ============================================================= --> </div>
          <!-- /.top-search-holder -->
        <div class=\"col-lg-2 col-md-3 col-sm-4 col-xs-12 animate-dropdown top-cart-row\">
          <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

          <div class=\"dropdown dropdown-cart\"> <a href=\"#\" class=\"dropdown-toggle lnk-cart\" data-toggle=\"dropdown\">
              <div class=\"items-cart-inner\">
                <div class=\"basket\"><i class=\"fa fa-shopping-cart fa-4x\"></i>
                  <div class=\"basket-item-count\"><span class=\"count\">2</span></div>
                  <div class=\"total-price-basket\"> <span class=\"lbl\">Shopping Cart</span> <span class=\"value\">\$4580</span> </div>
                </div>
              </div>
            </a>
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
          </div>
          <!-- /.dropdown-cart -->

          <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= --> </div>
        <!-- /.top-cart-row -->
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

  </div>
  <!-- /.main-header -->";
    }

    public function getTemplateName()
    {
        return "morazzo/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 100,  242 => 93,  236 => 92,  226 => 91,  202 => 72,  193 => 66,  189 => 65,  185 => 64,  181 => 63,  177 => 62,  163 => 50,  154 => 48,  150 => 47,  147 => 46,  138 => 44,  134 => 43,  131 => 42,  120 => 40,  116 => 39,  113 => 38,  100 => 36,  96 => 35,  73 => 15,  68 => 14,  62 => 12,  59 => 11,  53 => 9,  51 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "morazzo/template/common/header.twig", "");
    }
}

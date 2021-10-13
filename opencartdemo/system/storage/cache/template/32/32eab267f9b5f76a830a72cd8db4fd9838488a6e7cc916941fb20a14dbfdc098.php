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
class __TwigTemplate_16037385321265f696581ff5623f06a025b31bb57eb4672b4526804a58995cae extends \Twig\Template
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
                echo "
              <li class=\"dropdown yamm mega-menu\"> <a href=\"";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 16);
                echo "\" data-hover=\"dropdown\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 16);
                echo "</a>
                <ul class=\"dropdown-menu container\">
                  <li>
                    <div class=\"yamm-content \">
                      <div class=\"row\">

                        <div class=\"col-xs-12 col-sm-6 col-md-2 col-menu\">
                          <h2 class=\"title\">Men</h2>
                          <ul class=\"links\">
                            <li><a href=\"#\">Dresses</a></li>
                            <li><a href=\"#\">Shoes </a></li>
                            <li><a href=\"#\">Jackets</a></li>
                            <li><a href=\"#\">Sunglasses</a></li>
                            <li><a href=\"#\">Sport Wear</a></li>
                            <li><a href=\"#\">Blazers</a></li>
                            <li><a href=\"#\">Shirts</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->

                        <div class=\"col-xs-12 col-sm-6 col-md-2 col-menu\">
                          <h2 class=\"title\">Women</h2>
                          <ul class=\"links\">
                            <li><a href=\"#\">Handbags</a></li>
                            <li><a href=\"#\">Jwellery</a></li>
                            <li><a href=\"#\">Swimwear </a></li>
                            <li><a href=\"#\">Tops</a></li>
                            <li><a href=\"#\">Flats</a></li>
                            <li><a href=\"#\">Shoes</a></li>
                            <li><a href=\"#\">Winter Wear</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->

                        <div class=\"col-xs-12 col-sm-6 col-md-2 col-menu\">
                          <h2 class=\"title\">Boys</h2>
                          <ul class=\"links\">
                            <li><a href=\"#\">Toys & Games</a></li>
                            <li><a href=\"#\">Jeans</a></li>
                            <li><a href=\"#\">Shirts</a></li>
                            <li><a href=\"#\">Shoes</a></li>
                            <li><a href=\"#\">School Bags</a></li>
                            <li><a href=\"#\">Lunch Box</a></li>
                            <li><a href=\"#\">Footwear</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->

                        <div class=\"col-xs-12 col-sm-6 col-md-2 col-menu\">
                          <h2 class=\"title\">Girls</h2>
                          <ul class=\"links\">
                            <li><a href=\"#\">Sandals </a></li>
                            <li><a href=\"#\">Shorts</a></li>
                            <li><a href=\"#\">Dresses</a></li>
                            <li><a href=\"#\">Jwellery</a></li>
                            <li><a href=\"#\">Bags</a></li>
                            <li><a href=\"#\">Night Dress</a></li>
                            <li><a href=\"#\">Swim Wear</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->

                        <div class=\"col-xs-12 col-sm-6 col-md-4 col-menu banner-image\"> <img class=\"img-responsive\" src=\"assets/images/banners/top-menu-banner.jpg\" alt=\"\"> </div>
                        <!-- /.yamm-content -->
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class=\"dropdown mega-menu\">
                <a href=\"category.html\"  data-hover=\"dropdown\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Electronics <span class=\"menu-label hot-menu hidden-xs\">hot</span> </a>
                <ul class=\"dropdown-menu container\">
                  <li>
                    <div class=\"yamm-content\">
                      <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-12 col-md-2 col-menu\">
                          <h2 class=\"title\">Laptops</h2>
                          <ul class=\"links\">
                            <li><a href=\"#\">Gaming</a></li>
                            <li><a href=\"#\">Laptop Skins</a></li>
                            <li><a href=\"#\">Apple</a></li>
                            <li><a href=\"#\">Dell</a></li>
                            <li><a href=\"#\">Lenovo</a></li>
                            <li><a href=\"#\">Microsoft</a></li>
                            <li><a href=\"#\">Asus</a></li>
                            <li><a href=\"#\">Adapters</a></li>
                            <li><a href=\"#\">Batteries</a></li>
                            <li><a href=\"#\">Cooling Pads</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->

                        <div class=\"col-xs-12 col-sm-12 col-md-2 col-menu\">
                          <h2 class=\"title\">Desktops</h2>
                          <ul class=\"links\">
                            <li><a href=\"#\">Routers & Modems</a></li>
                            <li><a href=\"#\">CPUs, Processors</a></li>
                            <li><a href=\"#\">PC Gaming Store</a></li>
                            <li><a href=\"#\">Graphics Cards</a></li>
                            <li><a href=\"#\">Components</a></li>
                            <li><a href=\"#\">Webcam</a></li>
                            <li><a href=\"#\">Memory (RAM)</a></li>
                            <li><a href=\"#\">Motherboards</a></li>
                            <li><a href=\"#\">Keyboards</a></li>
                            <li><a href=\"#\">Headphones</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->

                        <div class=\"col-xs-12 col-sm-12 col-md-2 col-menu\">
                          <h2 class=\"title\">Cameras</h2>
                          <ul class=\"links\">
                            <li><a href=\"#\">Accessories</a></li>
                            <li><a href=\"#\">Binoculars</a></li>
                            <li><a href=\"#\">Telescopes</a></li>
                            <li><a href=\"#\">Camcorders</a></li>
                            <li><a href=\"#\">Digital</a></li>
                            <li><a href=\"#\">Film Cameras</a></li>
                            <li><a href=\"#\">Flashes</a></li>
                            <li><a href=\"#\">Lenses</a></li>
                            <li><a href=\"#\">Surveillance</a></li>
                            <li><a href=\"#\">Tripods</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->
                        <div class=\"col-xs-12 col-sm-12 col-md-2 col-menu\">
                          <h2 class=\"title\">Mobile Phones</h2>
                          <ul class=\"links\">
                            <li><a href=\"#\">Apple</a></li>
                            <li><a href=\"#\">Samsung</a></li>
                            <li><a href=\"#\">Lenovo</a></li>
                            <li><a href=\"#\">Motorola</a></li>
                            <li><a href=\"#\">LeEco</a></li>
                            <li><a href=\"#\">Asus</a></li>
                            <li><a href=\"#\">Acer</a></li>
                            <li><a href=\"#\">Accessories</a></li>
                            <li><a href=\"#\">Headphones</a></li>
                            <li><a href=\"#\">Memory Cards</a></li>
                          </ul>
                        </div>
                        <div class=\"col-xs-12 col-sm-12 col-md-4 col-menu custom-banner\"> <a href=\"#\"><img alt=\"\" src=\"assets/images/banners/top-menu-banner1.jpg\"></a> </div>
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.yamm-content --> </li>
                </ul>
              </li>
              <li class=\"dropdown hidden-sm\"> <a href=\"category.html\">Health & Beauty <span class=\"menu-label new-menu hidden-xs\">new</span> </a> </li>
              <li class=\"dropdown hidden-sm\"> <a href=\"category.html\">Watches</a> </li>
              <li class=\"dropdown\"> <a href=\"contact.html\">Jewellery</a> </li>
              <li class=\"dropdown\"> <a href=\"contact.html\">Shoes</a> </li>
              <li class=\"dropdown\"> <a href=\"contact.html\">Kids & Girls</a> </li>
              <li class=\"dropdown\"> <a href=\"#\" class=\"dropdown-toggle\" data-hover=\"dropdown\" data-toggle=\"dropdown\">Pages</a>
                <ul class=\"dropdown-menu pages\">
                  <li>
                    <div class=\"yamm-content\">
                      <div class=\"row\">
                        <div class=\"col-xs-12 col-menu\">
                          <ul class=\"links\">
                            <li><a href=\"home.html\">Home</a></li>
                            <li><a href=\"category.html\">Category</a></li>
                            <li><a href=\"detail.html\">Detail</a></li>
                            <li><a href=\"shopping-cart.html\">Shopping Cart Summary</a></li>
                            <li><a href=\"checkout.html\">Checkout</a></li>
                            <li><a href=\"blog.html\">Blog</a></li>
                            <li><a href=\"blog-details.html\">Blog Detail</a></li>
                            <li><a href=\"contact.html\">Contact</a></li>
                            <li><a href=\"sign-in.html\">Sign In</a></li>
                            <li><a href=\"my-wishlist.html\">Wishlist</a></li>
                            <li><a href=\"terms-conditions.html\">Terms and Condition</a></li>
                            <li><a href=\"track-orders.html\">Track Orders</a></li>
                            <li><a href=\"product-comparison.html\">Product-Comparison</a></li>
                            <li><a href=\"faq.html\">FAQ</a></li>
                            <li><a href=\"404.html\">404</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class=\"dropdown  navbar-right special-menu\"> <a href=\"#\">Get 30% off on selected items</a> </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            echo "            </ul>
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
        return array (  254 => 199,  63 => 16,  60 => 15,  56 => 14,  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "morazzo/template/common/menu.twig", "");
    }
}

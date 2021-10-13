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

/* morazzo/template/common/column_left.twig */
class __TwigTemplate_e89fe7d685578ac980e8d6cd8f36651677398a63e56158e58efd68d1eeb75677 extends \Twig\Template
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
        echo "<!-- ============================================== HEADER : END ============================================== -->


<div class=\"body-content outer-top-vs\" id=\"top-banner-and-menu\">
    <div class=\"container\">
        <div class=\"row\">
            <!-- ============================================== SIDEBAR ============================================== -->
            <div class=\"col-xs-12 col-sm-12 col-md-3 sidebar\">
                ";
        // line 9
        if (($context["categories"] ?? null)) {
            // line 10
            echo "                <!-- ================================== TOP NAVIGATION ================================== -->
                <div class=\"side-menu animate-dropdown outer-bottom-xs\">
                    <div class=\"head\"><i class=\"icon fa fa-align-justify fa-fw\"></i> ";
            // line 12
            echo ($context["text_category"] ?? null);
            echo "</div>
                    <nav class=\"yamm megamenu-horizontal\">
                        <ul class=\"nav\">
                            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 16
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 16)) {
                    // line 17
                    echo "                            <li class=\"dropdown menu-item\"> <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 17);
                    echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon fa fa-shopping-bag\" aria-hidden=\"true\"></i>";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 17);
                    echo "</a>
                                <ul class=\"dropdown-menu mega-menu\">
                                    <li class=\"yamm-content\">
                                        <div class=\"row\">
                                            ";
                    // line 21
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 21));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 22
                        echo "                                            <div class=\"col-sm-12 col-md-3\">
                                                <ul class=\"links list-unstyled\">
                                                    ";
                        // line 24
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "gchildren", [], "any", false, false, false, 24));
                        foreach ($context['_seq'] as $context["_key"] => $context["gchild"]) {
                            // line 25
                            echo "                                                        <li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["gchild"], "href", [], "any", false, false, false, 25);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["gchild"], "name", [], "any", false, false, false, 25);
                            echo "</a></li>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gchild'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 27
                        echo "
                                                </ul>
                                            </div>
                                            <!-- /.col -->
                                            ";
                        $context['_iterated'] = true;
                    }
                    if (!$context['_iterated']) {
                        // line 32
                        echo "                                            <div class=\"col-sm-12 col-md-3\">
                                                <ul class=\"links list-unstyled\">
                                                    <li><a href=\"";
                        // line 34
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 34);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 34);
                        echo "</a></li>
                                                </ul>
                                            </div>
                                            <!-- /.col -->
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 39
                    echo "                                            ";
                }
                // line 40
                echo "
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- /.yamm-content -->
                                </ul>
                                <!-- /.dropdown-menu --> </li>
                            <!-- /.menu-item -->

                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                        </ul>
                        <!-- /.nav -->
                    </nav>
                    <!-- /.megamenu-horizontal -->
                </div>
                ";
        }
        // line 56
        echo "                <!-- /.side-menu -->
                <!-- ================================== TOP NAVIGATION : END ================================== -->

                <!-- ============================================== HOT DEALS ============================================== -->
                <div class=\"sidebar-widget hot-deals outer-bottom-xs\">
                    <h3 class=\"section-title\">Hot deals</h3>
                    <div class=\"owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss\">
                        <div class=\"item\">
                            <div class=\"products\">
                                <div class=\"hot-deal-wrapper\">
                                    <div class=\"image\">
                                        <a href=\"#\">
                                            <img src=\"assets/images/hot-deals/p13.jpg\" alt=\"\">
                                            <img src=\"assets/images/hot-deals/p13_hover.jpg\" alt=\"\" class=\"hover-image\">
                                        </a>
                                    </div>
                                    <div class=\"sale-offer-tag\"><span>49%<br>
                    off</span></div>
                                    <div class=\"timing-wrapper\">
                                        <div class=\"box-wrapper\">
                                            <div class=\"date box\"> <span class=\"key\">120</span> <span class=\"value\">DAYS</span> </div>
                                        </div>
                                        <div class=\"box-wrapper\">
                                            <div class=\"hour box\"> <span class=\"key\">20</span> <span class=\"value\">HRS</span> </div>
                                        </div>
                                        <div class=\"box-wrapper\">
                                            <div class=\"minutes box\"> <span class=\"key\">36</span> <span class=\"value\">MINS</span> </div>
                                        </div>
                                        <div class=\"box-wrapper\">
                                            <div class=\"seconds box\"> <span class=\"key\">60</span> <span class=\"value\">SEC</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.hot-deal-wrapper -->

                                <div class=\"product-info text-left m-t-20\">
                                    <h3 class=\"name\"><a href=\"detail.html\">Floral Print Buttoned</a></h3>
                                    <div class=\"rating rateit-small\"></div>
                                    <div class=\"product-price\"> <span class=\"price\"> \$600.00 </span> <span class=\"price-before-discount\">\$800.00</span> </div>
                                    <!-- /.product-price -->

                                </div>
                                <!-- /.product-info -->

                                <div class=\"cart clearfix animate-effect\">
                                    <div class=\"action\">
                                        <div class=\"add-cart-button btn-group\">
                                            <button class=\"btn btn-primary icon\" data-toggle=\"dropdown\" type=\"button\"> <i class=\"fa fa-shopping-cart\"></i> </button>
                                            <button class=\"btn btn-primary cart-btn\" type=\"button\">Add to cart</button>
                                        </div>
                                    </div>
                                    <!-- /.action -->
                                </div>
                                <!-- /.cart -->
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"products\">
                                <div class=\"hot-deal-wrapper\">
                                    <div class=\"image\">
                                        <a href=\"#\">
                                            <img src=\"assets/images/hot-deals/p14.jpg\" alt=\"\">
                                            <img src=\"assets/images/hot-deals/p14_hover.jpg\" alt=\"\" class=\"hover-image\">
                                        </a>
                                    </div>
                                    <div class=\"sale-offer-tag\"><span>35%<br>
                    off</span></div>
                                    <div class=\"timing-wrapper\">
                                        <div class=\"box-wrapper\">
                                            <div class=\"date box\"> <span class=\"key\">120</span> <span class=\"value\">Days</span> </div>
                                        </div>
                                        <div class=\"box-wrapper\">
                                            <div class=\"hour box\"> <span class=\"key\">20</span> <span class=\"value\">HRS</span> </div>
                                        </div>
                                        <div class=\"box-wrapper\">
                                            <div class=\"minutes box\"> <span class=\"key\">36</span> <span class=\"value\">MINS</span> </div>
                                        </div>
                                        <div class=\"box-wrapper\">
                                            <div class=\"seconds box\"> <span class=\"key\">60</span> <span class=\"value\">SEC</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.hot-deal-wrapper -->

                                <div class=\"product-info text-left m-t-20\">
                                    <h3 class=\"name\"><a href=\"detail.html\">Floral Print Buttoned</a></h3>
                                    <div class=\"rating rateit-small\"></div>
                                    <div class=\"product-price\"> <span class=\"price\"> \$600.00 </span> <span class=\"price-before-discount\">\$800.00</span> </div>
                                    <!-- /.product-price -->

                                </div>
                                <!-- /.product-info -->

                                <div class=\"cart clearfix animate-effect\">
                                    <div class=\"action\">
                                        <div class=\"add-cart-button btn-group\">
                                            <button class=\"btn btn-primary icon\" data-toggle=\"dropdown\" type=\"button\"> <i class=\"fa fa-shopping-cart\"></i> </button>
                                            <button class=\"btn btn-primary cart-btn\" type=\"button\">Add to cart</button>
                                        </div>
                                    </div>
                                    <!-- /.action -->
                                </div>
                                <!-- /.cart -->
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"products\">
                                <div class=\"hot-deal-wrapper\">
                                    <div class=\"image\">
                                        <a href=\"#\">
                                            <img src=\"assets/images/hot-deals/p15.jpg\" alt=\"\">
                                            <img src=\"assets/images/hot-deals/p15_hover.jpg\" alt=\"\" class=\"hover-image\">
                                        </a>
                                    </div>
                                    <div class=\"sale-offer-tag\"><span>35%<br>
                    off</span></div>
                                    <div class=\"timing-wrapper\">
                                        <div class=\"box-wrapper\">
                                            <div class=\"date box\"> <span class=\"key\">120</span> <span class=\"value\">Days</span> </div>
                                        </div>
                                        <div class=\"box-wrapper\">
                                            <div class=\"hour box\"> <span class=\"key\">20</span> <span class=\"value\">HRS</span> </div>
                                        </div>
                                        <div class=\"box-wrapper\">
                                            <div class=\"minutes box\"> <span class=\"key\">36</span> <span class=\"value\">MINS</span> </div>
                                        </div>
                                        <div class=\"box-wrapper\">
                                            <div class=\"seconds box\"> <span class=\"key\">60</span> <span class=\"value\">SEC</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.hot-deal-wrapper -->

                                <div class=\"product-info text-left m-t-20\">
                                    <h3 class=\"name\"><a href=\"detail.html\">Floral Print Buttoned</a></h3>
                                    <div class=\"rating rateit-small\"></div>
                                    <div class=\"product-price\"> <span class=\"price\"> \$600.00 </span> <span class=\"price-before-discount\">\$800.00</span> </div>
                                    <!-- /.product-price -->

                                </div>
                                <!-- /.product-info -->

                                <div class=\"cart clearfix animate-effect\">
                                    <div class=\"action\">
                                        <div class=\"add-cart-button btn-group\">
                                            <button class=\"btn btn-primary icon\" data-toggle=\"dropdown\" type=\"button\"> <i class=\"fa fa-shopping-cart\"></i> </button>
                                            <button class=\"btn btn-primary cart-btn\" type=\"button\">Add to cart</button>
                                        </div>
                                    </div>
                                    <!-- /.action -->
                                </div>
                                <!-- /.cart -->
                            </div>
                        </div>
                    </div>
                    <!-- /.sidebar-widget -->
                </div>
                <!-- ============================================== HOT DEALS: END ============================================== -->

                <!-- ============================================== SPECIAL OFFER ============================================== -->

                <div class=\"sidebar-widget outer-bottom-small\">
                    <h3 class=\"section-title\">Special Offer</h3>
                    <div class=\"sidebar-widget-body outer-top-xs\">
                        <div class=\"owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs\">
                            <div class=\"item\">
                                <div class=\"products special-product\">
                                    <div class=\"product\">
                                        <div class=\"product-micro\">
                                            <div class=\"row product-micro-row\">
                                                <div class=\"col col-xs-5\">
                                                    <div class=\"product-image\">
                                                        <div class=\"image\"> <a href=\"#\"> <img src=\"assets/images/products/p5.jpg\" alt=\"\"> </a> </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class=\"col col-xs-7\">
                                                    <div class=\"product-info\">
                                                        <h3 class=\"name\"><a href=\"#\">Floral Print Shirt</a></h3>
                                                        <div class=\"rating rateit-small\"></div>
                                                        <div class=\"product-price\"> <span class=\"price\"> \$450.99 </span> </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class=\"product\">
                                        <div class=\"product-micro\">
                                            <div class=\"row product-micro-row\">
                                                <div class=\"col col-xs-5\">
                                                    <div class=\"product-image\">
                                                        <div class=\"image\"> <a href=\"#\"> <img src=\"assets/images/products/p9.jpg\" alt=\"\"> </a> </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class=\"col col-xs-7\">
                                                    <div class=\"product-info\">
                                                        <h3 class=\"name\"><a href=\"#\">Floral Print Shirt</a></h3>
                                                        <div class=\"rating rateit-small\"></div>
                                                        <div class=\"product-price\"> <span class=\"price\"> \$450.99 </span> </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class=\"product\">
                                        <div class=\"product-micro\">
                                            <div class=\"row product-micro-row\">
                                                <div class=\"col col-xs-5\">
                                                    <div class=\"product-image\">
                                                        <div class=\"image\"> <a href=\"#\"> <img src=\"assets/images/products/p11.jpg\" alt=\"\"> </a> </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class=\"col col-xs-7\">
                                                    <div class=\"product-info\">
                                                        <h3 class=\"name\"><a href=\"#\">Floral Print Shirt</a></h3>
                                                        <div class=\"rating rateit-small\"></div>
                                                        <div class=\"product-price\"> <span class=\"price\"> \$450.99 </span> </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"products special-product\">
                                    <div class=\"product\">
                                        <div class=\"product-micro\">
                                            <div class=\"row product-micro-row\">
                                                <div class=\"col col-xs-5\">
                                                    <div class=\"product-image\">
                                                        <div class=\"image\"> <a href=\"#\"> <img src=\"assets/images/products/p15.jpg\" alt=\"\"> </a> </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class=\"col col-xs-7\">
                                                    <div class=\"product-info\">
                                                        <h3 class=\"name\"><a href=\"#\">Floral Print Shirt</a></h3>
                                                        <div class=\"rating rateit-small\"></div>
                                                        <div class=\"product-price\"> <span class=\"price\"> \$450.99 </span> </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class=\"product\">
                                        <div class=\"product-micro\">
                                            <div class=\"row product-micro-row\">
                                                <div class=\"col col-xs-5\">
                                                    <div class=\"product-image\">
                                                        <div class=\"image\"> <a href=\"#\"> <img src=\"assets/images/products/p13.jpg\" alt=\"\"> </a> </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class=\"col col-xs-7\">
                                                    <div class=\"product-info\">
                                                        <h3 class=\"name\"><a href=\"#\">Floral Print Shirt</a></h3>
                                                        <div class=\"rating rateit-small\"></div>
                                                        <div class=\"product-price\"> <span class=\"price\"> \$450.99 </span> </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class=\"product\">
                                        <div class=\"product-micro\">
                                            <div class=\"row product-micro-row\">
                                                <div class=\"col col-xs-5\">
                                                    <div class=\"product-image\">
                                                        <div class=\"image\"> <a href=\"#\"> <img src=\"assets/images/products/p12.jpg\" alt=\"\"> </a> </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class=\"col col-xs-7\">
                                                    <div class=\"product-info\">
                                                        <h3 class=\"name\"><a href=\"#\">Floral Print Shirt</a></h3>
                                                        <div class=\"rating rateit-small\"></div>
                                                        <div class=\"product-price\"> <span class=\"price\"> \$450.99 </span> </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"products special-product\">
                                    <div class=\"product\">
                                        <div class=\"product-micro\">
                                            <div class=\"row product-micro-row\">
                                                <div class=\"col col-xs-5\">
                                                    <div class=\"product-image\">
                                                        <div class=\"image\"> <a href=\"#\"> <img src=\"assets/images/products/p1.jpg\"  alt=\"\"> </a> </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class=\"col col-xs-7\">
                                                    <div class=\"product-info\">
                                                        <h3 class=\"name\"><a href=\"#\">Floral Print Shirt</a></h3>
                                                        <div class=\"rating rateit-small\"></div>
                                                        <div class=\"product-price\"> <span class=\"price\"> \$450.99 </span> </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class=\"product\">
                                        <div class=\"product-micro\">
                                            <div class=\"row product-micro-row\">
                                                <div class=\"col col-xs-5\">
                                                    <div class=\"product-image\">
                                                        <div class=\"image\"> <a href=\"#\"> <img src=\"assets/images/products/p3.jpg\" alt=\"\"> </a> </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class=\"col col-xs-7\">
                                                    <div class=\"product-info\">
                                                        <h3 class=\"name\"><a href=\"#\">Floral Print Shirt</a></h3>
                                                        <div class=\"rating rateit-small\"></div>
                                                        <div class=\"product-price\"> <span class=\"price\"> \$450.99 </span> </div>
                                                        <!-- /.product-price -->
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class=\"product\">
                                        <div class=\"product-micro\">
                                            <div class=\"row product-micro-row\">
                                                <div class=\"col col-xs-5\">
                                                    <div class=\"product-image\">
                                                        <div class=\"image\"> <a href=\"#\"> <img src=\"assets/images/products/p7.jpg\" alt=\"\"> </a> </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class=\"col col-xs-7\">
                                                    <div class=\"product-info\">
                                                        <h3 class=\"name\"><a href=\"#\">Floral Print Shirt</a></h3>
                                                        <div class=\"rating rateit-small\"></div>
                                                        <div class=\"product-price\"> <span class=\"price\"> \$450.99 </span> </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.sidebar-widget-body -->
                </div>
                <!-- /.sidebar-widget -->
                <!-- ============================================== SPECIAL OFFER : END ============================================== -->
                <!-- ============================================== PRODUCT TAGS ============================================== -->
                <div class=\"sidebar-widget product-tag\">
                    <h3 class=\"section-title\">Product tags</h3>
                    <div class=\"sidebar-widget-body outer-top-xs\">
                        <div class=\"tag-list\"> <a class=\"item\" title=\"Phone\" href=\"category.html\">Phone</a> <a class=\"item active\" title=\"Vest\" href=\"category.html\">Vest</a> <a class=\"item\" title=\"Smartphone\" href=\"category.html\">Smartphone</a> <a class=\"item\" title=\"Furniture\" href=\"category.html\">Furniture</a> <a class=\"item\" title=\"T-shirt\" href=\"category.html\">T-shirt</a> <a class=\"item\" title=\"Sweatpants\" href=\"category.html\">Sweatpants</a> <a class=\"item\" title=\"Sneaker\" href=\"category.html\">Sneaker</a> <a class=\"item\" title=\"Toys\" href=\"category.html\">Toys</a> <a class=\"item\" title=\"Rose\" href=\"category.html\">Rose</a> </div>
                        <!-- /.tag-list -->
                    </div>
                    <!-- /.sidebar-widget-body -->
                </div>
                <!-- /.sidebar-widget -->
                <!-- ============================================== PRODUCT TAGS : END ============================================== -->
                <!-- ============================================== SPECIAL DEALS ============================================== -->

                <div class=\"sidebar-widget outer-bottom-small\">
                    <h3 class=\"section-title\">Special Deals</h3>
                    <div class=\"sidebar-widget-body outer-top-xs\">
                        <div class=\"owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs\">
                            <div class=\"item\">
                                <div class=\"products special-product\">
                                    <div class=\"product\">
                                        <div class=\"product-micro\">
                                            <div class=\"row product-micro-row\">
                                                <div class=\"col col-xs-5\">
                                                    <div class=\"product-image\">
                                                        <div class=\"image\"> <a href=\"#\"> <img src=\"assets/images/products/p8.jpg\"  alt=\"\"> </a> </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class=\"col col-xs-7\">
                                                    <div class=\"product-info\">
                                                        <h3 class=\"name\"><a href=\"#\">Floral Print Shirt</a></h3>
                                                        <div class=\"rating rateit-small\"></div>
                                                        <div class=\"product-price\"> <span class=\"price\"> \$450.99 </span> </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class=\"product\">
                                        <div class=\"product-micro\">
                                            <div class=\"row product-micro-row\">
                                                <div class=\"col col-xs-5\">
                                                    <div class=\"product-image\">
                                                        <div class=\"image\"> <a href=\"#\"> <img src=\"assets/images/products/p5.jpg\"  alt=\"\"> </a> </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class=\"col col-xs-7\">
                                                    <div class=\"product-info\">
                                                        <h3 class=\"name\"><a href=\"#\">Floral Print Shirt</a></h3>
                                                        <div class=\"rating rateit-small\"></div>
                                                        <div class=\"product-price\"> <span class=\"price\"> \$450.99 </span> </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class=\"product\">
                                        <div class=\"product-micro\">
                                            <div class=\"row product-micro-row\">
                                                <div class=\"col col-xs-5\">
                                                    <div class=\"product-image\">
                                                        <div class=\"image\"> <a href=\"#\"> <img src=\"assets/images/products/p6.jpg\"  alt=\"image\"> </a> </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class=\"col col-xs-7\">
                                                    <div class=\"product-info\">
                                                        <h3 class=\"name\"><a href=\"#\">Floral Print Shirt</a></h3>
                                                        <div class=\"rating rateit-small\"></div>
                                                        <div class=\"product-price\"> <span class=\"price\"> \$450.99 </span> </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"products special-product\">
                                    <div class=\"product\">
                                        <div class=\"product-micro\">
                                            <div class=\"row product-micro-row\">
                                                <div class=\"col col-xs-5\">
                                                    <div class=\"product-image\">
                                                        <div class=\"image\"> <a href=\"#\"> <img src=\"assets/images/products/p8.jpg\" alt=\"\"> </a> </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class=\"col col-xs-7\">
                                                    <div class=\"product-info\">
                                                        <h3 class=\"name\"><a href=\"#\">Floral Print Shirt</a></h3>
                                                        <div class=\"rating rateit-small\"></div>
                                                        <div class=\"product-price\"> <span class=\"price\"> \$450.99 </span> </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class=\"product\">
                                        <div class=\"product-micro\">
                                            <div class=\"row product-micro-row\">
                                                <div class=\"col col-xs-5\">
                                                    <div class=\"product-image\">
                                                        <div class=\"image\"> <a href=\"#\"> <img src=\"assets/images/products/p7.jpg\" alt=\"\"> </a> </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class=\"col col-xs-7\">
                                                    <div class=\"product-info\">
                                                        <h3 class=\"name\"><a href=\"#\">Floral Print Shirt</a></h3>
                                                        <div class=\"rating rateit-small\"></div>
                                                        <div class=\"product-price\"> <span class=\"price\"> \$450.99 </span> </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class=\"product\">
                                        <div class=\"product-micro\">
                                            <div class=\"row product-micro-row\">
                                                <div class=\"col col-xs-5\">
                                                    <div class=\"product-image\">
                                                        <div class=\"image\"> <a href=\"#\"> <img src=\"assets/images/products/p6.jpg\" alt=\"\"> </a> </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class=\"col col-xs-7\">
                                                    <div class=\"product-info\">
                                                        <h3 class=\"name\"><a href=\"#\">Floral Print Shirt</a></h3>
                                                        <div class=\"rating rateit-small\"></div>
                                                        <div class=\"product-price\"> <span class=\"price\"> \$450.99 </span> </div>
                                                        <!-- /.product-price -->
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"products special-product\">
                                    <div class=\"product\">
                                        <div class=\"product-micro\">
                                            <div class=\"row product-micro-row\">
                                                <div class=\"col col-xs-5\">
                                                    <div class=\"product-image\">
                                                        <div class=\"image\"> <a href=\"#\"> <img src=\"assets/images/products/p5.jpg\" alt=\"images\">
                                                                <div class=\"zoom-overlay\"></div>
                                                            </a> </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class=\"col col-xs-7\">
                                                    <div class=\"product-info\">
                                                        <h3 class=\"name\"><a href=\"#\">Floral Print Shirt</a></h3>
                                                        <div class=\"rating rateit-small\"></div>
                                                        <div class=\"product-price\"> <span class=\"price\"> \$450.99 </span> </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class=\"product\">
                                        <div class=\"product-micro\">
                                            <div class=\"row product-micro-row\">
                                                <div class=\"col col-xs-5\">
                                                    <div class=\"product-image\">
                                                        <div class=\"image\"> <a href=\"#\"> <img src=\"assets/images/products/p4.jpg\"  alt=\"\">
                                                                <div class=\"zoom-overlay\"></div>
                                                            </a> </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class=\"col col-xs-7\">
                                                    <div class=\"product-info\">
                                                        <h3 class=\"name\"><a href=\"#\">Floral Print Shirt</a></h3>
                                                        <div class=\"rating rateit-small\"></div>
                                                        <div class=\"product-price\"> <span class=\"price\"> \$450.99 </span> </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class=\"product\">
                                        <div class=\"product-micro\">
                                            <div class=\"row product-micro-row\">
                                                <div class=\"col col-xs-5\">
                                                    <div class=\"product-image\">
                                                        <div class=\"image\"> <a href=\"#\"> <img src=\"assets/images/products/p13.jpg\" alt=\"image\"> </a> </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class=\"col col-xs-7\">
                                                    <div class=\"product-info\">
                                                        <h3 class=\"name\"><a href=\"#\">Floral Print Shirt</a></h3>
                                                        <div class=\"rating rateit-small\"></div>
                                                        <div class=\"product-price\"> <span class=\"price\"> \$450.99 </span> </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.sidebar-widget-body -->
                </div>
                <!-- /.sidebar-widget -->
                <!-- ============================================== SPECIAL DEALS : END ============================================== -->
                <!-- ============================================== NEWSLETTER ============================================== -->
                <div class=\"sidebar-widget newsletter outer-bottom-small\">
                    <h3 class=\"section-title\">Newsletters</h3>
                    <div class=\"sidebar-widget-body outer-top-xs\">
                        <p>Sign Up for Our Newsletter!</p>
                        <form>
                            <div class=\"form-group\">
                                <label class=\"sr-only\" for=\"exampleInputEmail1\">Email address</label>
                                <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Subscribe to our newsletter\">
                            </div>
                            <button class=\"btn btn-primary\">Subscribe</button>
                        </form>
                    </div>
                    <!-- /.sidebar-widget-body -->
                </div>
                <!-- /.sidebar-widget -->
                <!-- ============================================== NEWSLETTER: END ============================================== -->

                <!-- ============================================== Testimonials============================================== -->
                <div class=\"sidebar-widget outer-top-vs \">
                    <div id=\"advertisement\" class=\"advertisement\">
                        <div class=\"item\">
                            <div class=\"avatar\"><img src=\"assets/images/testimonials/member1.png\" alt=\"Image\"></div>
                            <div class=\"testimonials\"><em>\"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer. Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat.<em>\"</em></div>
                            <div class=\"clients_author\">John Doe <span>Abc Company</span> </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.item -->

                        <div class=\"item\">
                            <div class=\"avatar\"><img src=\"assets/images/testimonials/member3.png\" alt=\"Image\"></div>
                            <div class=\"testimonials\"><em>\"</em>Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer. Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat.<em>\"</em></div>
                            <div class=\"clients_author\">Stephen Doe <span>Xperia Designs</span> </div>
                        </div>
                        <!-- /.item -->

                        <div class=\"item\">
                            <div class=\"avatar\"><img src=\"assets/images/testimonials/member2.png\" alt=\"Image\"></div>
                            <div class=\"testimonials\"><em>\"</em>Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer. Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat.<em>\"</em></div>
                            <div class=\"clients_author\">Saraha Smith <span>Datsun &amp; Co</span> </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.item -->

                    </div>
                    <!-- /.owl-carousel -->
                </div>

                <!-- ============================================== Testimonials: END ============================================== -->


            </div>
            <!-- /.sidemenu-holder -->
            <!-- ============================================== SIDEBAR : END ============================================== -->
      ";
    }

    public function getTemplateName()
    {
        return "morazzo/template/common/column_left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 56,  144 => 50,  129 => 40,  126 => 39,  113 => 34,  109 => 32,  100 => 27,  89 => 25,  85 => 24,  81 => 22,  76 => 21,  66 => 17,  63 => 16,  59 => 15,  53 => 12,  49 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "morazzo/template/common/column_left.twig", "");
    }
}

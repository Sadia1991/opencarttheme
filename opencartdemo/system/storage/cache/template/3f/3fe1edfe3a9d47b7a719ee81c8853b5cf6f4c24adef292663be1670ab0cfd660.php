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
class __TwigTemplate_90408ec97194e3eee6b7911ca1da270e572086e5fbfc1a420d2e7aceba590667 extends \Twig\Template
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
        echo "<!-- ============================================== NAVBAR ============================================== -->
<div class=\"header-nav animate-dropdown\">
    <div class=\"container\">
        <div class=\"yamm navbar navbar-default\" role=\"navigation\">
            <div class=\"navbar-header\">
                <button data-target=\"#mc-horizontal-menu-collapse\" data-toggle=\"collapse\" class=\"navbar-toggle collapsed\" type=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
            </div>
            <div class=\"nav-bg-class\">
                <div class=\"navbar-collapse collapse\" id=\"mc-horizontal-menu-collapse\">
                    <div class=\"nav-outer\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"active dropdown\"> <a href=\"home.html\">Home</a> </li>
                            <li class=\"dropdown yamm mega-menu\"> <a href=\"home.html\" data-hover=\"dropdown\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Clothing</a>
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




                                                 -->

                                                <div class=\"col-xs-12 col-sm-6 col-md-4 col-menu banner-image\"> <img class=\"img-responsive\" src=\"assets/images/banners/top-menu-banner.jpg\" alt=\"\"> </div>
                                                <!-- /.yamm-content -->
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                             </ul>
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
<!-- /.header-nav -->
<!-- ============================================== NAVBAR : END ============================================== -->

";
    }

    public function getTemplateName()
    {
        return "morazzo/template/common/menu.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "morazzo/template/common/menu.twig", "");
    }
}

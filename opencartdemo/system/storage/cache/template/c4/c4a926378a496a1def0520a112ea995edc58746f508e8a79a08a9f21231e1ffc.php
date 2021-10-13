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

/* morazzo/template/common/footer.twig */
class __TwigTemplate_fa340cd7f9de31b60950bb5eb51020d289eda14c8400010d17588a2114e72f28 extends \Twig\Template
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
        echo "<!-- ============================================================= FOOTER ============================================================= -->
<footer id=\"footer\" class=\"footer color-bg\">
  <div class=\"footer-bottom\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-xs-12 col-sm-6 col-md-3\">
          <div class=\"address-block\">

            <!-- /.module-heading -->

            <div class=\"module-body\">
              <ul class=\"toggle-footer\" style=\"\">
                <li class=\"media\">
                  <div class=\"pull-left\"> <span class=\"icon fa-stack fa-lg\"> <i class=\"fa fa-map-marker fa-stack-1x fa-inverse\"></i> </span> </div>
                  <div class=\"media-body\">
                    <p>ThemesGround, 789 Main rd, Anytown, CA 12345 USA</p>
                  </div>
                </li>
                <li class=\"media\">
                  <div class=\"pull-left\"> <span class=\"icon fa-stack fa-lg\"> <i class=\"fa fa-mobile fa-stack-1x fa-inverse\"></i> </span> </div>
                  <div class=\"media-body\">
                    <p> + (888) 123-4567 / + (888) 456-7890</p>
                  </div>
                </li>
                <li class=\"media\">
                  <div class=\"pull-left\"> <span class=\"icon fa-stack fa-lg\"> <i class=\"fa fa-envelope fa-stack-1x fa-inverse\"></i> </span> </div>
                  <div class=\"media-body\"> <span><a href=\"#\">marazzo@themesground.com</a></span> </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- /.module-body -->
        </div>
        <!-- /.col -->

        <div class=\"col-xs-12 col-sm-6 col-md-3\">
          <div class=\"module-heading\">
            <h4 class=\"module-title\">Customer Service</h4>
          </div>
          <!-- /.module-heading -->

          <div class=\"module-body\">
            <ul class='list-unstyled'>
              <li class=\"first\"><a href=\"#\" title=\"Contact us\">My Account</a></li>
              <li><a href=\"#\" title=\"About us\">Order History</a></li>
              <li><a href=\"#\" title=\"faq\">FAQ</a></li>
              <li><a href=\"#\" title=\"Popular Searches\">Specials</a></li>
              <li class=\"last\"><a href=\"#\" title=\"Where is my order?\">Help Center</a></li>
            </ul>
          </div>
          <!-- /.module-body -->
        </div>
        <!-- /.col -->

        <div class=\"col-xs-12 col-sm-6 col-md-3\">
          <div class=\"module-heading\">
            <h4 class=\"module-title\">Corporation</h4>
          </div>
          <!-- /.module-heading -->

          <div class=\"module-body\">
            <ul class='list-unstyled'>
              <li class=\"first\"><a title=\"Your Account\" href=\"#\">About us</a></li>
              <li><a title=\"Information\" href=\"#\">Customer Service</a></li>
              <li><a title=\"Addresses\" href=\"#\">Company</a></li>
              <li><a title=\"Addresses\" href=\"#\">Investor Relations</a></li>
              <li class=\"last\"><a title=\"Orders History\" href=\"#\">Advanced Search</a></li>
            </ul>
          </div>
          <!-- /.module-body -->
        </div>
        <!-- /.col -->

        <div class=\"col-xs-12 col-sm-6 col-md-3\">
          <div class=\"module-heading\">
            <h4 class=\"module-title\">Why Choose Us</h4>
          </div>
          <!-- /.module-heading -->

          <div class=\"module-body\">
            <ul class='list-unstyled'>
              <li class=\"first\"><a href=\"#\" title=\"About us\">Shopping Guide</a></li>
              <li><a href=\"#\" title=\"Blog\">Blog</a></li>
              <li><a href=\"#\" title=\"Company\">Company</a></li>
              <li><a href=\"#\" title=\"Investor Relations\">Investor Relations</a></li>
              <li class=\" last\"><a href=\"contact-us.html\" title=\"Suppliers\">Contact Us</a></li>
            </ul>
          </div>
          <!-- /.module-body -->
        </div>
      </div>
    </div>
  </div>
  <div class=\"copyright-bar\">
    <div class=\"container\">
      <div class=\"col-xs-12 col-sm-4 no-padding social\">
        <ul class=\"link\">
          <li class=\"fb pull-left\"><a target=\"_blank\" rel=\"nofollow\" href=\"#\" title=\"Facebook\"></a></li>
          <li class=\"tw pull-left\"><a target=\"_blank\" rel=\"nofollow\" href=\"#\" title=\"Twitter\"></a></li>
          <li class=\"googleplus pull-left\"><a target=\"_blank\" rel=\"nofollow\" href=\"#\" title=\"GooglePlus\"></a></li>
          <li class=\"rss pull-left\"><a target=\"_blank\" rel=\"nofollow\" href=\"#\" title=\"RSS\"></a></li>
          <li class=\"pintrest pull-left\"><a target=\"_blank\" rel=\"nofollow\" href=\"#\" title=\"PInterest\"></a></li>
          <li class=\"linkedin pull-left\"><a target=\"_blank\" rel=\"nofollow\" href=\"#\" title=\"Linkedin\"></a></li>
          <li class=\"youtube pull-left\"><a target=\"_blank\" rel=\"nofollow\" href=\"#\" title=\"Youtube\"></a></li>
        </ul>
      </div>
      <div class=\"col-xs-12 col-sm-4 no-padding copyright\"><a target=\"_blank\" href=\"https://www.templateshub.net\">Templates Hub</a> </div>
      <div class=\"col-xs-12 col-sm-4 no-padding\">
        <div class=\"clearfix payment-methods\">
          <ul>
            <li><img src=\"catalog/view/javascript/images/payments/1.png\" alt=\"\"></li>
            <li><img src=\"catalog/view/javascript/images/payments/2.png\" alt=\"\"></li>
            <li><img src=\"catalog/view/javascript/images/payments/3.png\" alt=\"\"></li>
            <li><img src=\"catalog/view/javascript/images/payments/4.png\" alt=\"\"></li>
            <li><img src=\"catalog/view/javascript/images/payments/5.png\" alt=\"\"></li>
          </ul>
        </div>
        <!-- /.payment-methods -->
      </div>
    </div>
  </div>
</footer>
<!-- ============================================================= FOOTER : END============================================================= -->

<!-- For demo purposes – can be removed on production -->

<!-- For demo purposes – can be removed on production : End -->

<!-- JavaScripts placed at the end of the document so the pages load faster -->
<script src=\"catalog/view/javascript/js/jquery-1.11.1.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/js/bootstrap-hover-dropdown.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/js/owl.carousel.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/js/echo.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/js/jquery.easing-1.3.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/js/bootstrap-slider.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/js/jquery.rateit.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/js/lightbox.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/js/bootstrap-select.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/js/wow.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/js/scripts.js\" type=\"text/javascript\"></script>
";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 143
            echo "  <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 143);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 143);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 143);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 146
            echo "  <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "</body>

</html>";
    }

    public function getTemplateName()
    {
        return "morazzo/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 148,  201 => 146,  197 => 145,  184 => 143,  180 => 142,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "morazzo/template/common/footer.twig", "");
    }
}

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
class __TwigTemplate_0c9870cdbebbfff3b54d4dfe474c24d811890c0202130ac681c55b1a483ca35f extends \Twig\Template
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
        echo "<div class=\"body-content outer-top-vs\" id=\"top-banner-and-menu\">
  <div class=\"container\">
    <div class=\"row\">
      <!-- ============================================== SIDEBAR ============================================== -->
      <div class=\"col-xs-12 col-sm-12 col-md-3 sidebar\">

        <!-- ================================== TOP NAVIGATION ================================== -->
        <div class=\"side-menu animate-dropdown outer-bottom-xs\">
          <div class=\"head\"><i class=\"icon fa fa-align-justify fa-fw\"></i> ";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</div>
          <nav class=\"yamm megamenu-horizontal\">
            <ul class=\"nav\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 13
            echo "              <li class=\"dropdown menu-item\"> <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 13);
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 13);
            echo "</a>
                <ul class=\"dropdown-menu mega-menu\">
                  <li class=\"yamm-content\">
                    <div class=\"row\">
                        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 18
                echo "                      <div class=\"col-sm-12 col-md-3\">
                        <ul class=\"links list-unstyled\">
                          <li><a href=\"";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 20);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 20);
                echo "</a></li>

                        </ul>

                      </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                    </div>
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
        <!-- ================================== TOP NAVIGATION : END ================================== -->
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
        return array (  95 => 27,  89 => 26,  75 => 20,  71 => 18,  67 => 17,  57 => 13,  53 => 12,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "morazzo/template/extension/module/category.twig", "");
    }
}

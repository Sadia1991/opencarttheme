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
class __TwigTemplate_65813e393a5b673a40c34c5c7fe883fa54d570c96701783bf7a0f4ed63f97f98 extends \Twig\Template
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
    <!-- Icons/Glyphs -->
    <link rel=\"stylesheet\" href=\"catalog/view/theme/morazzo/stylesheet/css/font-awesome.css\" type=\"text/css\">
    <!-- Fonts -->
    <link href=\"//fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800\" rel=\"stylesheet\">
    <link href='//fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 35
            echo "        <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 35);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 35);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 35);
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 39
            echo "      <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 39);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 39);
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 43
            echo "      <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 47
            echo "        ";
            echo $context["analytic"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
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
        // line 61
        echo ($context["text_account"] ?? null);
        echo "</span></a></li>
            <li class=\"wishlist\"><a href=\"#\"><span>";
        // line 62
        echo ($context["text_wishlist"] ?? null);
        echo "</span></a></li>
            <li class=\"header_cart hidden-xs\"><a href=\"#\"><span>";
        // line 63
        echo ($context["text_shopping_cart"] ?? null);
        echo "</span></a></li>
            <li class=\"check\"><a href=\"#\"><span>";
        // line 64
        echo ($context["text_checkout"] ?? null);
        echo "</span></a></li>
            <li class=\"login\"><a href=\"#\"><span>";
        // line 65
        echo ($context["text_login"] ?? null);
        echo "</span></a></li>
          </ul>
        </div>
        <!-- /.cnt-account -->


          ";
        // line 71
        echo ($context["currency"] ?? null);
        echo "

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


    

";
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
        return array (  201 => 71,  192 => 65,  188 => 64,  184 => 63,  180 => 62,  176 => 61,  162 => 49,  153 => 47,  149 => 46,  146 => 45,  137 => 43,  133 => 42,  130 => 41,  119 => 39,  115 => 38,  112 => 37,  99 => 35,  95 => 34,  73 => 15,  68 => 14,  62 => 12,  59 => 11,  53 => 9,  51 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "morazzo/template/common/header.twig", "");
    }
}

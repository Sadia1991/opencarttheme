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
class __TwigTemplate_a10a5dbaa360717dd45ebf528c8e7fece7d4e7a9a7e83b2584e3ae37c47e4d1b extends \Twig\Template
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
        return array (  73 => 15,  68 => 14,  62 => 12,  59 => 11,  53 => 9,  51 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "morazzo/template/common/header.twig", "");
    }
}

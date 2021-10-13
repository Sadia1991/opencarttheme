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

/* morazzo/template/common/searchwithcategories.twig */
class __TwigTemplate_50233e330b2814f02210de5eb6aceb5d852253134b75917ce04183c24eb9e2d8 extends \Twig\Template
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
        echo "<div id=\"search-categories\" class=\"search-area\">
\t<div class=\"form-group\">
\t\t<div class=\"input-group\">
\t\t\t
\t\t</div>
\t</div>
</div>

<script type=\"text/javascript\">
\$(document).ready(function() {
    \$('#search-categories button').on('click', function() {
        url = \$('base').attr('href') + 'index.php?route=product/search';
        var value = \$('#search-categories input[name=\\'search\\']').val();
        if (value) {
            url += '&search=' + encodeURIComponent(value);
        }
        var category = \$('#search-categories select[name=\\'category_id\\']').prop('value');
        if (category>0) {
            url += '&category_id=' + encodeURIComponent(category);
        }
        location = url;
    });
    \$('#search-categories input[name=\\'search\\']').on('keydown', function(e) {
        if (e.keyCode == 13) {
            \$('#search-categories button').trigger('click');
        }
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "morazzo/template/common/searchwithcategories.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "morazzo/template/common/searchwithcategories.twig", "");
    }
}

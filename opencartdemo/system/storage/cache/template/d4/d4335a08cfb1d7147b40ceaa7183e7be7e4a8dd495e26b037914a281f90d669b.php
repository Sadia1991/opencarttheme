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
class __TwigTemplate_31da947f7ed8286ebd5364f4b67045cf85f799fdb655095e2e00b2f82ef7915e extends \Twig\Template
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
\t\t<div class=\"\">
\t\t\t<ul class=\"categories-filter animate-dropdown\">
\t\t\t\t<li class=\"dropdown\"><a class=\"dropdown-toggle\"  data-toggle=\"dropdown\"><select name=\"category_id\" class=\"category_id\">
\t\t\t\t\t<option value=\"0\">";
        // line 6
        echo ($context["text_category"] ?? null);
        echo "</option>
                    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 8
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 8);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 8) == ($context["category_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 8);
            echo "</option>
                        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 10
                echo "\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 10);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 10) == ($context["category_id"] ?? null))) {
                    echo " selected=\"selected\"";
                }
                echo ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 10);
                echo "</option>
                            ";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 11));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 12
                    echo "\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 12);
                    echo "\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 12) == ($context["category_id"] ?? null))) {
                        echo " selected=\"selected\"";
                    }
                    echo ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 12);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t\t\t</select></a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<input type=\"text\" name=\"search\" value=\"";
        // line 19
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"search-field\" />
\t\t\t<button class=\"search-button\"></button>
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

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 19,  109 => 16,  103 => 15,  97 => 14,  82 => 12,  78 => 11,  67 => 10,  63 => 9,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "morazzo/template/common/searchwithcategories.twig", "");
    }
}

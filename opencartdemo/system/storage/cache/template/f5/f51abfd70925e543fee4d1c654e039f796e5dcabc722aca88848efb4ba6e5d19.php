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

/* morazzo/template/common/search.twig */
class __TwigTemplate_6a1be3cab610cc29202e1dd1e452ec2374af350be394e896c0a156f316c907e2 extends \Twig\Template
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
        echo "<div id=\"search-categories\">
    <div class=\"form-group\">
        <div class=\"input-group\">
            <input type=\"text\" name=\"search\" value=\"";
        // line 4
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"form-control\" />
            <select name=\"category_id\" class=\"form-control\">
                <option value=\"0\">";
        // line 6
        echo ($context["text_category"] ?? null);
        echo "</option>
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 8
            echo "                    <option value=\"";
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
                echo "                        <option value=\"";
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
                    echo "                            <option value=\"";
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
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "            </select>
            <span class=\"input-group-btn\">
\t\t\t\t<button type=\"button\" class=\"btn\"><i class=\"fa fa-search\"></i></button>
\t\t\t</span>
        </div>
    </div>
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
        return "morazzo/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 16,  108 => 15,  102 => 14,  87 => 12,  83 => 11,  72 => 10,  68 => 9,  57 => 8,  53 => 7,  49 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "morazzo/template/common/search.twig", "");
    }
}

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
class __TwigTemplate_53c8e15f3f9dc4a0b3daaeb144466c006ec01772833e30db04a95f515078b5ec extends \Twig\Template
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
  <div class=\"form-group\">
    <ul class=\"categories-filter animate-dropdown\">
      <li class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 5
        echo ($context["text_category"] ?? null);
        echo "<b class=\"caret\"></b></a>
      <li class=\"menu-header\">
        <a>


              ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 11
            echo "                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 11);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 11) == ($context["category_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 11);
            echo "</option>
                  ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 13
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 13);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 13) == ($context["category_id"] ?? null))) {
                    echo " selected=\"selected\"";
                }
                echo ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 13);
                echo "</option>
                      ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 14));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 15
                    echo "                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 15);
                    echo "\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 15) == ($context["category_id"] ?? null))) {
                        echo " selected=\"selected\"";
                    }
                    echo ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 15);
                    echo "</option>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
        </a>
      </li>
      </li>
    </ul>
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
</script>";
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
        return array (  112 => 19,  106 => 18,  100 => 17,  85 => 15,  81 => 14,  70 => 13,  66 => 12,  55 => 11,  51 => 10,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "morazzo/template/common/search.twig", "");
    }
}

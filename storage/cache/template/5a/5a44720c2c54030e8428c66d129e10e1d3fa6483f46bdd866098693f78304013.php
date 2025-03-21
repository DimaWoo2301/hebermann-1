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

/* catalog/manufacturer_list.twig */
class __TwigTemplate_3281a7d281d91dd0775e8ab16c4378b570e20d7bc692a6ef035eb72dcd57585a extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-manufacturer').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 23
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 29
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 32
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-manufacturer\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 38
        if ((($context["sort"] ?? null) == "name")) {
            // line 39
            echo "                    <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 41
            echo "                    <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        }
        // line 42
        echo "</td>
                  <td class=\"text-right\">";
        // line 43
        if ((($context["sort"] ?? null) == "sort_order")) {
            // line 44
            echo "                    <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 46
            echo "                    <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        }
        // line 47
        echo "</td>
\t\t\t\t  <td class=\"text-right\">";
        // line 48
        if ((($context["sort"] ?? null) == "noindex")) {
            // line 49
            echo "                    <a href=\"";
            echo ($context["sort_noindex"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_noindex"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 51
            echo "                    <a href=\"";
            echo ($context["sort_noindex"] ?? null);
            echo "\">";
            echo ($context["column_noindex"] ?? null);
            echo "</a>
\t\t\t\t\t";
        }
        // line 52
        echo "</td>
                  <td class=\"text-right\">";
        // line 53
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 57
        if (($context["manufacturers"] ?? null)) {
            // line 58
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["manufacturers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                // line 59
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 60
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["manufacturer"], "manufacturer_id", [], "any", false, false, false, 60), ($context["selected"] ?? null))) {
                    // line 61
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "manufacturer_id", [], "any", false, false, false, 61);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 63
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "manufacturer_id", [], "any", false, false, false, 63);
                    echo "\" />
                    ";
                }
                // line 64
                echo "</td>
                  <td class=\"text-left\">";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 65);
                echo "</td>
                  <td class=\"text-right\">";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "sort_order", [], "any", false, false, false, 66);
                echo "</td>
\t\t\t\t  <td class=\"text-right\">";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "noindex", [], "any", false, false, false, 67);
                echo "</td>
                  <td class=\"text-right\">
\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "href_shop", [], "any", false, false, false, 69);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_shop"] ?? null);
                echo "\" class=\"btn btn-success\"><i class=\"fa fa-eye\"></i></a>
\t\t\t\t\t<a href=\"";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "edit", [], "any", false, false, false, 70);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t  </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                ";
        } else {
            // line 75
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"4\">";
            // line 76
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 79
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 84
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 85
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 91
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/manufacturer_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 91,  281 => 85,  277 => 84,  270 => 79,  264 => 76,  261 => 75,  258 => 74,  246 => 70,  240 => 69,  235 => 67,  231 => 66,  227 => 65,  224 => 64,  218 => 63,  212 => 61,  210 => 60,  207 => 59,  202 => 58,  200 => 57,  193 => 53,  190 => 52,  182 => 51,  172 => 49,  170 => 48,  167 => 47,  159 => 46,  149 => 44,  147 => 43,  144 => 42,  136 => 41,  126 => 39,  124 => 38,  115 => 32,  109 => 29,  105 => 27,  97 => 23,  94 => 22,  86 => 18,  84 => 17,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/manufacturer_list.twig", "");
    }
}

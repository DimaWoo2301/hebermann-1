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

/* design/layout_form.twig */
class __TwigTemplate_43fce744cb897148d3547f93f1e7c92a0d7b67ca83a9ed69deb2026d14b0417d extends \Twig\Template
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
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<button type=\"submit\" form=\"form-layout\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\">
\t\t\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t\t</button>
\t\t\t\t<a href=\"";
        // line 9
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\">
\t\t\t\t\t<i class=\"fa fa-reply\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<h1>";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 17);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 17);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 24
        if (($context["error_warning"] ?? null)) {
            // line 25
            echo "\t\t\t<div class=\"alert alert-danger alert-dismissible\">
\t\t\t\t<i class=\"fa fa-exclamation-circle\"></i>
\t\t\t\t";
            // line 27
            echo ($context["error_warning"] ?? null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
\t\t";
        }
        // line 31
        echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t";
        // line 35
        echo ($context["text_form"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form action=\"";
        // line 38
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-layout\" class=\"form-horizontal\">
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<legend>";
        // line 40
        echo ($context["text_route"] ?? null);
        echo "</legend>
\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 42
        echo ($context["entry_name"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
        // line 44
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t";
        // line 45
        if (($context["error_name"] ?? null)) {
            // line 46
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<table id=\"route\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 53
        echo ($context["entry_store"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 54
        echo ($context["entry_route"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
        // line 59
        $context["route_row"] = 0;
        // line 60
        echo "\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_routes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_route"]) {
            // line 61
            echo "\t\t\t\t\t\t\t\t\t<tr id=\"route-row";
            echo ($context["route_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"layout_route[";
            // line 63
            echo ($context["route_row"] ?? null);
            echo "][store_id]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 64
            echo ($context["text_default"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 66
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 66) == twig_get_attribute($this->env, $this->source, $context["layout_route"], "store_id", [], "any", false, false, false, 66))) {
                    // line 67
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 67);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 67);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 69
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 69);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 69);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 71
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><input type=\"text\" name=\"layout_route[";
            // line 74
            echo ($context["route_row"] ?? null);
            echo "][route]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["layout_route"], "route", [], "any", false, false, false, 74);
            echo "\" placeholder=\"";
            echo ($context["entry_route"] ?? null);
            echo "\" class=\"form-control\"/></td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#route-row";
            // line 76
            echo ($context["route_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
            // line 81
            $context["route_row"] = (($context["route_row"] ?? null) + 1);
            // line 82
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"2\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"addRoute();\" data-toggle=\"tooltip\" title=\"";
        // line 88
        echo ($context["button_route_add"] ?? null);
        echo "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-circle\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t</table>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<legend>";
        // line 97
        echo ($context["text_module"] ?? null);
        echo "</legend>
\t\t\t\t\t\t";
        // line 98
        $context["module_row"] = 0;
        // line 99
        echo "\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 col-sm-12\">
\t\t\t\t\t\t\t\t<table id=\"module-column-left\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 104
        echo ($context["text_column_left"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 109
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 109) == "column_left")) {
                // line 110
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"layout_module[";
                // line 113
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 114
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 115
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 115);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 116
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 116)) {
                        // line 117
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 117) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 117))) {
                            // line 118
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 118);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 118);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 120
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 120);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 120);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 122
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 123
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 123));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 124
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 124) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 124))) {
                                // line 125
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 125);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 125);
                                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 127
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 127);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 127);
                                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 129
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 130
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 131
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 134
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 134);
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 135
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 135);
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 137
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 137);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#module-row";
                // line 140
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa fa-minus-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 147
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 148
                echo "\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 149
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control input-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 158
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 158);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 159
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 159)) {
                // line 160
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 160);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 160);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 162
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 162));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 163
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 163);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 163);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 165
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 166
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"addModule('column-left');\" data-toggle=\"tooltip\" title=\"";
        // line 170
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-4 col-sm-12\">
\t\t\t\t\t\t\t\t<table id=\"module-content-top\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 184
        echo ($context["text_content_top"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 189
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 189) == "content_top")) {
                // line 190
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"layout_module[";
                // line 193
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 194
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 195
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 195);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 196
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 196)) {
                        // line 197
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 197) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 197))) {
                            // line 198
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 198);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 198);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 200
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 200);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 200);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 202
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 203
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 203));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 204
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 204) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 204))) {
                                // line 205
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 205);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 205);
                                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 207
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 207);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 207);
                                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 209
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 210
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 211
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 213
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 214
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 214);
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 215
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 215);
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 217
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 217);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#module-row";
                // line 220
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa fa-minus-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 227
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 228
                echo "\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 229
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 230
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control input-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 237
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 238
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 238);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 239
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 239)) {
                // line 240
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 240);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 240);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 242
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 242));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 243
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 243);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 243);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 245
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 246
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"addModule('content-top');\" data-toggle=\"tooltip\" title=\"";
        // line 250
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t<table id=\"module-content-bottom\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 262
        echo ($context["text_content_bottom"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 266
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 267
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 267) == "content_bottom")) {
                // line 268
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"layout_module[";
                // line 271
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 272
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 273
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 273);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 274
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 274)) {
                        // line 275
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 275) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 275))) {
                            // line 276
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 276);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 276);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 278
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 278);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 278);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 280
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 281
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 281));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 282
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 282) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 282))) {
                                // line 283
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 283);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 283);
                                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 285
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 285);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 285);
                                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 287
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 288
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 289
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 291
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 292
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 292);
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 293
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 293);
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 295
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 295);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#module-row";
                // line 298
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa fa-minus-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 305
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 306
                echo "\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 307
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 308
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control input-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 315
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 316
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 316);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 317
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 317)) {
                // line 318
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 318);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 318);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 320
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 320));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 321
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 321);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 321);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 323
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 324
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 326
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"addModule('content-bottom');\" data-toggle=\"tooltip\" title=\"";
        // line 328
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 col-sm-12\">
\t\t\t\t\t\t\t\t<table id=\"module-column-right\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 342
        echo ($context["text_column_right"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 346
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 347
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 347) == "column_right")) {
                // line 348
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"layout_module[";
                // line 351
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 352
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 353
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 353);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 354
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 354)) {
                        // line 355
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 355) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 355))) {
                            // line 356
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 356);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 356);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 358
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 358);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 358);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 360
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 361
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 361));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 362
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 362) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 362))) {
                                // line 363
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 363);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 363);
                                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 365
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 365);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 365);
                                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 367
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 368
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 369
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 371
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 372
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 372);
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 373
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 373);
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 375
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 375);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#module-row";
                // line 378
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa fa-minus-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 385
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 386
                echo "\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 387
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 388
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control input-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 395
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 396
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 396);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 397
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 397)) {
                // line 398
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 398);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 398);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 400
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 400));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 401
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 401);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 401);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 403
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 404
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 406
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"addModule('column-right');\" data-toggle=\"tooltip\" title=\"";
        // line 408
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
\t<script type=\"text/javascript\">
\t\t<!--
\t\t// Reorderable drag-and-drop lists
\$('.row table tbody .input-group-btn').prepend('<span data-toggle=\"tooltip\" title=\" ";
        // line 427
        echo ($context["text_move"] ?? null);
        echo "\" class=\"btn btn-success btn-sm handle\"><i class=\"fa fa-hand-grab-o\"></i></span>');
\$('.row table tbody').sortable({
handle: '.handle',
chosenClass: 'handle-active',
onEnd: function (evt) {
var orderIndex = 1;
\$(\$(evt.item).parent().find('input[name*=\"sort_order\"]')).each(function () {
\$(this).val(orderIndex);
orderIndex++;
});
}
});
var route_row = ";
        // line 439
        echo ($context["route_row"] ?? null);
        echo ";

function addRoute() {
html = '<tr id=\"route-row' + route_row + '\">';
html += '  <td class=\"text-left\"><select name=\"layout_route[' + route_row + '][store_id]\" class=\"form-control\">';
html += '  <option value=\"0\"> ";
        // line 444
        echo ($context["text_default"] ?? null);
        echo "</option>';";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 445
            echo "html += '<option value=\" ";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 445);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 445), "js");
            echo "</option>';";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 446
        echo "html += '  </select></td>';
html += '  <td class=\"text-left\"><input type=\"text\" name=\"layout_route[' + route_row + '][route]\" value=\"\" placeholder=\" ";
        // line 447
        echo ($context["entry_route"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#route-row' + route_row + '\\').remove();\" data-toggle=\"tooltip\" title=\" ";
        // line 448
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
html += '</tr>';

\$('#route tbody').append(html);

route_row++;
}

var module_row = ";
        // line 456
        echo ($context["module_row"] ?? null);
        echo ";

function addModule(type) {
html = '<tr id=\"module-row' + module_row + '\">';
html += '  <td class=\"text-left\"><div class=\"input-group\"><select name=\"layout_module[' + module_row + '][code]\" class=\"form-control input-sm\">';";
        // line 460
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 461
            echo "html += '    <optgroup label=\" ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 461), "js");
            echo "\">';";
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 461)) {
                // line 462
                echo "html += '      <option value=\" ";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 462);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 462), "js");
                echo "</option>';
";
            } else {
                // line 464
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 464));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 465
                    echo "html += '      <option value=\" ";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 465);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 465), "js");
                    echo "</option>';";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 467
            echo "html += '    </optgroup>';";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 468
        echo "html += '  </select>';
html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][position]\" value=\"' + type.replace('-', '_') + '\" />';
html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][sort_order]\" value=\"\" />';
html += '  <div class=\"input-group-btn\"><span data-toggle=\"tooltip\" title=\" <?php echo \$text_move; ?>\" class=\"btn btn-success btn-sm handle\"><i class=\"fa fa-hand-grab-o\"></i></span><a href=\"\" target=\"_blank\" type=\"button\" data-toggle=\"tooltip\" title=\" ";
        // line 471
        echo ($context["button_edit"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a><button type=\"button\" onclick=\"\$(\\'#module-row' + module_row + '\\').remove();\" data-toggle=\"tooltip\" title=\" ";
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button></div></div></td>';
html += '</tr>';

\$('#module-' + type + ' tbody').append(html);

\$('#module-' + type + ' tbody select[name=\\'layout_module[' + module_row + '][code]\\']').val(\$('#module-' + type + ' tfoot select').val());

\$('#module-' + type + ' select[name*=\\'code\\']').trigger('change');

\$('#module-' + type + ' tbody input[name*=\\'sort_order\\']').each(function (i, element) {
\$(element).val(i);
});

module_row++;
}

\$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').delegate('select[name*=\\'code\\']', 'change', function () {
var part = this.value.split('.');

if (! part[1]) {
\$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token= ";
        // line 491
        echo ($context["user_token"] ?? null);
        echo "');
} else {
\$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token= ";
        // line 493
        echo ($context["user_token"] ?? null);
        echo "&module_id=' + part[1]);
}
});

\$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').trigger('change');
//
\t\t-->
\t</script>
\t\t</div>
\t\t";
        // line 502
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "design/layout_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1308 => 502,  1296 => 493,  1291 => 491,  1266 => 471,  1261 => 468,  1255 => 467,  1244 => 465,  1240 => 464,  1232 => 462,  1227 => 461,  1223 => 460,  1216 => 456,  1205 => 448,  1201 => 447,  1198 => 446,  1188 => 445,  1182 => 444,  1174 => 439,  1159 => 427,  1137 => 408,  1133 => 406,  1126 => 404,  1123 => 403,  1112 => 401,  1107 => 400,  1099 => 398,  1097 => 397,  1092 => 396,  1088 => 395,  1079 => 388,  1073 => 387,  1070 => 386,  1068 => 385,  1056 => 378,  1048 => 375,  1041 => 373,  1035 => 372,  1032 => 371,  1025 => 369,  1022 => 368,  1016 => 367,  1008 => 365,  1000 => 363,  997 => 362,  992 => 361,  989 => 360,  981 => 358,  973 => 356,  970 => 355,  968 => 354,  963 => 353,  959 => 352,  955 => 351,  948 => 348,  945 => 347,  941 => 346,  934 => 342,  917 => 328,  913 => 326,  906 => 324,  903 => 323,  892 => 321,  887 => 320,  879 => 318,  877 => 317,  872 => 316,  868 => 315,  859 => 308,  853 => 307,  850 => 306,  848 => 305,  836 => 298,  828 => 295,  821 => 293,  815 => 292,  812 => 291,  805 => 289,  802 => 288,  796 => 287,  788 => 285,  780 => 283,  777 => 282,  772 => 281,  769 => 280,  761 => 278,  753 => 276,  750 => 275,  748 => 274,  743 => 273,  739 => 272,  735 => 271,  728 => 268,  725 => 267,  721 => 266,  714 => 262,  699 => 250,  695 => 248,  688 => 246,  685 => 245,  674 => 243,  669 => 242,  661 => 240,  659 => 239,  654 => 238,  650 => 237,  641 => 230,  635 => 229,  632 => 228,  630 => 227,  618 => 220,  610 => 217,  603 => 215,  597 => 214,  594 => 213,  587 => 211,  584 => 210,  578 => 209,  570 => 207,  562 => 205,  559 => 204,  554 => 203,  551 => 202,  543 => 200,  535 => 198,  532 => 197,  530 => 196,  525 => 195,  521 => 194,  517 => 193,  510 => 190,  507 => 189,  503 => 188,  496 => 184,  479 => 170,  475 => 168,  468 => 166,  465 => 165,  454 => 163,  449 => 162,  441 => 160,  439 => 159,  434 => 158,  430 => 157,  421 => 150,  415 => 149,  412 => 148,  410 => 147,  398 => 140,  390 => 137,  383 => 135,  377 => 134,  374 => 133,  367 => 131,  364 => 130,  358 => 129,  350 => 127,  342 => 125,  339 => 124,  334 => 123,  331 => 122,  323 => 120,  315 => 118,  312 => 117,  310 => 116,  305 => 115,  301 => 114,  297 => 113,  290 => 110,  287 => 109,  283 => 108,  276 => 104,  269 => 99,  267 => 98,  263 => 97,  251 => 88,  244 => 83,  238 => 82,  236 => 81,  226 => 76,  217 => 74,  213 => 72,  207 => 71,  199 => 69,  191 => 67,  188 => 66,  184 => 65,  180 => 64,  176 => 63,  170 => 61,  165 => 60,  163 => 59,  155 => 54,  151 => 53,  144 => 48,  138 => 46,  136 => 45,  130 => 44,  125 => 42,  120 => 40,  115 => 38,  109 => 35,  103 => 31,  96 => 27,  92 => 25,  90 => 24,  84 => 20,  73 => 17,  70 => 16,  66 => 15,  61 => 13,  52 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "design/layout_form.twig", "");
    }
}

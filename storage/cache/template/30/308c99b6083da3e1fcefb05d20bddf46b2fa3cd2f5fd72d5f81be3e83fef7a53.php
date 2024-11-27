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

/* extension/extension/payment.twig */
class __TwigTemplate_22db164b5f6476fcbb1acd53e65ab71c4175eacae66080456cc1c3a7a037e771 extends \Twig\Template
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
        echo "<fieldset>
  ";
        // line 2
        if (($context["error_warning"] ?? null)) {
            // line 3
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
  ";
        }
        // line 7
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 8
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
  ";
        }
        // line 12
        echo "  <legend>";
        echo ($context["heading_title"] ?? null);
        echo "</legend>
  ";
        // line 13
        if ( !twig_test_empty(($context["hiden"] ?? null))) {
            // line 14
            echo "    <div class=\"alert alert-info\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["text_hide_payment"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
   ";
        }
        // line 18
        echo "  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-left\">";
        // line 22
        echo ($context["column_name"] ?? null);
        echo "</td>
          <td></td>
          <td class=\"text-left\">";
        // line 24
        echo ($context["column_status"] ?? null);
        echo "</td>
          <td class=\"text-right\">";
        // line 25
        echo ($context["column_sort_order"] ?? null);
        echo "</td>
          <td class=\"text-right\">";
        // line 26
        echo ($context["column_action"] ?? null);
        echo "</td>
        </tr>
      </thead>
      <tbody>
        ";
        // line 30
        if (($context["extensions"] ?? null)) {
            // line 31
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 32
                echo "            <tr>
              <td class=\"text-left\">";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 33);
                echo "</td>
              <td class=\"text-center\">";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "link", [], "any", false, false, false, 34);
                echo "</td>
              <td class=\"text-left\">";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "status", [], "any", false, false, false, 35);
                echo "</td>
              <td class=\"text-right\">";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "sort_order", [], "any", false, false, false, 36);
                echo "</td>
              <td class=\"text-right\">";
                // line 37
                if (twig_get_attribute($this->env, $this->source, $context["extension"], "installed", [], "any", false, false, false, 37)) {
                    // line 38
                    echo "                  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "edit", [], "any", false, false, false, 38);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_edit"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                ";
                } else {
                    // line 40
                    echo "                  <button type=\"button\" class=\"btn btn-primary\" disabled=\"disabled\"><i class=\"fa fa-pencil\"></i></button>
                ";
                }
                // line 42
                echo "                ";
                if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "installed", [], "any", false, false, false, 42)) {
                    // line 43
                    echo "                  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "install", [], "any", false, false, false, 43);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_install"] ?? null);
                    echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></a>
                ";
                } else {
                    // line 45
                    echo "                  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "uninstall", [], "any", false, false, false, 45);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_uninstall"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>
                ";
                }
                // line 46
                echo "</td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "        ";
        } else {
            // line 50
            echo "          <tr>
            <td class=\"text-center\" colspan=\"5\">";
            // line 51
            echo ($context["text_no_results"] ?? null);
            echo "</td>
          </tr>
        ";
        }
        // line 54
        echo "      </tbody>
    </table>
  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "extension/extension/payment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 54,  175 => 51,  172 => 50,  169 => 49,  161 => 46,  153 => 45,  145 => 43,  142 => 42,  138 => 40,  130 => 38,  128 => 37,  124 => 36,  120 => 35,  116 => 34,  112 => 33,  109 => 32,  104 => 31,  102 => 30,  95 => 26,  91 => 25,  87 => 24,  82 => 22,  76 => 18,  68 => 14,  66 => 13,  61 => 12,  53 => 8,  50 => 7,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/extension/payment.twig", "");
    }
}

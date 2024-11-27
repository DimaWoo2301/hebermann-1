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

/* default/template/extension/module/featured.twig */
class __TwigTemplate_ce411a8d55a96f207317de8028d9d67454c63c6c59831c08826156331e97cc3b extends \Twig\Template
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
        if (($context["products"] ?? null)) {
            // line 2
            echo "\t<div class=\"row\">
\t\t";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 4
                echo "\t\t\t<div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t<div class=\"image\"><a href=\"";
                // line 6
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 6);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 6);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 6);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 6);
                echo "\" class=\"img-responsive\" /></a></div>
\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t<h4><a href=\"";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 8);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 8);
                echo "</a></h4>
\t\t\t\t\t\t<p>";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 9);
                echo "</p>
\t\t\t\t\t\t";
                // line 10
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 10)) {
                    // line 11
                    echo "\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t";
                    // line 12
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 13
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 13) < $context["i"])) {
                            // line 14
                            echo "\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 16
                            echo "\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 18
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 19
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 21
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 21)) {
                    // line 22
                    echo "\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t";
                    // line 23
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 23)) {
                        // line 24
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 24);
                        echo "
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 26
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 26);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 26);
                        echo "</span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 28
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 28)) {
                        // line 29
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 29);
                        echo "</span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 31
                    echo "\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
                }
                // line 33
                echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t<button type=\"button\" onclick=\"cart.add('";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 35);
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 40,  142 => 35,  138 => 33,  134 => 31,  126 => 29,  123 => 28,  115 => 26,  109 => 24,  107 => 23,  104 => 22,  101 => 21,  97 => 19,  91 => 18,  87 => 16,  83 => 14,  80 => 13,  76 => 12,  73 => 11,  71 => 10,  67 => 9,  61 => 8,  50 => 6,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/featured.twig", "");
    }
}

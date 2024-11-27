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
class __TwigTemplate_5cc563c3a52b6a7d88051c0c8859d3ad14ca5ed1cf9730b0055ba479443d088b extends \Twig\Template
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
            echo "    <div class=\"swiper-button-wrapper\">
\t\t<div class=\"swiper-button-prev-type1\">
\t\t<img
\t\t\tsrc=\"../../assets/img/arrow_swagger.png\"
\t\t\talt=\"Стрелка\"
\t\t/>
\t\t</div>
\t\t<div class=\"swiper-button-next-type1\">
\t\t<img
\t\t\tsrc=\"../../assets/img/arrow_swagger.png\"
\t\t\talt=\"Стрелка\"
\t\t/>
\t\t</div>
\t</div>
\t
\t<div class=\"swiper mySwiper\">
        <div class=\"swiper-wrapper\">
            ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 20
                echo "                <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 20);
                echo "\" class=\"swiper-slide\">
                    <div class=\"swiper_slide_content\">
                        <img src=\"";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 22);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 22);
                echo "\" />
                        <span class=\"swiper_slide_content_discription\">";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 23);
                echo "</span>
                        <span class=\"swiper_slide_content_model\">";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 24);
                echo "</span>
                        <span class=\"swiper_slide_content_price\">
                            ";
                // line 26
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 26)) {
                    // line 27
                    echo "                                ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 27);
                    echo "
                            ";
                } else {
                    // line 29
                    echo "                                <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 29);
                    echo "</span>
                            ";
                }
                // line 31
                echo "                        </span>
                    </div>
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        </div>
    </div>
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
        return array (  106 => 35,  97 => 31,  91 => 29,  85 => 27,  83 => 26,  78 => 24,  74 => 23,  68 => 22,  62 => 20,  58 => 19,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/featured.twig", "");
    }
}

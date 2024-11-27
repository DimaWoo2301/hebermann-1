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
class __TwigTemplate_8a704a778750cc27c8a9f28346427c9b5228784080f145c4b78276f0384cb200 extends \Twig\Template
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
\t\t\t<svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M8.79644 15.5465C8.9012 15.442 8.98432 15.3178 9.04104 15.1811C9.09775 15.0445 9.12695 14.8979 9.12695 14.75C9.12695 14.602 9.09775 14.4555 9.04104 14.3188C8.98432 14.1821 8.9012 14.058 8.79644 13.9535L2.84068 7.99996L8.79644 2.04646C8.90103 1.94186 8.984 1.81768 9.04061 1.68102C9.09722 1.54436 9.12636 1.39788 9.12636 1.24996C9.12636 1.10203 9.09722 0.955557 9.04061 0.818894C8.984 0.68223 8.90103 0.558054 8.79644 0.453457C8.69184 0.348859 8.56766 0.265887 8.431 0.209279C8.29433 0.152671 8.14786 0.123535 7.99994 0.123535C7.85201 0.123535 7.70554 0.152671 7.56887 0.209279C7.43221 0.265887 7.30803 0.348859 7.20343 0.453457L0.453435 7.20346C0.348668 7.30796 0.265546 7.43211 0.208832 7.56878C0.152117 7.70546 0.122925 7.85198 0.122925 7.99996C0.122925 8.14793 0.152117 8.29446 0.208832 8.43113C0.265546 8.56781 0.348668 8.69195 0.453435 8.79646L7.20343 15.5465C7.30794 15.6512 7.43208 15.7343 7.56876 15.7911C7.70544 15.8478 7.85196 15.877 7.99994 15.877C8.14791 15.877 8.29443 15.8478 8.43111 15.7911C8.56779 15.7343 8.69193 15.6512 8.79644 15.5465Z\" fill=\"black\"></path>
\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M15.875 8C15.875 7.70163 15.7565 7.41548 15.5455 7.20451C15.3345 6.99353 15.0484 6.875 14.75 6.875H3.5C3.20163 6.875 2.91548 6.99353 2.70451 7.20451C2.49353 7.41548 2.375 7.70163 2.375 8C2.375 8.29837 2.49353 8.58452 2.70451 8.7955C2.91548 9.00647 3.20163 9.125 3.5 9.125H14.75C15.0484 9.125 15.3345 9.00647 15.5455 8.7955C15.7565 8.58452 15.875 8.29837 15.875 8Z\" fill=\"black\"></path>
\t\t\t</svg>
\t\t</div>
\t\t<div class=\"swiper-button-next-type1\">
\t\t\t<svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M7.20356 15.5465C7.0988 15.442 7.01568 15.3178 6.95896 15.1811C6.90225 15.0445 6.87305 14.8979 6.87305 14.75C6.87305 14.602 6.90225 14.4555 6.95896 14.3188C7.01568 14.1821 7.0988 14.058 7.20356 13.9535L13.1593 7.99996L7.20356 2.04646C7.09897 1.94186 7.016 1.81768 6.95939 1.68102C6.90278 1.54436 6.87364 1.39788 6.87364 1.24996C6.87364 1.10203 6.90278 0.955557 6.95939 0.818894C7.016 0.68223 7.09897 0.558054 7.20356 0.453457C7.30816 0.348859 7.43234 0.265887 7.569 0.209279C7.70567 0.152671 7.85214 0.123535 8.00006 0.123535C8.14799 0.123535 8.29446 0.152671 8.43113 0.209279C8.56779 0.265887 8.69197 0.348859 8.79657 0.453457L15.5466 7.20346C15.6513 7.30796 15.7345 7.43211 15.7912 7.56878C15.8479 7.70546 15.8771 7.85198 15.8771 7.99996C15.8771 8.14793 15.8479 8.29446 15.7912 8.43113C15.7345 8.56781 15.6513 8.69195 15.5466 8.79646L8.79657 15.5465C8.69206 15.6512 8.56792 15.7343 8.43124 15.7911C8.29456 15.8478 8.14804 15.877 8.00006 15.877C7.85209 15.877 7.70557 15.8478 7.56889 15.7911C7.43221 15.7343 7.30807 15.6512 7.20356 15.5465Z\" fill=\"black\"/>
\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0.125 8C0.125 7.70163 0.243526 7.41548 0.454504 7.20451C0.665483 6.99353 0.951632 6.875 1.25 6.875H12.5C12.7984 6.875 13.0845 6.99353 13.2955 7.20451C13.5065 7.41548 13.625 7.70163 13.625 8C13.625 8.29837 13.5065 8.58452 13.2955 8.7955C13.0845 9.00647 12.7984 9.125 12.5 9.125H1.25C0.951632 9.125 0.665483 9.00647 0.454504 8.7955C0.243526 8.58452 0.125 8.29837 0.125 8Z\" fill=\"black\"/>
\t\t\t</svg>
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

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
class __TwigTemplate_25b491bd6ec0d267ae157d61812e2ce4ec356235d2073e5372d9fd3a5752e9ea extends \Twig\Template
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
            echo "    <div class=\"swiper mySwiper\">
        <div class=\"swiper-wrapper\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 5
                echo "                <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 5);
                echo "\" class=\"swiper-slide\">
                    <div class=\"swiper_slide_content\">
                        <img src=\"";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 7);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 7);
                echo "\" />
                        <span class=\"swiper_slide_content_discription\">";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 8);
                echo "</span>
                        <span class=\"swiper_slide_content_model\">";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 9);
                echo "</span>
                        <span class=\"swiper_slide_content_price\">
                            ";
                // line 11
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 11)) {
                    // line 12
                    echo "                                ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 12);
                    echo "
                            ";
                } else {
                    // line 14
                    echo "                                <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 14);
                    echo "</span>
                            ";
                }
                // line 16
                echo "                        </span>
                    </div>
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        </div>
    </div>
";
        }
        // line 23
        echo "
<link rel=\"stylesheet\" href=\"https://unpkg.com/swiper/swiper-bundle.min.css\">


<script src=\"https://unpkg.com/swiper/swiper-bundle.min.js\"></script>
<script>
    const swiper = new Swiper('.mySwiper', {
        slidesPerView: 4,
        spaceBetween: 20,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>
";
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
        return array (  96 => 23,  91 => 20,  82 => 16,  76 => 14,  70 => 12,  68 => 11,  63 => 9,  59 => 8,  53 => 7,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/featured.twig", "");
    }
}

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

/* default/template/common/home.twig */
class __TwigTemplate_9e0906dbf068b938315cea0adca0f6e9228b129bdcf07feecbf810744a3dcd55 extends \Twig\Template
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
        echo " ";
        echo ($context["header"] ?? null);
        echo "
<main style=\"position: relative\" class=\"home\">

<div class=\"container\">
        <div class=\"home_main_image_video\">
          <div class=\"home_main_video1\">
            <video muted=\"\" id=\"fridge-video1\">
              <source src=\"/image/catalog/videoHolodos.mp4\" type=\"video/mp4\">
            </video>
          </div>
          <div class=\"home_main_video2\">
            <video muted=\"\" id=\"fridge-video2\">
              <source src=\"/image/catalog/videoPosudomoika.mp4\" type=\"video/mp4\">
            </video>
          </div>
          <div class=\"home_main_video3\">
            <video muted=\"\" id=\"fridge-video3\">
              <source src=\"/image/catalog/videoMicrowave.mp4\" type=\"video/mp4\">
            </video>
          </div>
        </div>
        
        <div class=\"home_wrapper_category\">
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 25
            echo "                <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 25);
            echo "\" class=\"home_category_block\">
                    <img src=\"";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 26);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 26);
            echo "\">
                    <div class=\"home_category_block_inside\">
                        <h2>";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 28);
            echo "</h2>
                        <button>
                            <span>Смотреть</span>
                              <svg width=\"7\" height=\"13\" viewBox=\"0 0 7 13\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path d=\"M1 11.5L6 6.5L1 1.5\" stroke=\"white\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                              </svg>
                        </button>
                    </div>
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </div>


      ";
        // line 41
        echo ($context["content_bottom"] ?? null);
        echo "



        <section class=\"section_market\">
          <h2>Где купить технику Hebermann</h2>
          <div>
            <a href=\"#\">
              <img src=\"../../assets/img/yndexMarcet.png\" alt=\"Яндекс Маркет\"></a>
            <a href=\"#\"> <img src=\"../../assets/img/ozon.png\" alt=\"Ozon\"></a>
            <a href=\"#\">
              <img src=\"../../assets/img/wildberries.png\" alt=\"Wildberries\"></a>
            <a href=\"#\">
              <img src=\"../../assets/img/leroyMerlin.png\" alt=\"leroy Merlin\"></a>
            <a href=\"#\">
              <img src=\"../../assets/img/megaMarket.png\" alt=\"Mega Market\"></a>
          </div>
        </section>
      </div>

</main>
";
        // line 62
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 62,  101 => 41,  96 => 38,  80 => 28,  73 => 26,  68 => 25,  64 => 24,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}

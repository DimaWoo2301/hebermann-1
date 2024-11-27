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
class __TwigTemplate_72246020928b1e273511e7b05a10a6c9fdb0e99d2a15c04173d02dba224b761b extends \Twig\Template
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
                            <img src=\"catalog/view/theme/default/image/arroy_right.png\" alt=\"Стрелка\">
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
        // line 39
        echo "        </div>





        <section class=\"section_ready_solution\">
          <div class=\"section_ready_solution_wrapper\">
            <img src=\"../../assets/img/image_home2.png\" alt=\"Духовая печь\">
            <div class=\"section_ready_solution_wrapper_info\">
              <h3>Готовое решение</h3>
              <p class=\"section_ready_solution_wrapper_info_text\">
                Lorem ipsum dolor sit amet consectetur. Cursus vulputate dui
                quam amet viverra morbi. Semper purus eu a pharetra morbi. Odio
                augue massa volutpat ullamcorper libero pulvinar.Cursus
                vulputate dui quam amet viverra morbi. Semper purus eu a
                pharetra morbi.
              </p>
              <p class=\"section_ready_solution_wrapper_info_mobile_text\">
                Lorem ipsum dolor sit amet consectetur. Cursus vulputate dui
                quam amet viverra morbi. Semper purus eu a pharetra morbi.
              </p>
              <div>
                <div class=\"swiper-button-wrapper\">
                  <div class=\"swiper-button-prev-type1 swiper-button-disabled\" tabindex=\"-1\" role=\"button\" aria-label=\"Previous slide\" aria-controls=\"swiper-wrapper-dcca3c320c81c400\" aria-disabled=\"true\">
                    <img src=\"../../assets/img/arrow_swagger.png\" alt=\"Стрелка\">
                  </div>
                  <div class=\"swiper-button-next-type1\" tabindex=\"0\" role=\"button\" aria-label=\"Next slide\" aria-controls=\"swiper-wrapper-dcca3c320c81c400\" aria-disabled=\"false\">
                    <img src=\"../../assets/img/arrow_swagger.png\" alt=\"Стрелка\">
                  </div>
                </div>
                <div class=\"swiper mySwiper swiper-initialized swiper-horizontal swiper-free-mode swiper-backface-hidden\">
                  <div class=\"swiper-wrapper\" id=\"swiper-wrapper-dcca3c320c81c400\" aria-live=\"polite\" style=\"transform: translate3d(0px, 0px, 0px);\">
                    <a href=\"#\" class=\"swiper-slide swiper-slide-active\" role=\"group\" aria-label=\"1 / 6\" style=\"width: 222.083px; margin-right: 10px;\">
                      <div class=\"swiper_slide_content\">
                        <img src=\"../../assets/img/test_product.png\" alt=\"Продукт из корзины\">
                        <span class=\"swiper_slide_content_discription\">Духовой шкаф электрический</span>
                        <span class=\"swiper_slide_content_model\">HBBO 6004.1 B</span>
                        <span class=\"swiper_slide_content_price\">18 689&nbsp;₽</span>
                      </div>
                    </a>
                    <a href=\"#\" class=\"swiper-slide swiper-slide-next\" role=\"group\" aria-label=\"2 / 6\" style=\"width: 222.083px; margin-right: 10px;\">
                      <div class=\"swiper_slide_content\">
                        <img src=\"../../assets/img/test_product.png\" alt=\"Продукт из корзины\">
                        <span class=\"swiper_slide_content_discription\">Духовой шкаф электрический</span>
                        <span class=\"swiper_slide_content_model\">HBBO 6004.1 B</span>
                        <span class=\"swiper_slide_content_price\">18 689&nbsp;₽</span>
                      </div>
                    </a>
                    <a href=\"#\" class=\"swiper-slide\" role=\"group\" aria-label=\"3 / 6\" style=\"width: 222.083px; margin-right: 10px;\">
                      <div class=\"swiper_slide_content\">
                        <img src=\"../../assets/img/test_product.png\" alt=\"Продукт из корзины\">
                        <span class=\"swiper_slide_content_discription\">Духовой шкаф электрический</span>
                        <span class=\"swiper_slide_content_model\">HBBO 6004.1 B</span>
                        <span class=\"swiper_slide_content_price\">18 689&nbsp;₽</span>
                      </div>
                    </a>
                    <a href=\"#\" class=\"swiper-slide\" role=\"group\" aria-label=\"4 / 6\" style=\"width: 222.083px; margin-right: 10px;\">
                      <div class=\"swiper_slide_content\">
                        <img src=\"../../assets/img/test_product.png\" alt=\"Продукт из корзины\">
                        <span class=\"swiper_slide_content_discription\">Духовой шкаф электрический</span>
                        <span class=\"swiper_slide_content_model\">HBBO 6004.1 B</span>
                        <span class=\"swiper_slide_content_price\">18 689&nbsp;₽</span>
                      </div>
                    </a>
                    <a href=\"#\" class=\"swiper-slide\" role=\"group\" aria-label=\"5 / 6\" style=\"width: 222.083px; margin-right: 10px;\">
                      <div class=\"swiper_slide_content\">
                        <img src=\"../../assets/img/test_product.png\" alt=\"Продукт из корзины\">
                        <span class=\"swiper_slide_content_discription\">Духовой шкаф электрический</span>
                        <span class=\"swiper_slide_content_model\">HBBO 6004.1 B</span>
                        <span class=\"swiper_slide_content_price\">18 689&nbsp;₽</span>
                      </div>
                    </a>
                    <a href=\"#\" class=\"swiper-slide\" role=\"group\" aria-label=\"6 / 6\" style=\"width: 222.083px; margin-right: 10px;\">
                      <div class=\"swiper_slide_content\">
                        <img src=\"../../assets/img/test_product.png\" alt=\"Продукт из корзины\">
                        <span class=\"swiper_slide_content_discription\">Духовой шкаф электрический</span>
                        <span class=\"swiper_slide_content_model\">HBBO 6004.1 B</span>
                        <span class=\"swiper_slide_content_price\">18 689&nbsp;₽</span>
                      </div>
                    </a>
                  </div>
                <span class=\"swiper-notification\" aria-live=\"assertive\" aria-atomic=\"true\"></span></div>
              </div>
            </div>
          </div>
        </section>
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
        // line 143
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
        return array (  203 => 143,  97 => 39,  80 => 28,  73 => 26,  68 => 25,  64 => 24,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}

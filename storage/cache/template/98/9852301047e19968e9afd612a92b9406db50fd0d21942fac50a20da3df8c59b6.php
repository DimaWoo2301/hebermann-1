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

/* default/template/product/category.twig */
class __TwigTemplate_c16d6cb24d0fb73c00d72549b21c44155cb9fce901a286842f7746481a390ebb extends \Twig\Template
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
        echo "
  <div class=\"header_bottom\">
  <div class=\"container\">
  
    <div class=\"bread_crumbs\">
        <span>Каталог бытовой техники</span>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 8)) {
                // line 9
                echo "                <span>";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
                echo "</span>
            ";
            } else {
                // line 11
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11)) {
                    // line 12
                    echo "                    <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
                    echo "</a>
                ";
                } else {
                    // line 14
                    echo "                    <span>";
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
                    echo "</span>
                ";
                }
                // line 16
                echo "                <svg width=\"8\" height=\"8\" viewBox=\"0 0 8 8\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M1.092 7.81C1.008 7.81 0.938 7.782 0.882 7.726C0.826 7.67 0.798 7.6 0.798 7.516V6.998C0.798 6.87667 0.816667 6.78333 0.854 6.718C0.891333 6.64333 0.956667 6.55933 1.05 6.466L3.192 4.394L1.05 2.322C0.956667 2.22867 0.891333 2.14467 0.854 2.07C0.816667 1.99533 0.798 1.902 0.798 1.79V1.272C0.798 1.188 0.826 1.118 0.882 1.062C0.938 1.006 1.008 0.978 1.092 0.978C1.176 0.978 1.27867 1.02933 1.4 1.132L4.102 3.75C4.25133 3.89933 4.326 4.058 4.326 4.226V4.562C4.326 4.73 4.25133 4.88867 4.102 5.038L1.4 7.656C1.26 7.75867 1.15733 7.81 1.092 7.81ZM4.676 7.81C4.592 7.81 4.522 7.782 4.466 7.726C4.41 7.67 4.382 7.6 4.382 7.516V6.998C4.382 6.87667 4.40067 6.78333 4.438 6.718C4.47533 6.64333 4.54067 6.55933 4.634 6.466L6.776 4.394L4.634 2.322C4.54067 2.22867 4.47533 2.14467 4.438 2.07C4.40067 1.99533 4.382 1.902 4.382 1.79V1.272C4.382 1.188 4.41 1.118 4.466 1.062C4.522 1.006 4.592 0.978 4.676 0.978C4.76 0.978 4.86267 1.02933 4.984 1.132L7.686 3.75C7.81667 3.88067 7.89133 4.03933 7.91 4.226V4.562C7.89133 4.74867 7.81667 4.90733 7.686 5.038L4.984 7.656C4.844 7.75867 4.74133 7.81 4.676 7.81Z\" fill=\"#797979\"></path>
                </svg>
            ";
            }
            // line 20
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </div>


    <div class=\"header_wrapper_bottom\">
        <h1>";
        // line 25
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        <div class=\"header_wrapper_bottom_input\">
            <span>Функции:</span>
            <div>
                <input type=\"text\" value=\"Показать все\" id=\"myInputCategory\">
                <svg width=\"9\" height=\"7\" viewBox=\"0 0 9 7\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path d=\"M4.16034 6.2593C4.19819 6.31426 4.24883 6.35919 4.3079 6.39024C4.36697 6.42128 4.43271 6.4375 4.49944 6.4375C4.56618 6.4375 4.63191 6.42128 4.69098 6.39024C4.75006 6.35919 4.8007 6.31426 4.83854 6.2593L8.55133 0.897168C8.59431 0.835321 8.61951 0.76288 8.6242 0.687717C8.62889 0.612554 8.61289 0.537544 8.57794 0.470835C8.54298 0.404126 8.49041 0.348271 8.42594 0.309337C8.36146 0.270404 8.28755 0.249882 8.21223 0.250001H0.78665C0.711505 0.250311 0.637865 0.271097 0.573652 0.310124C0.509438 0.34915 0.457079 0.40494 0.422206 0.471495C0.387333 0.538049 0.371265 0.61285 0.375731 0.687852C0.380196 0.762854 0.405025 0.83522 0.447549 0.897168L4.16034 6.2593Z\" fill=\"black\"></path>
                </svg>
                <div id=\"dropdownCategory\" class=\"dropdown_content\">
                    <p>Показать все</p>
                    <p>Встраиваемые</p>
                    <p>Купольные</p>
                    <p>Наклонные</p>
                    <p>Плоские</p>
                </div>
            </div>
            <div>
                <input type=\"text\" value=\"По названию\" id=\"myInputPrice\">
                <svg width=\"9\" height=\"7\" viewBox=\"0 0 9 7\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path d=\"M4.16034 6.2593C4.19819 6.31426 4.24883 6.35919 4.3079 6.39024C4.36697 6.42128 4.43271 6.4375 4.49944 6.4375C4.56618 6.4375 4.63191 6.42128 4.69098 6.39024C4.75006 6.35919 4.8007 6.31426 4.83854 6.2593L8.55133 0.897168C8.59431 0.835321 8.61951 0.76288 8.6242 0.687717C8.62889 0.612554 8.61289 0.537544 8.57794 0.470835C8.54298 0.404126 8.49041 0.348271 8.42594 0.309337C8.36146 0.270404 8.28755 0.249882 8.21223 0.250001H0.78665C0.711505 0.250311 0.637865 0.271097 0.573652 0.310124C0.509438 0.34915 0.457079 0.40494 0.422206 0.471495C0.387333 0.538049 0.371265 0.61285 0.375731 0.687852C0.380196 0.762854 0.405025 0.83522 0.447549 0.897168L4.16034 6.2593Z\" fill=\"black\"></path>
                </svg>
                <div id=\"dropdownPrice\" class=\"dropdown_content\">
                    <p>По названию</p>
                    <p>Дороже</p>
                    <p>Дешевле</p>
                </div>
            </div>
            <div>
                <button class=\"header_wrapper_bottom_input_button\">
                    <span>Фильтры</span>
                    <svg width=\"16\" height=\"18\" viewBox=\"0 0 16 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                      <path d=\"M5 1.99999C4.73478 1.99999 4.48043 2.10535 4.29289 2.29289C4.10536 2.48042 4 2.73478 4 2.99999C4 3.26521 4.10536 3.51956 4.29289 3.7071C4.48043 3.89464 4.73478 3.99999 5 3.99999C5.26522 3.99999 5.51957 3.89464 5.70711 3.7071C5.89464 3.51956 6 3.26521 6 2.99999C6 2.73478 5.89464 2.48042 5.70711 2.29289C5.51957 2.10535 5.26522 1.99999 5 1.99999ZM2.17 1.99999C2.3766 1.41446 2.75974 0.907427 3.2666 0.548783C3.77346 0.190139 4.37909 -0.00245667 5 -0.00245667C5.62091 -0.00245667 6.22654 0.190139 6.7334 0.548783C7.24026 0.907427 7.6234 1.41446 7.83 1.99999H15C15.2652 1.99999 15.5196 2.10535 15.7071 2.29289C15.8946 2.48042 16 2.73478 16 2.99999C16 3.26521 15.8946 3.51956 15.7071 3.7071C15.5196 3.89464 15.2652 3.99999 15 3.99999H7.83C7.6234 4.58553 7.24026 5.09256 6.7334 5.4512C6.22654 5.80985 5.62091 6.00244 5 6.00244C4.37909 6.00244 3.77346 5.80985 3.2666 5.4512C2.75974 5.09256 2.3766 4.58553 2.17 3.99999H1C0.734784 3.99999 0.48043 3.89464 0.292893 3.7071C0.105357 3.51956 0 3.26521 0 2.99999C0 2.73478 0.105357 2.48042 0.292893 2.29289C0.48043 2.10535 0.734784 1.99999 1 1.99999H2.17ZM11 7.99999C10.7348 7.99999 10.4804 8.10535 10.2929 8.29289C10.1054 8.48042 10 8.73478 10 8.99999C10 9.26521 10.1054 9.51956 10.2929 9.7071C10.4804 9.89464 10.7348 9.99999 11 9.99999C11.2652 9.99999 11.5196 9.89464 11.7071 9.7071C11.8946 9.51956 12 9.26521 12 8.99999C12 8.73478 11.8946 8.48042 11.7071 8.29289C11.5196 8.10535 11.2652 7.99999 11 7.99999ZM8.17 7.99999C8.3766 7.41446 8.75974 6.90743 9.2666 6.54878C9.77346 6.19014 10.3791 5.99754 11 5.99754C11.6209 5.99754 12.2265 6.19014 12.7334 6.54878C13.2403 6.90743 13.6234 7.41446 13.83 7.99999H15C15.2652 7.99999 15.5196 8.10535 15.7071 8.29289C15.8946 8.48042 16 8.73478 16 8.99999C16 9.26521 15.8946 9.51956 15.7071 9.7071C15.5196 9.89464 15.2652 9.99999 15 9.99999H13.83C13.6234 10.5855 13.2403 11.0926 12.7334 11.4512C12.2265 11.8098 11.6209 12.0024 11 12.0024C10.3791 12.0024 9.77346 11.8098 9.2666 11.4512C8.75974 11.0926 8.3766 10.5855 8.17 9.99999H1C0.734784 9.99999 0.48043 9.89464 0.292893 9.7071C0.105357 9.51956 0 9.26521 0 8.99999C0 8.73478 0.105357 8.48042 0.292893 8.29289C0.48043 8.10535 0.734784 7.99999 1 7.99999H8.17ZM5 14C4.73478 14 4.48043 14.1054 4.29289 14.2929C4.10536 14.4804 4 14.7348 4 15C4 15.2652 4.10536 15.5196 4.29289 15.7071C4.48043 15.8946 4.73478 16 5 16C5.26522 16 5.51957 15.8946 5.70711 15.7071C5.89464 15.5196 6 15.2652 6 15C6 14.7348 5.89464 14.4804 5.70711 14.2929C5.51957 14.1054 5.26522 14 5 14ZM2.17 14C2.3766 13.4145 2.75974 12.9074 3.2666 12.5488C3.77346 12.1901 4.37909 11.9975 5 11.9975C5.62091 11.9975 6.22654 12.1901 6.7334 12.5488C7.24026 12.9074 7.6234 13.4145 7.83 14H15C15.2652 14 15.5196 14.1054 15.7071 14.2929C15.8946 14.4804 16 14.7348 16 15C16 15.2652 15.8946 15.5196 15.7071 15.7071C15.5196 15.8946 15.2652 16 15 16H7.83C7.6234 16.5855 7.24026 17.0926 6.7334 17.4512C6.22654 17.8098 5.62091 18.0024 5 18.0024C4.37909 18.0024 3.77346 17.8098 3.2666 17.4512C2.75974 17.0926 2.3766 16.5855 2.17 16H1C0.734784 16 0.48043 15.8946 0.292893 15.7071C0.105357 15.5196 0 15.2652 0 15C0 14.7348 0.105357 14.4804 0.292893 14.2929C0.48043 14.1054 0.734784 14 1 14H2.17Z\" fill=\"white\"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

  </div>
</div>

  <main class=\"catalog_product\">
    <div class=\"container\">
        ";
        // line 68
        if (($context["thumb_image2"] ?? null)) {
            // line 69
            echo "        <img src=\"";
            echo ($context["thumb_image2"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" class=\"home_main_image\" />
        ";
        }
        // line 71
        echo "
        ";
        // line 72
        if (($context["categories"] ?? null)) {
            // line 73
            echo "            <div class=\"catalog_product_wrapper_catalogs\">
                ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 75
                echo "                    <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 75);
                echo "\" class=\"catalog_product_catalogs_item\">
                        <img src=\"";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 76);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 76);
                echo "\">
                        <span>";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 77);
                echo "</span>
                    </a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "            </div>
        ";
        }
        // line 82
        echo "


    </div>
  </main>




";
        // line 91
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "default/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 91,  207 => 82,  203 => 80,  194 => 77,  188 => 76,  183 => 75,  179 => 74,  176 => 73,  174 => 72,  171 => 71,  163 => 69,  161 => 68,  115 => 25,  109 => 21,  95 => 20,  89 => 16,  83 => 14,  75 => 12,  72 => 11,  66 => 9,  63 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/category.twig", "");
    }
}

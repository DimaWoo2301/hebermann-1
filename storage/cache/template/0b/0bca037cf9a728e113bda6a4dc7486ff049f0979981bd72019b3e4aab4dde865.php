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

/* default/template/common/menu.twig */
class __TwigTemplate_782ba54e8fa815a4925e33152260930a9f3ff3db7f971fab35fe44a2ab35f056 extends \Twig\Template
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
        echo "<div id=\"modalCategory\" class=\"modal_category\">
  <div class=\"container container_modal_mobile\">
    <div class=\"modal_category_content\">
      <span class=\"close_modal_category\"></span>
      ";
        // line 5
        if (($context["categories"] ?? null)) {
            // line 6
            echo "      <div id=\"toggleElementCategory\" class=\"category_block\">
        <div id=\"categories\" class=\"category_block_title\">
          <ul>
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 10
                echo "            <li class=\"category ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 10) == 1)) {
                    echo "category_header_active";
                }
                echo "\" id=\"";
                echo twig_replace_filter(twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 10)), [" " => "-"]);
                echo "-category\" data-target=\"subcategory-";
                echo twig_replace_filter(twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 10)), [" " => "-"]);
                echo "\">
              <span>";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 11);
                echo "</span>
              <svg width=\"7\" height=\"13\" viewBox=\"0 0 7 13\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" style=\"stroke: black;\">
                <path d=\"M1 1.5L6 6.5L1 11.5\" stroke=\"black\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></path>
              </svg>
            </li>
            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "          </ul>
          <div class=\"mobile_modal_links\">
            <ul>
              <li><a href=\"../about/about.html\">О бренде</a></li>
              <li><a href=\"#\">Сервис и гарантия</a></li>
              <li><a href=\"../marketplace_buy/marketplace_buy.html\">Где купить</a></li>
              <li><a href=\"../contacts/contacts.html\">Контакты</a></li>
            </ul>
          </div>
        </div>
        <div id=\"subcategories\" class=\"category_block_subtitle\">
          ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 29
                echo "          <div class=\"subcategory_list\" id=\"subcategory-";
                echo twig_replace_filter(twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 29)), [" " => "-"]);
                echo "\" style=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 29) == 1)) {
                    echo "display: block;";
                } else {
                    echo "display: none;";
                }
                echo "\">
            <ul>
              ";
                // line 31
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 31)) {
                    // line 32
                    echo "              ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 32));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 33
                        echo "              <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 33);
                        echo "\">
                <li>";
                        // line 34
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 34);
                        echo "</li>
              </a>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo "              ";
                } else {
                    // line 38
                    echo "              <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 38);
                    echo "\">
                <li>";
                    // line 39
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 39);
                    echo "</li>
              </a>
              ";
                }
                // line 42
                echo "            </ul>
          </div>
          ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "        </div>
      </div>
      ";
        }
        // line 48
        echo "        <div id=\"imageCategories\">
          <img
            id=\"hoodImage\"
            src=\"../../assets/img/category_modal_hood.png\"
            alt=\"Вытяжки\"
            style=\"display: block\"
          />
          <img
            id=\"hobsImage\"
            src=\"../../assets/img/category_modal_hobs.png\"
            alt=\"Варочные панели\"
            style=\"display: none\"
          />
          <img
            id=\"ovensImage\"
            src=\"../../assets/img/category_modal_ovens.png\"
            alt=\"Духовые шкафы\"
            style=\"display: none\"
          />
          <img
            id=\"refrigeratorsImage\"
            src=\"../../assets/img/category_modal_refrigerators.png\"
            alt=\"Вытяжки\"
            style=\"display: none\"
          />
          <img
            id=\"dishwashersImage\"
            src=\"../../assets/img/category_modal_dishwashers.png\"
            alt=\"Варочные панели\"
            style=\"display: none\"
          />
          <img
            id=\"washingMachinesImage\"
            src=\"../../assets/img/category_modal_washing_machines.png\"
            alt=\"Духовые шкафы\"
            style=\"display: none\"
          /></div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 48,  191 => 45,  175 => 42,  169 => 39,  164 => 38,  161 => 37,  152 => 34,  147 => 33,  142 => 32,  140 => 31,  128 => 29,  111 => 28,  98 => 17,  78 => 11,  67 => 10,  50 => 9,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}

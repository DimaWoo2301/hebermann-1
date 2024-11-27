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
class __TwigTemplate_673f45f0cbd1e2e67e6b5b1393392db5e6511fb9937169b9074b1e9231cccc36 extends \Twig\Template
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
                echo "\" 
                id=\"category-";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 11);
                echo "-category\" 
                data-target=\"subcategory-";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 12);
                echo "\">
              <span>";
                // line 13
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 13);
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
            // line 19
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
            // line 30
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
                // line 31
                echo "          <div class=\"subcategory_list\" 
               id=\"subcategory-";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 32);
                echo "\" 
               style=\"";
                // line 33
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 33) == 1)) {
                    echo "display: block;";
                } else {
                    echo "display: none;";
                }
                echo "\">
            <ul>
              ";
                // line 35
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 35)) {
                    // line 36
                    echo "              ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 36));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 37
                        echo "              <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 37);
                        echo "\">
                <li>";
                        // line 38
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 38);
                        echo "</li>
              </a>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 41
                    echo "              ";
                } else {
                    // line 42
                    echo "              <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 42);
                    echo "\">
                <li>";
                    // line 43
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 43);
                    echo "</li>
              </a>
              ";
                }
                // line 46
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
            // line 49
            echo "        </div>
      </div>
      ";
        }
        // line 52
        echo "      <div id=\"imageCategories\">
        ";
        // line 53
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
            // line 54
            echo "          <img
              id=\"category-";
            // line 55
            echo twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 55);
            echo "-image\"
              src=\"";
            // line 56
            echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 56);
            echo "\"
              alt=\"";
            // line 57
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 57);
            echo "\"
              style=\"";
            // line 58
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 58) == 1)) {
                echo "display: block;";
            } else {
                echo "display: none;";
            }
            echo "\"
          />
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
        // line 61
        echo "      </div>
    </div>
  </div>
</div>
";
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
        return array (  260 => 61,  239 => 58,  235 => 57,  231 => 56,  227 => 55,  224 => 54,  207 => 53,  204 => 52,  199 => 49,  183 => 46,  177 => 43,  172 => 42,  169 => 41,  160 => 38,  155 => 37,  150 => 36,  148 => 35,  139 => 33,  135 => 32,  132 => 31,  115 => 30,  102 => 19,  82 => 13,  78 => 12,  74 => 11,  67 => 10,  50 => 9,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}

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
class __TwigTemplate_fd2918159cd7af35197df85db6fd8cfb8d12debae55878ad1b1e856afc3f7658 extends \Twig\Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "<div id=\"toggleElementCategory\" class=\"category_block\">
  <div id=\"categories\" class=\"category_block_title\">
    <ul>
      ";
            // line 5
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
                // line 6
                echo "      <li class=\"category ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 6) == 1)) {
                    echo "category_header_active";
                }
                echo "\" id=\"";
                echo twig_replace_filter(twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 6)), [" " => "-"]);
                echo "-category\" data-target=\"subcategory-";
                echo twig_replace_filter(twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 6)), [" " => "-"]);
                echo "\">
        <span>";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 7);
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
            // line 13
            echo "    </ul>
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
            // line 24
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
                // line 25
                echo "    <div class=\"subcategory_list\" id=\"subcategory-";
                echo twig_replace_filter(twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 25)), [" " => "-"]);
                echo "\" style=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 25) == 1)) {
                    echo "display: block;";
                } else {
                    echo "display: none;";
                }
                echo "\">
      <ul>
        ";
                // line 27
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 27)) {
                    // line 28
                    echo "        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 28));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 29
                        echo "        <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 29);
                        echo "\">
          <li>";
                        // line 30
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 30);
                        echo "</li>
        </a>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 33
                    echo "        ";
                } else {
                    // line 34
                    echo "        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 34);
                    echo "\">
          <li>";
                    // line 35
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 35);
                    echo "</li>
        </a>
        ";
                }
                // line 38
                echo "      </ul>
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
            // line 41
            echo "  </div>
</div>
";
        }
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
        return array (  185 => 41,  169 => 38,  163 => 35,  158 => 34,  155 => 33,  146 => 30,  141 => 29,  136 => 28,  134 => 27,  122 => 25,  105 => 24,  92 => 13,  72 => 7,  61 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}

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

/* default/template/common/footer.twig */
class __TwigTemplate_63f832c01197d1f120489bc6e3f5811e2c11d954d638c11f1d6e1f572a6e7e90 extends \Twig\Template
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
        echo "<footer class=\"footer\">
  <div class=\"container\">
    <div class=\"footer_wrapper_content\">
      <div class=\"footer_wrapper_info\">
        <img
          src=\"/image/catalog/logo_Hebermannpng_white.png\"
          alt=\"Логотип Heberman\"
        />
        <span>
          г. Санкт-Петербург, <br />
          ул. Вербная 27 А, офис 622, 6 этаж,
        </span>
        <div class=\"footer_wrapper_links\">
          <a href=\"help@hebermann.ru\">help@hebermann.ru</a>
          <a href=\"tel:+78007755660\">8 (800) 77-55-660</a>
        </div>
      </div>
      <div class=\"footer_wrapper_container\">
        <div class=\"footer_wrapper_nav\">
          <ul>
            <li>
              <a href=\"#\">О компании</a>
            </li>
            <li>
              <a href=\"#\">Сервис и гарантия</a>
            </li>
            <li>
              <a href=\"#\">Где купить</a>
            </li>
            <li>
              <a href=\"#\">Контакты</a>
            </li>
          </ul>
          <ul>
            <li>
              <a href=\"#\">Вытяжки</a>
            </li>
            <li>
              <a href=\"#\">Варочные панели</a>
            </li>
            <li>
              <a href=\"#\">Духовые шкафы</a>
            </li>
            <li>
              <a href=\"#\">Холодильники</a>
            </li>
            <li>
              <a href=\"#\">Посудомойки</a>
            </li>
          </ul>
        </div>
        <div class=\"footer_wrapper_policy\">
          <li>
            <a href=\"#\">Правовая информация</a>
          </li>
          <li>
            <a href=\"#\">Политика конфиденциальности</a>
          </li>
          <li>
            <a href=\"#\">Подписка Cookie</a>
          </li>
        </div>
      </div>
    </div>
  </div>
</footer>



";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 71
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 71);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 71);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 71);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 75
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\" defer></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "


</body></html>";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 77,  132 => 75,  128 => 74,  125 => 73,  112 => 71,  108 => 70,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}

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
class __TwigTemplate_2ecf5cf18e14610059f8449bd87d0777cf28112e7510509baf233d2e627e8d79 extends \Twig\Template
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
        echo "<footer>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t";
        // line 4
        if (($context["informations"] ?? null)) {
            // line 5
            echo "\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t<h5>";
            // line 6
            echo ($context["text_information"] ?? null);
            echo "</h5>
\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 9
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 10);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 10);
                echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t";
        }
        // line 16
        echo "\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<h5>";
        // line 17
        echo ($context["text_service"] ?? null);
        echo "</h5>
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 20
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 23
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 26
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<h5>";
        // line 31
        echo ($context["text_extra"] ?? null);
        echo "</h5>
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 34
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 37
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 40
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 43
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<h5>";
        // line 48
        echo ($context["text_account"] ?? null);
        echo "</h5>
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 51
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 54
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 57
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 60
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<hr>
\t\t<ul class=\"list-inline\">
\t\t\t<li>
\t\t\t\t<a href=\"mailto:";
        // line 68
        echo ($context["email"] ?? null);
        echo "\">
\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t<span class=\"hidden-xs hidden-sm hidden-md\">";
        // line 70
        echo ($context["email"] ?? null);
        echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 74
        echo ($context["contact"] ?? null);
        echo "\">
\t\t\t\t\t<i class=\"fa fa-phone\"></i>
\t\t\t\t\t<span class=\"hidden-xs hidden-sm hidden-md\">";
        // line 76
        echo ($context["telephone"] ?? null);
        echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t\t<p>";
        // line 80
        echo ($context["powered"] ?? null);
        echo "</p>
\t</div>
</footer>
";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 84
            echo "\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 84);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 84);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 84);
            echo "\"/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 87
            echo "\t<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//--></body></html>
";
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
        return array (  253 => 89,  244 => 87,  240 => 86,  227 => 84,  223 => 83,  217 => 80,  210 => 76,  205 => 74,  198 => 70,  193 => 68,  180 => 60,  172 => 57,  164 => 54,  156 => 51,  150 => 48,  140 => 43,  132 => 40,  124 => 37,  116 => 34,  110 => 31,  100 => 26,  92 => 23,  84 => 20,  78 => 17,  75 => 16,  70 => 13,  59 => 10,  56 => 9,  52 => 8,  47 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}

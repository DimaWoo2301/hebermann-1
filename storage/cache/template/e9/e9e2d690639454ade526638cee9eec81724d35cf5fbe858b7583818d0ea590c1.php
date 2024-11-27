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

/* default/template/common/header.twig */
class __TwigTemplate_15a7c32623415c913c00e1fba9ae8aa3ac0a75fce323d558891c62fe87263599 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
\t<html
\tdir=\"";
        // line 7
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\"> <!--<![endif]-->
\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
\t\t";
        // line 13
        if (($context["robots"] ?? null)) {
            // line 14
            echo "\t\t\t<meta name=\"robots\" content=\"";
            echo ($context["robots"] ?? null);
            echo "\"/>
\t\t";
        }
        // line 16
        echo "\t\t<base href=\"";
        echo ($context["base"] ?? null);
        echo "\"/>
\t\t";
        // line 17
        if (($context["description"] ?? null)) {
            // line 18
            echo "\t\t\t<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\"/>
\t\t";
        }
        // line 20
        echo "\t\t";
        if (($context["keywords"] ?? null)) {
            // line 21
            echo "\t\t\t<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\"/>
\t\t";
        }
        // line 23
        echo "\t\t<meta property=\"og:title\" content=\"";
        echo ($context["title"] ?? null);
        echo "\"/>
\t\t<meta property=\"og:type\" content=\"website\"/>
\t\t<meta property=\"og:url\" content=\"";
        // line 25
        echo ($context["og_url"] ?? null);
        echo "\"/>
\t\t";
        // line 26
        if (($context["og_image"] ?? null)) {
            // line 27
            echo "\t\t\t<meta property=\"og:image\" content=\"";
            echo ($context["og_image"] ?? null);
            echo "\"/>
\t\t";
        } else {
            // line 29
            echo "\t\t\t<meta property=\"og:image\" content=\"";
            echo ($context["logo"] ?? null);
            echo "\"/>
\t\t";
        }
        // line 31
        echo "\t\t<meta property=\"og:site_name\" content=\"";
        echo ($context["name"] ?? null);
        echo "\"/>
\t\t<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
\t\t<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\"/>
\t\t<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
\t\t<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t<link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">
\t\t";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 39
            echo "\t\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 39);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 39);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 39);
            echo "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 42
            echo "\t\t\t<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
\t\t";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 46
            echo "\t\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 46);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 46);
            echo "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 49
            echo "\t\t\t";
            echo $context["analytic"];
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t</head>
\t<body>
\t\t<nav id=\"top\">
\t\t\t<div class=\"container\">";
        // line 54
        echo ($context["currency"] ?? null);
        echo "
\t\t\t\t";
        // line 55
        echo ($context["language"] ?? null);
        echo "
\t\t\t\t";
        // line 56
        echo ($context["blog_menu"] ?? null);
        echo "
\t\t\t\t<div id=\"top-links\" class=\"nav pull-right\">
\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"mailto:";
        // line 60
        echo ($context["email"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t<span class=\"hidden-xs hidden-sm hidden-md\">";
        // line 62
        echo ($context["email"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 66
        echo ($context["contact"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>
\t\t\t\t\t\t\t\t<span class=\"hidden-xs hidden-sm hidden-md\">";
        // line 68
        echo ($context["telephone"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"";
        // line 72
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t<span class=\"hidden-xs hidden-sm hidden-md\">";
        // line 74
        echo ($context["text_account"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t\t";
        // line 78
        if (($context["logged"] ?? null)) {
            // line 79
            echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 80
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 83
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 86
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 89
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 92
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        } else {
            // line 95
            echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 96
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 99
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        // line 102
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 105
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t<span class=\"hidden-xs hidden-sm hidden-md\">";
        // line 107
        echo ($context["text_wishlist"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 111
        echo ($context["shopping_cart"] ?? null);
        echo "\" title=\"";
        echo ($context["text_shopping_cart"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t<span class=\"hidden-xs hidden-sm hidden-md\">";
        // line 113
        echo ($context["text_shopping_cart"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 117
        echo ($context["checkout"] ?? null);
        echo "\" title=\"";
        echo ($context["text_checkout"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-share\"></i>
\t\t\t\t\t\t\t\t<span class=\"hidden-xs hidden-sm hidden-md\">";
        // line 119
        echo ($context["text_checkout"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t<header>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"logo_header\" id=\"logo\">
\t\t\t\t\t\t\t";
        // line 131
        if (($context["logo"] ?? null)) {
            // line 132
            echo "\t\t\t\t\t\t\t\t";
            if ((($context["home"] ?? null) == ($context["og_url"] ?? null))) {
                // line 133
                echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t\t\t";
            } else {
                // line 135
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo ($context["home"] ?? null);
                echo "\"><img src=\"";
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"img-responsive\"/></a>
\t\t\t\t\t\t\t\t";
            }
            // line 137
            echo "\t\t\t\t\t\t\t";
        } else {
            // line 138
            echo "\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 139
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t";
        }
        // line 142
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-5\">";
        // line 144
        echo ($context["search"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"col-sm-3\">";
        // line 145
        echo ($context["cart"] ?? null);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
\t\t";
        // line 149
        echo ($context["menu"] ?? null);
        echo "
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 149,  423 => 145,  419 => 144,  415 => 142,  407 => 139,  404 => 138,  401 => 137,  389 => 135,  379 => 133,  376 => 132,  374 => 131,  359 => 119,  352 => 117,  345 => 113,  338 => 111,  331 => 107,  324 => 105,  319 => 102,  311 => 99,  303 => 96,  300 => 95,  292 => 92,  284 => 89,  276 => 86,  268 => 83,  260 => 80,  257 => 79,  255 => 78,  248 => 74,  241 => 72,  234 => 68,  229 => 66,  222 => 62,  217 => 60,  210 => 56,  206 => 55,  202 => 54,  197 => 51,  188 => 49,  183 => 48,  172 => 46,  168 => 45,  165 => 44,  156 => 42,  151 => 41,  138 => 39,  134 => 38,  123 => 31,  117 => 29,  111 => 27,  109 => 26,  105 => 25,  99 => 23,  93 => 21,  90 => 20,  84 => 18,  82 => 17,  77 => 16,  71 => 14,  69 => 13,  65 => 12,  55 => 7,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}

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

/* default/template/common/search.twig */
class __TwigTemplate_c046d8d5506394237c6d6c02ad3891422fc14f11b3179b9860902aadd6fbf951 extends \Twig\Template
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
        echo "<input placeholder=\"Поиск по сайту\" type=\"text\">
<svg id=\"search\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
  <path d=\"M10 18C11.775 17.9996 13.4988 17.4054 14.897 16.312L19.293 20.708L20.707 19.294L16.311 14.898C17.405 13.4997 17.9996 11.7754 18 10C18 5.589 14.411 2 10 2C5.589 2 2 5.589 2 10C2 14.411 5.589 18 10 18ZM10 4C13.309 4 16 6.691 16 10C16 13.309 13.309 16 10 16C6.691 16 4 13.309 4 10C4 6.691 6.691 4 10 4Z\" fill=\"#E65B1D\"/>
  <path d=\"M11.4118 8.586C11.7908 8.966 11.9998 9.468 11.9998 10H13.9998C14.0007 9.47443 13.8974 8.95389 13.6959 8.46848C13.4944 7.98308 13.1987 7.54242 12.8258 7.172C11.3118 5.66 8.68683 5.66 7.17383 7.172L8.58583 8.588C9.34583 7.83 10.6558 7.832 11.4118 8.586Z\" fill=\"#E65B1D\"/>
</svg>";
    }

    public function getTemplateName()
    {
        return "default/template/common/search.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/search.twig", "");
    }
}

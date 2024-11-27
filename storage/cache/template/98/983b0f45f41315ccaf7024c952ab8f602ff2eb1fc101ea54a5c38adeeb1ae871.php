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

/* default/template/extension/module/html.twig */
class __TwigTemplate_1389dd2a820358b7d0a3ae1e872871ff83d2e1fc8668aac83b98779f53b6e207 extends \Twig\Template
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
        echo "<div>
\t";
        // line 2
        if (($context["heading_title"] ?? null)) {
            // line 3
            echo "\t\t<h2>";
            echo ($context["heading_title"] ?? null);
            echo "</h2>
\t";
        }
        // line 5
        echo "\t";
        echo ($context["html"] ?? null);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/html.twig", "");
    }
}

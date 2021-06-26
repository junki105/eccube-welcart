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

/* Block/information.twig */
class __TwigTemplate_8b9c40fa74d92f1d132692f5b61c2ac54b7073d99211bd7d9fe8ac4239eb3a98 extends \Eccube\Twig\Template
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
        echo "<section id=\"infomation\" class=\"block\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<h1 class=\"text-center mgb30\">Infomation</h1>
\t\t\t<div class=\"col-sm-offset-1 col-sm-10 col-xs-12\">
\t\t\t\t<nav id=\"site-info\">
\t\t\t\t\t<div class=\"menu-footer_nav-container\">
\t\t\t\t\t\t<ul id=\"menu-footer_nav\" class=\"footer-menu cf\">
\t\t\t\t\t\t\t<li id=\"menu-item-123\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-123\">
\t\t\t\t\t\t\t\t<a href=\"https://develop-test.xsrv.jp/sample_kuji_demo/contact/\">お問い合わせ</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</nav>
\t\t\t</div>
\t\t</div>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "Block/information.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/information.twig", "F:\\xampp\\htdocs\\test-shop\\eccube-4.0.5-p1\\app\\template\\default\\Block\\information.twig");
    }
}

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

/* Block/header.twig */
class __TwigTemplate_bc1e3f17eb981984ee9cf937f4e3327c3020a905081acd52746b5cd6e8645dc4 extends \Eccube\Twig\Template
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
        // line 11
        echo "<header id=\"masthead\" class=\"site-header\" role=\"banner\">
    <div class=\"inner cf\">
        <p class=\"site-description\">くじデモページです</p>
        <h1 class=\"site-title\"><a href=\"";
        // line 14
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, false, 14), "html", null, true);
        echo "\" rel=\"home\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, false, 14), "html", null, true);
        echo "</a></h1>
        <div class=\"snav cf\">
            <div class=\"membership\">
                <i class=\"fa fa-user\"></i>
                <ul class=\"cf\">
                    ";
        // line 19
        echo twig_include($this->env, $context, "Block/login.twig");
        echo "
                </ul>
            </div>
            <div class=\"incart-btn ec-headerRole__cart\">
                <a href=\"";
        // line 23
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart");
        echo "\"><i class=\"fa fa-shopping-cart\"><span>カートの中</span></i><span class=\"total-quant\">";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["totalQuantity"] ?? null)), "html", null, true);
        echo "</span></a>
            </div>
        </div><!-- .snav -->  
    </div><!-- .inner -->
</header><!-- #masthead -->";
    }

    public function getTemplateName()
    {
        return "Block/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 23,  54 => 19,  42 => 14,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/header.twig", "F:\\xampp\\htdocs\\test-shop\\eccube-4.0.5-p1\\app\\template\\default\\Block\\header.twig");
    }
}

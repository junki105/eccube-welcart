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

/* Block/hero_pc.twig */
class __TwigTemplate_5832a5fc368577b282881a3124b20963aa69d4f323d35cd9b62bb415da7763c3 extends \Eccube\Twig\Template
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
        echo "<div class=\"main-image\">
\t<ul class=\"main_slider\">
\t\t<li>
\t\t\t<a href=\"";
        // line 4
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "1"]);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("cube-1.png", "save_image"), "html", null, true);
        echo "\" class=\"img-responsive\"></a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"";
        // line 7
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "2"]);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sand-1.png", "save_image"), "html", null, true);
        echo "\" alt=\"チャンネル会員限定くじ\"></a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"";
        // line 10
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "1"]);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("cube-1.png", "save_image"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"チャンネル会員限定くじ\"></a>
\t\t</li>
\t</ul>
</div><!-- main-image -->";
    }

    public function getTemplateName()
    {
        return "Block/hero_pc.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  50 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/hero_pc.twig", "F:\\xampp\\htdocs\\test-shop\\eccube-4.0.5-p1\\app\\template\\default\\Block\\hero_pc.twig");
    }
}

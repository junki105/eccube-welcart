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

/* Block/news_area.twig */
class __TwigTemplate_303c3ea552c05fded04f9244c44ce2ed1cbe0b08ea180128b7440c161c793475 extends \Eccube\Twig\Template
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
        echo "<section class=\"block news_area\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<h1 class=\"orange text-center mgb30\">News</h1>
\t\t\t\t<article id=\"post-102\" class=\"col-sm-6 mgb30\">
\t\t\t\t\t<a href=\"https://develop-test.xsrv.jp/sample_kuji_demo/news/%e3%80%8ctest%e3%81%8f%e3%81%98%e3%80%8d%e3%81%ae%e3%81%8c%e8%b2%a9%e5%a3%b2%e9%96%8b%e5%a7%8b%ef%bc%81/\" rel=\"bookmark\">
\t\t\t\t\t\t<div class=\"post_thumbnail mgb15\">
\t\t\t\t\t\t\t<img src=\"http://localhost/cleanlife/wp-content/uploads/2020/04/1200x800-3-500x333.png\" class=\"img-responsive center-block\" alt=\"「testくじ」のが販売開始！\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t<header class=\"entry-header\">
\t\t\t\t\t\t\t\t<p class=\"entry-title under_line\">「testくじ」のが販売開始！</p>
\t\t\t\t\t\t\t</header><!-- .entry-header -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</article><!-- #post-102 -->
\t\t\t\t<article id=\"post-104\" class=\"col-sm-6 mgb30\">
\t\t\t\t\t<a href=\"https://develop-test.xsrv.jp/sample_kuji_demo/news/%e3%80%8c%e3%83%86%e3%82%b9%e3%83%88%e3%81%8f%e3%81%98%e3%80%8d%e3%81%ae%e9%99%90%e5%ae%9a%e3%82%b0%e3%83%83%e3%82%ba%e3%81%8c%e8%b2%a9%e5%a3%b2%e9%96%8b%e5%a7%8b%ef%bc%81/\" rel=\"bookmark\">
\t\t\t\t\t\t<div class=\"post_thumbnail mgb15\">
\t\t\t\t\t\t\t<img src=\"http://localhost/cleanlife/wp-content/uploads/2020/04/1200x800-3-500x333.png\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t<header class=\"entry-header\">
\t\t\t\t\t\t\t\t<p class=\"entry-title under_line\">「テストくじ」の限定グッズが販売開始！</p>
\t\t\t\t\t\t\t</header><!-- .entry-header -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</article><!-- #post-104 -->
\t\t\t\t<article id=\"post-106\" class=\"col-sm-6 mgb30\">
\t\t\t\t\t<a href=\"https://develop-test.xsrv.jp/sample_kuji_demo/news/%e3%80%8c%e3%82%a2%e3%83%8b%e3%83%a1-%e3%80%8d%e3%81%ae%e9%99%90%e5%ae%9a%e3%81%8f%e3%81%98%e3%81%8c%e8%b2%a9%e5%a3%b2%e9%96%8b%e5%a7%8b%ef%bc%81/\" rel=\"bookmark\">
\t\t\t\t\t\t<div class=\"post_thumbnail mgb15\">
\t\t\t\t\t\t\t<img src=\"http://localhost/cleanlife/wp-content/uploads/2020/04/1200x800-3-500x333.png\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t<header class=\"entry-header\">
\t\t\t\t\t\t\t\t<p class=\"entry-title under_line\">「アニメ 」の限定くじが販売開始！</p>
\t\t\t\t\t\t\t</header><!-- .entry-header -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</article><!-- #post-106 -->\t\t\t\t\t
\t\t\t\t<div class=\"old_news_link\">
\t\t\t\t\t<a href=\"\">もっとみる</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t</div>
\t\t</div>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "Block/news_area.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/news_area.twig", "F:\\xampp\\htdocs\\test-shop\\eccube-4.0.5-p1\\app\\template\\default\\Block\\news_area.twig");
    }
}

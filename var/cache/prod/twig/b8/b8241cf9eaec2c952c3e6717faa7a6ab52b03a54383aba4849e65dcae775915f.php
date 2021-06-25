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

/* index.twig */
class __TwigTemplate_21fdfea598c9c152e1846d8ab8642e92d52fe4dfc287c2ca35e49b1a9b2f3fa4 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["body_class"] = "front_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "index.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    <style>
        .slick-slider {
            margin-bottom: 30px;
        }

        .slick-dots {
            position: absolute;
            bottom: -45px;
            display: block;
            width: 100%;
            padding: 0;
            list-style: none;
            text-align: center;
        }

        .slick-dots li {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 20px;
            margin: 0 5px;
            padding: 0;

            cursor: pointer;
        }

        .slick-dots li button {
            font-size: 0;
            line-height: 0;
            display: block;
            width: 20px;
            height: 20px;
            padding: 5px;
            cursor: pointer;
            color: transparent;
            border: 0;
            outline: none;
            background: transparent;
        }

        .slick-dots li button:hover,
        .slick-dots li button:focus {
            outline: none;
        }

        .slick-dots li button:hover:before,
        .slick-dots li button:focus:before {
            opacity: 1;
        }

        .slick-dots li button:before {
            content: \" \";
            line-height: 20px;
            position: absolute;
            top: 0;
            left: 0;
            width: 12px;
            height: 12px;
            text-align: center;
            opacity: .25;
            background-color: black;
            border-radius: 50%;

        }

        .slick-dots li.slick-active button:before {
            opacity: .75;
            background-color: black;
        }

        .slick-dots li button.thumbnail img {
            width: 0;
            height: 0;
        }
    </style>
";
    }

    // line 93
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 94
        echo "    <script>
        \$(function() {
            \$('.main_slider').slick({
                autoplay: true,
                autoplaySpeed: 2000,
                dots: true,
                arrows: true,
                speed: 1000,
                slidesToShow: 1,
                centerMode: true,
                centerPadding: '15px',
                variableWidth: true
            });
        });
    </script>
";
    }

    // line 111
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 112
        echo "\t<section id=\"item_list\" class=\"block\">
\t\t<h1 class=\"orange text-center mgb30\">Line Up</h1>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
                <article id=\"post-516\">
                    <a href=\"https://develop-test.xsrv.jp/sample_kuji_demo/00000001-2/\" title=\"チケット会員かつチャンネル会員\" class=\"article_inner\">
                        <div class=\"itemimg\">
                            <img src=\"http://localhost/cleanlife/wp-content/uploads/2020/02/1200x800-5-500x333.png\" class=\"img-responsive center-block\" alt=\"チケット会員かつチャンネル会員\">
                        </div>
                        <div class=\"content\">
                            <div class=\"itemname\">チケット会員かつチャンネル会員</div>
                            <div class=\"date\">販売期間：まで</div>
                            <div class=\"ribbon ischannel_isticket_isdate\"><h2>ニコニコチャンネル会員&amp;ニコニコチケット購入者1日1回限定</h2></div>
                        </div>
                    </a>
                </article>
                <article id=\"post-448\">
                    <a href=\"https://develop-test.xsrv.jp/sample_kuji_demo/%e3%81%8f%e3%81%98%e3%82%b5%e3%83%b3%e3%83%97%e3%83%ab/\" title=\"プレミアム会員かつチャンネル会員\" class=\"article_inner\">
                        <div class=\"itemimg\">
                            <img src=\"http://localhost/cleanlife/wp-content/uploads/2020/02/1200x800-5-500x333.png\" class=\"img-responsive center-block\" alt=\"プレミアム会員かつチャンネル会員\">
                        </div>
                        <div class=\"content\">
                            <div class=\"itemname\">プレミアム会員かつチャンネル会員</div>
                            <div class=\"date\">販売期間：まで</div>
                            <div class=\"ribbon ispremium_ischannel\"><h2>ニコニコプレミアム会員&amp;ニコニコチャンネル会員限定</h2></div>
                        </div>
                    </a>
                </article>
                <article id=\"post-444\">
                    <a href=\"https://develop-test.xsrv.jp/sample_kuji_demo/%e3%81%8f%e3%81%98sample/\" title=\"プレミアムくじ\" class=\"article_inner\">
                        <div class=\"itemimg\">
                            <img src=\"http://localhost/cleanlife/wp-content/uploads/2020/02/1200x800-5-500x333.png\" class=\"img-responsive center-block\" alt=\"プレミアムくじ\">
                        </div>
                        <div class=\"content\">
                            <div class=\"itemname\">プレミアムくじ</div>
                            <div class=\"date\">販売期間：まで</div>
                            <div class=\"ribbon ispremium\"><h2>ニコニコプレミアム会員限定</h2></div>
                        </div>
                    </a>
                </article>
                <article id=\"post-419\">
                    <a href=\"https://develop-test.xsrv.jp/sample_kuji_demo/%e3%80%90%e3%81%be%e3%81%a8%e3%82%81%e8%b2%b7%e3%81%84%e3%81%8f%e3%81%98%e3%80%91sample%e3%81%8f%e3%81%98/\" title=\"【まとめ買いくじ】sampleくじ\" class=\"article_inner\">
                        <div class=\"itemimg\">
                            <img src=\"http://localhost/cleanlife/wp-content/uploads/2020/02/1200x800-5-500x333.png\" class=\"img-responsive center-block\" alt=\"【まとめ買いくじ】sampleくじ\">
                        </div>
                        <div class=\"content\">
                            <div class=\"itemname\">【まとめ買いくじ】sampleくじ</div>
                            <div class=\"date\">販売期間：まで</div>
                        </div>
                    </a>
                </article>
                <article id=\"post-409\">
                    <a href=\"https://develop-test.xsrv.jp/sample_kuji_demo/sample%e3%81%8f%e3%81%98/\" title=\"通常くじ\" class=\"article_inner\">
                        <div class=\"itemimg\">
                            <img src=\"http://localhost/cleanlife/wp-content/uploads/2020/02/1200x800-5-500x333.png\" class=\"img-responsive center-block\" alt=\"通常くじ\">
                        </div>
                        <div class=\"content\">
                            <div class=\"itemname\">通常くじ</div>
                            <div class=\"date\">販売期間：まで</div>
                        </div>
                    </a>
                </article>
                <article id=\"post-361\">
                    <a href=\"https://develop-test.xsrv.jp/sample_kuji_demo/%e3%81%8f%e3%81%98c/\" title=\"チャンネル会員限定くじ\" class=\"article_inner\">
                        <div class=\"itemimg\">
                            <img src=\"http://localhost/cleanlife/wp-content/uploads/2020/02/1200x800-5-500x333.png\" class=\"img-responsive center-block\" alt=\"チャンネル会員限定くじ\">
                        </div>
                        <div class=\"content\">
                            <div class=\"itemname\">チャンネル会員限定くじ</div>
                            <div class=\"date\">販売期間：まで</div>
                            <div class=\"ribbon ischannel\"><h2>ニコニコチャンネル会員限定</h2></div>
                        </div>
                    </a>
                </article>
\t\t\t</div>
\t\t</div>
\t</section>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 112,  157 => 111,  138 => 94,  134 => 93,  55 => 16,  51 => 15,  46 => 11,  44 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "F:\\xampp\\htdocs\\test-shop\\eccube-4.0.5-p1\\app\\template\\default\\index.twig");
    }
}

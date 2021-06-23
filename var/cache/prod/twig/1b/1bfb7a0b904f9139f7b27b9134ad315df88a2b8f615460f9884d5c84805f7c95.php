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
        <h1 class=\"site-title\"><a href=\"https://develop-test.xsrv.jp/sample_kuji_demo/\" title=\"くじデモ\" rel=\"home\">くじデモ</a></h1>
        <div class=\"snav cf\">
            <div class=\"membership\">
                <i class=\"fa fa-user\"></i>
                <ul class=\"cf\">
                    <li>ゲスト</li>
                    <li><a href=\"https://develop-test.xsrv.jp/sample_kuji_demo/usces-member/?usces_page=login\" class=\"usces_login_a\">ログイン</a></li>
                    <li><a href=\"https://develop-test.xsrv.jp/sample_kuji_demo/usces-member/?usces_page=newmember\">新規会員登録</a></li>
                </ul>
            </div>
            <div class=\"incart-btn\">
                <a href=\"https://develop-test.xsrv.jp/sample_kuji_demo/usces-cart/\"><i class=\"fa fa-shopping-cart\"><span>カートの中</span></i><span class=\"total-quant\">1</span></a>
            </div>
        </div><!-- .snav -->  
    </div><!-- .inner -->
</header><!-- #masthead -->";
    }

    public function getTemplateName()
    {
        return "Block/header.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/header.twig", "F:\\xampp\\htdocs\\test-shop\\eccube-4.0.5-p1\\app\\template\\default\\Block\\header.twig");
    }
}

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

/* Block/old_item_link.twig */
class __TwigTemplate_db272f0a4404a821a4c616caadc6d8063280d4519bdb0db4e64aa598af6be43d extends \Eccube\Twig\Template
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
        echo "<section id=\"old_item_link\" class=\"block\">
\t<a href=\"https://develop-test.xsrv.jp/sample_kuji_demo/old_item\">販売終了くじ一覧へ<span>（1件）</span> <i class=\"fa fa-chevron-circle-right\"></i></a>
</section>";
    }

    public function getTemplateName()
    {
        return "Block/old_item_link.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/old_item_link.twig", "F:\\xampp\\htdocs\\test-shop\\eccube-4.0.5-p1\\app\\template\\default\\Block\\old_item_link.twig");
    }
}

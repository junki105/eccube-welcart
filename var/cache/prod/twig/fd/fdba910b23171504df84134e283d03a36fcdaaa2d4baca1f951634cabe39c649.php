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

/* Block/new_item.twig */
class __TwigTemplate_8573e1e615b059ab46f4a8b61f527b40e6d2ce4b01a81ec55190aa802b5f9d05 extends \Eccube\Twig\Template
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
        // line 8
        $context["Products"] = $this->extensions['Customize\Twig\Extension\TwigExtension']->getCustomizeNewProduct();
        // line 9
        if ((twig_length_filter($this->env, ($context["Products"] ?? null)) > 0)) {
            // line 10
            echo "<div class=\"ec-role\">
    <div class=\"ec-newItemRole\">
    
    \t<div class=\"ec-secHeading\">
            <span class=\"ec-secHeading__en\">NEW Goods</span>
            <span class=\"ec-secHeading__line\"></span>
            <span class=\"ec-secHeading__ja\">新入荷商品</span>
        </div>
    
        <div class=\"ec-newItemRole__list\">
 
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
                // line 22
                echo "            <div class=\"ec-newItemRole__listItem\">
                <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                echo "\">
                    <img src=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, $context["Product"], "main_list_image", [], "any", false, false, false, 24)), "save_image"), "html", null, true);
                echo "\">
                    <p class=\"ec-newItemRole__listItemTitle\">";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, false, 25), "html", null, true);
                echo "</p>
                    <p class=\"ec-newItemRole__listItemPrice\">
                    ";
                // line 27
                if (twig_get_attribute($this->env, $this->source, $context["Product"], "hasProductClass", [], "any", false, false, false, 27)) {
                    // line 28
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Min", [], "any", false, false, false, 28) == twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Max", [], "any", false, false, false, 28))) {
                        // line 29
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, false, 29)), "html", null, true);
                        echo "
                        ";
                    } else {
                        // line 31
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, false, 31)), "html", null, true);
                        echo " ～ ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMax", [], "any", false, false, false, 31)), "html", null, true);
                        echo "
                        ";
                    }
                    // line 33
                    echo "                    ";
                } else {
                    // line 34
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, false, 34)), "html", null, true);
                    echo "
                    ";
                }
                // line 36
                echo "                    </p>
                </a>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo " 
        </div><!-- .ec-newItemRole__listItem end -->
        
        <div clas=\"ec-newItemRole__listItemHeading ec-secHeading--tandem\">
        \t<a class=\"ec-inlineBtn--top\" href=\"";
            // line 44
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
            echo "?orderby=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_product_order_newer", [], "any", false, false, false, 44), "html", null, true);
            echo "\">&raquo; 全商品一覧はこちら</a>
        </div>
        
    </div><!-- .ec-newItemRole end -->
</div><!-- .ec-role end -->
";
        }
    }

    public function getTemplateName()
    {
        return "Block/new_item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 44,  111 => 40,  102 => 36,  96 => 34,  93 => 33,  85 => 31,  79 => 29,  76 => 28,  74 => 27,  69 => 25,  65 => 24,  61 => 23,  58 => 22,  54 => 21,  41 => 10,  39 => 9,  37 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/new_item.twig", "F:\\xampp\\htdocs\\test-shop\\eccube-4.0.5-p1\\app\\template\\default\\Block\\new_item.twig");
    }
}

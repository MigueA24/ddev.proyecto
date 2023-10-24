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

/* themes/custom/ecommerce/templates/commerce/commerce-product.html.twig */
class __TwigTemplate_d88578549851cf69b5f1c076f7e22d73 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "
<style type=\"text/css\">
    .page-header {
      display: none;
    }
</style>

<article";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 33, $this->source), "html", null, true);
        echo ">
  ";
        // line 35
        echo "  ";
        // line 36
        echo "  ";
        // line 37
        echo "</article>

";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\Core\Template\DebugExtension::dump($this->env, $context, ...[0 => twig_get_array_keys_filter($this->sandbox->ensureToStringAllowed(($context["product"] ?? null), 39, $this->source))]), "html", null, true);
        echo "

<div class=\"col-md-6\">

";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_imagen_categoria", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
        echo "


</div>

<div class=\"col-md-6\">

<h3> ";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo " </h3>

";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_categoria", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "

";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_marca_camisetas", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "

<br>
";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation_price", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo "
<br>

";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_descripcion_corta", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "
<br>
";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variations", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "

</div>

<div class=\" row col-md-12 \">
  
  <ul class=\"nav nav-tabs\">
  <li class=\"active\"><a data-toggle=\"tab\" href=\"#home\">Home</a></li>
  <li><a data-toggle=\"tab\" href=\"#menu1\">Menu 1</a></li>
</ul>

<div class=\"tab-content\">
  <div id=\"home\" class=\"tab-pane fade in active\">
    <h3>HOME</h3>
    <p>Some content.</p>
  </div>
  <div id=\"menu1\" class=\"tab-pane fade\">
    <h3>Menu 1</h3>
    <p>Some content in menu 1.</p>
  </div>
</div>
  
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/ecommerce/templates/commerce/commerce-product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 62,  99 => 60,  93 => 57,  87 => 54,  82 => 52,  77 => 50,  67 => 43,  60 => 39,  56 => 37,  54 => 36,  52 => 35,  48 => 33,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 *
 * Default product template.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapper.
 * - product: The rendered product fields.
 *   Use 'product' to print them all, or print a subset such as
 *   'product.title'. Use the following code to exclude the
 *   printing of a given field:
 *   @code
 *   {{ product|without('title') }}
 *   @endcode
 * - product_entity: The product entity.
 * - product_url: The product URL.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @ingroup themeable
 */
#}

<style type=\"text/css\">
    .page-header {
      display: none;
    }
</style>

<article{{ attributes }}>
  {# title_prefix #}
  {# title_suffix #}
  {# - product|without('variation_attributes') - #}
</article>

{{ dump( product|keys ) }}

<div class=\"col-md-6\">

{{ product.field_imagen_categoria }}


</div>

<div class=\"col-md-6\">

<h3> {{ product.title }} </h3>

{{ product.field_categoria }}

{{ product.field_marca_camisetas }}

<br>
{{ product.variation_price }}
<br>

{{ product.field_descripcion_corta }}
<br>
{{ product.variations }}

</div>

<div class=\" row col-md-12 \">
  
  <ul class=\"nav nav-tabs\">
  <li class=\"active\"><a data-toggle=\"tab\" href=\"#home\">Home</a></li>
  <li><a data-toggle=\"tab\" href=\"#menu1\">Menu 1</a></li>
</ul>

<div class=\"tab-content\">
  <div id=\"home\" class=\"tab-pane fade in active\">
    <h3>HOME</h3>
    <p>Some content.</p>
  </div>
  <div id=\"menu1\" class=\"tab-pane fade\">
    <h3>Menu 1</h3>
    <p>Some content in menu 1.</p>
  </div>
</div>
  
</div>", "themes/custom/ecommerce/templates/commerce/commerce-product.html.twig", "/var/www/html/web/themes/custom/ecommerce/templates/commerce/commerce-product.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 33, "keys" => 39);
        static $functions = array("dump" => 39);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'keys'],
                ['dump']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}

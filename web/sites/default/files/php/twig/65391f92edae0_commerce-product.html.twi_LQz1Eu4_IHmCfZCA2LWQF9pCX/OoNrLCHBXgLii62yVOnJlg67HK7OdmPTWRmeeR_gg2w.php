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
        $context["preciodeventa"] = twig_replace_filter($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation_field_precio_de_venta", [], "any", false, false, true, 43), 0, [], "any", false, false, true, 43)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#calculated_price"] ?? null) : null), 43, $this->source), ["€" => ""]);
        // line 44
        echo "  ";
        $context["preciooriginal"] = twig_replace_filter($this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation_price", [], "any", false, false, true, 44), 0, [], "any", false, false, true, 44)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#markup"] ?? null) : null), 44, $this->source), ["€" => ""]);
        // line 45
        echo "

  ";
        // line 47
        $context["preciooferta"] = twig_number_format_filter($this->env, (((($context["preciooriginal"] ?? null) - ($context["preciodeventa"] ?? null)) / ($context["preciooriginal"] ?? null)) * 100), 0);
        // line 48
        echo "
  ";
        // line 49
        if ((($context["preciooferta"] ?? null) > 0)) {
            // line 50
            echo "
   <span class=\"badge-offer\"><b> - ";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["preciooferta"] ?? null), 51, $this->source), "html", null, true);
            echo "%</b></span>

  ";
        }
        // line 54
        echo "
  ";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_imagen_categoria", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        echo "
  


</div>

<div class=\"col-md-6\">

<h3> ";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo " </h3>

";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_categoria", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        echo "

";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_marca_camisetas", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "

<br>

<div class=\"price-wrap h5 divpreciodetalle\">
  <span class=\"price-new\">";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation_field_precio_de_venta", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
        echo "</span>
  ";
        // line 73
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation_price", [], "any", false, false, true, 73)) {
            // line 74
            echo "
  ";
            // line 75
            if ((($context["preciooferta"] ?? null) > 0)) {
                // line 76
                echo "
  <del class=\"price-old\">";
                // line 77
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation_price", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                echo "</del>

  ";
            }
            // line 80
            echo "  ";
        }
        // line 81
        echo "
</div>

<br>

";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_descripcion_corta", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
        echo "
<br>
";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variations", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
        echo "

</div>

<div class=\" row col-md-12 \">
  
  <ul class=\"nav nav-tabs\">
  <li class=\"active\"><a data-toggle=\"tab\" href=\"#Descripcion\">Descripción</a></li>
  <li><a data-toggle=\"tab\" href=\"#Especificaciones\">Especificaciones</a></li>
</ul>

<div class=\"tab-content\">
  <div id=\"Descripcion\" class=\"tab-pane fade in active\">
    <h3>Descripción</h3>
    <p>Some content.</p>
  </div>
  <div id=\"menu1\" class=\"tab-pane fade\">
    <h3>Especificaciones 1</h3>
    <p>Some content in menu 1.</p>
  </div>
</div>
  Descripcion
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
        return array (  159 => 88,  154 => 86,  147 => 81,  144 => 80,  138 => 77,  135 => 76,  133 => 75,  130 => 74,  128 => 73,  124 => 72,  116 => 67,  111 => 65,  106 => 63,  95 => 55,  92 => 54,  86 => 51,  83 => 50,  81 => 49,  78 => 48,  76 => 47,  72 => 45,  69 => 44,  67 => 43,  60 => 39,  56 => 37,  54 => 36,  52 => 35,  48 => 33,  39 => 26,);
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

  {% set preciodeventa = product.variation_field_precio_de_venta.0[\"#calculated_price\"]|replace({ '€' : ''}) %}
  {% set preciooriginal = product.variation_price.0[\"#markup\"]|replace({ '€' : ''}) %}


  {% set preciooferta = (((preciooriginal - preciodeventa)/preciooriginal)*100)|number_format(0) %}

  {% if preciooferta > 0 %}

   <span class=\"badge-offer\"><b> - {{ preciooferta }}%</b></span>

  {% endif %}

  {{ product.field_imagen_categoria }}
  


</div>

<div class=\"col-md-6\">

<h3> {{ product.title }} </h3>

{{ product.field_categoria }}

{{ product.field_marca_camisetas }}

<br>

<div class=\"price-wrap h5 divpreciodetalle\">
  <span class=\"price-new\">{{ product.variation_field_precio_de_venta }}</span>
  {% if product.variation_price %}

  {% if preciooferta > 0 %}

  <del class=\"price-old\">{{ product.variation_price }}</del>

  {% endif %}
  {% endif %}

</div>

<br>

{{ product.field_descripcion_corta }}
<br>
{{ product.variations }}

</div>

<div class=\" row col-md-12 \">
  
  <ul class=\"nav nav-tabs\">
  <li class=\"active\"><a data-toggle=\"tab\" href=\"#Descripcion\">Descripción</a></li>
  <li><a data-toggle=\"tab\" href=\"#Especificaciones\">Especificaciones</a></li>
</ul>

<div class=\"tab-content\">
  <div id=\"Descripcion\" class=\"tab-pane fade in active\">
    <h3>Descripción</h3>
    <p>Some content.</p>
  </div>
  <div id=\"menu1\" class=\"tab-pane fade\">
    <h3>Especificaciones 1</h3>
    <p>Some content in menu 1.</p>
  </div>
</div>
  Descripcion
</div>", "themes/custom/ecommerce/templates/commerce/commerce-product.html.twig", "/var/www/html/web/themes/custom/ecommerce/templates/commerce/commerce-product.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 43, "if" => 49);
        static $filters = array("escape" => 33, "keys" => 39, "replace" => 43, "number_format" => 47);
        static $functions = array("dump" => 39);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'keys', 'replace', 'number_format'],
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

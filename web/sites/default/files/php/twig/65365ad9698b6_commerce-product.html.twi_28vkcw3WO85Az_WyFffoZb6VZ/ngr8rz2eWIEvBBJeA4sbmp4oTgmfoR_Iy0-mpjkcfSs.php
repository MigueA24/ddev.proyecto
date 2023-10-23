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
class __TwigTemplate_35db216714cfbfd2415957082217d6ed extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\devel\Twig\Extension\Debug']->kint($this->env, $context, [0 => twig_get_array_keys_filter($this->sandbox->ensureToStringAllowed(($context["product"] ?? null), 39, $this->source))]));
        echo "



<div class=\"col-md-6\">

";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_imagen_categoria", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "

</div>

<div class=\"col-md-6\">

<h3> ";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo " </h3>

";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_categoria", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
        echo "

";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_marca_camisetas", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        echo "

<br>
";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation_price", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo "
<br>

";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_descripcion_corta", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "
<br>
";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variations", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "

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
        return array (  105 => 63,  100 => 61,  94 => 58,  88 => 55,  83 => 53,  78 => 51,  69 => 45,  60 => 39,  56 => 37,  54 => 36,  52 => 35,  48 => 33,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/ecommerce/templates/commerce/commerce-product.html.twig", "/var/www/html/web/themes/custom/ecommerce/templates/commerce/commerce-product.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 33, "keys" => 39);
        static $functions = array("kint" => 39);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'keys'],
                ['kint']
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

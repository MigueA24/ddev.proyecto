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

/* themes/custom/ecommerce/templates/commerce/field--commerce-product--field-imagen-categoria--camisetas.html.twig */
class __TwigTemplate_e83f48295180102267e84e185b785894 extends \Twig\Template
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
        // line 42
        $context["classes"] = [0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 44
($context["field_name"] ?? null), 44, $this->source))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 45
($context["field_type"] ?? null), 45, $this->source))), 3 => ("field--label-" . $this->sandbox->ensureToStringAllowed(        // line 46
($context["label_display"] ?? null), 46, $this->source))];
        // line 50
        $context["title_classes"] = [0 => "field--label", 1 => (((        // line 52
($context["label_display"] ?? null) == "visually_hidden")) ? ("sr-only") : (""))];
        // line 55
        echo "
";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("ecommerce/jhonatanslider"), "html", null, true);
        echo "
";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("flexslider/flexslider"), "html", null, true);
        echo "

";
        // line 59
        if (($context["label_hidden"] ?? null)) {
            // line 60
            echo "  ";
            if (($context["multiple"] ?? null)) {
                // line 61
                echo "
    <div";
                // line 62
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "field--items"], "method", false, false, true, 62), 62, $this->source), "html", null, true);
                echo ">

      ";
                // line 64
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\Core\Template\DebugExtension::dump($this->env, $context, ...[0 => $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), 0, [], "any", false, false, true, 64), "content", [], "any", false, false, true, 64)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#item"] ?? null) : null), "entity", [], "any", false, false, true, 64), "uri", [], "any", false, false, true, 64), "value", [], "any", false, false, true, 64), 64, $this->source)]), "html", null, true);
                echo "
      ";
                // line 66
                echo "
      ";
                // line 67
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\devel\Twig\Extension\Debug']->message($this->env, $context, [0 => $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), 0, [], "any", false, false, true, 67), "content", [], "any", false, false, true, 67)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#item"] ?? null) : null), "entity", [], "any", false, false, true, 67), "uri", [], "any", false, false, true, 67), "value", [], "any", false, false, true, 67), 67, $this->source))]));
                echo "

";
                // line 69
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\devel\Twig\Extension\Debug']->message($this->env, $context, [0 => Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), 0, [], "any", false, false, true, 69), "content", [], "any", false, false, true, 69)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#item"] ?? null) : null), "entity", [], "any", false, false, true, 69), "uri", [], "any", false, false, true, 69), "value", [], "any", false, false, true, 69), 69, $this->source), "thumbnail")]));
                echo "
";
                // line 70
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\devel\Twig\Extension\Debug']->message($this->env, $context, [0 => Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), 0, [], "any", false, false, true, 70), "content", [], "any", false, false, true, 70)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#item"] ?? null) : null), "entity", [], "any", false, false, true, 70), "uri", [], "any", false, false, true, 70), "value", [], "any", false, false, true, 70), 70, $this->source), "large")]));
                echo "

    <div id=\"divimagengrande\">
      <img id=\"zoom_03\" class=\"img-responsive\" src=\"";
                // line 73
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), 0, [], "any", false, false, true, 73), "content", [], "any", false, false, true, 73)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#item"] ?? null) : null), "entity", [], "any", false, false, true, 73), "uri", [], "any", false, false, true, 73), "value", [], "any", false, false, true, 73), 73, $this->source), "large"), "html", null, true);
                echo "\" data-zoom-image=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), 0, [], "any", false, false, true, 73), "content", [], "any", false, false, true, 73)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#item"] ?? null) : null), "entity", [], "any", false, false, true, 73), "uri", [], "any", false, false, true, 73), "value", [], "any", false, false, true, 73), 73, $this->source)), "html", null, true);
                echo "\"/>
    </div>

    <div id=\"galeria\">

      <div class=\"flexslider carousel\">
       <ul class=\"slides\">

      ";
                // line 81
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 82
                    echo "
      <li>

        <a href=\"#\" data-image=\"";
                    // line 85
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 85)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#item"] ?? null) : null), "entity", [], "any", false, false, true, 85), "uri", [], "any", false, false, true, 85), "value", [], "any", false, false, true, 85), 85, $this->source), "large"), "html", null, true);
                    echo "\" data-zoom-image=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 85)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["#item"] ?? null) : null), "entity", [], "any", false, false, true, 85), "uri", [], "any", false, false, true, 85), "value", [], "any", false, false, true, 85), 85, $this->source)), "html", null, true);
                    echo "\">

          ";
                    // line 87
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                    echo "

      </a>

    </li>

      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "
      </ul>
    </div>


  </div>

    </div>

<script type=\"text/javascript\" src=\"web/themes/custom/ecommerce/js/jhonatan/custom.js\"></script>

<script type=\"text/javascript\" src=\"web/themes/custom/ecommerce/js/jhonatan/flex.js\"></script>

  ";
            }
            // line 108
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/ecommerce/templates/commerce/field--commerce-product--field-imagen-categoria--camisetas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 108,  136 => 94,  123 => 87,  116 => 85,  111 => 82,  107 => 81,  94 => 73,  88 => 70,  84 => 69,  79 => 67,  76 => 66,  72 => 64,  67 => 62,  64 => 61,  61 => 60,  59 => 59,  54 => 57,  50 => 56,  47 => 55,  45 => 52,  44 => 50,  42 => 46,  41 => 45,  40 => 44,  39 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a field.
 *
 * To override output, copy the \"field.html.twig\" from the templates directory
 * to your theme's directory and customize it, just like customizing other
 * Drupal templates such as page.html.twig or node.html.twig.
 *
 * Instead of overriding the theming for all fields, you can also just override
 * theming for a subset of fields using
 * @link themeable Theme hook suggestions. @endlink For example,
 * here are some theme hook suggestions that can be used for a field_foo field
 * on an article node type:
 * - field--node--field-foo--article.html.twig
 * - field--node--field-foo.html.twig
 * - field--node--article.html.twig
 * - field--field-foo.html.twig
 * - field--text-with-summary.html.twig
 * - field.html.twig
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - label_hidden: Whether to show the field label or not.
 * - title_attributes: HTML attributes for the title.
 * - label: The label for the field.
 * - multiple: TRUE if a field can contain multiple items.
 * - items: List of all the field items. Each item contains:
 *   - attributes: List of HTML attributes for each item.
 *   - content: The field item's content.
 * - entity_type: The entity type to which the field belongs.
 * - field_name: The name of the field.
 * - field_type: The type of the field.
 * - label_display: The display settings for the label.
 *
 * @ingroup templates
 *
 * @see template_preprocess_field()
 */
#}
{%
  set classes = [
    'field',
    'field--name-' ~ field_name|clean_class,
    'field--type-' ~ field_type|clean_class,
    'field--label-' ~ label_display,
  ]
%}
{%
  set title_classes = [
    'field--label',
    label_display == 'visually_hidden' ? 'sr-only',
  ]
%}

{{ attach_library('ecommerce/jhonatanslider') }}
{{ attach_library('flexslider/flexslider') }}

{% if label_hidden %}
  {% if multiple %}

    <div{{ attributes.addClass(classes, 'field--items') }}>

      {{ dump( items.0.content[\"#item\"].entity.uri.value ) }}
      {# kint( file_url(items.0.content[\"#item\"].entity.uri.value )) #}

      {{ dpm(file_url(items.0.content[\"#item\"].entity.uri.value)) }}

{{ dpm(items.0.content[\"#item\"].entity.uri.value|image_style('thumbnail')) }}
{{ dpm(items.0.content[\"#item\"].entity.uri.value|image_style('large')) }}

    <div id=\"divimagengrande\">
      <img id=\"zoom_03\" class=\"img-responsive\" src=\"{{ items.0.content[\"#item\"].entity.uri.value|image_style('large') }}\" data-zoom-image=\"{{ file_url(items.0.content[\"#item\"].entity.uri.value ) }}\"/>
    </div>

    <div id=\"galeria\">

      <div class=\"flexslider carousel\">
       <ul class=\"slides\">

      {% for item in items %}

      <li>

        <a href=\"#\" data-image=\"{{ item.content[\"#item\"].entity.uri.value|image_style('large') }}\" data-zoom-image=\"{{ file_url(item.content[\"#item\"].entity.uri.value) }}\">

          {{ item.content }}

      </a>

    </li>

      {% endfor %}

      </ul>
    </div>


  </div>

    </div>

<script type=\"text/javascript\" src=\"web/themes/custom/ecommerce/js/jhonatan/custom.js\"></script>

<script type=\"text/javascript\" src=\"web/themes/custom/ecommerce/js/jhonatan/flex.js\"></script>

  {% endif %}

{% endif %}
", "themes/custom/ecommerce/templates/commerce/field--commerce-product--field-imagen-categoria--camisetas.html.twig", "/var/www/html/web/themes/custom/ecommerce/templates/commerce/field--commerce-product--field-imagen-categoria--camisetas.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "if" => 59, "for" => 81);
        static $filters = array("clean_class" => 44, "escape" => 56, "image_style" => 69);
        static $functions = array("attach_library" => 56, "dump" => 64, "dpm" => 67, "file_url" => 67);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'escape', 'image_style'],
                ['attach_library', 'dump', 'dpm', 'file_url']
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

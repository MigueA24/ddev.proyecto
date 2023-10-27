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

/* __string_template__e0eec386ce6d0859e28d6f3e9e4b3707 */
class __TwigTemplate_ee901263823a1654312437a8e5fcffc1 extends \Twig\Template
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
        // line 1
        echo "<div class=\"col-lg-4 col-md-6 espaciohaciaabajo\">
                    <div class=\"card\">

          
                        <img class=\"img-responsive\" src=\"";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_imagen_categoria"] ?? null), 5, $this->source), "html", null, true);
        echo "\">
                        <h4>";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 6, $this->source), "html", null, true);
        echo "</h4>
                        
                       <p>  ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_descripcion_corta"] ?? null), 8, $this->source), "html", null, true);
        echo " </p>
\t\t\t\t\t\t<div class=\"price-wrap h5\">
\t\t\t\t\t\t\t<span class=\"price-new\">";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["price__number"] ?? null), 10, $this->source), "html", null, true);
        echo "</span> 
\t\t\t\t\t\t</div>
                        <a href=\"";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_commerce_product"] ?? null), 12, $this->source), "html", null, true);
        echo "\" class=\"blue-button\">Ver detalles</a>
                    </div>
                </div>";
    }

    public function getTemplateName()
    {
        return "__string_template__e0eec386ce6d0859e28d6f3e9e4b3707";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  59 => 10,  54 => 8,  49 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"col-lg-4 col-md-6 espaciohaciaabajo\">
                    <div class=\"card\">

          
                        <img class=\"img-responsive\" src=\"{{ field_imagen_categoria }}\">
                        <h4>{{ title }}</h4>
                        
                       <p>  {{ field_descripcion_corta }} </p>
\t\t\t\t\t\t<div class=\"price-wrap h5\">
\t\t\t\t\t\t\t<span class=\"price-new\">{{ price__number }}</span> 
\t\t\t\t\t\t</div>
                        <a href=\"{{ view_commerce_product }}\" class=\"blue-button\">Ver detalles</a>
                    </div>
                </div>", "__string_template__e0eec386ce6d0859e28d6f3e9e4b3707", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
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

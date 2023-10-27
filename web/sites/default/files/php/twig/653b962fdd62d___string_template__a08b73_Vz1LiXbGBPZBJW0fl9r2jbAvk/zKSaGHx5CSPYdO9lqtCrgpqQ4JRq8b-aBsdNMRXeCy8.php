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

/* __string_template__a08b733494cfd80bed9688afa6bef9e5 */
class __TwigTemplate_a16d4355ebbbb1e2fe32b662455c1463 extends \Twig\Template
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
        echo "<div class=\"slidershow_wrapper\">
      <div class=\"slidershow_contenido\">
          <div class=\"slidershow_titulo\">
            <span>";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 4, $this->source), "html", null, true);
        echo "</span>
          </div>

          <div class=\"slidershow_body\">
            ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 8, $this->source), "html", null, true);
        echo " 
          </div>

          <div class=\"slidershow_enlace\">
            <a href=\"";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_ruta"] ?? null), 12, $this->source), "html", null, true);
        echo "\" class=\"btn btn-secondary\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_titulo_de_la_ruta"] ?? null), 12, $this->source), "html", null, true);
        echo "</a>
          </div>
      </div>
 </div>";
    }

    public function getTemplateName()
    {
        return "__string_template__a08b733494cfd80bed9688afa6bef9e5";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  51 => 8,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"slidershow_wrapper\">
      <div class=\"slidershow_contenido\">
          <div class=\"slidershow_titulo\">
            <span>{{ title }}</span>
          </div>

          <div class=\"slidershow_body\">
            {{ body }} 
          </div>

          <div class=\"slidershow_enlace\">
            <a href=\"{{ field_ruta }}\" class=\"btn btn-secondary\">{{ field_titulo_de_la_ruta }}</a>
          </div>
      </div>
 </div>", "__string_template__a08b733494cfd80bed9688afa6bef9e5", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 4);
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

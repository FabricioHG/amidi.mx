<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/contrib/bootstrap/templates/input/form-element-label.html.twig */
class __TwigTemplate_2d6b0d5fa33e4b325e72742b1705833b extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        $context["classes"] = ["control-label", (((        // line 24
($context["title_display"] ?? null) == "after")) ? ("option") : ("")), ((((        // line 25
($context["title_display"] ?? null) == "invisible") &&  !(($context["is_checkbox"] ?? null) || ($context["is_radio"] ?? null)))) ? ("sr-only") : ("")), ((        // line 26
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((        // line 27
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 30
        if ((( !Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null)) && (($context["title_display"] ?? null) == "invisible")) && (($context["is_checkbox"] ?? null) || ($context["is_radio"] ?? null)))) {
            // line 35
            $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["title", ($context["title"] ?? null)], "method", false, false, true, 35);
            // line 36
            $context["title"] = null;
        }
        // line 42
        if ((( !Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null)) || ($context["is_checkbox"] ?? null)) || ($context["is_radio"] ?? null))) {
            // line 43
            yield "<label";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 43), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["element"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            // line 44
            if (($context["description"] ?? null)) {
                // line 45
                yield "<p class=\"help-block\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true);
                yield "</p>";
            }
            // line 47
            yield "</label>";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title_display", "is_checkbox", "is_radio", "required", "title", "element", "description"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/bootstrap/templates/input/form-element-label.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  72 => 47,  67 => 45,  65 => 44,  59 => 43,  57 => 42,  54 => 36,  52 => 35,  50 => 30,  48 => 27,  47 => 26,  46 => 25,  45 => 24,  44 => 22,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a form element label.
 *
 * Available variables:
 * - element: an input element.
 * - title: The label's text.
 * - title_display: Elements title_display setting.
 * - description: element description.
 * - required: An indicator for whether the associated form element is required.
 * - is_checkbox: Whether the label is outputted in checkbox context.
 * - is_radio: Whether the label is outputted in radio button context.
 * - attributes: A list of HTML attributes for the label.
 *
 * @ingroup templates
 *
 * @see template_preprocess_form_element_label()
 */
#}
{%-
  set classes = [
    'control-label',
    title_display == 'after' ? 'option',
    title_display == 'invisible' and not (is_checkbox or is_radio) ? 'sr-only',
    required ? 'js-form-required',
    required ? 'form-required',
  ]
-%}
{% if title is not empty and title_display == 'invisible' and (is_checkbox or is_radio) -%}
  {#
  Clear but preserve label text as attribute (e.g. for screen readers) for
  checkboxes/radio buttons when it actually should be invisible.
  #}
  {%- set attributes = attributes.setAttribute('title', title) -%}
  {%- set title = null -%}
{%- endif -%}
{#
Labels for single checkboxes/radios contain the element itself and thus have
always to be rendered regardless of whether they have a title or not.
#}
{%- if title is not empty or is_checkbox or is_radio -%}
  <label{{ attributes.addClass(classes) }}>{{ element }}{{ title }}
    {%- if description -%}
      <p class=\"help-block\">{{ description }}</p>
    {%- endif -%}
  </label>
{%- endif -%}
", "themes/contrib/bootstrap/templates/input/form-element-label.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/amidi2025_git/themes/contrib/bootstrap/templates/input/form-element-label.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 22, "if" => 30];
        static $filters = ["escape" => 43];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                [],
                $this->source
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

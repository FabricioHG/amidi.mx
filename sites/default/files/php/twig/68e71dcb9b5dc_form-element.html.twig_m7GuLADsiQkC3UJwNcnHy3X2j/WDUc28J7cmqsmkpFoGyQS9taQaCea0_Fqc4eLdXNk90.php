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

/* themes/contrib/bootstrap/templates/input/form-element.html.twig */
class __TwigTemplate_8db29cf5363ecb686d48500d0b31244b extends Template
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
        // line 51
        $context["classes"] = ["form-item", "js-form-item", ("form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 54
($context["type"] ?? null))), ("js-form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 55
($context["type"] ?? null))), ("form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 56
($context["name"] ?? null))), ("js-form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 57
($context["name"] ?? null))), ((!CoreExtension::inFilter(        // line 58
($context["title_display"] ?? null), ["after", "before"])) ? ("form-no-label") : ("")), (((        // line 59
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), ((        // line 60
($context["is_form_group"] ?? null)) ? ("form-group") : ("")), ((        // line 61
($context["is_radio"] ?? null)) ? ("radio") : ("")), ((        // line 62
($context["is_checkbox"] ?? null)) ? ("checkbox") : ("")), ((        // line 63
($context["is_autocomplete"] ?? null)) ? ("form-autocomplete") : ("")), ((        // line 64
($context["has_error"] ?? null)) ? ("error has-error") : (""))];
        // line 67
        $context["description_classes"] = ["description", "help-block", (((        // line 70
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 73
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 73), "html", null, true);
        yield ">
  ";
        // line 74
        if (CoreExtension::inFilter(($context["label_display"] ?? null), ["before", "invisible"])) {
            // line 75
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 77
        yield "
  ";
        // line 78
        if (((($context["description_display"] ?? null) == "before") && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 78))) {
            // line 79
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 79), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 79), "html", null, true);
            yield ">
      ";
            // line 80
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 80), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 83
        yield "
  ";
        // line 84
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true);
        yield "

  ";
        // line 86
        if ((($context["label_display"] ?? null) == "after")) {
            // line 87
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 89
        yield "
  ";
        // line 90
        if (($context["errors"] ?? null)) {
            // line 91
            yield "    <div class=\"form-item--error-message alert alert-danger alert-sm\">
      ";
            // line 92
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 95
        yield "
  ";
        // line 96
        if ((CoreExtension::inFilter(($context["description_display"] ?? null), ["after", "invisible"]) && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 96))) {
            // line 97
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 97), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 97), "html", null, true);
            yield ">
      ";
            // line 98
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 98), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 101
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["type", "name", "title_display", "disabled", "is_form_group", "is_radio", "is_checkbox", "is_autocomplete", "has_error", "description_display", "attributes", "label_display", "label", "description", "children", "errors"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/bootstrap/templates/input/form-element.html.twig";
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
        return array (  135 => 101,  129 => 98,  124 => 97,  122 => 96,  119 => 95,  113 => 92,  110 => 91,  108 => 90,  105 => 89,  99 => 87,  97 => 86,  92 => 84,  89 => 83,  83 => 80,  78 => 79,  76 => 78,  73 => 77,  67 => 75,  65 => 74,  60 => 73,  58 => 70,  57 => 67,  55 => 64,  54 => 63,  53 => 62,  52 => 61,  51 => 60,  50 => 59,  49 => 58,  48 => 57,  47 => 56,  46 => 55,  45 => 54,  44 => 51,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a form element.
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - errors: (optional) Any inline error messages to display for this form
 *   element; may not be set.
 * - has_error: (optional) Flag indicating whether to add the \"has_error\"
 *   Bootstrap class for this form element.
 * - required: The required marker, or empty if the associated form element is
 *   not required.
 * - type: The type of the element.
 * - name: The name of the element.
 * - label: A rendered label element.
 * - label_display: Label display setting. It can have these values:
 *   - before: The label is output before the element. This is the default.
 *     The label includes the #title and the required marker, if #required.
 *   - after: The label is output after the element. For example, this is used
 *     for radio and checkbox #type elements. If the #title is empty but the
 *     field is #required, the label will contain only the required marker.
 *   - invisible: Labels are critical for screen readers to enable them to
 *     properly navigate through forms but can be visually distracting. This
 *     property hides the label for everyone except screen readers.
 *   - attribute: Set the title attribute on the element to create a tooltip but
 *     output no label element. This is supported only for checkboxes and radios
 *     in \\Drupal\\Core\\Render\\Element\\CompositeFormElementTrait::preRenderCompositeFormElement().
 *     It is used where a visual label is not needed, such as a table of
 *     checkboxes where the row and column provide the context. The tooltip will
 *     include the title and required marker.
 * - description: (optional) A list of description properties containing:
 *    - content: A description of the form element, may not be set.
 *    - attributes: (optional) A list of HTML attributes to apply to the
 *      description content wrapper. Will only be set when description is set.
 * - description_display: Description display setting. It can have these values:
 *   - before: The description is output before the element.
 *   - after: The description is output after the element. This is the default
 *     value.
 *   - invisible: The description is output after the element, hidden visually
 *     but available to screen readers.
 * - disabled: True if the element is disabled.
 * - title_display: Title display setting.
 *
 * @ingroup templates
 *
 * @see template_preprocess_form_element()
 */
#}
{%
  set classes = [
    'form-item',
    'js-form-item',
    'form-type-' ~ type|clean_class,
    'js-form-type-' ~ type|clean_class,
    'form-item-' ~ name|clean_class,
    'js-form-item-' ~ name|clean_class,
    title_display not in ['after', 'before'] ? 'form-no-label',
    disabled == 'disabled' ? 'form-disabled',
    is_form_group ? 'form-group',
    is_radio ? 'radio',
    is_checkbox ? 'checkbox',
    is_autocomplete ? 'form-autocomplete',
    has_error ? 'error has-error'
  ]
%}{%
  set description_classes = [
    'description',
    'help-block',
    description_display == 'invisible' ? 'visually-hidden',
  ]
%}
<div{{ attributes.addClass(classes) }}>
  {% if label_display in ['before', 'invisible'] %}
    {{ label }}
  {% endif %}

  {% if description_display == 'before' and description.content %}
    <div{{ description.attributes.addClass(description_classes) }}>
      {{ description.content }}
    </div>
  {% endif %}

  {{ children }}

  {% if label_display == 'after' %}
    {{ label }}
  {% endif %}

  {% if errors %}
    <div class=\"form-item--error-message alert alert-danger alert-sm\">
      {{ errors }}
    </div>
  {% endif %}

  {% if description_display in ['after', 'invisible'] and description.content %}
    <div{{ description.attributes.addClass(description_classes) }}>
      {{ description.content }}
    </div>
  {% endif %}
</div>
", "themes/contrib/bootstrap/templates/input/form-element.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/amidi2025/themes/contrib/bootstrap/templates/input/form-element.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 51, "if" => 74];
        static $filters = ["clean_class" => 54, "escape" => 73];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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

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

/* themes/drudg8b3/templates/input--button.html.twig */
class __TwigTemplate_68876a7d452630faa118b141d57f3ff7 extends Template
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

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "input.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("input.html.twig", "themes/drudg8b3/templates/input--button.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["type", "icon", "icon_position", "icon_only", "attributes", "label", "children"]);    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 26
        yield "  ";
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 27
            yield "
  ";
            // line 29
            $context["classes"] = ["btn", (((            // line 31
($context["type"] ?? null) == "submit")) ? ("js-form-submit") : ("")), ((((            // line 32
($context["icon"] ?? null) && ($context["icon_position"] ?? null)) &&  !($context["icon_only"] ?? null))) ? (("icon-" . ($context["icon_position"] ?? null))) : (""))];
            // line 35
            yield "    ";
            if ((($context["icon"] ?? null) && ($context["icon_only"] ?? null))) {
                // line 36
                yield "      <button";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null), "icon-only"], "method", false, false, true, 36), "removeAttribute", ["name"], "method", false, false, true, 36), "setAttribute", ["name", CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "value", [], "any", false, false, true, 36)], "method", false, false, true, 36), "html", null, true);
                yield ">
        <span class=\"sr-only\">";
                // line 37
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
                yield "</span>
        ";
                // line 38
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["icon"] ?? null), "html", null, true);
                yield "
      </button>
    ";
            } else {
                // line 41
                yield "      ";
                if ((($context["icon_position"] ?? null) == "after")) {
                    // line 42
                    yield "        <button";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 42), "html", null, true);
                    yield ">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["icon"] ?? null), "html", null, true);
                    yield "</button>";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true);
                    yield "
      ";
                } else {
                    // line 44
                    yield "        <button";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 44), "html", null, true);
                    yield ">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["icon"] ?? null), "html", null, true);
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
                    yield "</button>";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true);
                    yield "
      ";
                }
                // line 46
                yield "    ";
            }
            // line 47
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true);
            yield "
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 26
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($_v0));
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/drudg8b3/templates/input--button.html.twig";
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
        return array (  124 => 26,  117 => 47,  114 => 46,  103 => 44,  92 => 42,  89 => 41,  83 => 38,  79 => 37,  74 => 36,  71 => 35,  69 => 32,  68 => 31,  67 => 29,  64 => 27,  61 => 26,  54 => 25,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"input.html.twig\" %}
{#
/**
 * @file
 * Theme suggestion for \"button\" input form element.
 *
 * Available variables:
 * - attributes: A list of HTML attributes for the input element.
 * - children: Optional additional rendered elements.
 * - icon: An icon.
 * - icon_only: Flag to display only the icon and not the label.
 * - icon_position: Where an icon should be displayed.
 * - label: button label.
 * - prefix: Markup to display before the input element.
 * - suffix: Markup to display after the input element.
 * - type: The type of input.
 *
 * @ingroup templates
 *
 * @see \\Drupal\\bootstrap\\Plugin\\Preprocess\\InputButton
 * @see \\Drupal\\bootstrap\\Plugin\\Preprocess\\Input
 * @see template_preprocess_input()
 */
#}
{% block input %}
  {% apply spaceless %}

  {%
    set classes = [
      'btn',
      type == 'submit' ? 'js-form-submit',
      icon and icon_position and not icon_only ? 'icon-' ~ icon_position,
    ]
  %}
    {% if icon and icon_only %}
      <button{{ attributes.addClass(classes, 'icon-only').removeAttribute('name').setAttribute('name', attributes.value) }}>
        <span class=\"sr-only\">{{ label }}</span>
        {{ icon }}
      </button>
    {% else %}
      {% if icon_position == 'after' %}
        <button{{ attributes.addClass(classes) }}>{{ label }}{{ icon }}</button>{{ children }}
      {% else %}
        <button{{ attributes.addClass(classes) }}>{{ icon }}{{ label }}</button>{{ children }}
      {% endif %}
    {% endif %}
    {{ children }}
  {% endapply %}
{% endblock %}

", "themes/drudg8b3/templates/input--button.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/amidi2025_git/themes/drudg8b3/templates/input--button.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["extends" => 1, "apply" => 26, "set" => 29, "if" => 35];
        static $filters = ["escape" => 36, "spaceless" => 26];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'apply', 'set', 'if'],
                ['escape', 'spaceless'],
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

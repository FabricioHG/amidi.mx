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

/* input.html.twig */
class __TwigTemplate_967dded6812b7a912705b3d21f4fcc42 extends Template
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
            'input' => [$this, 'block_input'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 23
            yield "  ";
            if (($context["input_group"] ?? null)) {
                // line 24
                yield "    <div class=\"input-group\">
  ";
            }
            // line 26
            yield "
  ";
            // line 27
            if (($context["prefix"] ?? null)) {
                // line 28
                yield "    ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true);
                yield "
  ";
            }
            // line 30
            yield "
  ";
            // line 31
            yield from $this->unwrap()->yieldBlock('input', $context, $blocks);
            // line 34
            yield "
  ";
            // line 35
            if (($context["suffix"] ?? null)) {
                // line 36
                yield "    ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true);
                yield "
  ";
            }
            // line 38
            yield "
  ";
            // line 39
            if (($context["input_group"] ?? null)) {
                // line 40
                yield "    </div>
  ";
            }
            // line 42
            yield "
  ";
            // line 43
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 22
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($_v0));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["input_group", "prefix", "suffix", "children", "attributes"]);        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "    <input";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
        yield " />
  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "input.html.twig";
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
        return array (  112 => 32,  105 => 31,  99 => 22,  93 => 43,  90 => 42,  86 => 40,  84 => 39,  81 => 38,  75 => 36,  73 => 35,  70 => 34,  68 => 31,  65 => 30,  59 => 28,  57 => 27,  54 => 26,  50 => 24,  47 => 23,  45 => 22,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for an 'input' #type form element.
 *
 * Available variables:
 * - attributes: A list of HTML attributes for the input element.
 * - children: Optional additional rendered elements.
 * - icon: An icon.
 * - input_group: Flag to display as an input group.
 * - icon_position: Where an icon should be displayed.
 * - prefix: Markup to display before the input element.
 * - suffix: Markup to display after the input element.
 * - type: The type of input.
 *
 * @ingroup templates
 *
 * @see \\Drupal\\bootstrap\\Plugin\\Preprocess\\Input
 * @see template_preprocess_input()
 */
#}
{% apply spaceless %}
  {% if input_group %}
    <div class=\"input-group\">
  {% endif %}

  {% if prefix %}
    {{ prefix }}
  {% endif %}

  {% block input %}
    <input{{ attributes }} />
  {% endblock %}

  {% if suffix %}
    {{ suffix }}
  {% endif %}

  {% if input_group %}
    </div>
  {% endif %}

  {{ children }}
{% endapply %}
", "input.html.twig", "themes/contrib/bootstrap/templates/input/input.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["apply" => 22, "if" => 23, "block" => 31];
        static $filters = ["escape" => 28, "spaceless" => 22];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'if', 'block'],
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

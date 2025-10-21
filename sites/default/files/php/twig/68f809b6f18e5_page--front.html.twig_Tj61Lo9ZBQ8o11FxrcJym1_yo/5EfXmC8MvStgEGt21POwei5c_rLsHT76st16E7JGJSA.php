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

/* themes/drudg8b3/templates/page--front.html.twig */
class __TwigTemplate_62e0ca42eb5da093939d6fa705cc6a27 extends Template
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
            'navbar' => [$this, 'block_navbar'],
            'header' => [$this, 'block_header'],
            'liston' => [$this, 'block_liston'],
            'precontent' => [$this, 'block_precontent'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'precontent2' => [$this, 'block_precontent2'],
            'slideshow' => [$this, 'block_slideshow'],
            'precontent3' => [$this, 'block_precontent3'],
            'main' => [$this, 'block_main'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'content2' => [$this, 'block_content2'],
            'content3' => [$this, 'block_content3'],
            'content4' => [$this, 'block_content4'],
            'content5' => [$this, 'block_content5'],
            'content6' => [$this, 'block_content6'],
            'content7' => [$this, 'block_content7'],
            'content8' => [$this, 'block_content8'],
            'content9' => [$this, 'block_content9'],
            'content10' => [$this, 'block_content10'],
            'content11' => [$this, 'block_content11'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 54
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 54), "fluid_container", [], "any", false, false, true, 54)) ? ("container-fluid") : ("container"));
        // line 56
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 56) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 56))) {
            // line 57
            yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        }
        // line 145
        yield "

";
        // line 148
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "precontent2", [], "any", false, false, true, 148)) {
            // line 149
            yield from $this->unwrap()->yieldBlock('precontent2', $context, $blocks);
        }
        // line 157
        yield "
";
        // line 159
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 159)) {
            // line 160
            yield from $this->unwrap()->yieldBlock('slideshow', $context, $blocks);
        }
        // line 168
        yield "
";
        // line 170
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "precontent3", [], "any", false, false, true, 170)) {
            // line 171
            yield from $this->unwrap()->yieldBlock('precontent3', $context, $blocks);
        }
        // line 179
        yield "

";
        // line 182
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 237
        yield "
";
        // line 238
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content2", [], "any", false, false, true, 238)) {
            // line 239
            yield from $this->unwrap()->yieldBlock('content2', $context, $blocks);
        }
        // line 257
        yield "
";
        // line 258
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content3", [], "any", false, false, true, 258)) {
            // line 259
            yield from $this->unwrap()->yieldBlock('content3', $context, $blocks);
        }
        // line 267
        yield "
";
        // line 268
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content4", [], "any", false, false, true, 268)) {
            // line 269
            yield from $this->unwrap()->yieldBlock('content4', $context, $blocks);
        }
        // line 277
        yield "
";
        // line 278
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content5", [], "any", false, false, true, 278)) {
            // line 279
            yield from $this->unwrap()->yieldBlock('content5', $context, $blocks);
        }
        // line 287
        yield "
";
        // line 288
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content6", [], "any", false, false, true, 288)) {
            // line 289
            yield from $this->unwrap()->yieldBlock('content6', $context, $blocks);
        }
        // line 297
        yield "
";
        // line 298
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content7", [], "any", false, false, true, 298)) {
            // line 299
            yield from $this->unwrap()->yieldBlock('content7', $context, $blocks);
        }
        // line 307
        yield "
";
        // line 308
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content8", [], "any", false, false, true, 308)) {
            // line 309
            yield from $this->unwrap()->yieldBlock('content8', $context, $blocks);
        }
        // line 317
        yield "
";
        // line 318
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content9", [], "any", false, false, true, 318)) {
            // line 319
            yield from $this->unwrap()->yieldBlock('content9', $context, $blocks);
        }
        // line 327
        yield "
";
        // line 328
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content10", [], "any", false, false, true, 328)) {
            // line 329
            yield from $this->unwrap()->yieldBlock('content10', $context, $blocks);
        }
        // line 337
        yield "
";
        // line 338
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content11", [], "any", false, false, true, 338)) {
            // line 339
            yield from $this->unwrap()->yieldBlock('content11', $context, $blocks);
        }
        // line 347
        yield "
";
        // line 348
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 348)) {
            // line 349
            yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "page", "navbar_attributes", "breadcrumb", "content_attributes"]);        yield from [];
    }

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 59
        $context["navbar_classes"] = ["navbar", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 61
($context["theme"] ?? null), "settings", [], "any", false, false, true, 61), "navbar_inverse", [], "any", false, false, true, 61)) ? ("navbar-inverse") : ("navbar-default")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 62
($context["theme"] ?? null), "settings", [], "any", false, false, true, 62), "navbar_position", [], "any", false, false, true, 62)) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 62), "navbar_position", [], "any", false, false, true, 62)))) : (($context["container"] ?? null)))];
        // line 65
        yield "<header class=\"navbar navbar-default\" id=\"navbar\">
  ";
        // line 67
        yield "  ";
        // line 68
        yield "  ";
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 99
        yield "  ";
        // line 100
        yield "\t ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "liston", [], "any", false, false, true, 100)) {
            // line 101
            yield "  \t\t";
            yield from $this->unwrap()->yieldBlock('liston', $context, $blocks);
            // line 106
            yield "  \t";
        }
        // line 107
        yield " \t";
        // line 108
        yield "\t\t";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "precontent", [], "any", false, false, true, 108)) {
            // line 109
            yield "\t\t";
            yield from $this->unwrap()->yieldBlock('precontent', $context, $blocks);
            // line 123
            yield "\t";
        }
        // line 124
        yield "
  ";
        // line 125
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [($context["container"] ?? null)], "method", false, false, true, 125)) {
            // line 126
            yield "  <div id=\"navigation\" class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
            yield "\">
    <div class=\"container navigation\">
      ";
        }
        // line 129
        yield "      <div class=\"navbar-header\">
        ";
        // line 130
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 130), "html", null, true);
        yield "
      </div>
      ";
        // line 133
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 133)) {
            // line 134
            yield "      <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
        ";
            // line 135
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 135), "html", null, true);
            yield "
      </div>
      ";
        }
        // line 138
        yield "      ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [($context["container"] ?? null)], "method", false, false, true, 138)) {
            // line 139
            yield "    </div>
    ";
        }
        // line 141
        yield "  </div>
</header>
";
        yield from [];
    }

    // line 68
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 69
        yield "  <div id=\"header\" class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
        yield "\">
    <div class=\"container header\">
      <div class=\"content-title\">
        <div class=\"button menu col-sm-2 col-xs-2\">
          ";
        // line 74
        yield "          ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 74)) {
            // line 75
            yield "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 76
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle navigation"));
            yield "
            </span>
            <span class=\"icon-bar\">
            </span>
            <span class=\"icon-bar\">
            </span>
            <span class=\"icon-bar\">
            </span>
          </button>
        </div>
        ";
            // line 91
            yield "        <div>
          ";
            // line 92
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 92), "html", null, true);
            yield "
        </div>
      </div>
    </div>
    </div>
    ";
        }
        // line 98
        yield "  ";
        yield from [];
    }

    // line 101
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_liston(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 102
        yield "  \t\t\t<div id=\"liston\" class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
        yield "\">
    \t\t\t";
        // line 103
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "liston", [], "any", false, false, true, 103), "html", null, true);
        yield "
  \t\t\t</div>
  \t\t";
        yield from [];
    }

    // line 109
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_precontent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 110
        yield "   \t\t";
        // line 111
        yield "\t\t    ";
        if (($context["breadcrumb"] ?? null)) {
            // line 112
            yield "\t\t      ";
            yield from $this->unwrap()->yieldBlock('breadcrumb', $context, $blocks);
            // line 115
            yield "\t\t    ";
        }
        // line 116
        yield "    
\t\t<div id=\"precontent\" class=\"";
        // line 117
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
        yield "\">
\t\t  <div class=\"container precontent\">
\t\t    ";
        // line 119
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "precontent", [], "any", false, false, true, 119), "html", null, true);
        yield "
\t\t  </div>
\t\t</div>
\t\t";
        yield from [];
    }

    // line 112
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 113
        yield "\t\t        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["breadcrumb"] ?? null), "html", null, true);
        yield "
\t\t      ";
        yield from [];
    }

    // line 149
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_precontent2(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 150
        yield "<div id=\"precontent2\" class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
        yield "\">
  <div class=\"precontent2 container\">
    ";
        // line 152
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "precontent2", [], "any", false, false, true, 152), "html", null, true);
        yield "
  </div>
</div>
";
        yield from [];
    }

    // line 160
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_slideshow(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 161
        yield "<div id=\"slideshow\" class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
        yield "\">
  <div class=\"slideshow\">
    ";
        // line 163
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 163), "html", null, true);
        yield "
  </div>
</div>
";
        yield from [];
    }

    // line 171
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_precontent3(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 172
        yield "<div id=\"precontent3\" class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
        yield "\">
  <div class=\"precontent3 container\">
    ";
        // line 174
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "precontent3", [], "any", false, false, true, 174), "html", null, true);
        yield "
  </div>
</div>
";
        yield from [];
    }

    // line 182
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 183
        yield "<div role=\"main\" id=\"main-container\" class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
        yield " js-quickedit-main-content\">
  <div class=\"container main-container\">
    <div class=\"row\">
      ";
        // line 187
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 187)) {
            // line 188
            yield "      ";
            yield from $this->unwrap()->yieldBlock('sidebar_first', $context, $blocks);
            // line 193
            yield "      ";
        }
        // line 194
        yield "      ";
        // line 195
        yield "      ";
        // line 196
        $context["content_classes"] = [(((CoreExtension::getAttribute($this->env, $this->source,         // line 197
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 197) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 197))) ? ("col-sm-6") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 198
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 198) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 198)))) ? ("col-sm-9") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 199
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 199) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 199)))) ? ("col-sm-9") : ("")), (((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,         // line 200
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 200)) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 200)))) ? ("col-sm-12") : (""))];
        // line 203
        yield "      <section";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["content_classes"] ?? null)], "method", false, false, true, 203), "html", null, true);
        yield ">
        ";
        // line 205
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 205)) {
            // line 206
            yield "        ";
            yield from $this->unwrap()->yieldBlock('highlighted', $context, $blocks);
            // line 210
            yield "        ";
        }
        // line 211
        yield "        ";
        // line 212
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 212)) {
            // line 213
            yield "        ";
            yield from $this->unwrap()->yieldBlock('help', $context, $blocks);
            // line 216
            yield "        ";
        }
        // line 217
        yield "        ";
        // line 218
        yield "        ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 223
        yield "      
        </section>
      ";
        // line 226
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 226)) {
            // line 227
            yield "      ";
            yield from $this->unwrap()->yieldBlock('sidebar_second', $context, $blocks);
            // line 232
            yield "      ";
        }
        // line 233
        yield "    </div>
  </div>
</div>
";
        yield from [];
    }

    // line 188
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_first(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 189
        yield "      <aside class=\"col-sm-3\" role=\"complementary\">
        ";
        // line 190
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 190), "html", null, true);
        yield "
      </aside>
      ";
        yield from [];
    }

    // line 206
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_highlighted(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 207
        yield "        <div class=\"highlighted\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 207), "html", null, true);
        yield "
        </div>
        ";
        yield from [];
    }

    // line 213
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 214
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 214), "html", null, true);
        yield "
        ";
        yield from [];
    }

    // line 218
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 219
        yield "        <a id=\"main-content\">
        </a>
        ";
        // line 221
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 221), "html", null, true);
        yield "
        ";
        yield from [];
    }

    // line 227
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_second(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 228
        yield "      <aside class=\"col-sm-3\" role=\"complementary\">
        ";
        // line 229
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 229), "html", null, true);
        yield "
      </aside>
      ";
        yield from [];
    }

    // line 239
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content2(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 240
        yield "<div id=\"content2\" class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
        yield "\">
  <div class=\"container content2\">
    ";
        // line 242
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content2", [], "any", false, false, true, 242), "html", null, true);
        yield "
     
    ";
        // line 245
        yield "        <div class=\"cont_formulario\">
          <div class=\"cont_img itm\">
            <img src=\"/themes/drudg8b3/images/amidi_form.png\">
          </div>
          <div class=\"itm_formulario itm\"> 
          ";
        // line 250
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("webform", "inscripcion"), "html", null, true);
        yield "
          </div>
        </div>
      </div>
</div>
";
        yield from [];
    }

    // line 259
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content3(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 260
        yield "<div id=\"content3\" class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
        yield "\">
  <div class=\"container content3\">
    ";
        // line 262
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content3", [], "any", false, false, true, 262), "html", null, true);
        yield "
  </div>
</div>
";
        yield from [];
    }

    // line 269
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content4(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 270
        yield "<div id=\"content4\" class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
        yield "\">
  <div class=\"container content4\">
    ";
        // line 272
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content4", [], "any", false, false, true, 272), "html", null, true);
        yield "
  </div>
</div>
";
        yield from [];
    }

    // line 279
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content5(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 280
        yield "<div id=\"content5\" class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
        yield "\">
  <div class=\"container content5\">
    ";
        // line 282
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content5", [], "any", false, false, true, 282), "html", null, true);
        yield "
  </div>
</div>
";
        yield from [];
    }

    // line 289
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content6(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 290
        yield "<div id=\"content6\" class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
        yield "\">
  <div class=\"container content6\">
    ";
        // line 292
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content6", [], "any", false, false, true, 292), "html", null, true);
        yield "
  </div>
</div>
";
        yield from [];
    }

    // line 299
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content7(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 300
        yield "<div id=\"content7\" class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
        yield "\">
  <div class=\"container content7\">
    ";
        // line 302
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content7", [], "any", false, false, true, 302), "html", null, true);
        yield "
  </div>
</div>
";
        yield from [];
    }

    // line 309
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content8(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 310
        yield "<div id=\"content8\" class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
        yield "\">
  <div class=\"container content8\">
    ";
        // line 312
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content8", [], "any", false, false, true, 312), "html", null, true);
        yield "
  </div>
</div>
";
        yield from [];
    }

    // line 319
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content9(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 320
        yield "<div id=\"content9\" class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
        yield "\">
  <div class=\"container content9\">
    ";
        // line 322
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content9", [], "any", false, false, true, 322), "html", null, true);
        yield "
  </div>
</div>
";
        yield from [];
    }

    // line 329
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content10(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 330
        yield "<div id=\"content10\" class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
        yield "\">
  <div class=\"container content10\">
    ";
        // line 332
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content10", [], "any", false, false, true, 332), "html", null, true);
        yield "
  </div>
</div>
";
        yield from [];
    }

    // line 339
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content11(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 340
        yield "<div id=\"content11\" class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
        yield "\">
  <div class=\"content11\">
    ";
        // line 342
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content11", [], "any", false, false, true, 342), "html", null, true);
        yield "
  </div>
</div>
";
        yield from [];
    }

    // line 349
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 350
        yield "<footer id=\"footer\" class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
        yield "\">
  <div class=\"container footer\">
    ";
        // line 352
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 352), "html", null, true);
        yield "
  </div>
</footer>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/drudg8b3/templates/page--front.html.twig";
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
        return array (  889 => 352,  883 => 350,  876 => 349,  867 => 342,  861 => 340,  854 => 339,  845 => 332,  839 => 330,  832 => 329,  823 => 322,  817 => 320,  810 => 319,  801 => 312,  795 => 310,  788 => 309,  779 => 302,  773 => 300,  766 => 299,  757 => 292,  751 => 290,  744 => 289,  735 => 282,  729 => 280,  722 => 279,  713 => 272,  707 => 270,  700 => 269,  691 => 262,  685 => 260,  678 => 259,  667 => 250,  660 => 245,  655 => 242,  649 => 240,  642 => 239,  634 => 229,  631 => 228,  624 => 227,  617 => 221,  613 => 219,  606 => 218,  598 => 214,  591 => 213,  582 => 207,  575 => 206,  567 => 190,  564 => 189,  557 => 188,  549 => 233,  546 => 232,  543 => 227,  540 => 226,  536 => 223,  533 => 218,  531 => 217,  528 => 216,  525 => 213,  522 => 212,  520 => 211,  517 => 210,  514 => 206,  511 => 205,  506 => 203,  504 => 200,  503 => 199,  502 => 198,  501 => 197,  500 => 196,  498 => 195,  496 => 194,  493 => 193,  490 => 188,  487 => 187,  480 => 183,  473 => 182,  464 => 174,  458 => 172,  451 => 171,  442 => 163,  436 => 161,  429 => 160,  420 => 152,  414 => 150,  407 => 149,  399 => 113,  392 => 112,  383 => 119,  378 => 117,  375 => 116,  372 => 115,  369 => 112,  366 => 111,  364 => 110,  357 => 109,  349 => 103,  344 => 102,  337 => 101,  332 => 98,  323 => 92,  320 => 91,  307 => 76,  304 => 75,  301 => 74,  293 => 69,  286 => 68,  279 => 141,  275 => 139,  272 => 138,  266 => 135,  263 => 134,  260 => 133,  255 => 130,  252 => 129,  245 => 126,  243 => 125,  240 => 124,  237 => 123,  234 => 109,  231 => 108,  229 => 107,  226 => 106,  223 => 101,  220 => 100,  218 => 99,  215 => 68,  213 => 67,  210 => 65,  208 => 62,  207 => 61,  206 => 59,  199 => 57,  192 => 349,  190 => 348,  187 => 347,  184 => 339,  182 => 338,  179 => 337,  176 => 329,  174 => 328,  171 => 327,  168 => 319,  166 => 318,  163 => 317,  160 => 309,  158 => 308,  155 => 307,  152 => 299,  150 => 298,  147 => 297,  144 => 289,  142 => 288,  139 => 287,  136 => 279,  134 => 278,  131 => 277,  128 => 269,  126 => 268,  123 => 267,  120 => 259,  118 => 258,  115 => 257,  112 => 239,  110 => 238,  107 => 237,  105 => 182,  101 => 179,  98 => 171,  96 => 170,  93 => 168,  90 => 160,  88 => 159,  85 => 157,  82 => 149,  80 => 148,  76 => 145,  73 => 57,  71 => 56,  69 => 54,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
* @file
* Default theme implementation to display a single page.
*
* The doctype, html, head and body tags are not in this template. Instead they
* can be found in the html.html.twig template in this directory.
*
* Available variables:
*
* General utility variables:
* - base_path: The base URL path of the Drupal installation. Will usually be
*   \"/\" unless you have installed Drupal in a sub-directory.
* - is_front: A flag indicating if the current page is the front page.
* - logged_in: A flag indicating if the user is registered and signed in.
* - is_admin: A flag indicating if the user has permission to access
*   administration pages.
*
* Site identity:
* - front_page: The URL of the front page. Use this instead of base_path when
*   linking to the front page. This includes the language domain or prefix.
*
* Page content (in order of occurrence in the default page.html.twig):
* - title_prefix: Additional output populated by modules, intended to be
*   displayed in front of the main title tag that appears in the template.
* - title: The page title, for use in the actual content.
* - title_suffix: Additional output populated by modules, intended to be
*   displayed after the main title tag that appears in the template.
* - messages: Status and error messages. Should be displayed prominently.
* - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
*   view and edit tabs when displaying a node).
* - node: Fully loaded node, if there is an automatically-loaded node
*   associated with the page and the node ID is the second argument in the
*   page's path (e.g. node/12345 and node/12345/revisions, but not
*   comment/reply/12345).
*
* Regions:
* - page.header: Items for the header region.
* - page.navigation: Items for the navigation region.
* - page.navigation_collapsible: Items for the navigation (collapsible) region.
* - page.highlighted: Items for the highlighted content region.
* - page.help: Dynamic help text, mostly for admin pages.
* - page.content: The main content of the current page.
* - page.sidebar_first: Items for the first sidebar.
* - page.sidebar_second: Items for the second sidebar.
* - page.footer: Items for the footer region.
*
* @ingroup templates
*
* @see template_preprocess_page()
* @see html.html.twig
*/
#}
{% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}
{# Navbar #}
{% if page.navigation or page.navigation_collapsible %}
{% block navbar %}
{%
set navbar_classes = [
'navbar',
theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',
theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,
]
%}
<header class=\"navbar navbar-default\" id=\"navbar\">
  {# Header #}
  {#% if page.header %#}
  {% block header %}
  <div id=\"header\" class=\"{{ container }}\">
    <div class=\"container header\">
      <div class=\"content-title\">
        <div class=\"button menu col-sm-2 col-xs-2\">
          {# .btn-navbar is used as the toggle for collapsed navbar content #}
          {% if page.navigation_collapsible %}
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">{{ 'Toggle navigation'|t }}
            </span>
            <span class=\"icon-bar\">
            </span>
            <span class=\"icon-bar\">
            </span>
            <span class=\"icon-bar\">
            </span>
          </button>
        </div>
        {#
        <div class=\"col-sm-2 col-xs-12\">
          {{ drupal_block('search_form_block') }}
        </div>
        #}
        <div>
          {{ page.header }}
        </div>
      </div>
    </div>
    </div>
    {% endif %}
  {% endblock %}
  {#% endif %#}
\t {% if page.liston %}
  \t\t{% block liston %}
  \t\t\t<div id=\"liston\" class=\"{{ container }}\">
    \t\t\t{{ page.liston }}
  \t\t\t</div>
  \t\t{% endblock %}
  \t{% endif %}
 \t{# precontent #}
\t\t{% if page.precontent %}
\t\t{% block precontent %}
   \t\t{# Breadcrumbs #}
\t\t    {% if breadcrumb %}
\t\t      {% block breadcrumb %}
\t\t        {{ breadcrumb }}
\t\t      {% endblock %}
\t\t    {% endif %}
    
\t\t<div id=\"precontent\" class=\"{{ container }}\">
\t\t  <div class=\"container precontent\">
\t\t    {{ page.precontent }}
\t\t  </div>
\t\t</div>
\t\t{% endblock %}
\t{% endif %}

  {% if not navbar_attributes.hasClass(container) %}
  <div id=\"navigation\" class=\"{{ container }}\">
    <div class=\"container navigation\">
      {% endif %}
      <div class=\"navbar-header\">
        {{ page.navigation }}
      </div>
      {# Navigation (collapsible) #}
      {% if page.navigation_collapsible %}
      <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
        {{ page.navigation_collapsible }}
      </div>
      {% endif %}
      {% if not navbar_attributes.hasClass(container) %}
    </div>
    {% endif %}
  </div>
</header>
{% endblock %}
{% endif %}


{# Precontent2  #}
{% if page.precontent2 %}
{% block precontent2 %}
<div id=\"precontent2\" class=\"{{ container }}\">
  <div class=\"precontent2 container\">
    {{ page.precontent2 }}
  </div>
</div>
{% endblock %}
{% endif %}

{# slideshow #}
{% if page.slideshow %}
{% block slideshow %}
<div id=\"slideshow\" class=\"{{ container }}\">
  <div class=\"slideshow\">
    {{ page.slideshow }}
  </div>
</div>
{% endblock %}
{% endif %}

{# Precontent3  #}
{% if page.precontent3 %}
{% block precontent3 %}
<div id=\"precontent3\" class=\"{{ container }}\">
  <div class=\"precontent3 container\">
    {{ page.precontent3 }}
  </div>
</div>
{% endblock %}
{% endif %}


{# Main #}
{% block main %}
<div role=\"main\" id=\"main-container\" class=\"{{ container }} js-quickedit-main-content\">
  <div class=\"container main-container\">
    <div class=\"row\">
      {# Sidebar First #}
      {% if page.sidebar_first %}
      {% block sidebar_first %}
      <aside class=\"col-sm-3\" role=\"complementary\">
        {{ page.sidebar_first }}
      </aside>
      {% endblock %}
      {% endif %}
      {# Content #}
      {%
      set content_classes = [
      page.sidebar_first and page.sidebar_second ? 'col-sm-6',
      page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',
      page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',
      page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'
      ]
      %}
      <section{{ content_attributes.addClass(content_classes) }}>
        {# Highlighted #}
        {% if page.highlighted %}
        {% block highlighted %}
        <div class=\"highlighted\">{{ page.highlighted }}
        </div>
        {% endblock %}
        {% endif %}
        {# Help #}
        {% if page.help %}
        {% block help %}
        {{ page.help }}
        {% endblock %}
        {% endif %}
        {# Content #}
        {% block content %}
        <a id=\"main-content\">
        </a>
        {{ page.content }}
        {% endblock %}
      
        </section>
      {# Sidebar Second #}
      {% if page.sidebar_second %}
      {% block sidebar_second %}
      <aside class=\"col-sm-3\" role=\"complementary\">
        {{ page.sidebar_second }}
      </aside>
      {% endblock %}
      {% endif %}
    </div>
  </div>
</div>
{% endblock %}

{% if page.content2 %}
{% block content2 %}
<div id=\"content2\" class=\"{{ container }}\">
  <div class=\"container content2\">
    {{ page.content2 }}
     
    {#Formulario descarga de archivo#}
        <div class=\"cont_formulario\">
          <div class=\"cont_img itm\">
            <img src=\"/themes/drudg8b3/images/amidi_form.png\">
          </div>
          <div class=\"itm_formulario itm\"> 
          {{ drupal_entity('webform', 'inscripcion') }}
          </div>
        </div>
      </div>
</div>
{% endblock %}
{% endif %}

{% if page.content3 %}
{% block content3 %}
<div id=\"content3\" class=\"{{ container }}\">
  <div class=\"container content3\">
    {{ page.content3 }}
  </div>
</div>
{% endblock %}
{% endif %}

{% if page.content4 %}
{% block content4 %}
<div id=\"content4\" class=\"{{ container }}\">
  <div class=\"container content4\">
    {{ page.content4 }}
  </div>
</div>
{% endblock %}
{% endif %}

{% if page.content5 %}
{% block content5 %}
<div id=\"content5\" class=\"{{ container }}\">
  <div class=\"container content5\">
    {{ page.content5 }}
  </div>
</div>
{% endblock %}
{% endif %}

{% if page.content6 %}
{% block content6 %}
<div id=\"content6\" class=\"{{ container }}\">
  <div class=\"container content6\">
    {{ page.content6 }}
  </div>
</div>
{% endblock %}
{% endif %}

{% if page.content7 %}
{% block content7 %}
<div id=\"content7\" class=\"{{ container }}\">
  <div class=\"container content7\">
    {{ page.content7 }}
  </div>
</div>
{% endblock %}
{% endif %}

{% if page.content8 %}
{% block content8 %}
<div id=\"content8\" class=\"{{ container }}\">
  <div class=\"container content8\">
    {{ page.content8 }}
  </div>
</div>
{% endblock %}
{% endif %}

{% if page.content9 %}
{% block content9 %}
<div id=\"content9\" class=\"{{ container }}\">
  <div class=\"container content9\">
    {{ page.content9 }}
  </div>
</div>
{% endblock %}
{% endif %}

{% if page.content10 %}
{% block content10 %}
<div id=\"content10\" class=\"{{ container }}\">
  <div class=\"container content10\">
    {{ page.content10 }}
  </div>
</div>
{% endblock %}
{% endif %}

{% if page.content11 %}
{% block content11 %}
<div id=\"content11\" class=\"{{ container }}\">
  <div class=\"content11\">
    {{ page.content11 }}
  </div>
</div>
{% endblock %}
{% endif %}

{% if page.footer %}
{% block footer %}
<footer id=\"footer\" class=\"{{ container }}\">
  <div class=\"container footer\">
    {{ page.footer }}
  </div>
</footer>
{% endblock %}
{% endif %}
", "themes/drudg8b3/templates/page--front.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/amidi2025_git/themes/drudg8b3/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 54, "if" => 56, "block" => 57];
        static $filters = ["clean_class" => 62, "escape" => 126, "t" => 76];
        static $functions = ["drupal_entity" => 250];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 't'],
                ['drupal_entity'],
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

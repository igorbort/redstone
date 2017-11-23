<?php

/* themes/custom/boot/templates/page.html.twig */
class __TwigTemplate_0805f73377d001fc290911e3e1dea3d1c1c116d50a4227c86ce1ae57492d3e68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'topnavigation' => array($this, 'block_topnavigation'),
            'navbar' => array($this, 'block_navbar'),
            'mainslider' => array($this, 'block_mainslider'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'services' => array($this, 'block_services'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 54, "if" => 56, "block" => 57);
        $filters = array("clean_class" => 69, "t" => 81);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 54
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 56
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "topnavigation", array())) {
            // line 57
            echo "          ";
            $this->displayBlock('topnavigation', $context, $blocks);
            // line 62
            echo "      ";
        }
        // line 64
        if (($this->getAttribute(($context["page"] ?? null), "navigation", array()) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()))) {
            // line 65
            echo "    ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 101
        echo "
";
        // line 103
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "mainslider", array())) {
            // line 104
            echo "            ";
            $this->displayBlock('mainslider', $context, $blocks);
            // line 145
            echo "        ";
        }
        // line 146
        echo "
";
        // line 148
        $this->displayBlock('main', $context, $blocks);
        // line 211
        echo "
";
        // line 213
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "services", array())) {
            // line 214
            echo "          ";
            $this->displayBlock('services', $context, $blocks);
            // line 220
            echo "      ";
        }
        // line 221
        echo "

";
        // line 224
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 225
            echo "    ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 57
    public function block_topnavigation($context, array $blocks = array())
    {
        // line 58
        echo "              <div class=\"top-navigation\">
                  ";
        // line 59
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topnavigation", array()), "html", null, true));
        echo "
              </div>
          ";
    }

    // line 65
    public function block_navbar($context, array $blocks = array())
    {
        // line 66
        echo "        ";
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 68
($context["theme"] ?? null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 69
($context["theme"] ?? null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "navbar_position", array())))) : (($context["container"] ?? null))));
        // line 71
        echo "        <header";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", array(0 => ($context["navbar_classes"] ?? null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
            ";
        // line 72
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["container"] ?? null)), "method")) {
            // line 73
            echo "            <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
                ";
        }
        // line 75
        echo "                <div class=\"navbar-header\">
                    ";
        // line 76
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
        echo "
                    ";
        // line 78
        echo "                    ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 79
            echo "                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                                data-target=\"#navbar-collapse\">
                            <span class=\"sr-only\">";
            // line 81
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation")));
            echo "</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    ";
        }
        // line 87
        echo "                </div>

                ";
        // line 90
        echo "                ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 91
            echo "                    <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
                        ";
            // line 92
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()), "html", null, true));
            echo "
                    </div>
                ";
        }
        // line 95
        echo "                ";
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["container"] ?? null)), "method")) {
            // line 96
            echo "            </div>
            ";
        }
        // line 98
        echo "        </header>
    ";
    }

    // line 104
    public function block_mainslider($context, array $blocks = array())
    {
        // line 105
        echo "                <div class=\"main-slider\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <h1 class=\"main-title\">Производство наружной рекламы</h1>
                                ";
        // line 110
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "mainslider", array()), "html", null, true));
        echo "
                            </div>
                            <div class=\"col-sm-4\">
                                <div class=\"main-offer__image\">
                                    <img src=\"../../boot/assets/images/roll-up.png\" alt=\"offer\">
                                </div>
                            </div>
                            <div class=\"col-sm-8\">
                                <h2>Новинка: Roll-Up стенды!</h2>
                                <ul class=\"main-offer__list\">
                                    <li class=\"main-offer__text\">
                                        Удобство при хранении
                                    </li>
                                    <li>
                                        Моментальная зборка
                                    </li>
                                    <li class=\"main-offer__text\">
                                        Небольшой вес
                                    </li>
                                    <li class=\"main-offer__text\">
                                        Простота транспортировки
                                    </li>
                                </ul>
                                <p class=\"offer__text_buttom\">
                                    Изготовление по индивидуальному дизайну
                                    в кратчайшие сроки и по самым приятным ценам!
                                </p>
                                <div class=\"offer__button\">
                                    <a href=\"#\">Заказать</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
    }

    // line 148
    public function block_main($context, array $blocks = array())
    {
        // line 149
        echo "    <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo " js-quickedit-main-content\">
        <div class=\"row\">

            ";
        // line 153
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 154
            echo "                ";
            $this->displayBlock('header', $context, $blocks);
            // line 159
            echo "            ";
        }
        // line 160
        echo "
            ";
        // line 162
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 163
            echo "                ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 168
            echo "            ";
        }
        // line 169
        echo "
            ";
        // line 171
        echo "            ";
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 172
($context["page"] ?? null), "sidebar_first", array()) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 173
($context["page"] ?? null), "sidebar_first", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 174
($context["page"] ?? null), "sidebar_second", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 175
($context["page"] ?? null), "sidebar_first", array())) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 177
        echo "            <section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => ($context["content_classes"] ?? null)), "method"), "html", null, true));
        echo ">

                ";
        // line 180
        echo "                ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 181
            echo "                    ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 184
            echo "                ";
        }
        // line 185
        echo "
                ";
        // line 187
        echo "                ";
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 188
            echo "                    ";
            $this->displayBlock('help', $context, $blocks);
            // line 191
            echo "                ";
        }
        // line 192
        echo "
                ";
        // line 194
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 198
        echo "            </section>

            ";
        // line 201
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 202
            echo "                ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 207
            echo "            ";
        }
        // line 208
        echo "        </div>
    </div>
";
    }

    // line 154
    public function block_header($context, array $blocks = array())
    {
        // line 155
        echo "                    <div class=\"col-sm-12\" role=\"heading\">
                        ";
        // line 156
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
                    </div>
                ";
    }

    // line 163
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 164
        echo "                    <aside class=\"col-sm-3\" role=\"complementary\">
                        ";
        // line 165
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
        echo "
                    </aside>
                ";
    }

    // line 181
    public function block_highlighted($context, array $blocks = array())
    {
        // line 182
        echo "                        <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "</div>
                    ";
    }

    // line 188
    public function block_help($context, array $blocks = array())
    {
        // line 189
        echo "                        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "
                    ";
    }

    // line 194
    public function block_content($context, array $blocks = array())
    {
        // line 195
        echo "                    <a id=\"main-content\"></a>
                    ";
        // line 196
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
                ";
    }

    // line 202
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 203
        echo "                    <aside class=\"col-sm-3\" role=\"complementary\">
                        ";
        // line 204
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
        echo "
                    </aside>
                ";
    }

    // line 214
    public function block_services($context, array $blocks = array())
    {
        // line 215
        echo "              <div class=\"services\">
                  <h2 class=\"sevices-title\">Что мы предлагаем</h2>
                  ";
        // line 217
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "services", array()), "html", null, true));
        echo "
              </div>
          ";
    }

    // line 225
    public function block_footer($context, array $blocks = array())
    {
        // line 226
        echo "        <footer class=\"footer\" role=\"contentinfo\">
            ";
        // line 227
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "
        </footer>
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/boot/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  431 => 227,  428 => 226,  425 => 225,  418 => 217,  414 => 215,  411 => 214,  404 => 204,  401 => 203,  398 => 202,  392 => 196,  389 => 195,  386 => 194,  379 => 189,  376 => 188,  369 => 182,  366 => 181,  359 => 165,  356 => 164,  353 => 163,  346 => 156,  343 => 155,  340 => 154,  334 => 208,  331 => 207,  328 => 202,  325 => 201,  321 => 198,  318 => 194,  315 => 192,  312 => 191,  309 => 188,  306 => 187,  303 => 185,  300 => 184,  297 => 181,  294 => 180,  288 => 177,  286 => 175,  285 => 174,  284 => 173,  283 => 172,  281 => 171,  278 => 169,  275 => 168,  272 => 163,  269 => 162,  266 => 160,  263 => 159,  260 => 154,  257 => 153,  250 => 149,  247 => 148,  208 => 110,  201 => 105,  198 => 104,  193 => 98,  189 => 96,  186 => 95,  180 => 92,  177 => 91,  174 => 90,  170 => 87,  161 => 81,  157 => 79,  154 => 78,  150 => 76,  147 => 75,  141 => 73,  139 => 72,  134 => 71,  132 => 69,  131 => 68,  129 => 66,  126 => 65,  119 => 59,  116 => 58,  113 => 57,  107 => 225,  105 => 224,  101 => 221,  98 => 220,  95 => 214,  92 => 213,  89 => 211,  87 => 148,  84 => 146,  81 => 145,  78 => 104,  75 => 103,  72 => 101,  68 => 65,  66 => 64,  63 => 62,  60 => 57,  57 => 56,  55 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
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
{# Top navigation #}
      {% if page.topnavigation %}
          {% block topnavigation %}
              <div class=\"top-navigation\">
                  {{ page.topnavigation }}
              </div>
          {% endblock %}
      {% endif %}
{# Navbar #}
{% if page.navigation or page.navigation_collapsible %}
    {% block navbar %}
        {% set navbar_classes = [
        'navbar',
        theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',
        theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,
        ] %}
        <header{{ navbar_attributes.addClass(navbar_classes) }} id=\"navbar\" role=\"banner\">
            {% if not navbar_attributes.hasClass(container) %}
            <div class=\"{{ container }}\">
                {% endif %}
                <div class=\"navbar-header\">
                    {{ page.navigation }}
                    {# .btn-navbar is used as the toggle for collapsed navbar content #}
                    {% if page.navigation_collapsible %}
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                                data-target=\"#navbar-collapse\">
                            <span class=\"sr-only\">{{ 'Toggle navigation'|t }}</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    {% endif %}
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
        </header>
    {% endblock %}
{% endif %}

{# Main Slider #}
        {% if page.mainslider %}
            {% block mainslider %}
                <div class=\"main-slider\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <h1 class=\"main-title\">Производство наружной рекламы</h1>
                                {{ page.mainslider }}
                            </div>
                            <div class=\"col-sm-4\">
                                <div class=\"main-offer__image\">
                                    <img src=\"../../boot/assets/images/roll-up.png\" alt=\"offer\">
                                </div>
                            </div>
                            <div class=\"col-sm-8\">
                                <h2>Новинка: Roll-Up стенды!</h2>
                                <ul class=\"main-offer__list\">
                                    <li class=\"main-offer__text\">
                                        Удобство при хранении
                                    </li>
                                    <li>
                                        Моментальная зборка
                                    </li>
                                    <li class=\"main-offer__text\">
                                        Небольшой вес
                                    </li>
                                    <li class=\"main-offer__text\">
                                        Простота транспортировки
                                    </li>
                                </ul>
                                <p class=\"offer__text_buttom\">
                                    Изготовление по индивидуальному дизайну
                                    в кратчайшие сроки и по самым приятным ценам!
                                </p>
                                <div class=\"offer__button\">
                                    <a href=\"#\">Заказать</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {% endblock %}
        {% endif %}

{# Main #}
{% block main %}
    <div role=\"main\" class=\"main-container {{ container }} js-quickedit-main-content\">
        <div class=\"row\">

            {# Header #}
            {% if page.header %}
                {% block header %}
                    <div class=\"col-sm-12\" role=\"heading\">
                        {{ page.header }}
                    </div>
                {% endblock %}
            {% endif %}

            {# Sidebar First #}
            {% if page.sidebar_first %}
                {% block sidebar_first %}
                    <aside class=\"col-sm-3\" role=\"complementary\">
                        {{ page.sidebar_first }}
                    </aside>
                {% endblock %}
            {% endif %}

            {# Content #}
            {% set content_classes = [
            page.sidebar_first and page.sidebar_second ? 'col-sm-6',
            page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',
            page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',
            page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'
            ] %}
            <section{{ content_attributes.addClass(content_classes) }}>

                {# Highlighted #}
                {% if page.highlighted %}
                    {% block highlighted %}
                        <div class=\"highlighted\">{{ page.highlighted }}</div>
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
                    <a id=\"main-content\"></a>
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
{% endblock %}

{# Services #}
      {% if page.services %}
          {% block services %}
              <div class=\"services\">
                  <h2 class=\"sevices-title\">Что мы предлагаем</h2>
                  {{ page.services }}
              </div>
          {% endblock %}
      {% endif %}


{# Footer #}
{% if page.footer %}
    {% block footer %}
        <footer class=\"footer\" role=\"contentinfo\">
            {{ page.footer }}
        </footer>
    {% endblock %}
{% endif %}
", "themes/custom/boot/templates/page.html.twig", "/var/www/html/drupal8/themes/custom/boot/templates/page.html.twig");
    }
}

<?php

/* @WebProfiler/Profiler/layout.html.twig */
class __TwigTemplate_124402da3a7388c8d93443dfc9065561aed5926fa412c3c8e99f6d4073ae3e4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6231c3ee08f2abd05e84ff384635e44285a820b85f2a4e910dd71c27879eb20 = $this->env->getExtension("native_profiler");
        $__internal_a6231c3ee08f2abd05e84ff384635e44285a820b85f2a4e910dd71c27879eb20->enter($__internal_a6231c3ee08f2abd05e84ff384635e44285a820b85f2a4e910dd71c27879eb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6231c3ee08f2abd05e84ff384635e44285a820b85f2a4e910dd71c27879eb20->leave($__internal_a6231c3ee08f2abd05e84ff384635e44285a820b85f2a4e910dd71c27879eb20_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a85c6976a636b67a63b5d5763c4da22bbe8594045799b70daa7c05b5e642958 = $this->env->getExtension("native_profiler");
        $__internal_9a85c6976a636b67a63b5d5763c4da22bbe8594045799b70daa7c05b5e642958->enter($__internal_9a85c6976a636b67a63b5d5763c4da22bbe8594045799b70daa7c05b5e642958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/header.html.twig", array(), false);
        echo "

    <div id=\"summary\">
        ";
        // line 7
        $this->displayBlock('summary', $context, $blocks);
        // line 42
        echo "    </div>

    <div id=\"content\" class=\"container\">
        <div id=\"main\">
            <div id=\"collector-wrapper\">
                <div id=\"collector-content\">
                    ";
        // line 48
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/base_js.html.twig");
        echo "
                    ";
        // line 49
        $this->displayBlock('panel', $context, $blocks);
        // line 50
        echo "                </div>
            </div>

            <div id=\"sidebar\">
                <div id=\"sidebar-shortcuts\">
                    <div class=\"shortcuts\">
                        <a href=\"#\" class=\"visible-small\" onclick=\"Sfjs.toggleClass(document.getElementById('sidebar'), 'expanded'); return false;\">
                            <span class=\"icon\">";
        // line 57
        echo twig_include($this->env, $context, "@WebProfiler/Icon/menu.svg");
        echo "</span>
                        </a>

                        <a class=\"btn btn-sm\" href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("_profiler_search", array("limit" => 10));
        echo "\">Last 10</a>
                        <a class=\"btn btn-sm\" href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", twig_array_merge(array("token" => "latest"), $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "query", array()), "all", array()))), "html", null, true);
        echo "\">Latest</a>

                        <a class=\"sf-toggle btn btn-sm\" data-toggle-selector=\"#sidebar-search\" ";
        // line 63
        if ((array_key_exists("tokens", $context) || array_key_exists("about", $context))) {
            echo "data-toggle-initial=\"display\"";
        }
        echo ">
                            ";
        // line 64
        echo twig_include($this->env, $context, "@WebProfiler/Icon/search.svg");
        echo " <span class=\"hidden-small\">Search</span>
                        </a>

                        ";
        // line 67
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_search_bar", $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "query", array()), "all", array())));
        echo "
                    </div>
                </div>

                ";
        // line 71
        if (array_key_exists("templates", $context)) {
            // line 72
            echo "                    <ul id=\"menu-profiler\">
                        ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
            foreach ($context['_seq'] as $context["name"] => $context["template"]) {
                // line 74
                echo "                            ";
                ob_start();
                echo twig_escape_filter($this->env, $this->getAttribute($context["template"], "renderBlock", array(0 => "menu", 1 => array("collector" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "getcollector", array(0 => $context["name"]), "method"), "profiler_markup_version" => (isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")))), "method"), "html", null, true);
                $context["menu"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 75
                echo "                            ";
                if ( !twig_test_empty((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")))) {
                    // line 76
                    echo "                                <li class=\"";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo " ";
                    echo ((($context["name"] == (isset($context["panel"]) ? $context["panel"] : $this->getContext($context, "panel")))) ? ("selected") : (""));
                    echo "\">
                                    <a href=\"";
                    // line 77
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => $context["name"])), "html", null, true);
                    echo "\">";
                    echo (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"));
                    echo "</a>
                                </li>
                            ";
                }
                // line 80
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                    </ul>
                ";
        }
        // line 83
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_9a85c6976a636b67a63b5d5763c4da22bbe8594045799b70daa7c05b5e642958->leave($__internal_9a85c6976a636b67a63b5d5763c4da22bbe8594045799b70daa7c05b5e642958_prof);

    }

    // line 7
    public function block_summary($context, array $blocks = array())
    {
        $__internal_b0e1da684bca96e5e1b936588d04ad63ffd2772527f0c79fc07d002de8e1df6b = $this->env->getExtension("native_profiler");
        $__internal_b0e1da684bca96e5e1b936588d04ad63ffd2772527f0c79fc07d002de8e1df6b->enter($__internal_b0e1da684bca96e5e1b936588d04ad63ffd2772527f0c79fc07d002de8e1df6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 8
        echo "            ";
        if (array_key_exists("profile", $context)) {
            // line 9
            echo "                ";
            $context["status_code"] = ((twig_in_filter("request", twig_get_array_keys_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "collectors", array())))) ? ((($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "getcollector", array(0 => "request"), "method", false, true), "statuscode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "getcollector", array(0 => "request"), "method", false, true), "statuscode", array()), 0)) : (0))) : (0));
            // line 10
            echo "                ";
            $context["css_class"] = ((((isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")) > 399)) ? ("status-error") : (((((isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")) > 299)) ? ("status-warning") : ("status-success"))));
            // line 11
            echo "
                <div class=\"status ";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["css_class"]) ? $context["css_class"] : $this->getContext($context, "css_class")), "html", null, true);
            echo "\">
                    <div class=\"container\">
                        <h2 class=\"break-long-words\">
                            ";
            // line 15
            if (twig_in_filter(twig_upper_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "method", array())), array(0 => "GET", 1 => "HEAD"))) {
                // line 16
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "url", array()), "html", null, true);
                echo "</a>
                            ";
            } else {
                // line 18
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "url", array()), "html", null, true);
                echo "
                            ";
            }
            // line 20
            echo "                        </h2>

                        <dl class=\"metadata\">
                            <dt>Method</dt>
                            <dd>";
            // line 24
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "method", array())), "html", null, true);
            echo "</dd>

                            <dt>HTTP Status</dt>
                            <dd>";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
            echo "</dd>

                            <dt>IP</dt>
                            <dd>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "ip", array()), "html", null, true);
            echo "</dd>

                            <dt>Profiled on</dt>
                            <dd>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "time", array()), "r"), "html", null, true);
            echo "</dd>

                            <dt>Token</dt>
                            <dd>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "token", array()), "html", null, true);
            echo "</dd>
                        </dl>
                    </div>
                </div>
            ";
        }
        // line 41
        echo "        ";
        
        $__internal_b0e1da684bca96e5e1b936588d04ad63ffd2772527f0c79fc07d002de8e1df6b->leave($__internal_b0e1da684bca96e5e1b936588d04ad63ffd2772527f0c79fc07d002de8e1df6b_prof);

    }

    // line 49
    public function block_panel($context, array $blocks = array())
    {
        $__internal_261ea19f569e31d836dda846ac80a27dd1b9b489777c8da82c1ce1e86b642300 = $this->env->getExtension("native_profiler");
        $__internal_261ea19f569e31d836dda846ac80a27dd1b9b489777c8da82c1ce1e86b642300->enter($__internal_261ea19f569e31d836dda846ac80a27dd1b9b489777c8da82c1ce1e86b642300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_261ea19f569e31d836dda846ac80a27dd1b9b489777c8da82c1ce1e86b642300->leave($__internal_261ea19f569e31d836dda846ac80a27dd1b9b489777c8da82c1ce1e86b642300_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 49,  238 => 41,  230 => 36,  224 => 33,  218 => 30,  212 => 27,  206 => 24,  200 => 20,  194 => 18,  186 => 16,  184 => 15,  178 => 12,  175 => 11,  172 => 10,  169 => 9,  166 => 8,  160 => 7,  150 => 83,  146 => 81,  140 => 80,  132 => 77,  125 => 76,  122 => 75,  117 => 74,  113 => 73,  110 => 72,  108 => 71,  101 => 67,  95 => 64,  89 => 63,  84 => 61,  80 => 60,  74 => 57,  65 => 50,  63 => 49,  59 => 48,  51 => 42,  49 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ include('@WebProfiler/Profiler/header.html.twig', with_context = false) }}*/
/* */
/*     <div id="summary">*/
/*         {% block summary %}*/
/*             {% if profile is defined %}*/
/*                 {% set status_code = ('request' in profile.collectors|keys) ? profile.getcollector('request').statuscode|default(0) : 0 %}*/
/*                 {% set css_class = status_code > 399 ? 'status-error' : status_code > 299 ? 'status-warning' : 'status-success' %}*/
/* */
/*                 <div class="status {{ css_class }}">*/
/*                     <div class="container">*/
/*                         <h2 class="break-long-words">*/
/*                             {% if profile.method|upper in ['GET', 'HEAD'] %}*/
/*                                 <a href="{{ profile.url }}">{{ profile.url }}</a>*/
/*                             {% else %}*/
/*                                 {{ profile.url }}*/
/*                             {% endif %}*/
/*                         </h2>*/
/* */
/*                         <dl class="metadata">*/
/*                             <dt>Method</dt>*/
/*                             <dd>{{ profile.method|upper }}</dd>*/
/* */
/*                             <dt>HTTP Status</dt>*/
/*                             <dd>{{ status_code }}</dd>*/
/* */
/*                             <dt>IP</dt>*/
/*                             <dd>{{ profile.ip }}</dd>*/
/* */
/*                             <dt>Profiled on</dt>*/
/*                             <dd>{{ profile.time|date('r') }}</dd>*/
/* */
/*                             <dt>Token</dt>*/
/*                             <dd>{{ profile.token }}</dd>*/
/*                         </dl>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% endblock %}*/
/*     </div>*/
/* */
/*     <div id="content" class="container">*/
/*         <div id="main">*/
/*             <div id="collector-wrapper">*/
/*                 <div id="collector-content">*/
/*                     {{ include('@WebProfiler/Profiler/base_js.html.twig') }}*/
/*                     {% block panel '' %}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div id="sidebar">*/
/*                 <div id="sidebar-shortcuts">*/
/*                     <div class="shortcuts">*/
/*                         <a href="#" class="visible-small" onclick="Sfjs.toggleClass(document.getElementById('sidebar'), 'expanded'); return false;">*/
/*                             <span class="icon">{{ include('@WebProfiler/Icon/menu.svg') }}</span>*/
/*                         </a>*/
/* */
/*                         <a class="btn btn-sm" href="{{ path('_profiler_search', { limit: 10 }) }}">Last 10</a>*/
/*                         <a class="btn btn-sm" href="{{ path('_profiler', { token: 'latest' }|merge(request.query.all)) }}">Latest</a>*/
/* */
/*                         <a class="sf-toggle btn btn-sm" data-toggle-selector="#sidebar-search" {% if tokens is defined or about is defined %}data-toggle-initial="display"{% endif %}>*/
/*                             {{ include('@WebProfiler/Icon/search.svg') }} <span class="hidden-small">Search</span>*/
/*                         </a>*/
/* */
/*                         {{ render(path('_profiler_search_bar', request.query.all)) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 {% if templates is defined %}*/
/*                     <ul id="menu-profiler">*/
/*                         {% for name, template in templates %}*/
/*                             {% set menu %}{{ template.renderBlock('menu', { collector: profile.getcollector(name), profiler_markup_version: profiler_markup_version }) }}{% endset %}*/
/*                             {% if menu is not empty %}*/
/*                                 <li class="{{ name }} {{ name == panel ? 'selected' : '' }}">*/
/*                                     <a href="{{ path('_profiler', { token: token, panel: name }) }}">{{ menu|raw }}</a>*/
/*                                 </li>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

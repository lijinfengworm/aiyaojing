<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4705f458cc83983e50221d74bce3e493cc70ad7296ca9bb499e70e25a3b70ef1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e4cfdaee221ab471cc094201e4d4a893d0faaf90a89cc098ffda716430bd128 = $this->env->getExtension("native_profiler");
        $__internal_1e4cfdaee221ab471cc094201e4d4a893d0faaf90a89cc098ffda716430bd128->enter($__internal_1e4cfdaee221ab471cc094201e4d4a893d0faaf90a89cc098ffda716430bd128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e4cfdaee221ab471cc094201e4d4a893d0faaf90a89cc098ffda716430bd128->leave($__internal_1e4cfdaee221ab471cc094201e4d4a893d0faaf90a89cc098ffda716430bd128_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_37dfa92dd2fafda33a1ed108f8ee7a37d7ebf047dacc1033038f4b936e5b8899 = $this->env->getExtension("native_profiler");
        $__internal_37dfa92dd2fafda33a1ed108f8ee7a37d7ebf047dacc1033038f4b936e5b8899->enter($__internal_37dfa92dd2fafda33a1ed108f8ee7a37d7ebf047dacc1033038f4b936e5b8899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_37dfa92dd2fafda33a1ed108f8ee7a37d7ebf047dacc1033038f4b936e5b8899->leave($__internal_37dfa92dd2fafda33a1ed108f8ee7a37d7ebf047dacc1033038f4b936e5b8899_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_91c5aefb6daa5c0e7658f1e55d9cf00bd2a7a9261e56879a46b6d04bca1f8858 = $this->env->getExtension("native_profiler");
        $__internal_91c5aefb6daa5c0e7658f1e55d9cf00bd2a7a9261e56879a46b6d04bca1f8858->enter($__internal_91c5aefb6daa5c0e7658f1e55d9cf00bd2a7a9261e56879a46b6d04bca1f8858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_91c5aefb6daa5c0e7658f1e55d9cf00bd2a7a9261e56879a46b6d04bca1f8858->leave($__internal_91c5aefb6daa5c0e7658f1e55d9cf00bd2a7a9261e56879a46b6d04bca1f8858_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fa3ba5432a2e7965202881bd0831e88fae4c2443a48e70681095d9fd1c968b57 = $this->env->getExtension("native_profiler");
        $__internal_fa3ba5432a2e7965202881bd0831e88fae4c2443a48e70681095d9fd1c968b57->enter($__internal_fa3ba5432a2e7965202881bd0831e88fae4c2443a48e70681095d9fd1c968b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fa3ba5432a2e7965202881bd0831e88fae4c2443a48e70681095d9fd1c968b57->leave($__internal_fa3ba5432a2e7965202881bd0831e88fae4c2443a48e70681095d9fd1c968b57_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

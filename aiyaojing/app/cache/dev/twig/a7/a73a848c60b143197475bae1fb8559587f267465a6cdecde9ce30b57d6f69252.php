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
        $__internal_332b46a506d108787cf904816a41d311ed88e6f778a80f05be840a4ddb431f21 = $this->env->getExtension("native_profiler");
        $__internal_332b46a506d108787cf904816a41d311ed88e6f778a80f05be840a4ddb431f21->enter($__internal_332b46a506d108787cf904816a41d311ed88e6f778a80f05be840a4ddb431f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_332b46a506d108787cf904816a41d311ed88e6f778a80f05be840a4ddb431f21->leave($__internal_332b46a506d108787cf904816a41d311ed88e6f778a80f05be840a4ddb431f21_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_857206ba8b5b7f43bed39b8b4cfd92c765128e698ff53c20cd60ee4f59843ca6 = $this->env->getExtension("native_profiler");
        $__internal_857206ba8b5b7f43bed39b8b4cfd92c765128e698ff53c20cd60ee4f59843ca6->enter($__internal_857206ba8b5b7f43bed39b8b4cfd92c765128e698ff53c20cd60ee4f59843ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_857206ba8b5b7f43bed39b8b4cfd92c765128e698ff53c20cd60ee4f59843ca6->leave($__internal_857206ba8b5b7f43bed39b8b4cfd92c765128e698ff53c20cd60ee4f59843ca6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_30e4e07b2b3ae07c40b3552756f8099669c589dc033bbcca278c3cec75aaeb50 = $this->env->getExtension("native_profiler");
        $__internal_30e4e07b2b3ae07c40b3552756f8099669c589dc033bbcca278c3cec75aaeb50->enter($__internal_30e4e07b2b3ae07c40b3552756f8099669c589dc033bbcca278c3cec75aaeb50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_30e4e07b2b3ae07c40b3552756f8099669c589dc033bbcca278c3cec75aaeb50->leave($__internal_30e4e07b2b3ae07c40b3552756f8099669c589dc033bbcca278c3cec75aaeb50_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e38e8733bb98799b70370c82513aa8d7da18892bce25f09a240bcba62cfc19e5 = $this->env->getExtension("native_profiler");
        $__internal_e38e8733bb98799b70370c82513aa8d7da18892bce25f09a240bcba62cfc19e5->enter($__internal_e38e8733bb98799b70370c82513aa8d7da18892bce25f09a240bcba62cfc19e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e38e8733bb98799b70370c82513aa8d7da18892bce25f09a240bcba62cfc19e5->leave($__internal_e38e8733bb98799b70370c82513aa8d7da18892bce25f09a240bcba62cfc19e5_prof);

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

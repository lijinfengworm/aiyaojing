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
        $__internal_947cd546dd609401098c4c205eacfd65d85a96c77259e7a778a837a230282a55 = $this->env->getExtension("native_profiler");
        $__internal_947cd546dd609401098c4c205eacfd65d85a96c77259e7a778a837a230282a55->enter($__internal_947cd546dd609401098c4c205eacfd65d85a96c77259e7a778a837a230282a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_947cd546dd609401098c4c205eacfd65d85a96c77259e7a778a837a230282a55->leave($__internal_947cd546dd609401098c4c205eacfd65d85a96c77259e7a778a837a230282a55_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b87ff07a7660a44c8845b8925d23a067a1fef8992d6e60978cdf1855ee08626 = $this->env->getExtension("native_profiler");
        $__internal_3b87ff07a7660a44c8845b8925d23a067a1fef8992d6e60978cdf1855ee08626->enter($__internal_3b87ff07a7660a44c8845b8925d23a067a1fef8992d6e60978cdf1855ee08626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3b87ff07a7660a44c8845b8925d23a067a1fef8992d6e60978cdf1855ee08626->leave($__internal_3b87ff07a7660a44c8845b8925d23a067a1fef8992d6e60978cdf1855ee08626_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_afa70db61773cbaddbd85ca0350e5997f2482d2ab70be7d55afb1e37fcb0bd9a = $this->env->getExtension("native_profiler");
        $__internal_afa70db61773cbaddbd85ca0350e5997f2482d2ab70be7d55afb1e37fcb0bd9a->enter($__internal_afa70db61773cbaddbd85ca0350e5997f2482d2ab70be7d55afb1e37fcb0bd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_afa70db61773cbaddbd85ca0350e5997f2482d2ab70be7d55afb1e37fcb0bd9a->leave($__internal_afa70db61773cbaddbd85ca0350e5997f2482d2ab70be7d55afb1e37fcb0bd9a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ab0b7abeea453aa14662c31e6e6b5bc98cc003c430a57efc5a378e3c76e7dcb = $this->env->getExtension("native_profiler");
        $__internal_2ab0b7abeea453aa14662c31e6e6b5bc98cc003c430a57efc5a378e3c76e7dcb->enter($__internal_2ab0b7abeea453aa14662c31e6e6b5bc98cc003c430a57efc5a378e3c76e7dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2ab0b7abeea453aa14662c31e6e6b5bc98cc003c430a57efc5a378e3c76e7dcb->leave($__internal_2ab0b7abeea453aa14662c31e6e6b5bc98cc003c430a57efc5a378e3c76e7dcb_prof);

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

<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4250242864de75d2778e5e1e0bb909bbbb78e0dd45b2a1731cea33cda938792f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e13852e1e62a05de95432e2e067f4f6faee35114f28c66dcfc882543e2edcc6b = $this->env->getExtension("native_profiler");
        $__internal_e13852e1e62a05de95432e2e067f4f6faee35114f28c66dcfc882543e2edcc6b->enter($__internal_e13852e1e62a05de95432e2e067f4f6faee35114f28c66dcfc882543e2edcc6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e13852e1e62a05de95432e2e067f4f6faee35114f28c66dcfc882543e2edcc6b->leave($__internal_e13852e1e62a05de95432e2e067f4f6faee35114f28c66dcfc882543e2edcc6b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_74affa82e39a7fa7fdd1fe14eb1c8e7459ae291163bba5dcece504fc7c33840b = $this->env->getExtension("native_profiler");
        $__internal_74affa82e39a7fa7fdd1fe14eb1c8e7459ae291163bba5dcece504fc7c33840b->enter($__internal_74affa82e39a7fa7fdd1fe14eb1c8e7459ae291163bba5dcece504fc7c33840b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_74affa82e39a7fa7fdd1fe14eb1c8e7459ae291163bba5dcece504fc7c33840b->leave($__internal_74affa82e39a7fa7fdd1fe14eb1c8e7459ae291163bba5dcece504fc7c33840b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */

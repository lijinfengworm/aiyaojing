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
        $__internal_b6a56066392c2b2963421e8fbd7e8792b9152112edd27b91f02729361ef44926 = $this->env->getExtension("native_profiler");
        $__internal_b6a56066392c2b2963421e8fbd7e8792b9152112edd27b91f02729361ef44926->enter($__internal_b6a56066392c2b2963421e8fbd7e8792b9152112edd27b91f02729361ef44926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b6a56066392c2b2963421e8fbd7e8792b9152112edd27b91f02729361ef44926->leave($__internal_b6a56066392c2b2963421e8fbd7e8792b9152112edd27b91f02729361ef44926_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_95e9c9c977ca8b529a2495b9a743077bebe003d56ac16c8274207b01e98cbe48 = $this->env->getExtension("native_profiler");
        $__internal_95e9c9c977ca8b529a2495b9a743077bebe003d56ac16c8274207b01e98cbe48->enter($__internal_95e9c9c977ca8b529a2495b9a743077bebe003d56ac16c8274207b01e98cbe48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_95e9c9c977ca8b529a2495b9a743077bebe003d56ac16c8274207b01e98cbe48->leave($__internal_95e9c9c977ca8b529a2495b9a743077bebe003d56ac16c8274207b01e98cbe48_prof);

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

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
        $__internal_9e2f3be4c403c1afb8455a959fd123d617a2e7957ebbe14394c61d7a9987b418 = $this->env->getExtension("native_profiler");
        $__internal_9e2f3be4c403c1afb8455a959fd123d617a2e7957ebbe14394c61d7a9987b418->enter($__internal_9e2f3be4c403c1afb8455a959fd123d617a2e7957ebbe14394c61d7a9987b418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9e2f3be4c403c1afb8455a959fd123d617a2e7957ebbe14394c61d7a9987b418->leave($__internal_9e2f3be4c403c1afb8455a959fd123d617a2e7957ebbe14394c61d7a9987b418_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9db2084db551303aacb497e60ead58334ddca0668702e123fd7c2a0a4e209e6f = $this->env->getExtension("native_profiler");
        $__internal_9db2084db551303aacb497e60ead58334ddca0668702e123fd7c2a0a4e209e6f->enter($__internal_9db2084db551303aacb497e60ead58334ddca0668702e123fd7c2a0a4e209e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9db2084db551303aacb497e60ead58334ddca0668702e123fd7c2a0a4e209e6f->leave($__internal_9db2084db551303aacb497e60ead58334ddca0668702e123fd7c2a0a4e209e6f_prof);

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

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
        $__internal_f801cab33d6961cc7f18051d794f12e61023a50cbfc9fbd0abcd798424d4d335 = $this->env->getExtension("native_profiler");
        $__internal_f801cab33d6961cc7f18051d794f12e61023a50cbfc9fbd0abcd798424d4d335->enter($__internal_f801cab33d6961cc7f18051d794f12e61023a50cbfc9fbd0abcd798424d4d335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f801cab33d6961cc7f18051d794f12e61023a50cbfc9fbd0abcd798424d4d335->leave($__internal_f801cab33d6961cc7f18051d794f12e61023a50cbfc9fbd0abcd798424d4d335_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_23341417ab748c000cf137f559f590997f9e0d339e224a9f969e645ae69d1025 = $this->env->getExtension("native_profiler");
        $__internal_23341417ab748c000cf137f559f590997f9e0d339e224a9f969e645ae69d1025->enter($__internal_23341417ab748c000cf137f559f590997f9e0d339e224a9f969e645ae69d1025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_23341417ab748c000cf137f559f590997f9e0d339e224a9f969e645ae69d1025->leave($__internal_23341417ab748c000cf137f559f590997f9e0d339e224a9f969e645ae69d1025_prof);

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

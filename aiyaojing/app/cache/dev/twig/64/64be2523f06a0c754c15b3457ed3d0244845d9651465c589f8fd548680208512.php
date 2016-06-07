<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ac33de14415fa5c50ce9dfc86fff467938c368b75261f2c4b625c7f6ce3dd8d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ff4b8812ef5536496c715f3a7bba6e28627ae7c6e21092495472a823d29141c = $this->env->getExtension("native_profiler");
        $__internal_6ff4b8812ef5536496c715f3a7bba6e28627ae7c6e21092495472a823d29141c->enter($__internal_6ff4b8812ef5536496c715f3a7bba6e28627ae7c6e21092495472a823d29141c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6ff4b8812ef5536496c715f3a7bba6e28627ae7c6e21092495472a823d29141c->leave($__internal_6ff4b8812ef5536496c715f3a7bba6e28627ae7c6e21092495472a823d29141c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

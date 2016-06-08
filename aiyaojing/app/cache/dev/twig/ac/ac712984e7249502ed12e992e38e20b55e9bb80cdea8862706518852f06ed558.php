<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_a410b4635d41012ac4d9dccce174f2097e09b3e45ecf3e1aaf09c8e13598956c extends Twig_Template
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
        $__internal_079e48f9e40736b3d394150a1ea250c98f09f75979d9c66c302f02b357be9ac5 = $this->env->getExtension("native_profiler");
        $__internal_079e48f9e40736b3d394150a1ea250c98f09f75979d9c66c302f02b357be9ac5->enter($__internal_079e48f9e40736b3d394150a1ea250c98f09f75979d9c66c302f02b357be9ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_079e48f9e40736b3d394150a1ea250c98f09f75979d9c66c302f02b357be9ac5->leave($__internal_079e48f9e40736b3d394150a1ea250c98f09f75979d9c66c302f02b357be9ac5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */

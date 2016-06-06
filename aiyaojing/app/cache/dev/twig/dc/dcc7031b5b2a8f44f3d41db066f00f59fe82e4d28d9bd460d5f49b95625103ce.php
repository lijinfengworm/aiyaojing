<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_2e3b3531d4bf6a4ac4119c17c9312a4dba313178c4e065a7a32fe965a0059f14 extends Twig_Template
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
        $__internal_cde026e89ebd08d64ace615483dd7c004d13b1292ad794121ec6ff03b1fbd01c = $this->env->getExtension("native_profiler");
        $__internal_cde026e89ebd08d64ace615483dd7c004d13b1292ad794121ec6ff03b1fbd01c->enter($__internal_cde026e89ebd08d64ace615483dd7c004d13b1292ad794121ec6ff03b1fbd01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cde026e89ebd08d64ace615483dd7c004d13b1292ad794121ec6ff03b1fbd01c->leave($__internal_cde026e89ebd08d64ace615483dd7c004d13b1292ad794121ec6ff03b1fbd01c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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

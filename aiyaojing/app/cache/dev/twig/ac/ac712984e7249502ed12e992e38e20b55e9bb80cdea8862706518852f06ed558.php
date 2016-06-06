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
        $__internal_421754cb191529e1aff324e5b0e01159d61d3bfc41898e89e58688f0bde0a092 = $this->env->getExtension("native_profiler");
        $__internal_421754cb191529e1aff324e5b0e01159d61d3bfc41898e89e58688f0bde0a092->enter($__internal_421754cb191529e1aff324e5b0e01159d61d3bfc41898e89e58688f0bde0a092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_421754cb191529e1aff324e5b0e01159d61d3bfc41898e89e58688f0bde0a092->leave($__internal_421754cb191529e1aff324e5b0e01159d61d3bfc41898e89e58688f0bde0a092_prof);

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

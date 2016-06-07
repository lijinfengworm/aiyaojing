<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_59757426dbedf9bcb3ded0407089e7169688e0a13c962feb1dd6eb9740606d8a extends Twig_Template
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
        $__internal_7ef3116ec1a5c55a0920e92a044cadc8dfae487c820529f1e7bc1dde806ca781 = $this->env->getExtension("native_profiler");
        $__internal_7ef3116ec1a5c55a0920e92a044cadc8dfae487c820529f1e7bc1dde806ca781->enter($__internal_7ef3116ec1a5c55a0920e92a044cadc8dfae487c820529f1e7bc1dde806ca781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_7ef3116ec1a5c55a0920e92a044cadc8dfae487c820529f1e7bc1dde806ca781->leave($__internal_7ef3116ec1a5c55a0920e92a044cadc8dfae487c820529f1e7bc1dde806ca781_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

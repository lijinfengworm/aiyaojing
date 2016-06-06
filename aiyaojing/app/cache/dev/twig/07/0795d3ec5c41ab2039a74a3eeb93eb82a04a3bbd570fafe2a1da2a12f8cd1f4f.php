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
        $__internal_f50cfec5959665c898b3eaa253356bb906b6e4d2de76174bd9d34e7b7228fabe = $this->env->getExtension("native_profiler");
        $__internal_f50cfec5959665c898b3eaa253356bb906b6e4d2de76174bd9d34e7b7228fabe->enter($__internal_f50cfec5959665c898b3eaa253356bb906b6e4d2de76174bd9d34e7b7228fabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f50cfec5959665c898b3eaa253356bb906b6e4d2de76174bd9d34e7b7228fabe->leave($__internal_f50cfec5959665c898b3eaa253356bb906b6e4d2de76174bd9d34e7b7228fabe_prof);

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

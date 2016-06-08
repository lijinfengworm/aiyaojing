<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_e467c433d03a9932eb9f568349b16cfa037cf5e7f79cdcca494f7f38413d3818 extends Twig_Template
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
        $__internal_f24e13771f7a4b22ff5bc91f1729cfcfd585fa34f804b80554bdbe5406d2f8ed = $this->env->getExtension("native_profiler");
        $__internal_f24e13771f7a4b22ff5bc91f1729cfcfd585fa34f804b80554bdbe5406d2f8ed->enter($__internal_f24e13771f7a4b22ff5bc91f1729cfcfd585fa34f804b80554bdbe5406d2f8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f24e13771f7a4b22ff5bc91f1729cfcfd585fa34f804b80554bdbe5406d2f8ed->leave($__internal_f24e13771f7a4b22ff5bc91f1729cfcfd585fa34f804b80554bdbe5406d2f8ed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */

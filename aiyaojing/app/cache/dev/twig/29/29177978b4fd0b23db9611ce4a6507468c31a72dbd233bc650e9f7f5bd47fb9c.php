<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_eaf1f60152315c9e48c057c3ac0b4ae325af681c416a192bef7017a6966e3303 extends Twig_Template
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
        $__internal_9daacc23763af0814c395a5a0e51aea240fa918c197c9aed33add2a69919d412 = $this->env->getExtension("native_profiler");
        $__internal_9daacc23763af0814c395a5a0e51aea240fa918c197c9aed33add2a69919d412->enter($__internal_9daacc23763af0814c395a5a0e51aea240fa918c197c9aed33add2a69919d412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9daacc23763af0814c395a5a0e51aea240fa918c197c9aed33add2a69919d412->leave($__internal_9daacc23763af0814c395a5a0e51aea240fa918c197c9aed33add2a69919d412_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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

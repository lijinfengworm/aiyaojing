<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_e73b3e3e6aa854cd5dda60f4dcf77b44b175015d74ddd36771fd74faab52b685 extends Twig_Template
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
        $__internal_c17b1a9749ca07a26cbaf7b845e99c8dc78382cdd5a0a562e21f8a83b8cf9eb3 = $this->env->getExtension("native_profiler");
        $__internal_c17b1a9749ca07a26cbaf7b845e99c8dc78382cdd5a0a562e21f8a83b8cf9eb3->enter($__internal_c17b1a9749ca07a26cbaf7b845e99c8dc78382cdd5a0a562e21f8a83b8cf9eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_c17b1a9749ca07a26cbaf7b845e99c8dc78382cdd5a0a562e21f8a83b8cf9eb3->leave($__internal_c17b1a9749ca07a26cbaf7b845e99c8dc78382cdd5a0a562e21f8a83b8cf9eb3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */

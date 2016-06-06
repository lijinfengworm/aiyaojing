<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_56a54c3aebaea580d5b9ea7c7d2be11994aa6832240c1e16645d2b329e79bd8b extends Twig_Template
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
        $__internal_3993fca5d6d369e30864da6d007ba388a763303467cdb488b1bc0168a52c8c39 = $this->env->getExtension("native_profiler");
        $__internal_3993fca5d6d369e30864da6d007ba388a763303467cdb488b1bc0168a52c8c39->enter($__internal_3993fca5d6d369e30864da6d007ba388a763303467cdb488b1bc0168a52c8c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3993fca5d6d369e30864da6d007ba388a763303467cdb488b1bc0168a52c8c39->leave($__internal_3993fca5d6d369e30864da6d007ba388a763303467cdb488b1bc0168a52c8c39_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */

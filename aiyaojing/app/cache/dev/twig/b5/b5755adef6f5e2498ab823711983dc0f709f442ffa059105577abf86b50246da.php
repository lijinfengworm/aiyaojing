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
        $__internal_b3d376062a4344ff8cbf1fe3095c89a1e5791733d4113f19c57cd0343d77345e = $this->env->getExtension("native_profiler");
        $__internal_b3d376062a4344ff8cbf1fe3095c89a1e5791733d4113f19c57cd0343d77345e->enter($__internal_b3d376062a4344ff8cbf1fe3095c89a1e5791733d4113f19c57cd0343d77345e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b3d376062a4344ff8cbf1fe3095c89a1e5791733d4113f19c57cd0343d77345e->leave($__internal_b3d376062a4344ff8cbf1fe3095c89a1e5791733d4113f19c57cd0343d77345e_prof);

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

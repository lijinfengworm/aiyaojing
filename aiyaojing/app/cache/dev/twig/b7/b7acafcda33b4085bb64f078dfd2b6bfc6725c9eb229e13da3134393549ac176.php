<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_3bc7def6223160de40553551a22bd8757a64cc0604255f4b736290767a8b41ac extends Twig_Template
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
        $__internal_f7aedb10184cca646d5da287002f1cf9a019b621a65e34d13870e2e1d385a0d6 = $this->env->getExtension("native_profiler");
        $__internal_f7aedb10184cca646d5da287002f1cf9a019b621a65e34d13870e2e1d385a0d6->enter($__internal_f7aedb10184cca646d5da287002f1cf9a019b621a65e34d13870e2e1d385a0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_f7aedb10184cca646d5da287002f1cf9a019b621a65e34d13870e2e1d385a0d6->leave($__internal_f7aedb10184cca646d5da287002f1cf9a019b621a65e34d13870e2e1d385a0d6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */

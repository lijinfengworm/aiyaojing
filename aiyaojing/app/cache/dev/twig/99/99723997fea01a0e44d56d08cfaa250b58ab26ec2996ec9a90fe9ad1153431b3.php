<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_ef3711d1b40cabcec8cdb7e708604e26a26ae2a07029b92096d43f4790e3e761 extends Twig_Template
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
        $__internal_3b84e8ee25c20237c56c2b985b989dc40bde5ad359d77d96e7957646ba6d2b59 = $this->env->getExtension("native_profiler");
        $__internal_3b84e8ee25c20237c56c2b985b989dc40bde5ad359d77d96e7957646ba6d2b59->enter($__internal_3b84e8ee25c20237c56c2b985b989dc40bde5ad359d77d96e7957646ba6d2b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_3b84e8ee25c20237c56c2b985b989dc40bde5ad359d77d96e7957646ba6d2b59->leave($__internal_3b84e8ee25c20237c56c2b985b989dc40bde5ad359d77d96e7957646ba6d2b59_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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

<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_5de3bfea41ad268c158d16f172c5c4c471f09478a4928904d316aa2dccdc2c82 extends Twig_Template
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
        $__internal_0196365d0a8b0bf59b19696640cf1e3fa6551420bc5502bfd2c9f540c6857050 = $this->env->getExtension("native_profiler");
        $__internal_0196365d0a8b0bf59b19696640cf1e3fa6551420bc5502bfd2c9f540c6857050->enter($__internal_0196365d0a8b0bf59b19696640cf1e3fa6551420bc5502bfd2c9f540c6857050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_0196365d0a8b0bf59b19696640cf1e3fa6551420bc5502bfd2c9f540c6857050->leave($__internal_0196365d0a8b0bf59b19696640cf1e3fa6551420bc5502bfd2c9f540c6857050_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */

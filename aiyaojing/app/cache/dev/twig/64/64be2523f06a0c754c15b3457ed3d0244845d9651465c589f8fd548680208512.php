<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ac33de14415fa5c50ce9dfc86fff467938c368b75261f2c4b625c7f6ce3dd8d4 extends Twig_Template
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
        $__internal_10fc50998749b95495b8f87a229a1d280d653eccddc7abccf7fa411c183e9f49 = $this->env->getExtension("native_profiler");
        $__internal_10fc50998749b95495b8f87a229a1d280d653eccddc7abccf7fa411c183e9f49->enter($__internal_10fc50998749b95495b8f87a229a1d280d653eccddc7abccf7fa411c183e9f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_10fc50998749b95495b8f87a229a1d280d653eccddc7abccf7fa411c183e9f49->leave($__internal_10fc50998749b95495b8f87a229a1d280d653eccddc7abccf7fa411c183e9f49_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

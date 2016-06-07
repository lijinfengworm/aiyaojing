<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_a410b4635d41012ac4d9dccce174f2097e09b3e45ecf3e1aaf09c8e13598956c extends Twig_Template
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
        $__internal_bfd9bf5efd78f9ed297918cff0305b464350f01ddf774618c417983cfbfa2445 = $this->env->getExtension("native_profiler");
        $__internal_bfd9bf5efd78f9ed297918cff0305b464350f01ddf774618c417983cfbfa2445->enter($__internal_bfd9bf5efd78f9ed297918cff0305b464350f01ddf774618c417983cfbfa2445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bfd9bf5efd78f9ed297918cff0305b464350f01ddf774618c417983cfbfa2445->leave($__internal_bfd9bf5efd78f9ed297918cff0305b464350f01ddf774618c417983cfbfa2445_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */

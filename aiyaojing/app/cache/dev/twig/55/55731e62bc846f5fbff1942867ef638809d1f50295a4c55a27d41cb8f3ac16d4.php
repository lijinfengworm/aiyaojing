<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_caa7a2c90cdbe7101ed7b5a337e2878209877f4cbf8a405c50ec699a40587313 extends Twig_Template
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
        $__internal_b59ff0e44db2bc091dbd089d11cd6caa976c4a5f213978a6958be706002d5f82 = $this->env->getExtension("native_profiler");
        $__internal_b59ff0e44db2bc091dbd089d11cd6caa976c4a5f213978a6958be706002d5f82->enter($__internal_b59ff0e44db2bc091dbd089d11cd6caa976c4a5f213978a6958be706002d5f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_b59ff0e44db2bc091dbd089d11cd6caa976c4a5f213978a6958be706002d5f82->leave($__internal_b59ff0e44db2bc091dbd089d11cd6caa976c4a5f213978a6958be706002d5f82_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */

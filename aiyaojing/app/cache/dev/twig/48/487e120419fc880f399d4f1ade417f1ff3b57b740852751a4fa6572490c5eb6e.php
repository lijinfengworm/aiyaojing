<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_130a067442d9fb673ba4a3411fadaf0bfa8cb5509b4de37b6cc1c6f0b8dc203a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_acf83d2dd40e406fe77bed0187c8b99bd7f76cc0ad4419f319c1704a0ec09b2f = $this->env->getExtension("native_profiler");
        $__internal_acf83d2dd40e406fe77bed0187c8b99bd7f76cc0ad4419f319c1704a0ec09b2f->enter($__internal_acf83d2dd40e406fe77bed0187c8b99bd7f76cc0ad4419f319c1704a0ec09b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acf83d2dd40e406fe77bed0187c8b99bd7f76cc0ad4419f319c1704a0ec09b2f->leave($__internal_acf83d2dd40e406fe77bed0187c8b99bd7f76cc0ad4419f319c1704a0ec09b2f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cffb4680439f168f7f8fe2e5265f871166ee5303808442179c590acf0ee0a9b7 = $this->env->getExtension("native_profiler");
        $__internal_cffb4680439f168f7f8fe2e5265f871166ee5303808442179c590acf0ee0a9b7->enter($__internal_cffb4680439f168f7f8fe2e5265f871166ee5303808442179c590acf0ee0a9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cffb4680439f168f7f8fe2e5265f871166ee5303808442179c590acf0ee0a9b7->leave($__internal_cffb4680439f168f7f8fe2e5265f871166ee5303808442179c590acf0ee0a9b7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_86462599109512f28ef1e6fdeebd265b76f65466aafe420f77bf5b57b1cadea5 = $this->env->getExtension("native_profiler");
        $__internal_86462599109512f28ef1e6fdeebd265b76f65466aafe420f77bf5b57b1cadea5->enter($__internal_86462599109512f28ef1e6fdeebd265b76f65466aafe420f77bf5b57b1cadea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_86462599109512f28ef1e6fdeebd265b76f65466aafe420f77bf5b57b1cadea5->leave($__internal_86462599109512f28ef1e6fdeebd265b76f65466aafe420f77bf5b57b1cadea5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8f51078643f41df8f184cf1c56992bea900265036a5568ae678c27088ca979b = $this->env->getExtension("native_profiler");
        $__internal_b8f51078643f41df8f184cf1c56992bea900265036a5568ae678c27088ca979b->enter($__internal_b8f51078643f41df8f184cf1c56992bea900265036a5568ae678c27088ca979b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b8f51078643f41df8f184cf1c56992bea900265036a5568ae678c27088ca979b->leave($__internal_b8f51078643f41df8f184cf1c56992bea900265036a5568ae678c27088ca979b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

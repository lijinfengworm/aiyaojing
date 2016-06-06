<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_130a067442d9fb673ba4a3411fadaf0bfa8cb5509b4de37b6cc1c6f0b8dc203a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_3bd1401facf3b3abb922c5b79268899bd6ec20eb1d14dfa907478f0a77862294 = $this->env->getExtension("native_profiler");
        $__internal_3bd1401facf3b3abb922c5b79268899bd6ec20eb1d14dfa907478f0a77862294->enter($__internal_3bd1401facf3b3abb922c5b79268899bd6ec20eb1d14dfa907478f0a77862294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bd1401facf3b3abb922c5b79268899bd6ec20eb1d14dfa907478f0a77862294->leave($__internal_3bd1401facf3b3abb922c5b79268899bd6ec20eb1d14dfa907478f0a77862294_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2a3907cb9924b187eb7ad61ce0700c0ee27407f343af40dbd9eb4722f2997ffb = $this->env->getExtension("native_profiler");
        $__internal_2a3907cb9924b187eb7ad61ce0700c0ee27407f343af40dbd9eb4722f2997ffb->enter($__internal_2a3907cb9924b187eb7ad61ce0700c0ee27407f343af40dbd9eb4722f2997ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2a3907cb9924b187eb7ad61ce0700c0ee27407f343af40dbd9eb4722f2997ffb->leave($__internal_2a3907cb9924b187eb7ad61ce0700c0ee27407f343af40dbd9eb4722f2997ffb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_04904670d73a85fbfd29052f892e8d1731aaf994ce53e2e2c74f8f28a86ec804 = $this->env->getExtension("native_profiler");
        $__internal_04904670d73a85fbfd29052f892e8d1731aaf994ce53e2e2c74f8f28a86ec804->enter($__internal_04904670d73a85fbfd29052f892e8d1731aaf994ce53e2e2c74f8f28a86ec804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_04904670d73a85fbfd29052f892e8d1731aaf994ce53e2e2c74f8f28a86ec804->leave($__internal_04904670d73a85fbfd29052f892e8d1731aaf994ce53e2e2c74f8f28a86ec804_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b0a7096df7aa636d7a5a9d7717e5f38920ed2e53c9c1826156904055cc4c7fb = $this->env->getExtension("native_profiler");
        $__internal_5b0a7096df7aa636d7a5a9d7717e5f38920ed2e53c9c1826156904055cc4c7fb->enter($__internal_5b0a7096df7aa636d7a5a9d7717e5f38920ed2e53c9c1826156904055cc4c7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5b0a7096df7aa636d7a5a9d7717e5f38920ed2e53c9c1826156904055cc4c7fb->leave($__internal_5b0a7096df7aa636d7a5a9d7717e5f38920ed2e53c9c1826156904055cc4c7fb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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

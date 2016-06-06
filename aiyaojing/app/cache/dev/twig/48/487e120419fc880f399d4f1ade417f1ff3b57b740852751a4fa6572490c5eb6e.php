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
        $__internal_574c8e9fecf151980202ed829c081fafcb969c6902e3c8da0334a890f73c1fed = $this->env->getExtension("native_profiler");
        $__internal_574c8e9fecf151980202ed829c081fafcb969c6902e3c8da0334a890f73c1fed->enter($__internal_574c8e9fecf151980202ed829c081fafcb969c6902e3c8da0334a890f73c1fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_574c8e9fecf151980202ed829c081fafcb969c6902e3c8da0334a890f73c1fed->leave($__internal_574c8e9fecf151980202ed829c081fafcb969c6902e3c8da0334a890f73c1fed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d5aed89dd3bbb32153b49fc927bc0db8e6ce27e7c6f7871bb11cf197e1f0475e = $this->env->getExtension("native_profiler");
        $__internal_d5aed89dd3bbb32153b49fc927bc0db8e6ce27e7c6f7871bb11cf197e1f0475e->enter($__internal_d5aed89dd3bbb32153b49fc927bc0db8e6ce27e7c6f7871bb11cf197e1f0475e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d5aed89dd3bbb32153b49fc927bc0db8e6ce27e7c6f7871bb11cf197e1f0475e->leave($__internal_d5aed89dd3bbb32153b49fc927bc0db8e6ce27e7c6f7871bb11cf197e1f0475e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1083a1c8d96d3a8895d7ac46542f0f812c02508ac9a1ba67f5c9a3aa82ba9b2 = $this->env->getExtension("native_profiler");
        $__internal_b1083a1c8d96d3a8895d7ac46542f0f812c02508ac9a1ba67f5c9a3aa82ba9b2->enter($__internal_b1083a1c8d96d3a8895d7ac46542f0f812c02508ac9a1ba67f5c9a3aa82ba9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b1083a1c8d96d3a8895d7ac46542f0f812c02508ac9a1ba67f5c9a3aa82ba9b2->leave($__internal_b1083a1c8d96d3a8895d7ac46542f0f812c02508ac9a1ba67f5c9a3aa82ba9b2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_734ae0ca22876bdcfd9355e86a724d6ed90c50506fc19cf8382bf80bf1cf78ef = $this->env->getExtension("native_profiler");
        $__internal_734ae0ca22876bdcfd9355e86a724d6ed90c50506fc19cf8382bf80bf1cf78ef->enter($__internal_734ae0ca22876bdcfd9355e86a724d6ed90c50506fc19cf8382bf80bf1cf78ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_734ae0ca22876bdcfd9355e86a724d6ed90c50506fc19cf8382bf80bf1cf78ef->leave($__internal_734ae0ca22876bdcfd9355e86a724d6ed90c50506fc19cf8382bf80bf1cf78ef_prof);

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

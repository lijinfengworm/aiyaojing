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
        $__internal_eea5a14ce85737d241852717b02f7623d967ade9760d7d19da77d66bba429778 = $this->env->getExtension("native_profiler");
        $__internal_eea5a14ce85737d241852717b02f7623d967ade9760d7d19da77d66bba429778->enter($__internal_eea5a14ce85737d241852717b02f7623d967ade9760d7d19da77d66bba429778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eea5a14ce85737d241852717b02f7623d967ade9760d7d19da77d66bba429778->leave($__internal_eea5a14ce85737d241852717b02f7623d967ade9760d7d19da77d66bba429778_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_30fc348e897ee4cc78b172c89488ba9b95d03429175e5938b7113aa04c4f6dd5 = $this->env->getExtension("native_profiler");
        $__internal_30fc348e897ee4cc78b172c89488ba9b95d03429175e5938b7113aa04c4f6dd5->enter($__internal_30fc348e897ee4cc78b172c89488ba9b95d03429175e5938b7113aa04c4f6dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_30fc348e897ee4cc78b172c89488ba9b95d03429175e5938b7113aa04c4f6dd5->leave($__internal_30fc348e897ee4cc78b172c89488ba9b95d03429175e5938b7113aa04c4f6dd5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_73b203ab7ca0d1f84a17846c1eaca6eb77ef5fb5605cb2c590641437b93cdb37 = $this->env->getExtension("native_profiler");
        $__internal_73b203ab7ca0d1f84a17846c1eaca6eb77ef5fb5605cb2c590641437b93cdb37->enter($__internal_73b203ab7ca0d1f84a17846c1eaca6eb77ef5fb5605cb2c590641437b93cdb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_73b203ab7ca0d1f84a17846c1eaca6eb77ef5fb5605cb2c590641437b93cdb37->leave($__internal_73b203ab7ca0d1f84a17846c1eaca6eb77ef5fb5605cb2c590641437b93cdb37_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5dd9b1595d763837dc413f80f8dc3fa7b577fc27908510b694a8c384a307c1cc = $this->env->getExtension("native_profiler");
        $__internal_5dd9b1595d763837dc413f80f8dc3fa7b577fc27908510b694a8c384a307c1cc->enter($__internal_5dd9b1595d763837dc413f80f8dc3fa7b577fc27908510b694a8c384a307c1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5dd9b1595d763837dc413f80f8dc3fa7b577fc27908510b694a8c384a307c1cc->leave($__internal_5dd9b1595d763837dc413f80f8dc3fa7b577fc27908510b694a8c384a307c1cc_prof);

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

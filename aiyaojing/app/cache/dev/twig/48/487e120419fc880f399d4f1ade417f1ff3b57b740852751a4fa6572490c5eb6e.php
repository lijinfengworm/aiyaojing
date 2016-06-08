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
        $__internal_7a9985113569d524b26cbc8d0890a5d492ccbf9ed52bd6835d55c3bd1c8d5044 = $this->env->getExtension("native_profiler");
        $__internal_7a9985113569d524b26cbc8d0890a5d492ccbf9ed52bd6835d55c3bd1c8d5044->enter($__internal_7a9985113569d524b26cbc8d0890a5d492ccbf9ed52bd6835d55c3bd1c8d5044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a9985113569d524b26cbc8d0890a5d492ccbf9ed52bd6835d55c3bd1c8d5044->leave($__internal_7a9985113569d524b26cbc8d0890a5d492ccbf9ed52bd6835d55c3bd1c8d5044_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_adfc2ebbff9a0e4f83debbe7ebbec7426b9ffa730d8bb7dbf6fb30b8a3a74063 = $this->env->getExtension("native_profiler");
        $__internal_adfc2ebbff9a0e4f83debbe7ebbec7426b9ffa730d8bb7dbf6fb30b8a3a74063->enter($__internal_adfc2ebbff9a0e4f83debbe7ebbec7426b9ffa730d8bb7dbf6fb30b8a3a74063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_adfc2ebbff9a0e4f83debbe7ebbec7426b9ffa730d8bb7dbf6fb30b8a3a74063->leave($__internal_adfc2ebbff9a0e4f83debbe7ebbec7426b9ffa730d8bb7dbf6fb30b8a3a74063_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c65c469846bf71e27a0f319a05ce007101ef51f3ec1f29c967390a7c151c22f3 = $this->env->getExtension("native_profiler");
        $__internal_c65c469846bf71e27a0f319a05ce007101ef51f3ec1f29c967390a7c151c22f3->enter($__internal_c65c469846bf71e27a0f319a05ce007101ef51f3ec1f29c967390a7c151c22f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c65c469846bf71e27a0f319a05ce007101ef51f3ec1f29c967390a7c151c22f3->leave($__internal_c65c469846bf71e27a0f319a05ce007101ef51f3ec1f29c967390a7c151c22f3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e10d8cd69d3a70416a7757c99a212f09b15a4170081d5136482d90ad0169381 = $this->env->getExtension("native_profiler");
        $__internal_7e10d8cd69d3a70416a7757c99a212f09b15a4170081d5136482d90ad0169381->enter($__internal_7e10d8cd69d3a70416a7757c99a212f09b15a4170081d5136482d90ad0169381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7e10d8cd69d3a70416a7757c99a212f09b15a4170081d5136482d90ad0169381->leave($__internal_7e10d8cd69d3a70416a7757c99a212f09b15a4170081d5136482d90ad0169381_prof);

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

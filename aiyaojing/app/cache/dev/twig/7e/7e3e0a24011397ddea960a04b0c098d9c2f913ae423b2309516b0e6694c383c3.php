<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_83d091e9ba2fad8a4b9463aeaca88e0a369fa85caf496b15050dc3f164064554 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_da940b0602c518edb59318f9d1ee1d6d1faa13d823f3b593b0764dba33639fe5 = $this->env->getExtension("native_profiler");
        $__internal_da940b0602c518edb59318f9d1ee1d6d1faa13d823f3b593b0764dba33639fe5->enter($__internal_da940b0602c518edb59318f9d1ee1d6d1faa13d823f3b593b0764dba33639fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da940b0602c518edb59318f9d1ee1d6d1faa13d823f3b593b0764dba33639fe5->leave($__internal_da940b0602c518edb59318f9d1ee1d6d1faa13d823f3b593b0764dba33639fe5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_17ecb62a71f1186c28830eeb0a23f53129797316ae89d6db928932c0fd93fba9 = $this->env->getExtension("native_profiler");
        $__internal_17ecb62a71f1186c28830eeb0a23f53129797316ae89d6db928932c0fd93fba9->enter($__internal_17ecb62a71f1186c28830eeb0a23f53129797316ae89d6db928932c0fd93fba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_17ecb62a71f1186c28830eeb0a23f53129797316ae89d6db928932c0fd93fba9->leave($__internal_17ecb62a71f1186c28830eeb0a23f53129797316ae89d6db928932c0fd93fba9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1d5e33917eb150100c8702c1948a182258457eb48180fb28fa1a01cef2207fe = $this->env->getExtension("native_profiler");
        $__internal_d1d5e33917eb150100c8702c1948a182258457eb48180fb28fa1a01cef2207fe->enter($__internal_d1d5e33917eb150100c8702c1948a182258457eb48180fb28fa1a01cef2207fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d1d5e33917eb150100c8702c1948a182258457eb48180fb28fa1a01cef2207fe->leave($__internal_d1d5e33917eb150100c8702c1948a182258457eb48180fb28fa1a01cef2207fe_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

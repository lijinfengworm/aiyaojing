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
        $__internal_3c99613916320252a095ae826f1361935ecd63dc3d8ba3f32e3e8c6cf3000547 = $this->env->getExtension("native_profiler");
        $__internal_3c99613916320252a095ae826f1361935ecd63dc3d8ba3f32e3e8c6cf3000547->enter($__internal_3c99613916320252a095ae826f1361935ecd63dc3d8ba3f32e3e8c6cf3000547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c99613916320252a095ae826f1361935ecd63dc3d8ba3f32e3e8c6cf3000547->leave($__internal_3c99613916320252a095ae826f1361935ecd63dc3d8ba3f32e3e8c6cf3000547_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c24e7e0b73eac8644ebdbee097079efa417dffcf6314234762003b8b05b99043 = $this->env->getExtension("native_profiler");
        $__internal_c24e7e0b73eac8644ebdbee097079efa417dffcf6314234762003b8b05b99043->enter($__internal_c24e7e0b73eac8644ebdbee097079efa417dffcf6314234762003b8b05b99043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c24e7e0b73eac8644ebdbee097079efa417dffcf6314234762003b8b05b99043->leave($__internal_c24e7e0b73eac8644ebdbee097079efa417dffcf6314234762003b8b05b99043_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fdc4acd3ab0f6024a0a17ff124a3a21264625071ac76d47c0b8f9ab9b10420e6 = $this->env->getExtension("native_profiler");
        $__internal_fdc4acd3ab0f6024a0a17ff124a3a21264625071ac76d47c0b8f9ab9b10420e6->enter($__internal_fdc4acd3ab0f6024a0a17ff124a3a21264625071ac76d47c0b8f9ab9b10420e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fdc4acd3ab0f6024a0a17ff124a3a21264625071ac76d47c0b8f9ab9b10420e6->leave($__internal_fdc4acd3ab0f6024a0a17ff124a3a21264625071ac76d47c0b8f9ab9b10420e6_prof);

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

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
        $__internal_f4cf1a749fe0497d4723d90414eac1a0d3b3897636875d2ee1e6268b1019b67a = $this->env->getExtension("native_profiler");
        $__internal_f4cf1a749fe0497d4723d90414eac1a0d3b3897636875d2ee1e6268b1019b67a->enter($__internal_f4cf1a749fe0497d4723d90414eac1a0d3b3897636875d2ee1e6268b1019b67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4cf1a749fe0497d4723d90414eac1a0d3b3897636875d2ee1e6268b1019b67a->leave($__internal_f4cf1a749fe0497d4723d90414eac1a0d3b3897636875d2ee1e6268b1019b67a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab7aa332b8737031667c2a4bb6d23bff420388f031bc8e5eb1702ba68067160d = $this->env->getExtension("native_profiler");
        $__internal_ab7aa332b8737031667c2a4bb6d23bff420388f031bc8e5eb1702ba68067160d->enter($__internal_ab7aa332b8737031667c2a4bb6d23bff420388f031bc8e5eb1702ba68067160d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ab7aa332b8737031667c2a4bb6d23bff420388f031bc8e5eb1702ba68067160d->leave($__internal_ab7aa332b8737031667c2a4bb6d23bff420388f031bc8e5eb1702ba68067160d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b7a03d32d23a1501e8e5a3258bfc33705a5c3f9feaa12faa8a48e9f30245987 = $this->env->getExtension("native_profiler");
        $__internal_3b7a03d32d23a1501e8e5a3258bfc33705a5c3f9feaa12faa8a48e9f30245987->enter($__internal_3b7a03d32d23a1501e8e5a3258bfc33705a5c3f9feaa12faa8a48e9f30245987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3b7a03d32d23a1501e8e5a3258bfc33705a5c3f9feaa12faa8a48e9f30245987->leave($__internal_3b7a03d32d23a1501e8e5a3258bfc33705a5c3f9feaa12faa8a48e9f30245987_prof);

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

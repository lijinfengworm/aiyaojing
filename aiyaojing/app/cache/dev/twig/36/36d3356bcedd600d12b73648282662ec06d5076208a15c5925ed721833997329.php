<?php

/* base.html.twig */
class __TwigTemplate_6720304c7c1e01a0402b9e06177001b9aeb653f67299aa2819c3bd59467b2190 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ee5eb658d61d16e76f5dc25111c0885329fe5697564f0886aa4634b702ddbca = $this->env->getExtension("native_profiler");
        $__internal_9ee5eb658d61d16e76f5dc25111c0885329fe5697564f0886aa4634b702ddbca->enter($__internal_9ee5eb658d61d16e76f5dc25111c0885329fe5697564f0886aa4634b702ddbca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9ee5eb658d61d16e76f5dc25111c0885329fe5697564f0886aa4634b702ddbca->leave($__internal_9ee5eb658d61d16e76f5dc25111c0885329fe5697564f0886aa4634b702ddbca_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6fb1bc73202233aee7f4f7e548557bbb9e9c5708007998211aeba00d7c1c7e9 = $this->env->getExtension("native_profiler");
        $__internal_c6fb1bc73202233aee7f4f7e548557bbb9e9c5708007998211aeba00d7c1c7e9->enter($__internal_c6fb1bc73202233aee7f4f7e548557bbb9e9c5708007998211aeba00d7c1c7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c6fb1bc73202233aee7f4f7e548557bbb9e9c5708007998211aeba00d7c1c7e9->leave($__internal_c6fb1bc73202233aee7f4f7e548557bbb9e9c5708007998211aeba00d7c1c7e9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c62f08a6e56ac38e3635b0c09e89408cdbf12f56fc743dd8aaebb0ebefc1681f = $this->env->getExtension("native_profiler");
        $__internal_c62f08a6e56ac38e3635b0c09e89408cdbf12f56fc743dd8aaebb0ebefc1681f->enter($__internal_c62f08a6e56ac38e3635b0c09e89408cdbf12f56fc743dd8aaebb0ebefc1681f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c62f08a6e56ac38e3635b0c09e89408cdbf12f56fc743dd8aaebb0ebefc1681f->leave($__internal_c62f08a6e56ac38e3635b0c09e89408cdbf12f56fc743dd8aaebb0ebefc1681f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd443a39210b26a144529dd9368223f16040dceb088c1427e35b76b9a70dd3a8 = $this->env->getExtension("native_profiler");
        $__internal_bd443a39210b26a144529dd9368223f16040dceb088c1427e35b76b9a70dd3a8->enter($__internal_bd443a39210b26a144529dd9368223f16040dceb088c1427e35b76b9a70dd3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bd443a39210b26a144529dd9368223f16040dceb088c1427e35b76b9a70dd3a8->leave($__internal_bd443a39210b26a144529dd9368223f16040dceb088c1427e35b76b9a70dd3a8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2935e5c0afc4b7aba40ccd9a2afe2cea6ffff602823061035d870a60986982e8 = $this->env->getExtension("native_profiler");
        $__internal_2935e5c0afc4b7aba40ccd9a2afe2cea6ffff602823061035d870a60986982e8->enter($__internal_2935e5c0afc4b7aba40ccd9a2afe2cea6ffff602823061035d870a60986982e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2935e5c0afc4b7aba40ccd9a2afe2cea6ffff602823061035d870a60986982e8->leave($__internal_2935e5c0afc4b7aba40ccd9a2afe2cea6ffff602823061035d870a60986982e8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

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
        $__internal_96eaaa3c9c4aeb0fa71960e42a4a44323ba62b6402cda6b85d5d77b2b26bdf8b = $this->env->getExtension("native_profiler");
        $__internal_96eaaa3c9c4aeb0fa71960e42a4a44323ba62b6402cda6b85d5d77b2b26bdf8b->enter($__internal_96eaaa3c9c4aeb0fa71960e42a4a44323ba62b6402cda6b85d5d77b2b26bdf8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_96eaaa3c9c4aeb0fa71960e42a4a44323ba62b6402cda6b85d5d77b2b26bdf8b->leave($__internal_96eaaa3c9c4aeb0fa71960e42a4a44323ba62b6402cda6b85d5d77b2b26bdf8b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_723a8d63ef3ddadf98a9a837b65cedad1615fefa482f2d3eda829c1ea9b7b3ce = $this->env->getExtension("native_profiler");
        $__internal_723a8d63ef3ddadf98a9a837b65cedad1615fefa482f2d3eda829c1ea9b7b3ce->enter($__internal_723a8d63ef3ddadf98a9a837b65cedad1615fefa482f2d3eda829c1ea9b7b3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_723a8d63ef3ddadf98a9a837b65cedad1615fefa482f2d3eda829c1ea9b7b3ce->leave($__internal_723a8d63ef3ddadf98a9a837b65cedad1615fefa482f2d3eda829c1ea9b7b3ce_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_04e5143c0fd8a0e8c7fcc976a3e942b860656ad679b0544908ac27d4a66c35b2 = $this->env->getExtension("native_profiler");
        $__internal_04e5143c0fd8a0e8c7fcc976a3e942b860656ad679b0544908ac27d4a66c35b2->enter($__internal_04e5143c0fd8a0e8c7fcc976a3e942b860656ad679b0544908ac27d4a66c35b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_04e5143c0fd8a0e8c7fcc976a3e942b860656ad679b0544908ac27d4a66c35b2->leave($__internal_04e5143c0fd8a0e8c7fcc976a3e942b860656ad679b0544908ac27d4a66c35b2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2186de920ff6bf7cf90ac0c868de92ec0268a79f4fe503d37e2233bee2d75fcc = $this->env->getExtension("native_profiler");
        $__internal_2186de920ff6bf7cf90ac0c868de92ec0268a79f4fe503d37e2233bee2d75fcc->enter($__internal_2186de920ff6bf7cf90ac0c868de92ec0268a79f4fe503d37e2233bee2d75fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2186de920ff6bf7cf90ac0c868de92ec0268a79f4fe503d37e2233bee2d75fcc->leave($__internal_2186de920ff6bf7cf90ac0c868de92ec0268a79f4fe503d37e2233bee2d75fcc_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_42e8541af2e422246b94f34c1d973cc13511bae13d248575405fe26a3365de1c = $this->env->getExtension("native_profiler");
        $__internal_42e8541af2e422246b94f34c1d973cc13511bae13d248575405fe26a3365de1c->enter($__internal_42e8541af2e422246b94f34c1d973cc13511bae13d248575405fe26a3365de1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_42e8541af2e422246b94f34c1d973cc13511bae13d248575405fe26a3365de1c->leave($__internal_42e8541af2e422246b94f34c1d973cc13511bae13d248575405fe26a3365de1c_prof);

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

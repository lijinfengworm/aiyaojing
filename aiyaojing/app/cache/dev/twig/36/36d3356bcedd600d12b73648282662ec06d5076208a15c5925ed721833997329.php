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
        $__internal_8458f39a818cdeabc8ff5902a60370f0542e0635bdf3680cc8272a3250d6a2ec = $this->env->getExtension("native_profiler");
        $__internal_8458f39a818cdeabc8ff5902a60370f0542e0635bdf3680cc8272a3250d6a2ec->enter($__internal_8458f39a818cdeabc8ff5902a60370f0542e0635bdf3680cc8272a3250d6a2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8458f39a818cdeabc8ff5902a60370f0542e0635bdf3680cc8272a3250d6a2ec->leave($__internal_8458f39a818cdeabc8ff5902a60370f0542e0635bdf3680cc8272a3250d6a2ec_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4728cce229a60301b2e101df9e05106606e19ab3510dd3514224a42f01da05ca = $this->env->getExtension("native_profiler");
        $__internal_4728cce229a60301b2e101df9e05106606e19ab3510dd3514224a42f01da05ca->enter($__internal_4728cce229a60301b2e101df9e05106606e19ab3510dd3514224a42f01da05ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4728cce229a60301b2e101df9e05106606e19ab3510dd3514224a42f01da05ca->leave($__internal_4728cce229a60301b2e101df9e05106606e19ab3510dd3514224a42f01da05ca_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b72934d1068636ad87779578c997af98d42dcb54fa74bcdade2bd1f250234fcc = $this->env->getExtension("native_profiler");
        $__internal_b72934d1068636ad87779578c997af98d42dcb54fa74bcdade2bd1f250234fcc->enter($__internal_b72934d1068636ad87779578c997af98d42dcb54fa74bcdade2bd1f250234fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b72934d1068636ad87779578c997af98d42dcb54fa74bcdade2bd1f250234fcc->leave($__internal_b72934d1068636ad87779578c997af98d42dcb54fa74bcdade2bd1f250234fcc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1cc08a56c0451ffc93b7f5517915a420a794cc009ea2b8396c9dcbfb36bfcf8 = $this->env->getExtension("native_profiler");
        $__internal_d1cc08a56c0451ffc93b7f5517915a420a794cc009ea2b8396c9dcbfb36bfcf8->enter($__internal_d1cc08a56c0451ffc93b7f5517915a420a794cc009ea2b8396c9dcbfb36bfcf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d1cc08a56c0451ffc93b7f5517915a420a794cc009ea2b8396c9dcbfb36bfcf8->leave($__internal_d1cc08a56c0451ffc93b7f5517915a420a794cc009ea2b8396c9dcbfb36bfcf8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e374e68513d99267eb4fc1b72436791ae495aaec4a87185b6dc1295a08e526b1 = $this->env->getExtension("native_profiler");
        $__internal_e374e68513d99267eb4fc1b72436791ae495aaec4a87185b6dc1295a08e526b1->enter($__internal_e374e68513d99267eb4fc1b72436791ae495aaec4a87185b6dc1295a08e526b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e374e68513d99267eb4fc1b72436791ae495aaec4a87185b6dc1295a08e526b1->leave($__internal_e374e68513d99267eb4fc1b72436791ae495aaec4a87185b6dc1295a08e526b1_prof);

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

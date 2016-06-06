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
        $__internal_305cb17e774324f05e947505a62cd6154e99aab6391d52e14e12f92cfbcdb552 = $this->env->getExtension("native_profiler");
        $__internal_305cb17e774324f05e947505a62cd6154e99aab6391d52e14e12f92cfbcdb552->enter($__internal_305cb17e774324f05e947505a62cd6154e99aab6391d52e14e12f92cfbcdb552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_305cb17e774324f05e947505a62cd6154e99aab6391d52e14e12f92cfbcdb552->leave($__internal_305cb17e774324f05e947505a62cd6154e99aab6391d52e14e12f92cfbcdb552_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0adb9615f0f29764e2e7cc6f124ce1349538148c75505a125246a25cea34786 = $this->env->getExtension("native_profiler");
        $__internal_f0adb9615f0f29764e2e7cc6f124ce1349538148c75505a125246a25cea34786->enter($__internal_f0adb9615f0f29764e2e7cc6f124ce1349538148c75505a125246a25cea34786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f0adb9615f0f29764e2e7cc6f124ce1349538148c75505a125246a25cea34786->leave($__internal_f0adb9615f0f29764e2e7cc6f124ce1349538148c75505a125246a25cea34786_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c6606fe03c0d7674615ed098c69066691ccf4b480714872f39546deb0434f52e = $this->env->getExtension("native_profiler");
        $__internal_c6606fe03c0d7674615ed098c69066691ccf4b480714872f39546deb0434f52e->enter($__internal_c6606fe03c0d7674615ed098c69066691ccf4b480714872f39546deb0434f52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c6606fe03c0d7674615ed098c69066691ccf4b480714872f39546deb0434f52e->leave($__internal_c6606fe03c0d7674615ed098c69066691ccf4b480714872f39546deb0434f52e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f244b9a81c1ece4c05923b21061b9ca6d512fa2b42cf9fe1b530f1e8c1a188a7 = $this->env->getExtension("native_profiler");
        $__internal_f244b9a81c1ece4c05923b21061b9ca6d512fa2b42cf9fe1b530f1e8c1a188a7->enter($__internal_f244b9a81c1ece4c05923b21061b9ca6d512fa2b42cf9fe1b530f1e8c1a188a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f244b9a81c1ece4c05923b21061b9ca6d512fa2b42cf9fe1b530f1e8c1a188a7->leave($__internal_f244b9a81c1ece4c05923b21061b9ca6d512fa2b42cf9fe1b530f1e8c1a188a7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_caa2e355745c7541026f9542cbc2b9ec2c8553e16befdf1e0fc43a5f40c5620e = $this->env->getExtension("native_profiler");
        $__internal_caa2e355745c7541026f9542cbc2b9ec2c8553e16befdf1e0fc43a5f40c5620e->enter($__internal_caa2e355745c7541026f9542cbc2b9ec2c8553e16befdf1e0fc43a5f40c5620e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_caa2e355745c7541026f9542cbc2b9ec2c8553e16befdf1e0fc43a5f40c5620e->leave($__internal_caa2e355745c7541026f9542cbc2b9ec2c8553e16befdf1e0fc43a5f40c5620e_prof);

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

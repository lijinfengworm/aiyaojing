<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_c2f4bac48d2a6d497e725ff35254304d35604532d873f106fe7ee7f0b5f7c152 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10332f0190bbb80bc3a8da70f9f1a7eb46259285b9adc2c25975ca1701479842 = $this->env->getExtension("native_profiler");
        $__internal_10332f0190bbb80bc3a8da70f9f1a7eb46259285b9adc2c25975ca1701479842->enter($__internal_10332f0190bbb80bc3a8da70f9f1a7eb46259285b9adc2c25975ca1701479842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_10332f0190bbb80bc3a8da70f9f1a7eb46259285b9adc2c25975ca1701479842->leave($__internal_10332f0190bbb80bc3a8da70f9f1a7eb46259285b9adc2c25975ca1701479842_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */

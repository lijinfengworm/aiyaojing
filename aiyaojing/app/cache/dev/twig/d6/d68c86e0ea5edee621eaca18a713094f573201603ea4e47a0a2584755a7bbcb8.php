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
        $__internal_0d479ddef7431343377d59df2a4d8361ec0269734b148bfb0768a1a355fe602a = $this->env->getExtension("native_profiler");
        $__internal_0d479ddef7431343377d59df2a4d8361ec0269734b148bfb0768a1a355fe602a->enter($__internal_0d479ddef7431343377d59df2a4d8361ec0269734b148bfb0768a1a355fe602a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_0d479ddef7431343377d59df2a4d8361ec0269734b148bfb0768a1a355fe602a->leave($__internal_0d479ddef7431343377d59df2a4d8361ec0269734b148bfb0768a1a355fe602a_prof);

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

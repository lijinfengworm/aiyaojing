<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_bf55fb617cfda36241cdfc5f0f1ae8c2d323c1abe3155f2ee56b6dbaa95b27eb extends Twig_Template
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
        $__internal_7dcfcd6c42cd531c8b7667bb6d48de72e68570f2c7200e3fcde09ee90e3fa154 = $this->env->getExtension("native_profiler");
        $__internal_7dcfcd6c42cd531c8b7667bb6d48de72e68570f2c7200e3fcde09ee90e3fa154->enter($__internal_7dcfcd6c42cd531c8b7667bb6d48de72e68570f2c7200e3fcde09ee90e3fa154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7dcfcd6c42cd531c8b7667bb6d48de72e68570f2c7200e3fcde09ee90e3fa154->leave($__internal_7dcfcd6c42cd531c8b7667bb6d48de72e68570f2c7200e3fcde09ee90e3fa154_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */

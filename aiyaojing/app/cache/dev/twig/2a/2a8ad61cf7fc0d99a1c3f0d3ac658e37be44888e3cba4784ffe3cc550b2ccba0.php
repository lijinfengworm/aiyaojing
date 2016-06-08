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
        $__internal_0b3702e4060991b9f762a356053e65cd807f88d52f69ba907986fbea381dcb78 = $this->env->getExtension("native_profiler");
        $__internal_0b3702e4060991b9f762a356053e65cd807f88d52f69ba907986fbea381dcb78->enter($__internal_0b3702e4060991b9f762a356053e65cd807f88d52f69ba907986fbea381dcb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_0b3702e4060991b9f762a356053e65cd807f88d52f69ba907986fbea381dcb78->leave($__internal_0b3702e4060991b9f762a356053e65cd807f88d52f69ba907986fbea381dcb78_prof);

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

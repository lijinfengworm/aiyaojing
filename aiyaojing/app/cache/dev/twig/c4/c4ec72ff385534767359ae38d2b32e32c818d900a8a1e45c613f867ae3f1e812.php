<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_39279380396d0bf3f690345b9d59ee7d8c8f9ac37a84a48ee344800e37ac6943 extends Twig_Template
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
        $__internal_c3a6d1059bbe7948d910b29538bf8a634868a50bcd2ccc3148055065d0f99c55 = $this->env->getExtension("native_profiler");
        $__internal_c3a6d1059bbe7948d910b29538bf8a634868a50bcd2ccc3148055065d0f99c55->enter($__internal_c3a6d1059bbe7948d910b29538bf8a634868a50bcd2ccc3148055065d0f99c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c3a6d1059bbe7948d910b29538bf8a634868a50bcd2ccc3148055065d0f99c55->leave($__internal_c3a6d1059bbe7948d910b29538bf8a634868a50bcd2ccc3148055065d0f99c55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */

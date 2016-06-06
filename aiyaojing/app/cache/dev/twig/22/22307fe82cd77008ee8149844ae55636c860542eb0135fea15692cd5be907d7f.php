<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_bd495412e5cde185bb69dbc2c06aceeadd1a5a4b12fe8eabdeeac98570a09a94 extends Twig_Template
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
        $__internal_14d455920ef9e81462da31ead75d0fdc24ac08f7dd3e36e6f8ad6b681190212f = $this->env->getExtension("native_profiler");
        $__internal_14d455920ef9e81462da31ead75d0fdc24ac08f7dd3e36e6f8ad6b681190212f->enter($__internal_14d455920ef9e81462da31ead75d0fdc24ac08f7dd3e36e6f8ad6b681190212f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_14d455920ef9e81462da31ead75d0fdc24ac08f7dd3e36e6f8ad6b681190212f->leave($__internal_14d455920ef9e81462da31ead75d0fdc24ac08f7dd3e36e6f8ad6b681190212f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */

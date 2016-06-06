<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_2f2c0c64671b5523fd7bea477342189fe9c3c0ebeec0f829b3f826e1658f4642 extends Twig_Template
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
        $__internal_78ee13cf02f34a61da76614004e9aaca9d648b16f82d136493190c89c9c1b7d9 = $this->env->getExtension("native_profiler");
        $__internal_78ee13cf02f34a61da76614004e9aaca9d648b16f82d136493190c89c9c1b7d9->enter($__internal_78ee13cf02f34a61da76614004e9aaca9d648b16f82d136493190c89c9c1b7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_78ee13cf02f34a61da76614004e9aaca9d648b16f82d136493190c89c9c1b7d9->leave($__internal_78ee13cf02f34a61da76614004e9aaca9d648b16f82d136493190c89c9c1b7d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */

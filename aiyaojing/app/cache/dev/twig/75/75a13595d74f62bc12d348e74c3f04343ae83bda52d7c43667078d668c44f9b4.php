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
        $__internal_830f05f23a0bcb84d64cc776def4be95b628ed2a1837769f919ea899d87aa4b3 = $this->env->getExtension("native_profiler");
        $__internal_830f05f23a0bcb84d64cc776def4be95b628ed2a1837769f919ea899d87aa4b3->enter($__internal_830f05f23a0bcb84d64cc776def4be95b628ed2a1837769f919ea899d87aa4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_830f05f23a0bcb84d64cc776def4be95b628ed2a1837769f919ea899d87aa4b3->leave($__internal_830f05f23a0bcb84d64cc776def4be95b628ed2a1837769f919ea899d87aa4b3_prof);

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

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
        $__internal_c69262c0777bc2cde5c3cbf6c5a3a4595b4d0df6178335638d557f8cdb2f6d7d = $this->env->getExtension("native_profiler");
        $__internal_c69262c0777bc2cde5c3cbf6c5a3a4595b4d0df6178335638d557f8cdb2f6d7d->enter($__internal_c69262c0777bc2cde5c3cbf6c5a3a4595b4d0df6178335638d557f8cdb2f6d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c69262c0777bc2cde5c3cbf6c5a3a4595b4d0df6178335638d557f8cdb2f6d7d->leave($__internal_c69262c0777bc2cde5c3cbf6c5a3a4595b4d0df6178335638d557f8cdb2f6d7d_prof);

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

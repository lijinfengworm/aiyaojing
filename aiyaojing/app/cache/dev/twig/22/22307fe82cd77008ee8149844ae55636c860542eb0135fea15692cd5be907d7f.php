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
        $__internal_0868788c2b4f1935f16c371aab52dacba1d3464f9df2ab8495d8218a9909270b = $this->env->getExtension("native_profiler");
        $__internal_0868788c2b4f1935f16c371aab52dacba1d3464f9df2ab8495d8218a9909270b->enter($__internal_0868788c2b4f1935f16c371aab52dacba1d3464f9df2ab8495d8218a9909270b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0868788c2b4f1935f16c371aab52dacba1d3464f9df2ab8495d8218a9909270b->leave($__internal_0868788c2b4f1935f16c371aab52dacba1d3464f9df2ab8495d8218a9909270b_prof);

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

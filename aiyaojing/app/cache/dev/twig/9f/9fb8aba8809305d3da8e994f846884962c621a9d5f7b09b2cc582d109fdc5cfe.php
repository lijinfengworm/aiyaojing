<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_954240f3e3973532973841f8fd4fc6381330a731c2a48ca5f01b54fd14185276 extends Twig_Template
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
        $__internal_4343fd42c1f3ed32b02b053488ff35bb352f0f3b10dec82efc7662249284e9cf = $this->env->getExtension("native_profiler");
        $__internal_4343fd42c1f3ed32b02b053488ff35bb352f0f3b10dec82efc7662249284e9cf->enter($__internal_4343fd42c1f3ed32b02b053488ff35bb352f0f3b10dec82efc7662249284e9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4343fd42c1f3ed32b02b053488ff35bb352f0f3b10dec82efc7662249284e9cf->leave($__internal_4343fd42c1f3ed32b02b053488ff35bb352f0f3b10dec82efc7662249284e9cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */

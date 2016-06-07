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
        $__internal_3924148ea250d0b8b0ad865d83833fe07b27ea65d47fc1eb289c2476b511e003 = $this->env->getExtension("native_profiler");
        $__internal_3924148ea250d0b8b0ad865d83833fe07b27ea65d47fc1eb289c2476b511e003->enter($__internal_3924148ea250d0b8b0ad865d83833fe07b27ea65d47fc1eb289c2476b511e003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3924148ea250d0b8b0ad865d83833fe07b27ea65d47fc1eb289c2476b511e003->leave($__internal_3924148ea250d0b8b0ad865d83833fe07b27ea65d47fc1eb289c2476b511e003_prof);

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

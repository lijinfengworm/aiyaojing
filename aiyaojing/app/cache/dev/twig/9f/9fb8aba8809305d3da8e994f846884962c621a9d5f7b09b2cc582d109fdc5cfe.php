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
        $__internal_b1e51d3f7a21ce6be29dfa70eba36cdb7080951b8642181a482a522cce756158 = $this->env->getExtension("native_profiler");
        $__internal_b1e51d3f7a21ce6be29dfa70eba36cdb7080951b8642181a482a522cce756158->enter($__internal_b1e51d3f7a21ce6be29dfa70eba36cdb7080951b8642181a482a522cce756158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b1e51d3f7a21ce6be29dfa70eba36cdb7080951b8642181a482a522cce756158->leave($__internal_b1e51d3f7a21ce6be29dfa70eba36cdb7080951b8642181a482a522cce756158_prof);

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

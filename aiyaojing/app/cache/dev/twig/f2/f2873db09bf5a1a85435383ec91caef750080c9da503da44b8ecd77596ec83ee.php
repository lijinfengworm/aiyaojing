<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_d3e665ebb3cf99ee2cb7176268bbf501597a6e5a3160019506717346d86268ae extends Twig_Template
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
        $__internal_da12c0c4a6ce661cfa7e659921c4277ca0782f24d253fc301693be931487d2c8 = $this->env->getExtension("native_profiler");
        $__internal_da12c0c4a6ce661cfa7e659921c4277ca0782f24d253fc301693be931487d2c8->enter($__internal_da12c0c4a6ce661cfa7e659921c4277ca0782f24d253fc301693be931487d2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_da12c0c4a6ce661cfa7e659921c4277ca0782f24d253fc301693be931487d2c8->leave($__internal_da12c0c4a6ce661cfa7e659921c4277ca0782f24d253fc301693be931487d2c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */

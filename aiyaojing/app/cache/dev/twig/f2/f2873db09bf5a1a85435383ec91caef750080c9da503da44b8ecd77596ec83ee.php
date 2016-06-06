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
        $__internal_14084ede5203808a428741a6ebc0404672bd430b5979502fe046409573bc357f = $this->env->getExtension("native_profiler");
        $__internal_14084ede5203808a428741a6ebc0404672bd430b5979502fe046409573bc357f->enter($__internal_14084ede5203808a428741a6ebc0404672bd430b5979502fe046409573bc357f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_14084ede5203808a428741a6ebc0404672bd430b5979502fe046409573bc357f->leave($__internal_14084ede5203808a428741a6ebc0404672bd430b5979502fe046409573bc357f_prof);

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

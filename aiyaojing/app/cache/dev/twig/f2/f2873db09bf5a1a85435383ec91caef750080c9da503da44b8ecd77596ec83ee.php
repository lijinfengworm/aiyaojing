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
        $__internal_b65942347d7a187db404f22d1640986c87c41e931bb381a3ee74221ca149fc95 = $this->env->getExtension("native_profiler");
        $__internal_b65942347d7a187db404f22d1640986c87c41e931bb381a3ee74221ca149fc95->enter($__internal_b65942347d7a187db404f22d1640986c87c41e931bb381a3ee74221ca149fc95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b65942347d7a187db404f22d1640986c87c41e931bb381a3ee74221ca149fc95->leave($__internal_b65942347d7a187db404f22d1640986c87c41e931bb381a3ee74221ca149fc95_prof);

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
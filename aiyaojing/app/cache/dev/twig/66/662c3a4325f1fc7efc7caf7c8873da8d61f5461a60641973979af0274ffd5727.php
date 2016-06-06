<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_42f528746f35e017c66dd9addac7aedc8c568ff8a89f1dfb69685295c35c768c extends Twig_Template
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
        $__internal_f7b6d6edc08380707559679a5a9918f2c8dc8cd4682b4e79f7722188577b1b9d = $this->env->getExtension("native_profiler");
        $__internal_f7b6d6edc08380707559679a5a9918f2c8dc8cd4682b4e79f7722188577b1b9d->enter($__internal_f7b6d6edc08380707559679a5a9918f2c8dc8cd4682b4e79f7722188577b1b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f7b6d6edc08380707559679a5a9918f2c8dc8cd4682b4e79f7722188577b1b9d->leave($__internal_f7b6d6edc08380707559679a5a9918f2c8dc8cd4682b4e79f7722188577b1b9d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */

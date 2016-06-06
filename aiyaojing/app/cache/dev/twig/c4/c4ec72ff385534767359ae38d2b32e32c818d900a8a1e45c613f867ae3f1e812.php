<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_39279380396d0bf3f690345b9d59ee7d8c8f9ac37a84a48ee344800e37ac6943 extends Twig_Template
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
        $__internal_380f52ba3c0c9ce87cbe85319155fc97e1fa32ac2cdf477a7af727e67aba2f29 = $this->env->getExtension("native_profiler");
        $__internal_380f52ba3c0c9ce87cbe85319155fc97e1fa32ac2cdf477a7af727e67aba2f29->enter($__internal_380f52ba3c0c9ce87cbe85319155fc97e1fa32ac2cdf477a7af727e67aba2f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_380f52ba3c0c9ce87cbe85319155fc97e1fa32ac2cdf477a7af727e67aba2f29->leave($__internal_380f52ba3c0c9ce87cbe85319155fc97e1fa32ac2cdf477a7af727e67aba2f29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */

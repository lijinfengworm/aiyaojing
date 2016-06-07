<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_23d2d698bbda3eca7ff8762670db669948671fa0131da675112f5ba175bbd99f extends Twig_Template
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
        $__internal_fd3344579ac376c7339ab234e6d198fa2838a9ecd02af2329e43f2a2173f3906 = $this->env->getExtension("native_profiler");
        $__internal_fd3344579ac376c7339ab234e6d198fa2838a9ecd02af2329e43f2a2173f3906->enter($__internal_fd3344579ac376c7339ab234e6d198fa2838a9ecd02af2329e43f2a2173f3906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_fd3344579ac376c7339ab234e6d198fa2838a9ecd02af2329e43f2a2173f3906->leave($__internal_fd3344579ac376c7339ab234e6d198fa2838a9ecd02af2329e43f2a2173f3906_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */

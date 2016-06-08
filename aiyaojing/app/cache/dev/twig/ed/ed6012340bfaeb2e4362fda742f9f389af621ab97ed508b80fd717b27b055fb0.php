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
        $__internal_4d8675e8de9353feba45cce82c766946395df0396f3d62e936f157fbe9435788 = $this->env->getExtension("native_profiler");
        $__internal_4d8675e8de9353feba45cce82c766946395df0396f3d62e936f157fbe9435788->enter($__internal_4d8675e8de9353feba45cce82c766946395df0396f3d62e936f157fbe9435788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4d8675e8de9353feba45cce82c766946395df0396f3d62e936f157fbe9435788->leave($__internal_4d8675e8de9353feba45cce82c766946395df0396f3d62e936f157fbe9435788_prof);

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

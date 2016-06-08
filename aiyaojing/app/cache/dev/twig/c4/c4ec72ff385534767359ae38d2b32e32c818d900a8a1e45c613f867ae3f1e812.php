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
        $__internal_76b8bb55300a09cf60e7aec2ca906f5e960a4da3baeb0a986dc805d98f22ac89 = $this->env->getExtension("native_profiler");
        $__internal_76b8bb55300a09cf60e7aec2ca906f5e960a4da3baeb0a986dc805d98f22ac89->enter($__internal_76b8bb55300a09cf60e7aec2ca906f5e960a4da3baeb0a986dc805d98f22ac89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_76b8bb55300a09cf60e7aec2ca906f5e960a4da3baeb0a986dc805d98f22ac89->leave($__internal_76b8bb55300a09cf60e7aec2ca906f5e960a4da3baeb0a986dc805d98f22ac89_prof);

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

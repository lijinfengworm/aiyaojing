<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0123a20d3d7a3ef3619f177a30a9e39ed8f401d42aee74bc985fc7c240bb208d extends Twig_Template
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
        $__internal_0d446e4ceb5d467351ee39961259d3e712fefa56bff4ad6a057f342b7f0890e0 = $this->env->getExtension("native_profiler");
        $__internal_0d446e4ceb5d467351ee39961259d3e712fefa56bff4ad6a057f342b7f0890e0->enter($__internal_0d446e4ceb5d467351ee39961259d3e712fefa56bff4ad6a057f342b7f0890e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0d446e4ceb5d467351ee39961259d3e712fefa56bff4ad6a057f342b7f0890e0->leave($__internal_0d446e4ceb5d467351ee39961259d3e712fefa56bff4ad6a057f342b7f0890e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */

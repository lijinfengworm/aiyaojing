<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_509a1c0513e15409d88a8e47ac0eb19cf5291f571938a4f5ab09d51a5dc2abf7 extends Twig_Template
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
        $__internal_db7691a63a1fdcf30a78296174cbd7bd8814a841868586a74813d3521039d9f1 = $this->env->getExtension("native_profiler");
        $__internal_db7691a63a1fdcf30a78296174cbd7bd8814a841868586a74813d3521039d9f1->enter($__internal_db7691a63a1fdcf30a78296174cbd7bd8814a841868586a74813d3521039d9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_db7691a63a1fdcf30a78296174cbd7bd8814a841868586a74813d3521039d9f1->leave($__internal_db7691a63a1fdcf30a78296174cbd7bd8814a841868586a74813d3521039d9f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */

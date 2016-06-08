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
        $__internal_714b95e818b9a2c3caeb9625f4fc8d703014ae812255f82991780f6f164043f8 = $this->env->getExtension("native_profiler");
        $__internal_714b95e818b9a2c3caeb9625f4fc8d703014ae812255f82991780f6f164043f8->enter($__internal_714b95e818b9a2c3caeb9625f4fc8d703014ae812255f82991780f6f164043f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_714b95e818b9a2c3caeb9625f4fc8d703014ae812255f82991780f6f164043f8->leave($__internal_714b95e818b9a2c3caeb9625f4fc8d703014ae812255f82991780f6f164043f8_prof);

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

<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ac2c182ad020c118fcb82a2c2f8128162c092dd9fdb4ff9b738ed1a9ab5111f6 extends Twig_Template
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
        $__internal_98d98e1ad41c74dac9c6170d0c0d9cecf0f1a4d94c279d03688276c07911f341 = $this->env->getExtension("native_profiler");
        $__internal_98d98e1ad41c74dac9c6170d0c0d9cecf0f1a4d94c279d03688276c07911f341->enter($__internal_98d98e1ad41c74dac9c6170d0c0d9cecf0f1a4d94c279d03688276c07911f341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_98d98e1ad41c74dac9c6170d0c0d9cecf0f1a4d94c279d03688276c07911f341->leave($__internal_98d98e1ad41c74dac9c6170d0c0d9cecf0f1a4d94c279d03688276c07911f341_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */

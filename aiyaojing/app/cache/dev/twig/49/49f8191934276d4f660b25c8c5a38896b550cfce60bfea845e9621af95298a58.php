<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_34cd958f3a4d1b70d2d7b143760f7eddfd8b0a6f2c24df0021bbb320b6dd6098 extends Twig_Template
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
        $__internal_5771b4f3b3483b284a2f2a0d3f7788509e64a17f7d0a3e231b90e2ea69460f09 = $this->env->getExtension("native_profiler");
        $__internal_5771b4f3b3483b284a2f2a0d3f7788509e64a17f7d0a3e231b90e2ea69460f09->enter($__internal_5771b4f3b3483b284a2f2a0d3f7788509e64a17f7d0a3e231b90e2ea69460f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_5771b4f3b3483b284a2f2a0d3f7788509e64a17f7d0a3e231b90e2ea69460f09->leave($__internal_5771b4f3b3483b284a2f2a0d3f7788509e64a17f7d0a3e231b90e2ea69460f09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */

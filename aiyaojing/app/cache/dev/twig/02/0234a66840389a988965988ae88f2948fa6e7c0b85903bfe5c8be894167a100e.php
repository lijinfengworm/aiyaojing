<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d9ab7a1ad27850fcf533d7aca4e395787955a649b35179601413acfa25ba88b9 extends Twig_Template
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
        $__internal_929fe14323cf10b307c87d381e9ed65dd6c6022165e8934498827289f1922de8 = $this->env->getExtension("native_profiler");
        $__internal_929fe14323cf10b307c87d381e9ed65dd6c6022165e8934498827289f1922de8->enter($__internal_929fe14323cf10b307c87d381e9ed65dd6c6022165e8934498827289f1922de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_929fe14323cf10b307c87d381e9ed65dd6c6022165e8934498827289f1922de8->leave($__internal_929fe14323cf10b307c87d381e9ed65dd6c6022165e8934498827289f1922de8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */

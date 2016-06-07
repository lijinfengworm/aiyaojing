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
        $__internal_ee563ebc2180c4233707f0bb5829dcfae51024d8ce9518f8467b59d5155597dd = $this->env->getExtension("native_profiler");
        $__internal_ee563ebc2180c4233707f0bb5829dcfae51024d8ce9518f8467b59d5155597dd->enter($__internal_ee563ebc2180c4233707f0bb5829dcfae51024d8ce9518f8467b59d5155597dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ee563ebc2180c4233707f0bb5829dcfae51024d8ce9518f8467b59d5155597dd->leave($__internal_ee563ebc2180c4233707f0bb5829dcfae51024d8ce9518f8467b59d5155597dd_prof);

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

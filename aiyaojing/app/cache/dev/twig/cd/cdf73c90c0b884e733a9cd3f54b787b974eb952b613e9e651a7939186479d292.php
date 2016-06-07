<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_9e62c60d39eb58fefd919fbf6511a4bafba6ce3d98df84eb2cdc14999fd9e701 extends Twig_Template
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
        $__internal_b506cca4ccb8be1f5256d0799c542df06f90fe5053b64161d97ba2799f710dea = $this->env->getExtension("native_profiler");
        $__internal_b506cca4ccb8be1f5256d0799c542df06f90fe5053b64161d97ba2799f710dea->enter($__internal_b506cca4ccb8be1f5256d0799c542df06f90fe5053b64161d97ba2799f710dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_b506cca4ccb8be1f5256d0799c542df06f90fe5053b64161d97ba2799f710dea->leave($__internal_b506cca4ccb8be1f5256d0799c542df06f90fe5053b64161d97ba2799f710dea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */

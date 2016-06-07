<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_42f528746f35e017c66dd9addac7aedc8c568ff8a89f1dfb69685295c35c768c extends Twig_Template
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
        $__internal_c1a92c4e843d11abf1f0d46719d7d19623064a52d7a0a4ab8cc514a2b1e40441 = $this->env->getExtension("native_profiler");
        $__internal_c1a92c4e843d11abf1f0d46719d7d19623064a52d7a0a4ab8cc514a2b1e40441->enter($__internal_c1a92c4e843d11abf1f0d46719d7d19623064a52d7a0a4ab8cc514a2b1e40441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c1a92c4e843d11abf1f0d46719d7d19623064a52d7a0a4ab8cc514a2b1e40441->leave($__internal_c1a92c4e843d11abf1f0d46719d7d19623064a52d7a0a4ab8cc514a2b1e40441_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */

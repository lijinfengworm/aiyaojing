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
        $__internal_3345e3b368078c54ee18abda2bd87777f436d8f624d56c2a49cf32307fe2b0b7 = $this->env->getExtension("native_profiler");
        $__internal_3345e3b368078c54ee18abda2bd87777f436d8f624d56c2a49cf32307fe2b0b7->enter($__internal_3345e3b368078c54ee18abda2bd87777f436d8f624d56c2a49cf32307fe2b0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3345e3b368078c54ee18abda2bd87777f436d8f624d56c2a49cf32307fe2b0b7->leave($__internal_3345e3b368078c54ee18abda2bd87777f436d8f624d56c2a49cf32307fe2b0b7_prof);

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

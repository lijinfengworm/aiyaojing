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
        $__internal_43f59954bf26f3611dd68e6274a16bb12365bcf7d14f89026847b2bb2ee55905 = $this->env->getExtension("native_profiler");
        $__internal_43f59954bf26f3611dd68e6274a16bb12365bcf7d14f89026847b2bb2ee55905->enter($__internal_43f59954bf26f3611dd68e6274a16bb12365bcf7d14f89026847b2bb2ee55905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_43f59954bf26f3611dd68e6274a16bb12365bcf7d14f89026847b2bb2ee55905->leave($__internal_43f59954bf26f3611dd68e6274a16bb12365bcf7d14f89026847b2bb2ee55905_prof);

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

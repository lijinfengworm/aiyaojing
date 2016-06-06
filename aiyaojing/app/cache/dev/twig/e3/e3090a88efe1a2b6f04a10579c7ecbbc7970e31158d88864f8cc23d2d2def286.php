<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_8622fd7fd4649b0be314247122635b97d78ed4d6d2e50ac958698c95269481e0 extends Twig_Template
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
        $__internal_a44afec757812bec3dca2479b67c15a2b74f2565a6b2ecb8d546a1ad82d38654 = $this->env->getExtension("native_profiler");
        $__internal_a44afec757812bec3dca2479b67c15a2b74f2565a6b2ecb8d546a1ad82d38654->enter($__internal_a44afec757812bec3dca2479b67c15a2b74f2565a6b2ecb8d546a1ad82d38654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a44afec757812bec3dca2479b67c15a2b74f2565a6b2ecb8d546a1ad82d38654->leave($__internal_a44afec757812bec3dca2479b67c15a2b74f2565a6b2ecb8d546a1ad82d38654_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */

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
        $__internal_0911757130281f35f586c8354bedbff05df38a28ebcbc80de41ddb338f0dc094 = $this->env->getExtension("native_profiler");
        $__internal_0911757130281f35f586c8354bedbff05df38a28ebcbc80de41ddb338f0dc094->enter($__internal_0911757130281f35f586c8354bedbff05df38a28ebcbc80de41ddb338f0dc094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0911757130281f35f586c8354bedbff05df38a28ebcbc80de41ddb338f0dc094->leave($__internal_0911757130281f35f586c8354bedbff05df38a28ebcbc80de41ddb338f0dc094_prof);

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

<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_566d781cbd6cb827d90ee915521e2bd3b6062bb3cc9790b075d507cdf0866834 extends Twig_Template
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
        $__internal_b36cfad90a90d396fc7529f7fae029e6ae7ee8e20c4c6fcd57a9719480e55e2b = $this->env->getExtension("native_profiler");
        $__internal_b36cfad90a90d396fc7529f7fae029e6ae7ee8e20c4c6fcd57a9719480e55e2b->enter($__internal_b36cfad90a90d396fc7529f7fae029e6ae7ee8e20c4c6fcd57a9719480e55e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_b36cfad90a90d396fc7529f7fae029e6ae7ee8e20c4c6fcd57a9719480e55e2b->leave($__internal_b36cfad90a90d396fc7529f7fae029e6ae7ee8e20c4c6fcd57a9719480e55e2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */

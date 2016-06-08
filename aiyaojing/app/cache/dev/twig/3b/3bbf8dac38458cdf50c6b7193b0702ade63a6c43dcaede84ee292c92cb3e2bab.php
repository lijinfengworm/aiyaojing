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
        $__internal_c38069aae3374f1c39a475c2d32358d6f70e692337262c866cf4dc22c6cad7ff = $this->env->getExtension("native_profiler");
        $__internal_c38069aae3374f1c39a475c2d32358d6f70e692337262c866cf4dc22c6cad7ff->enter($__internal_c38069aae3374f1c39a475c2d32358d6f70e692337262c866cf4dc22c6cad7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c38069aae3374f1c39a475c2d32358d6f70e692337262c866cf4dc22c6cad7ff->leave($__internal_c38069aae3374f1c39a475c2d32358d6f70e692337262c866cf4dc22c6cad7ff_prof);

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

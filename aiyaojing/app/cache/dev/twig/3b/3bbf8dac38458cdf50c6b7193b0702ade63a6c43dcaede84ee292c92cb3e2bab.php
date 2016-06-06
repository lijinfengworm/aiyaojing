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
        $__internal_6f2b4a756b5fec53590dd5fb3f3ee653afbe4c5c5426a4c23cd9383377079aa2 = $this->env->getExtension("native_profiler");
        $__internal_6f2b4a756b5fec53590dd5fb3f3ee653afbe4c5c5426a4c23cd9383377079aa2->enter($__internal_6f2b4a756b5fec53590dd5fb3f3ee653afbe4c5c5426a4c23cd9383377079aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6f2b4a756b5fec53590dd5fb3f3ee653afbe4c5c5426a4c23cd9383377079aa2->leave($__internal_6f2b4a756b5fec53590dd5fb3f3ee653afbe4c5c5426a4c23cd9383377079aa2_prof);

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

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
        $__internal_0e772ac42b6276f1a483c796e41cd8fd1d9e7b2cbf1bf5d86fd9c1557704e687 = $this->env->getExtension("native_profiler");
        $__internal_0e772ac42b6276f1a483c796e41cd8fd1d9e7b2cbf1bf5d86fd9c1557704e687->enter($__internal_0e772ac42b6276f1a483c796e41cd8fd1d9e7b2cbf1bf5d86fd9c1557704e687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_0e772ac42b6276f1a483c796e41cd8fd1d9e7b2cbf1bf5d86fd9c1557704e687->leave($__internal_0e772ac42b6276f1a483c796e41cd8fd1d9e7b2cbf1bf5d86fd9c1557704e687_prof);

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

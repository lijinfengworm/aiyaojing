<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_a7861cb506cd752503d8fe6a0666035b8f80c4a6d69f5a0d07b809fefee0e108 extends Twig_Template
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
        $__internal_c288cdb70509fe7d5c2fc4ad933d222c6c67c1b470dd24a84a66770573482a17 = $this->env->getExtension("native_profiler");
        $__internal_c288cdb70509fe7d5c2fc4ad933d222c6c67c1b470dd24a84a66770573482a17->enter($__internal_c288cdb70509fe7d5c2fc4ad933d222c6c67c1b470dd24a84a66770573482a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c288cdb70509fe7d5c2fc4ad933d222c6c67c1b470dd24a84a66770573482a17->leave($__internal_c288cdb70509fe7d5c2fc4ad933d222c6c67c1b470dd24a84a66770573482a17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */

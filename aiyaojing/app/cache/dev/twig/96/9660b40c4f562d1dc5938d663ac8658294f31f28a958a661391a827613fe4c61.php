<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_b17d38c94f95d623b48cc1a2eeefe42841e8fdb9fe32b82ef8c46ce486397fa6 extends Twig_Template
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
        $__internal_e5bb2f4ff899c93517acedcebe5275c8fc81c6945626d7ae07c36bf013463293 = $this->env->getExtension("native_profiler");
        $__internal_e5bb2f4ff899c93517acedcebe5275c8fc81c6945626d7ae07c36bf013463293->enter($__internal_e5bb2f4ff899c93517acedcebe5275c8fc81c6945626d7ae07c36bf013463293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_e5bb2f4ff899c93517acedcebe5275c8fc81c6945626d7ae07c36bf013463293->leave($__internal_e5bb2f4ff899c93517acedcebe5275c8fc81c6945626d7ae07c36bf013463293_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */

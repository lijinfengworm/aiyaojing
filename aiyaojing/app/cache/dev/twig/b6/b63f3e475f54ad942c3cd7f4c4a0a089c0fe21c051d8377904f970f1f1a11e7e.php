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
        $__internal_f3abbfe916f1e8c8a5dd12151f76876bb571d84649aee31cc674ab0fb3ff3515 = $this->env->getExtension("native_profiler");
        $__internal_f3abbfe916f1e8c8a5dd12151f76876bb571d84649aee31cc674ab0fb3ff3515->enter($__internal_f3abbfe916f1e8c8a5dd12151f76876bb571d84649aee31cc674ab0fb3ff3515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_f3abbfe916f1e8c8a5dd12151f76876bb571d84649aee31cc674ab0fb3ff3515->leave($__internal_f3abbfe916f1e8c8a5dd12151f76876bb571d84649aee31cc674ab0fb3ff3515_prof);

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

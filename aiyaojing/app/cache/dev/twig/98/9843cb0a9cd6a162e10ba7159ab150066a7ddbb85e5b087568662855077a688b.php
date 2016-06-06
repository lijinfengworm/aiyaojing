<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_a1555bc561548f9916c1919cb0dc0f50b7aeb113be70a3b406109a97af3475f4 extends Twig_Template
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
        $__internal_e77e36ab9b6633cb866f679be93fc9dfb155b9649daf8e1792a6859f325a876f = $this->env->getExtension("native_profiler");
        $__internal_e77e36ab9b6633cb866f679be93fc9dfb155b9649daf8e1792a6859f325a876f->enter($__internal_e77e36ab9b6633cb866f679be93fc9dfb155b9649daf8e1792a6859f325a876f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e77e36ab9b6633cb866f679be93fc9dfb155b9649daf8e1792a6859f325a876f->leave($__internal_e77e36ab9b6633cb866f679be93fc9dfb155b9649daf8e1792a6859f325a876f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */

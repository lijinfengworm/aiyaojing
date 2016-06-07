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
        $__internal_022a8f2052420f7d2e49176f1abdac4dd225921ec167b22553ad0793c6ad0b3a = $this->env->getExtension("native_profiler");
        $__internal_022a8f2052420f7d2e49176f1abdac4dd225921ec167b22553ad0793c6ad0b3a->enter($__internal_022a8f2052420f7d2e49176f1abdac4dd225921ec167b22553ad0793c6ad0b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_022a8f2052420f7d2e49176f1abdac4dd225921ec167b22553ad0793c6ad0b3a->leave($__internal_022a8f2052420f7d2e49176f1abdac4dd225921ec167b22553ad0793c6ad0b3a_prof);

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

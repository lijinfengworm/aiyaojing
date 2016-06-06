<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_bf55fb617cfda36241cdfc5f0f1ae8c2d323c1abe3155f2ee56b6dbaa95b27eb extends Twig_Template
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
        $__internal_ff09be21d3630b47818af67ea03930ae1ffe2dd2d0fe09fb1544637b3b716e97 = $this->env->getExtension("native_profiler");
        $__internal_ff09be21d3630b47818af67ea03930ae1ffe2dd2d0fe09fb1544637b3b716e97->enter($__internal_ff09be21d3630b47818af67ea03930ae1ffe2dd2d0fe09fb1544637b3b716e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ff09be21d3630b47818af67ea03930ae1ffe2dd2d0fe09fb1544637b3b716e97->leave($__internal_ff09be21d3630b47818af67ea03930ae1ffe2dd2d0fe09fb1544637b3b716e97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */

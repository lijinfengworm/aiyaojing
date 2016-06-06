<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_08eaca33eb93069f980237dd58bb5bd4af878a3571a4f2e211e4335d89f40a62 extends Twig_Template
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
        $__internal_91fafd54b8c89db2e228202ca7f16e16c839833c6f240e0c2cd0fcf25fc9ffe9 = $this->env->getExtension("native_profiler");
        $__internal_91fafd54b8c89db2e228202ca7f16e16c839833c6f240e0c2cd0fcf25fc9ffe9->enter($__internal_91fafd54b8c89db2e228202ca7f16e16c839833c6f240e0c2cd0fcf25fc9ffe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_91fafd54b8c89db2e228202ca7f16e16c839833c6f240e0c2cd0fcf25fc9ffe9->leave($__internal_91fafd54b8c89db2e228202ca7f16e16c839833c6f240e0c2cd0fcf25fc9ffe9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */

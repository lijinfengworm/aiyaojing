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
        $__internal_8d648e810045a6216986930f9be22754f4d7e5f463449da20a83195f86ce9896 = $this->env->getExtension("native_profiler");
        $__internal_8d648e810045a6216986930f9be22754f4d7e5f463449da20a83195f86ce9896->enter($__internal_8d648e810045a6216986930f9be22754f4d7e5f463449da20a83195f86ce9896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8d648e810045a6216986930f9be22754f4d7e5f463449da20a83195f86ce9896->leave($__internal_8d648e810045a6216986930f9be22754f4d7e5f463449da20a83195f86ce9896_prof);

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

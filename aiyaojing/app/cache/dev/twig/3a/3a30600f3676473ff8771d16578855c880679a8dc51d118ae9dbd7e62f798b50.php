<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_37f283275f84d8b6063c2e1c80031ef203316c6d18468a543f7a385ccebe982d extends Twig_Template
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
        $__internal_6e68fa58e964f03e4590bec76d863c4e58581a2082ccebd0bb1a738082bdbe3b = $this->env->getExtension("native_profiler");
        $__internal_6e68fa58e964f03e4590bec76d863c4e58581a2082ccebd0bb1a738082bdbe3b->enter($__internal_6e68fa58e964f03e4590bec76d863c4e58581a2082ccebd0bb1a738082bdbe3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_6e68fa58e964f03e4590bec76d863c4e58581a2082ccebd0bb1a738082bdbe3b->leave($__internal_6e68fa58e964f03e4590bec76d863c4e58581a2082ccebd0bb1a738082bdbe3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */

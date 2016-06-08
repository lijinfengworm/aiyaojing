<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4705f458cc83983e50221d74bce3e493cc70ad7296ca9bb499e70e25a3b70ef1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54967f59d6ba5e0cc9392cc1c0344ae9593ca55e237b2145a5eafb94fcd35243 = $this->env->getExtension("native_profiler");
        $__internal_54967f59d6ba5e0cc9392cc1c0344ae9593ca55e237b2145a5eafb94fcd35243->enter($__internal_54967f59d6ba5e0cc9392cc1c0344ae9593ca55e237b2145a5eafb94fcd35243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54967f59d6ba5e0cc9392cc1c0344ae9593ca55e237b2145a5eafb94fcd35243->leave($__internal_54967f59d6ba5e0cc9392cc1c0344ae9593ca55e237b2145a5eafb94fcd35243_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_641fad597735ac6df2d019b6efc9af2c541b3cd9a035fa41869834a63916befc = $this->env->getExtension("native_profiler");
        $__internal_641fad597735ac6df2d019b6efc9af2c541b3cd9a035fa41869834a63916befc->enter($__internal_641fad597735ac6df2d019b6efc9af2c541b3cd9a035fa41869834a63916befc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_641fad597735ac6df2d019b6efc9af2c541b3cd9a035fa41869834a63916befc->leave($__internal_641fad597735ac6df2d019b6efc9af2c541b3cd9a035fa41869834a63916befc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c3e76dc51eaffade0dcd710e05a62c74a66ca36aa9b88fdb9b81b32a5245bcf7 = $this->env->getExtension("native_profiler");
        $__internal_c3e76dc51eaffade0dcd710e05a62c74a66ca36aa9b88fdb9b81b32a5245bcf7->enter($__internal_c3e76dc51eaffade0dcd710e05a62c74a66ca36aa9b88fdb9b81b32a5245bcf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c3e76dc51eaffade0dcd710e05a62c74a66ca36aa9b88fdb9b81b32a5245bcf7->leave($__internal_c3e76dc51eaffade0dcd710e05a62c74a66ca36aa9b88fdb9b81b32a5245bcf7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_688ddce07450d5c8f1d5419ef396a1548351913cdd3e6b49bccf5bf547ab9a27 = $this->env->getExtension("native_profiler");
        $__internal_688ddce07450d5c8f1d5419ef396a1548351913cdd3e6b49bccf5bf547ab9a27->enter($__internal_688ddce07450d5c8f1d5419ef396a1548351913cdd3e6b49bccf5bf547ab9a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_688ddce07450d5c8f1d5419ef396a1548351913cdd3e6b49bccf5bf547ab9a27->leave($__internal_688ddce07450d5c8f1d5419ef396a1548351913cdd3e6b49bccf5bf547ab9a27_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

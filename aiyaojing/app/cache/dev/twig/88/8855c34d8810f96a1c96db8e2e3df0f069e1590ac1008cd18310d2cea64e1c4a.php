<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_14692156f1b265309e92db2ad52c7057768827e0916ee7ef48daca46e2c495e5 extends Twig_Template
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
        $__internal_e3df4c3c28fdbd9f9dc0140f96bc3b026fa05111cdad67c7de68e0d0c7f0c3e0 = $this->env->getExtension("native_profiler");
        $__internal_e3df4c3c28fdbd9f9dc0140f96bc3b026fa05111cdad67c7de68e0d0c7f0c3e0->enter($__internal_e3df4c3c28fdbd9f9dc0140f96bc3b026fa05111cdad67c7de68e0d0c7f0c3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_e3df4c3c28fdbd9f9dc0140f96bc3b026fa05111cdad67c7de68e0d0c7f0c3e0->leave($__internal_e3df4c3c28fdbd9f9dc0140f96bc3b026fa05111cdad67c7de68e0d0c7f0c3e0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */

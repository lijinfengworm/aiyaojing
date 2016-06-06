<?php

/* AppBundle:default:index.html.twig */
class __TwigTemplate_2ccf8a3dd9e7e4143ea915610c83bde8009f7b56144f6a2790817293a41bed53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "AppBundle:default:index.html.twig", 1);
        $this->blocks = array(
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c043d3da509d357ce2d112faeaad5d8c422578acabaa29a6768b5d8714e2eab = $this->env->getExtension("native_profiler");
        $__internal_0c043d3da509d357ce2d112faeaad5d8c422578acabaa29a6768b5d8714e2eab->enter($__internal_0c043d3da509d357ce2d112faeaad5d8c422578acabaa29a6768b5d8714e2eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c043d3da509d357ce2d112faeaad5d8c422578acabaa29a6768b5d8714e2eab->leave($__internal_0c043d3da509d357ce2d112faeaad5d8c422578acabaa29a6768b5d8714e2eab_prof);

    }

    // line 2
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_0c495170912da71fa93b104b0cd8add392314f59beab4b23fb1211aea9cc721d = $this->env->getExtension("native_profiler");
        $__internal_0c495170912da71fa93b104b0cd8add392314f59beab4b23fb1211aea9cc721d->enter($__internal_0c495170912da71fa93b104b0cd8add392314f59beab4b23fb1211aea9cc721d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 3
        echo "    <div class=\"content\">
        <div class=\"blog\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["lt"]) {
            // line 6
            echo "            <div class=\"blog-top\">
                <div class=\"col-d\">
                    <div class=\"slider1\">
                        <div class=\"callbacks_container\">
                            <ul class=\"rslides\" id=\"slider1\">
                                <li>
                                    <img src=\"http://admin.aiyaojing.com/";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["lt"], "cover", array(), "array"), "html", null, true);
            echo "\" alt=\"\">

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"blog-in\">
                        <h5><a href=\"/detail?cate=";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["cate"]) ? $context["cate"] : $this->getContext($context, "cate")), "html", null, true);
            echo "&collect=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lt"], "id", array(), "array"), "html", null, true);
            echo " \">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lt"], "title", array(), "array"), "html", null, true);
            echo "</a></h5>
                        <p>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["lt"], "abstract", array(), "array"), "html", null, true);
            echo "</p>
                        <ul class=\"date\">
                            <li><span><a href=\"/detail?cate=";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["cate"]) ? $context["cate"] : $this->getContext($context, "cate")), "html", null, true);
            echo "&collect=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lt"], "id", array(), "array"), "html", null, true);
            echo " \"><i ></i>12 Comments</a></span></li>
                            <li><span><i class=\"date-in\"></i>09-07-2013</span></li>
                        </ul>
                    </div>
                </div>

            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            <div class=\"clear\"> </div>
        </div>
        <div class=\"arrow arrow-at\"><img  src=\"images/ic.png\" /></div>
    </div>


";
        
        $__internal_0c495170912da71fa93b104b0cd8add392314f59beab4b23fb1211aea9cc721d->leave($__internal_0c495170912da71fa93b104b0cd8add392314f59beab4b23fb1211aea9cc721d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 30,  79 => 22,  74 => 20,  66 => 19,  56 => 12,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* {% block mainContent %}*/
/*     <div class="content">*/
/*         <div class="blog">*/
/*             {% for lt in list %}*/
/*             <div class="blog-top">*/
/*                 <div class="col-d">*/
/*                     <div class="slider1">*/
/*                         <div class="callbacks_container">*/
/*                             <ul class="rslides" id="slider1">*/
/*                                 <li>*/
/*                                     <img src="http://admin.aiyaojing.com/{{ lt['cover'] }}" alt="">*/
/* */
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="blog-in">*/
/*                         <h5><a href="/detail?cate={{ cate }}&collect={{ lt['id'] }} ">{{ lt['title'] }}</a></h5>*/
/*                         <p>{{ lt['abstract'] }}</p>*/
/*                         <ul class="date">*/
/*                             <li><span><a href="/detail?cate={{ cate }}&collect={{ lt['id'] }} "><i ></i>12 Comments</a></span></li>*/
/*                             <li><span><i class="date-in"></i>09-07-2013</span></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*             {% endfor %}*/
/*             <div class="clear"> </div>*/
/*         </div>*/
/*         <div class="arrow arrow-at"><img  src="images/ic.png" /></div>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/

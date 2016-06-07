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
        $__internal_b8d034f0abb96b042801854d78da1230ea04b54883ecf392979e68a4d1c591d2 = $this->env->getExtension("native_profiler");
        $__internal_b8d034f0abb96b042801854d78da1230ea04b54883ecf392979e68a4d1c591d2->enter($__internal_b8d034f0abb96b042801854d78da1230ea04b54883ecf392979e68a4d1c591d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8d034f0abb96b042801854d78da1230ea04b54883ecf392979e68a4d1c591d2->leave($__internal_b8d034f0abb96b042801854d78da1230ea04b54883ecf392979e68a4d1c591d2_prof);

    }

    // line 2
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_5cddece1f3303033a24094494ff5d1109780e9e5bdcdae445edf3269210590b8 = $this->env->getExtension("native_profiler");
        $__internal_5cddece1f3303033a24094494ff5d1109780e9e5bdcdae445edf3269210590b8->enter($__internal_5cddece1f3303033a24094494ff5d1109780e9e5bdcdae445edf3269210590b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

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
                                    <a href=\"/detail?cate=";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["cate"]) ? $context["cate"] : $this->getContext($context, "cate")), "html", null, true);
            echo "&collect=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lt"], "id", array(), "array"), "html", null, true);
            echo " \"><img src=\"http://admin.aiyaojing.com/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lt"], "cover", array(), "array"), "html", null, true);
            echo "\" alt=\"\" style=\"width: 100%\"></a>

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
                            ";
            // line 23
            echo "                            <li><span><i class=\"date-in\"></i>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["lt"], "showTime", array(), "array"), "m-d H:i"), "html", null, true);
            echo "</span></li>
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
        ";
        // line 33
        echo "    </div>


";
        
        $__internal_5cddece1f3303033a24094494ff5d1109780e9e5bdcdae445edf3269210590b8->leave($__internal_5cddece1f3303033a24094494ff5d1109780e9e5bdcdae445edf3269210590b8_prof);

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
        return array (  101 => 33,  97 => 30,  83 => 23,  78 => 20,  70 => 19,  56 => 12,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
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
/*                                     <a href="/detail?cate={{ cate }}&collect={{ lt['id'] }} "><img src="http://admin.aiyaojing.com/{{ lt['cover'] }}" alt="" style="width: 100%"></a>*/
/* */
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="blog-in">*/
/*                         <h5><a href="/detail?cate={{ cate }}&collect={{ lt['id'] }} ">{{ lt['title'] }}</a></h5>*/
/*                         <p>{{ lt['abstract'] }}</p>*/
/*                         <ul class="date">*/
/*                             {#<li><span><a href="/detail?cate={{ cate }}&collect={{ lt['id'] }} "><i ></i>12 Comments</a></span></li>#}*/
/*                             <li><span><i class="date-in"></i>{{ lt["showTime"]|date("m-d H:i") }}</span></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*             {% endfor %}*/
/*             <div class="clear"> </div>*/
/*         </div>*/
/*         {#<div class="arrow arrow-at"><img  src="{{ asset('bundles/app/images/ic.png') }}" /></div>#}*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/

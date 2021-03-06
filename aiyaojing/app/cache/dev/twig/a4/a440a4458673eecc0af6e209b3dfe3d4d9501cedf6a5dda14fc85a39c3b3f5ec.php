<?php

/* AppBundle:default:detail.html.twig */
class __TwigTemplate_d855bd25e4f1304b00c75138035ed694a41379f5234426bb4a21bc87c9ae42f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "AppBundle:default:detail.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36ac4d13f07b4b99f7740e2f399aa61f7047e4751fc471593cd01f2ef3f86bbb = $this->env->getExtension("native_profiler");
        $__internal_36ac4d13f07b4b99f7740e2f399aa61f7047e4751fc471593cd01f2ef3f86bbb->enter($__internal_36ac4d13f07b4b99f7740e2f399aa61f7047e4751fc471593cd01f2ef3f86bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36ac4d13f07b4b99f7740e2f399aa61f7047e4751fc471593cd01f2ef3f86bbb->leave($__internal_36ac4d13f07b4b99f7740e2f399aa61f7047e4751fc471593cd01f2ef3f86bbb_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_ec891b894226f1d8122d031812a746f6b1c67eb8fd35ff61e1427d4e22f2673d = $this->env->getExtension("native_profiler");
        $__internal_ec891b894226f1d8122d031812a746f6b1c67eb8fd35ff61e1427d4e22f2673d->enter($__internal_ec891b894226f1d8122d031812a746f6b1c67eb8fd35ff61e1427d4e22f2673d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/lightbox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
        
        $__internal_ec891b894226f1d8122d031812a746f6b1c67eb8fd35ff61e1427d4e22f2673d->leave($__internal_ec891b894226f1d8122d031812a746f6b1c67eb8fd35ff61e1427d4e22f2673d_prof);

    }

    // line 7
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_ceeff3306b7b2e22076d96caea85c4fa53ee59525aa4db812db16e6173feefeb = $this->env->getExtension("native_profiler");
        $__internal_ceeff3306b7b2e22076d96caea85c4fa53ee59525aa4db812db16e6173feefeb->enter($__internal_ceeff3306b7b2e22076d96caea85c4fa53ee59525aa4db812db16e6173feefeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 8
        echo "<div class=\"content\">
    <div class=\"single\">
        <div class=\"single-top\">
            <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/responsiveslides.min.js"), "html", null, true);
        echo "\"></script>
            <script>
                \$(function (jq) {
                    jq(\"#slider\").responsiveSlides({
                        auto: true,
                        speed: 500,
                        namespace: \"callbacks\",
                        pager: true
                    });
                })(jQuery);
            </script>
            <div class=\"slider\">
                <div class=\"callbacks_container\">
                    <ul class=\"rslides\" id=\"slider\">
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["tl"]) {
            // line 26
            echo "                            <li><a class=\"example-image-link\" href=\"http://admin.aiyaojing.com/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tl"], "originalImage", array(), "array"), "html", null, true);
            echo "\" data-lightbox=\"example-set\" data-title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tl"], "imageAbstract", array(), "array"), "html", null, true);
            echo "\"><img class=\"example-image\" src=\"http://admin.aiyaojing.com/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tl"], "mediumImage", array(), "array"), "html", null, true);
            echo "\" alt=\"\"/></a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
                    </ul>
                </div>
            </div>

            <h2>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collect"]) ? $context["collect"] : $this->getContext($context, "collect")), 0, array(), "array"), "title", array(), "array"), "html", null, true);
        echo "</h2>
            <p class=\"para\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collect"]) ? $context["collect"] : $this->getContext($context, "collect")), 0, array(), "array"), "abstract", array(), "array"), "html", null, true);
        echo "</p>

        </div>
        <div class=\"single-in\">
            <div class=\"info\">
                <h3>个人信息</h3>
                <ul class=\"likes\">
                    <li><a href=\"#\"><i > </i>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), 0, array(), "array"), "userName", array(), "array"), "html", null, true);
        echo "</a></li>
                    <li><span><i class=\"like\"> </i>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), 0, array(), "array"), "praise", array(), "array"), "html", null, true);
        echo " 喜欢</span></li>
                    <li><span><i class=\"dec\"> </i>";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), 0, array(), "array"), "loginTime", array(), "array"), "Y-m-d"), "html", null, true);
        echo "</span></li>
                    ";
        // line 45
        echo "
                </ul>
            </div>
            <div class=\"tags\">
                <h3>标签</h3>
                <ul class=\"tag\">
                    ";
        // line 51
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), 0, array(), "array"), "attr", array(), "array"))) {
            // line 52
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), 0, array(), "array"), "attr", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["ur"]) {
                // line 53
                echo "                            <li><a href=\"#\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ur"], "labelName", array()), "html", null, true);
                echo "</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                    ";
        }
        // line 56
        echo "
                </ul>
            </div>


        </div>
        <div class=\"clear\"> </div>
    </div>
</div>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/lightbox-plus-jquery.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_ceeff3306b7b2e22076d96caea85c4fa53ee59525aa4db812db16e6173feefeb->leave($__internal_ceeff3306b7b2e22076d96caea85c4fa53ee59525aa4db812db16e6173feefeb_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:default:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 65,  160 => 56,  157 => 55,  148 => 53,  143 => 52,  141 => 51,  133 => 45,  129 => 43,  125 => 42,  121 => 41,  111 => 34,  107 => 33,  100 => 28,  87 => 26,  83 => 25,  66 => 11,  61 => 8,  55 => 7,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* {% block style %}*/
/*     <link href="{{ asset('bundles/app/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />*/
/*     <link href="{{ asset('bundles/app/css/lightbox.css') }}" rel="stylesheet" type="text/css" />*/
/* {% endblock %}*/
/* */
/* {% block mainContent %}*/
/* <div class="content">*/
/*     <div class="single">*/
/*         <div class="single-top">*/
/*             <script src="{{ asset('bundles/app/js/responsiveslides.min.js') }}"></script>*/
/*             <script>*/
/*                 $(function (jq) {*/
/*                     jq("#slider").responsiveSlides({*/
/*                         auto: true,*/
/*                         speed: 500,*/
/*                         namespace: "callbacks",*/
/*                         pager: true*/
/*                     });*/
/*                 })(jQuery);*/
/*             </script>*/
/*             <div class="slider">*/
/*                 <div class="callbacks_container">*/
/*                     <ul class="rslides" id="slider">*/
/*                         {% for tl in list %}*/
/*                             <li><a class="example-image-link" href="http://admin.aiyaojing.com/{{ tl['originalImage'] }}" data-lightbox="example-set" data-title="{{ tl['imageAbstract'] }}"><img class="example-image" src="http://admin.aiyaojing.com/{{ tl['mediumImage'] }}" alt=""/></a></li>*/
/*                         {% endfor %}*/
/* */
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <h2>{{ collect[0]['title'] }}</h2>*/
/*             <p class="para">{{ collect[0]['abstract'] }}</p>*/
/* */
/*         </div>*/
/*         <div class="single-in">*/
/*             <div class="info">*/
/*                 <h3>个人信息</h3>*/
/*                 <ul class="likes">*/
/*                     <li><a href="#"><i > </i>{{ user[0]['userName'] }}</a></li>*/
/*                     <li><span><i class="like"> </i>{{ user[0]['praise'] }} 喜欢</span></li>*/
/*                     <li><span><i class="dec"> </i>{{ user[0]['loginTime']|date("Y-m-d") }}</span></li>*/
/*                     {#<li><a href="#"><i class="comment"> </i>4 Comments</a></li>#}*/
/* */
/*                 </ul>*/
/*             </div>*/
/*             <div class="tags">*/
/*                 <h3>标签</h3>*/
/*                 <ul class="tag">*/
/*                     {% if user[0]['attr'] is not empty  %}*/
/*                         {% for ur in user[0]['attr'] %}*/
/*                             <li><a href="#">{{ ur.labelName }}</a></li>*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/* */
/*                 </ul>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*         <div class="clear"> </div>*/
/*     </div>*/
/* </div>*/
/*     <script src="{{ asset('bundles/app/js/lightbox-plus-jquery.min.js') }}"></script>*/
/* {% endblock %}*/

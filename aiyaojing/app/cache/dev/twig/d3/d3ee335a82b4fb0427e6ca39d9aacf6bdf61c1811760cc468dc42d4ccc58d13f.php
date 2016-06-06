<?php

/* layout.html.twig */
class __TwigTemplate_140037b28ba0e9c6da17b2712a5f6c7032412755b70b3e80bf062f751cec9fff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'style' => array($this, 'block_style'),
            'script' => array($this, 'block_script'),
            'left' => array($this, 'block_left'),
            'mainContent' => array($this, 'block_mainContent'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f42e3ca3a2d2723df87e8e3fd396b0851f83ab59f70df13c06d5b3b78c12a9e = $this->env->getExtension("native_profiler");
        $__internal_8f42e3ca3a2d2723df87e8e3fd396b0851f83ab59f70df13c06d5b3b78c12a9e->enter($__internal_8f42e3ca3a2d2723df87e8e3fd396b0851f83ab59f70df13c06d5b3b78c12a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"keywords\" content=\"Kappe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" />
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--fonts-->
    <link href='http://fonts.useso.com/css?family=Roboto:400,300,100,500,700,900' rel='stylesheet' type='text/css'>

    <!-- jQuery-->
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Custom Theme files -->
    ";
        // line 19
        $this->displayBlock('style', $context, $blocks);
        // line 22
        echo "    ";
        $this->displayBlock('script', $context, $blocks);
        // line 25
        echo "</head>
<body>
<div class=\"header\">
    <!---->
    ";
        // line 29
        $this->displayBlock('left', $context, $blocks);
        // line 46
        echo "
    ";
        // line 47
        $this->displayBlock('mainContent', $context, $blocks);
        // line 242
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_8f42e3ca3a2d2723df87e8e3fd396b0851f83ab59f70df13c06d5b3b78c12a9e->leave($__internal_8f42e3ca3a2d2723df87e8e3fd396b0851f83ab59f70df13c06d5b3b78c12a9e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3ff41070e9cc1b27afc1e89438e4ffcc736394fea5d0451c857fe8256b09f4f = $this->env->getExtension("native_profiler");
        $__internal_c3ff41070e9cc1b27afc1e89438e4ffcc736394fea5d0451c857fe8256b09f4f->enter($__internal_c3ff41070e9cc1b27afc1e89438e4ffcc736394fea5d0451c857fe8256b09f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    <title>Home</title>
    ";
        
        $__internal_c3ff41070e9cc1b27afc1e89438e4ffcc736394fea5d0451c857fe8256b09f4f->leave($__internal_c3ff41070e9cc1b27afc1e89438e4ffcc736394fea5d0451c857fe8256b09f4f_prof);

    }

    // line 19
    public function block_style($context, array $blocks = array())
    {
        $__internal_9416e67e4db9a0f15daabd01f13216a680948e2d96e5cb332383694c0fd9f0d6 = $this->env->getExtension("native_profiler");
        $__internal_9416e67e4db9a0f15daabd01f13216a680948e2d96e5cb332383694c0fd9f0d6->enter($__internal_9416e67e4db9a0f15daabd01f13216a680948e2d96e5cb332383694c0fd9f0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 20
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    ";
        
        $__internal_9416e67e4db9a0f15daabd01f13216a680948e2d96e5cb332383694c0fd9f0d6->leave($__internal_9416e67e4db9a0f15daabd01f13216a680948e2d96e5cb332383694c0fd9f0d6_prof);

    }

    // line 22
    public function block_script($context, array $blocks = array())
    {
        $__internal_f5754a8d792464ff39caa83839228343bc1d1a9951b96f97975bab03f6927528 = $this->env->getExtension("native_profiler");
        $__internal_f5754a8d792464ff39caa83839228343bc1d1a9951b96f97975bab03f6927528->enter($__internal_f5754a8d792464ff39caa83839228343bc1d1a9951b96f97975bab03f6927528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 23
        echo "
    ";
        
        $__internal_f5754a8d792464ff39caa83839228343bc1d1a9951b96f97975bab03f6927528->leave($__internal_f5754a8d792464ff39caa83839228343bc1d1a9951b96f97975bab03f6927528_prof);

    }

    // line 29
    public function block_left($context, array $blocks = array())
    {
        $__internal_185abe76b43b3b9b97aa7c7387c12287fc11ba7a5a5791cdfd7f1b0304086787 = $this->env->getExtension("native_profiler");
        $__internal_185abe76b43b3b9b97aa7c7387c12287fc11ba7a5a5791cdfd7f1b0304086787->enter($__internal_185abe76b43b3b9b97aa7c7387c12287fc11ba7a5a5791cdfd7f1b0304086787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left"));

        // line 30
        echo "    <div class=\"header-left\">
        <div class=\"logo\">
            <a href=\"index.html\"><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/images/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
        </div>
        <div class=\"top-nav\">
            <ul >
                ";
        // line 36
        $context["leftTree"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "tree"), "method");
        // line 37
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["leftTree"]) ? $context["leftTree"] : $this->getContext($context, "leftTree")));
        foreach ($context['_seq'] as $context["key"] => $context["tr"]) {
            // line 38
            echo "                    <li ";
            if (($context["key"] == ((isset($context["cate"]) ? $context["cate"] : $this->getContext($context, "cate")) - 1))) {
                echo " class=\"active\" ";
            }
            echo " ><a href=\"/?cate=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tr"], "id", array(), "array"), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tr"], "category_name", array(), "array"), "html", null, true);
            echo "</a></li>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
            </ul>
        </div>
    </div>
    ";
        
        $__internal_185abe76b43b3b9b97aa7c7387c12287fc11ba7a5a5791cdfd7f1b0304086787->leave($__internal_185abe76b43b3b9b97aa7c7387c12287fc11ba7a5a5791cdfd7f1b0304086787_prof);

    }

    // line 47
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_c19057fc99aef7474a38362cb87475917a25087a14bfffb7547e2a9da5f21f55 = $this->env->getExtension("native_profiler");
        $__internal_c19057fc99aef7474a38362cb87475917a25087a14bfffb7547e2a9da5f21f55->enter($__internal_c19057fc99aef7474a38362cb87475917a25087a14bfffb7547e2a9da5f21f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 48
        echo "    <div class=\"content\">
        <div class=\"blog\">
            <div class=\"blog-top\">
                <div class=\"col-d\">
                    ";
        // line 53
        echo "                    ";
        // line 54
        echo "                        ";
        // line 55
        echo "                            ";
        // line 56
        echo "                                ";
        // line 57
        echo "                                ";
        // line 58
        echo "                                ";
        // line 59
        echo "                                ";
        // line 60
        echo "                                ";
        // line 61
        echo "                            ";
        // line 62
        echo "                        ";
        // line 63
        echo "                    ";
        // line 64
        echo "                    <div class=\"slider1\">
                        <div class=\"callbacks_container\">
                            <ul class=\"rslides\" id=\"slider1\">
                                <li>
                                    <img src=\"images/bl.jpg\" alt=\"\">

                                </li>
                                <li>
                                    <img src=\"images/bl1.jpg\" alt=\"\">

                                </li>
                                <li>
                                    <img src=\"images/bl2.jpg\" alt=\"\">

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"blog-in\">
                        <h5><a href=\"single.html\">Gallery Post Example</a></h5>
                        <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain </p>
                        <ul class=\"date\">
                            <li><span><a href=\"#\"><i ></i>12 Comments</a></span></li>
                            <li><span><i class=\"date-in\"></i>09-07-2013</span></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-d\">
                    <a  href=\"single.html\"><img  src=\"images/bl2.jpg\" />
                        <label> </label></a>
                </div>
                <div class=\"col-in\">
                    <p>Another Post where you can put a link</p>
                    <a href=\"http://w3layouts.com/\" target=\"_blank\">W3layouts.com</a>
                </div>
            </div>
            <div class=\"blog-top\">
                <div class=\"col-in\">
                    <p>Another Post where you can put a link</p>
                    <a href=\"http://w3layouts.com/\" target=\"_blank\">W3layouts.com</a>
                </div>
                <div class=\"col-d\">
                    <iframe src=\"https://player.vimeo.com/video/66087280?color=ffffff&title=0&byline=0&portrait=0\"  ></iframe>
                    <div class=\"blog-in\">
                        <h5><a href=\"single.html\">Gallery Post Example</a></h5>
                        <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain  </p>
                        <ul class=\"date\">
                            <li><span><a href=\"#\"><i ></i>12 Comments</a></span></li>
                            <li><span><i class=\"date-in\"></i>09-07-2013</span></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-d\">
                    <a href=\"single.html\"><img  src=\"images/bl.jpg\" /></a>
                    <div class=\"blog-in\">
                        <h5><a href=\"single.html\">Gallery Post Example</a></h5>
                        <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain</p>
                        <ul class=\"date\">
                            <li><span><a href=\"#\"><i ></i>12 Comments</a></span></li>
                            <li><span><i class=\"date-in\"></i>09-07-2013</span></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class=\"blog-top\">
                <div class=\"col-d\">
                    <a href=\"single.html\"><img  src=\"images/bl2.jpg\" />
                        <label> </label></a>
                </div>
                <div class=\"col-d\">
                    <img  src=\"images/bl1.jpg\" />
                    <div class=\"blog-in\">
                        <h5><a href=\"single.html\">Gallery Post Example</a></h5>
                        <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain </p>
                        <ul class=\"date\">
                            <li><span><a href=\"#\"><i ></i>12 Comments</a></span></li>
                            <li><span><i class=\"date-in\"></i>09-07-2013</span></li>
                        </ul>
                    </div>
                </div>

                <div class=\"col-in-at\">
                    <h5><a href=\"single.html\">Aside Post Format</a></h5>
                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh</p>
                </div>
            </div>
            <div class=\"blog-top\">
                <div class=\"col-on\">
                    <p>Logic will get you from A to B. Imagination will.</p>
                    <img  src=\"images/qu.png\" />
                    <span>Albert Einstein</span>
                </div>
                <div class=\"col-d\">
                    <a href=\"single.html\"><img  src=\"images/bl.jpg\" /></a>
                    <div class=\"blog-in\">
                        <h5><a href=\"single.html\">Gallery Post Example</a></h5>
                        <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain </p>
                        <ul class=\"date\">
                            <li><span><a href=\"#\"><i ></i>12 Comments</a></span></li>
                            <li><span><i class=\"date-in\"></i>09-07-2013</span></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-d\">
                    <iframe src=\"https://player.vimeo.com/video/12879013?portrait=0\" ></iframe>
                    <div class=\"blog-in\">
                        <h5><a href=\"single.html\">Gallery Post Example</a></h5>
                        <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain  </p>
                        <ul class=\"date\">
                            <li><span><a href=\"#\"><i ></i>12 Comments</a></span></li>
                            <li><span><i class=\"date-in\"></i>09-07-2013</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"blog-top\">
                <div class=\"col-d\">
                    <script>
                        \$(function () {
                            \$(\"#slider2\").responsiveSlides({
                                auto: true,
                                speed: 500,
                                namespace: \"callbacks\",
                                pager: false,
                                nav:true,
                            });
                        });
                    </script>
                    <div class=\"slider2\">
                        <div class=\"callbacks_container\">
                            <ul class=\"rslides\" id=\"slider2\">
                                <li>
                                    <img src=\"images/bl2.jpg\" alt=\"\">

                                </li>
                                <li>
                                    <img src=\"images/bl1.jpg\" alt=\"\">

                                </li>
                                <li>
                                    <img src=\"images/bl.jpg\" alt=\"\">

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"blog-in\">
                        <h5><a href=\"single.html\">Gallery Post Example</a></h5>
                        <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain  </p>
                        <ul class=\"date\">
                            <li><span><a href=\"#\"><i ></i>12 Comments</a></span></li>
                            <li><span><i class=\"date-in\"></i>09-07-2013</span></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-d\">
                    <img  src=\"images/pi5.jpg\" />
                    <div class=\"blog-in\">
                        <h5><a href=\"single.html\">Gallery Post Example</a></h5>
                        <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain  </p>
                        <ul class=\"date\">
                            <li><span><a href=\"#\"><i ></i>12 Comments</a></span></li>
                            <li><span><i class=\"date-in\"></i>09-07-2013</span></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class=\"clear\"> </div>
        </div>
        <div class=\"arrow arrow-at\">
            <img  src=\"images/ic.png\" />
        </div>
    </div>


    ";
        
        $__internal_c19057fc99aef7474a38362cb87475917a25087a14bfffb7547e2a9da5f21f55->leave($__internal_c19057fc99aef7474a38362cb87475917a25087a14bfffb7547e2a9da5f21f55_prof);

    }

    // line 242
    public function block_footer($context, array $blocks = array())
    {
        $__internal_898ab4e26650ebd3975df3cc583420cb407c59668dcc489e32aa0b4479395400 = $this->env->getExtension("native_profiler");
        $__internal_898ab4e26650ebd3975df3cc583420cb407c59668dcc489e32aa0b4479395400->enter($__internal_898ab4e26650ebd3975df3cc583420cb407c59668dcc489e32aa0b4479395400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 243
        echo "</div>
</body>
</html>
";
        
        $__internal_898ab4e26650ebd3975df3cc583420cb407c59668dcc489e32aa0b4479395400->leave($__internal_898ab4e26650ebd3975df3cc583420cb407c59668dcc489e32aa0b4479395400_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 243,  390 => 242,  206 => 64,  204 => 63,  202 => 62,  200 => 61,  198 => 60,  196 => 59,  194 => 58,  192 => 57,  190 => 56,  188 => 55,  186 => 54,  184 => 53,  178 => 48,  172 => 47,  161 => 41,  145 => 38,  140 => 37,  138 => 36,  131 => 32,  127 => 30,  121 => 29,  113 => 23,  107 => 22,  97 => 20,  91 => 19,  83 => 5,  77 => 4,  70 => 242,  68 => 47,  65 => 46,  63 => 29,  57 => 25,  54 => 22,  52 => 19,  47 => 17,  35 => 7,  33 => 4,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     {% block title %}*/
/*     <title>Home</title>*/
/*     {% endblock %}*/
/* */
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*     <meta name="keywords" content="Kappe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,*/
/* Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />*/
/*     <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>*/
/*     <!--fonts-->*/
/*     <link href='http://fonts.useso.com/css?family=Roboto:400,300,100,500,700,900' rel='stylesheet' type='text/css'>*/
/* */
/*     <!-- jQuery-->*/
/*     <script src="{{ asset('bundles/app/js/jquery.min.js') }}"></script>*/
/*     <!-- Custom Theme files -->*/
/*     {% block style %}*/
/*         <link href="{{ asset('bundles/app/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />*/
/*     {% endblock %}*/
/*     {% block script %}*/
/* */
/*     {% endblock %}*/
/* </head>*/
/* <body>*/
/* <div class="header">*/
/*     <!---->*/
/*     {% block left %}*/
/*     <div class="header-left">*/
/*         <div class="logo">*/
/*             <a href="index.html"><img src="{{ asset('bundles/app/images/logo.png') }}" alt=""></a>*/
/*         </div>*/
/*         <div class="top-nav">*/
/*             <ul >*/
/*                 {% set leftTree = app.session.get('tree')  %}*/
/*                 {%  for key, tr in leftTree  %}*/
/*                     <li {% if key == cate-1 %} class="active" {% endif %} ><a href="/?cate={{ tr['id'] }}" >{{ tr['category_name'] }}</a></li>*/
/* */
/*                 {% endfor %}*/
/* */
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     {% endblock %}*/
/* */
/*     {% block mainContent %}*/
/*     <div class="content">*/
/*         <div class="blog">*/
/*             <div class="blog-top">*/
/*                 <div class="col-d">*/
/*                     {#<script src="{{ asset('bundles/app/js/responsiveslides.min.js') }}"></script>#}*/
/*                     {#<script>#}*/
/*                         {#$(function () {#}*/
/*                             {#$("#slider1").responsiveSlides({#}*/
/*                                 {#auto: true,#}*/
/*                                 {#speed: 500,#}*/
/*                                 {#namespace: "callbacks",#}*/
/*                                 {#pager: false,#}*/
/*                                 {#nav:true,#}*/
/*                             {#});#}*/
/*                         {#});#}*/
/*                     {#</script>#}*/
/*                     <div class="slider1">*/
/*                         <div class="callbacks_container">*/
/*                             <ul class="rslides" id="slider1">*/
/*                                 <li>*/
/*                                     <img src="images/bl.jpg" alt="">*/
/* */
/*                                 </li>*/
/*                                 <li>*/
/*                                     <img src="images/bl1.jpg" alt="">*/
/* */
/*                                 </li>*/
/*                                 <li>*/
/*                                     <img src="images/bl2.jpg" alt="">*/
/* */
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="blog-in">*/
/*                         <h5><a href="single.html">Gallery Post Example</a></h5>*/
/*                         <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain </p>*/
/*                         <ul class="date">*/
/*                             <li><span><a href="#"><i ></i>12 Comments</a></span></li>*/
/*                             <li><span><i class="date-in"></i>09-07-2013</span></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-d">*/
/*                     <a  href="single.html"><img  src="images/bl2.jpg" />*/
/*                         <label> </label></a>*/
/*                 </div>*/
/*                 <div class="col-in">*/
/*                     <p>Another Post where you can put a link</p>*/
/*                     <a href="http://w3layouts.com/" target="_blank">W3layouts.com</a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="blog-top">*/
/*                 <div class="col-in">*/
/*                     <p>Another Post where you can put a link</p>*/
/*                     <a href="http://w3layouts.com/" target="_blank">W3layouts.com</a>*/
/*                 </div>*/
/*                 <div class="col-d">*/
/*                     <iframe src="https://player.vimeo.com/video/66087280?color=ffffff&title=0&byline=0&portrait=0"  ></iframe>*/
/*                     <div class="blog-in">*/
/*                         <h5><a href="single.html">Gallery Post Example</a></h5>*/
/*                         <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain  </p>*/
/*                         <ul class="date">*/
/*                             <li><span><a href="#"><i ></i>12 Comments</a></span></li>*/
/*                             <li><span><i class="date-in"></i>09-07-2013</span></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-d">*/
/*                     <a href="single.html"><img  src="images/bl.jpg" /></a>*/
/*                     <div class="blog-in">*/
/*                         <h5><a href="single.html">Gallery Post Example</a></h5>*/
/*                         <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain</p>*/
/*                         <ul class="date">*/
/*                             <li><span><a href="#"><i ></i>12 Comments</a></span></li>*/
/*                             <li><span><i class="date-in"></i>09-07-2013</span></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*             <div class="blog-top">*/
/*                 <div class="col-d">*/
/*                     <a href="single.html"><img  src="images/bl2.jpg" />*/
/*                         <label> </label></a>*/
/*                 </div>*/
/*                 <div class="col-d">*/
/*                     <img  src="images/bl1.jpg" />*/
/*                     <div class="blog-in">*/
/*                         <h5><a href="single.html">Gallery Post Example</a></h5>*/
/*                         <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain </p>*/
/*                         <ul class="date">*/
/*                             <li><span><a href="#"><i ></i>12 Comments</a></span></li>*/
/*                             <li><span><i class="date-in"></i>09-07-2013</span></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-in-at">*/
/*                     <h5><a href="single.html">Aside Post Format</a></h5>*/
/*                     <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="blog-top">*/
/*                 <div class="col-on">*/
/*                     <p>Logic will get you from A to B. Imagination will.</p>*/
/*                     <img  src="images/qu.png" />*/
/*                     <span>Albert Einstein</span>*/
/*                 </div>*/
/*                 <div class="col-d">*/
/*                     <a href="single.html"><img  src="images/bl.jpg" /></a>*/
/*                     <div class="blog-in">*/
/*                         <h5><a href="single.html">Gallery Post Example</a></h5>*/
/*                         <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain </p>*/
/*                         <ul class="date">*/
/*                             <li><span><a href="#"><i ></i>12 Comments</a></span></li>*/
/*                             <li><span><i class="date-in"></i>09-07-2013</span></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-d">*/
/*                     <iframe src="https://player.vimeo.com/video/12879013?portrait=0" ></iframe>*/
/*                     <div class="blog-in">*/
/*                         <h5><a href="single.html">Gallery Post Example</a></h5>*/
/*                         <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain  </p>*/
/*                         <ul class="date">*/
/*                             <li><span><a href="#"><i ></i>12 Comments</a></span></li>*/
/*                             <li><span><i class="date-in"></i>09-07-2013</span></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="blog-top">*/
/*                 <div class="col-d">*/
/*                     <script>*/
/*                         $(function () {*/
/*                             $("#slider2").responsiveSlides({*/
/*                                 auto: true,*/
/*                                 speed: 500,*/
/*                                 namespace: "callbacks",*/
/*                                 pager: false,*/
/*                                 nav:true,*/
/*                             });*/
/*                         });*/
/*                     </script>*/
/*                     <div class="slider2">*/
/*                         <div class="callbacks_container">*/
/*                             <ul class="rslides" id="slider2">*/
/*                                 <li>*/
/*                                     <img src="images/bl2.jpg" alt="">*/
/* */
/*                                 </li>*/
/*                                 <li>*/
/*                                     <img src="images/bl1.jpg" alt="">*/
/* */
/*                                 </li>*/
/*                                 <li>*/
/*                                     <img src="images/bl.jpg" alt="">*/
/* */
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="blog-in">*/
/*                         <h5><a href="single.html">Gallery Post Example</a></h5>*/
/*                         <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain  </p>*/
/*                         <ul class="date">*/
/*                             <li><span><a href="#"><i ></i>12 Comments</a></span></li>*/
/*                             <li><span><i class="date-in"></i>09-07-2013</span></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-d">*/
/*                     <img  src="images/pi5.jpg" />*/
/*                     <div class="blog-in">*/
/*                         <h5><a href="single.html">Gallery Post Example</a></h5>*/
/*                         <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain  </p>*/
/*                         <ul class="date">*/
/*                             <li><span><a href="#"><i ></i>12 Comments</a></span></li>*/
/*                             <li><span><i class="date-in"></i>09-07-2013</span></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*             <div class="clear"> </div>*/
/*         </div>*/
/*         <div class="arrow arrow-at">*/
/*             <img  src="images/ic.png" />*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     {% endblock %}*/
/* {% block footer %}*/
/* </div>*/
/* </body>*/
/* </html>*/
/* {% endblock %}*/
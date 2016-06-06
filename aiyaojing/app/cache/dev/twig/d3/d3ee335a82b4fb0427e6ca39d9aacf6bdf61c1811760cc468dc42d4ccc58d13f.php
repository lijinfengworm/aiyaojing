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
            'left' => array($this, 'block_left'),
            'mainContent' => array($this, 'block_mainContent'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7c9122b594a9f00a49e8105153b6c90a6c68a82ef638e743235f8e536cc20d0 = $this->env->getExtension("native_profiler");
        $__internal_c7c9122b594a9f00a49e8105153b6c90a6c68a82ef638e743235f8e536cc20d0->enter($__internal_c7c9122b594a9f00a49e8105153b6c90a6c68a82ef638e743235f8e536cc20d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        echo "
</head>
<body>
<div class=\"header\">
    <!---->
    ";
        // line 27
        $this->displayBlock('left', $context, $blocks);
        // line 44
        echo "
    ";
        // line 45
        $this->displayBlock('mainContent', $context, $blocks);
        // line 240
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_c7c9122b594a9f00a49e8105153b6c90a6c68a82ef638e743235f8e536cc20d0->leave($__internal_c7c9122b594a9f00a49e8105153b6c90a6c68a82ef638e743235f8e536cc20d0_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_60deea7cc1270766fa62dcf84aab8982ac09363550697b1e5c9be73d00259e1d = $this->env->getExtension("native_profiler");
        $__internal_60deea7cc1270766fa62dcf84aab8982ac09363550697b1e5c9be73d00259e1d->enter($__internal_60deea7cc1270766fa62dcf84aab8982ac09363550697b1e5c9be73d00259e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    <title>Home</title>
    ";
        
        $__internal_60deea7cc1270766fa62dcf84aab8982ac09363550697b1e5c9be73d00259e1d->leave($__internal_60deea7cc1270766fa62dcf84aab8982ac09363550697b1e5c9be73d00259e1d_prof);

    }

    // line 19
    public function block_style($context, array $blocks = array())
    {
        $__internal_04a7b7d8c85f9fae6a39b0b4ee2ff7566d7f42f94b4e7167d615d8fdc444cf41 = $this->env->getExtension("native_profiler");
        $__internal_04a7b7d8c85f9fae6a39b0b4ee2ff7566d7f42f94b4e7167d615d8fdc444cf41->enter($__internal_04a7b7d8c85f9fae6a39b0b4ee2ff7566d7f42f94b4e7167d615d8fdc444cf41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 20
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    ";
        
        $__internal_04a7b7d8c85f9fae6a39b0b4ee2ff7566d7f42f94b4e7167d615d8fdc444cf41->leave($__internal_04a7b7d8c85f9fae6a39b0b4ee2ff7566d7f42f94b4e7167d615d8fdc444cf41_prof);

    }

    // line 27
    public function block_left($context, array $blocks = array())
    {
        $__internal_627773c9dcfe0bce73a39805b567b5010cae55b10685e798a8c53e3cb0b878b3 = $this->env->getExtension("native_profiler");
        $__internal_627773c9dcfe0bce73a39805b567b5010cae55b10685e798a8c53e3cb0b878b3->enter($__internal_627773c9dcfe0bce73a39805b567b5010cae55b10685e798a8c53e3cb0b878b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left"));

        // line 28
        echo "    <div class=\"header-left\">
        <div class=\"logo\">
            <a href=\"index.html\"><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/images/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
        </div>
        <div class=\"top-nav\">
            <ul >
                ";
        // line 34
        $context["leftTree"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "tree"), "method");
        // line 35
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["leftTree"]) ? $context["leftTree"] : $this->getContext($context, "leftTree")));
        foreach ($context['_seq'] as $context["key"] => $context["tr"]) {
            // line 36
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
        // line 39
        echo "
            </ul>
        </div>
    </div>
    ";
        
        $__internal_627773c9dcfe0bce73a39805b567b5010cae55b10685e798a8c53e3cb0b878b3->leave($__internal_627773c9dcfe0bce73a39805b567b5010cae55b10685e798a8c53e3cb0b878b3_prof);

    }

    // line 45
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_601ac1d11354d8dd54ab80da4436dcd47874af6df09e21db4aafc9d7ff747758 = $this->env->getExtension("native_profiler");
        $__internal_601ac1d11354d8dd54ab80da4436dcd47874af6df09e21db4aafc9d7ff747758->enter($__internal_601ac1d11354d8dd54ab80da4436dcd47874af6df09e21db4aafc9d7ff747758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 46
        echo "    <div class=\"content\">
        <div class=\"blog\">
            <div class=\"blog-top\">
                <div class=\"col-d\">
                    ";
        // line 51
        echo "                    ";
        // line 52
        echo "                        ";
        // line 53
        echo "                            ";
        // line 54
        echo "                                ";
        // line 55
        echo "                                ";
        // line 56
        echo "                                ";
        // line 57
        echo "                                ";
        // line 58
        echo "                                ";
        // line 59
        echo "                            ";
        // line 60
        echo "                        ";
        // line 61
        echo "                    ";
        // line 62
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
        
        $__internal_601ac1d11354d8dd54ab80da4436dcd47874af6df09e21db4aafc9d7ff747758->leave($__internal_601ac1d11354d8dd54ab80da4436dcd47874af6df09e21db4aafc9d7ff747758_prof);

    }

    // line 240
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ed0353f2b8cc9ae4e985e7fdc6fd31ee31706b824b2e8f4eb95660d7651154ca = $this->env->getExtension("native_profiler");
        $__internal_ed0353f2b8cc9ae4e985e7fdc6fd31ee31706b824b2e8f4eb95660d7651154ca->enter($__internal_ed0353f2b8cc9ae4e985e7fdc6fd31ee31706b824b2e8f4eb95660d7651154ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 241
        echo "</div>
</body>
</html>
";
        
        $__internal_ed0353f2b8cc9ae4e985e7fdc6fd31ee31706b824b2e8f4eb95660d7651154ca->leave($__internal_ed0353f2b8cc9ae4e985e7fdc6fd31ee31706b824b2e8f4eb95660d7651154ca_prof);

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
        return array (  379 => 241,  373 => 240,  189 => 62,  187 => 61,  185 => 60,  183 => 59,  181 => 58,  179 => 57,  177 => 56,  175 => 55,  173 => 54,  171 => 53,  169 => 52,  167 => 51,  161 => 46,  155 => 45,  144 => 39,  128 => 36,  123 => 35,  121 => 34,  114 => 30,  110 => 28,  104 => 27,  94 => 20,  88 => 19,  80 => 5,  74 => 4,  67 => 240,  65 => 45,  62 => 44,  60 => 27,  53 => 22,  51 => 19,  46 => 17,  34 => 7,  32 => 4,  27 => 1,);
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
/* */
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

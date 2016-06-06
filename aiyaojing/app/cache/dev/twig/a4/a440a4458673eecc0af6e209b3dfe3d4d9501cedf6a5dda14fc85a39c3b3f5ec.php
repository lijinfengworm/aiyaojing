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
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_260f2d66458d9af0e466e8cb2a082d96dd691c5dd5e36390001480a3d060da86 = $this->env->getExtension("native_profiler");
        $__internal_260f2d66458d9af0e466e8cb2a082d96dd691c5dd5e36390001480a3d060da86->enter($__internal_260f2d66458d9af0e466e8cb2a082d96dd691c5dd5e36390001480a3d060da86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_260f2d66458d9af0e466e8cb2a082d96dd691c5dd5e36390001480a3d060da86->leave($__internal_260f2d66458d9af0e466e8cb2a082d96dd691c5dd5e36390001480a3d060da86_prof);

    }

    // line 2
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_39b86cd1b08df9a72b30476ff3b7f8ca83841e88335d8a5cf84862bcb07c30e6 = $this->env->getExtension("native_profiler");
        $__internal_39b86cd1b08df9a72b30476ff3b7f8ca83841e88335d8a5cf84862bcb07c30e6->enter($__internal_39b86cd1b08df9a72b30476ff3b7f8ca83841e88335d8a5cf84862bcb07c30e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 3
        echo "<div class=\"content\">
    <div class=\"single\">
        <div class=\"single-top\">
            <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/responsiveslides.min.js"), "html", null, true);
        echo "\"></script>
            <script>
                \$(function () {
                    \$(\"#slider\").responsiveSlides({
                        auto: true,
                        speed: 500,
                        namespace: \"callbacks\",
                        pager: true,
                    });
                });
            </script>
            <div class=\"slider\">
                <div class=\"callbacks_container\">
                    <ul class=\"rslides\" id=\"slider\">
                        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["tl"]) {
            // line 21
            echo "                        <li><img src=\"http://admin.aiyaojing.com/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tl"], "mediumImage", array(), "array"), "html", null, true);
            echo "\" alt=\"\"></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
                    </ul>
                </div>
            </div>
            <h2>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collect"]) ? $context["collect"] : $this->getContext($context, "collect")), 0, array(), "array"), "title", array(), "array"), "html", null, true);
        echo "</h2>
            <p class=\"para\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collect"]) ? $context["collect"] : $this->getContext($context, "collect")), 0, array(), "array"), "abstract", array(), "array"), "html", null, true);
        echo "</p>
            ";
        // line 30
        echo "                ";
        // line 31
        echo "                ";
        // line 32
        echo "                    ";
        // line 33
        echo "                        ";
        // line 34
        echo "                    ";
        // line 35
        echo "                    ";
        // line 36
        echo "                        ";
        // line 37
        echo "                            ";
        // line 38
        echo "                            ";
        // line 39
        echo "
                        ";
        // line 41
        echo "                        ";
        // line 42
        echo "                    ";
        // line 43
        echo "                    ";
        // line 44
        echo "                    ";
        // line 45
        echo "                ";
        // line 46
        echo "                ";
        // line 47
        echo "                    ";
        // line 48
        echo "                        ";
        // line 49
        echo "                    ";
        // line 50
        echo "                    ";
        // line 51
        echo "                        ";
        // line 52
        echo "                            ";
        // line 53
        echo "                            ";
        // line 54
        echo "
                        ";
        // line 56
        echo "                        ";
        // line 57
        echo "                    ";
        // line 58
        echo "                    ";
        // line 59
        echo "                    ";
        // line 60
        echo "                ";
        // line 61
        echo "                ";
        // line 62
        echo "                    ";
        // line 63
        echo "                        ";
        // line 64
        echo "                    ";
        // line 65
        echo "                    ";
        // line 66
        echo "                        ";
        // line 67
        echo "                            ";
        // line 68
        echo "                            ";
        // line 69
        echo "
                        ";
        // line 71
        echo "                        ";
        // line 72
        echo "                    ";
        // line 73
        echo "                    ";
        // line 74
        echo "                    ";
        // line 75
        echo "                ";
        // line 76
        echo "
                ";
        // line 78
        echo "                    ";
        // line 79
        echo "                        ";
        // line 80
        echo "                    ";
        // line 81
        echo "                    ";
        // line 82
        echo "                        ";
        // line 83
        echo "                            ";
        // line 84
        echo "                            ";
        // line 85
        echo "
                        ";
        // line 87
        echo "                        ";
        // line 88
        echo "                    ";
        // line 89
        echo "                    ";
        // line 90
        echo "
                ";
        // line 92
        echo "                ";
        // line 93
        echo "                    ";
        // line 94
        echo "                        ";
        // line 95
        echo "                    ";
        // line 96
        echo "                    ";
        // line 97
        echo "                        ";
        // line 98
        echo "                            ";
        // line 99
        echo "                            ";
        // line 100
        echo "
                        ";
        // line 102
        echo "                        ";
        // line 103
        echo "                    ";
        // line 104
        echo "                    ";
        // line 105
        echo "                ";
        // line 106
        echo "            ";
        // line 107
        echo "            ";
        // line 108
        echo "                ";
        // line 109
        echo "                ";
        // line 110
        echo "                    ";
        // line 111
        echo "                        ";
        // line 112
        echo "                        ";
        // line 113
        echo "                        ";
        // line 114
        echo "                    ";
        // line 115
        echo "                    ";
        // line 116
        echo "                        ";
        // line 117
        echo "                        ";
        // line 118
        echo "                        ";
        // line 119
        echo "                    ";
        // line 120
        echo "                    ";
        // line 121
        echo "                        ";
        // line 122
        echo "                        ";
        // line 123
        echo "                        ";
        // line 124
        echo "                    ";
        // line 125
        echo "
                ";
        // line 127
        echo "                ";
        // line 128
        echo "                    ";
        // line 129
        echo "                    ";
        // line 130
        echo "                ";
        // line 131
        echo "                ";
        // line 132
        echo "            ";
        // line 133
        echo "        </div>
        <div class=\"single-in\">
            <div class=\"info\">
                <h3>个人信息</h3>
                <ul class=\"likes\">
                    <li><a href=\"#\"><i > </i>作者</a></li>
                    <li><span><i class=\"like\"> </i>138 喜欢</span></li>
                    <li><span><i class=\"dec\"> </i>25 December, 2013</span></li>
                    ";
        // line 142
        echo "
                </ul>
            </div>
            <div class=\"tags\">
                <h3>标签</h3>
                <ul class=\"tag\">
                    <li><a href=\"#\">web design</a></li>
                    <li><a href=\"#\">photography</a></li>
                    <li><a href=\"#\">development</a></li>
                    <li><a href=\"#\">php</a></li>
                    <li><a href=\"#\">ecommerce</a></li>
                    <li><a href=\"#\">graphic</a></li>
                </ul>
            </div>


        </div>
        <div class=\"clear\"> </div>
    </div>
</div>
";
        
        $__internal_39b86cd1b08df9a72b30476ff3b7f8ca83841e88335d8a5cf84862bcb07c30e6->leave($__internal_39b86cd1b08df9a72b30476ff3b7f8ca83841e88335d8a5cf84862bcb07c30e6_prof);

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
        return array (  297 => 142,  287 => 133,  285 => 132,  283 => 131,  281 => 130,  279 => 129,  277 => 128,  275 => 127,  272 => 125,  270 => 124,  268 => 123,  266 => 122,  264 => 121,  262 => 120,  260 => 119,  258 => 118,  256 => 117,  254 => 116,  252 => 115,  250 => 114,  248 => 113,  246 => 112,  244 => 111,  242 => 110,  240 => 109,  238 => 108,  236 => 107,  234 => 106,  232 => 105,  230 => 104,  228 => 103,  226 => 102,  223 => 100,  221 => 99,  219 => 98,  217 => 97,  215 => 96,  213 => 95,  211 => 94,  209 => 93,  207 => 92,  204 => 90,  202 => 89,  200 => 88,  198 => 87,  195 => 85,  193 => 84,  191 => 83,  189 => 82,  187 => 81,  185 => 80,  183 => 79,  181 => 78,  178 => 76,  176 => 75,  174 => 74,  172 => 73,  170 => 72,  168 => 71,  165 => 69,  163 => 68,  161 => 67,  159 => 66,  157 => 65,  155 => 64,  153 => 63,  151 => 62,  149 => 61,  147 => 60,  145 => 59,  143 => 58,  141 => 57,  139 => 56,  136 => 54,  134 => 53,  132 => 52,  130 => 51,  128 => 50,  126 => 49,  124 => 48,  122 => 47,  120 => 46,  118 => 45,  116 => 44,  114 => 43,  112 => 42,  110 => 41,  107 => 39,  105 => 38,  103 => 37,  101 => 36,  99 => 35,  97 => 34,  95 => 33,  93 => 32,  91 => 31,  89 => 30,  85 => 28,  81 => 27,  75 => 23,  66 => 21,  62 => 20,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* {% block mainContent %}*/
/* <div class="content">*/
/*     <div class="single">*/
/*         <div class="single-top">*/
/*             <script src="{{ asset('bundles/app/js/responsiveslides.min.js') }}"></script>*/
/*             <script>*/
/*                 $(function () {*/
/*                     $("#slider").responsiveSlides({*/
/*                         auto: true,*/
/*                         speed: 500,*/
/*                         namespace: "callbacks",*/
/*                         pager: true,*/
/*                     });*/
/*                 });*/
/*             </script>*/
/*             <div class="slider">*/
/*                 <div class="callbacks_container">*/
/*                     <ul class="rslides" id="slider">*/
/*                         {% for tl in list %}*/
/*                         <li><img src="http://admin.aiyaojing.com/{{ tl['mediumImage'] }}" alt=""></li>*/
/*                         {% endfor %}*/
/* */
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*             <h2>{{ collect[0]['title'] }}</h2>*/
/*             <p class="para">{{ collect[0]['abstract'] }}</p>*/
/*             {#<div class="comment-grid-top">#}*/
/*                 {#<h3>5 Comments</h3>#}*/
/*                 {#<div class="comments-top-top">#}*/
/*                     {#<div class="top-comment-left">#}*/
/*                         {#<img  src="images/co.jpg" alt="">#}*/
/*                     {#</div>#}*/
/*                     {#<div class="top-comment-right">#}*/
/*                         {#<ul>#}*/
/*                             {#<li><span > <a href="#">ShaneFreer</a></span></li>#}*/
/*                             {#<li><span>/ 58 minutes ago</span></li>#}*/
/* */
/*                         {#</ul>#}*/
/*                         {#<p>great post brainartworks</p>#}*/
/*                     {#</div>#}*/
/*                     {#<div class="clear"> </div>#}*/
/*                     {#<label> </label>#}*/
/*                 {#</div>#}*/
/*                 {#<div class="comments-top-top top-comment">#}*/
/*                     {#<div class="top-comment-left left-single">#}*/
/*                         {#<img  src="images/co1.jpg" alt="">#}*/
/*                     {#</div>#}*/
/*                     {#<div class="top-comment-right right-single">#}*/
/*                         {#<ul>#}*/
/*                             {#<li><span ><a href="#">ShaneFreer</a></span></li>#}*/
/*                             {#<li><span >/ 58 minutes ago</span></li>#}*/
/* */
/*                         {#</ul>#}*/
/*                         {#<p>great post brainartworks</p>#}*/
/*                     {#</div>#}*/
/*                     {#<div class="clear"> </div>#}*/
/*                     {#<label> </label>#}*/
/*                 {#</div>#}*/
/*                 {#<div class="comments-top-top top-com">#}*/
/*                     {#<div class="top-comment-left left-single1">#}*/
/*                         {#<img  src="images/co2.jpg" alt="">#}*/
/*                     {#</div>#}*/
/*                     {#<div class="top-comment-right  right-single1">#}*/
/*                         {#<ul>#}*/
/*                             {#<li><span > <a href="#">ShaneFreer</a></span></li>#}*/
/*                             {#<li><span >/ 58 minutes ago</span></li>#}*/
/* */
/*                         {#</ul>#}*/
/*                         {#<p>great post brainartworks</p>#}*/
/*                     {#</div>#}*/
/*                     {#<div class="clear"> </div>#}*/
/*                     {#<label class="arrow-in"> </label>#}*/
/*                 {#</div>#}*/
/* */
/*                 {#<div class="comments-top-top top-comment">#}*/
/*                     {#<div class="top-comment-left left-single">#}*/
/*                         {#<img  src="images/co3.jpg" alt="">#}*/
/*                     {#</div>#}*/
/*                     {#<div class="top-comment-right right-single">#}*/
/*                         {#<ul>#}*/
/*                             {#<li><span><a href="#">ShaneFreer</a></span></li>#}*/
/*                             {#<li><span >/ 58 minutes ago</span></li>#}*/
/* */
/*                         {#</ul>#}*/
/*                         {#<p>great post brainartworks</p>#}*/
/*                     {#</div>#}*/
/*                     {#<div class="clear"> </div>#}*/
/* */
/*                 {#</div>#}*/
/*                 {#<div class="comments-top-top ">#}*/
/*                     {#<div class="top-comment-left ">#}*/
/*                         {#<img  src="images/co4.jpg" alt="">#}*/
/*                     {#</div>#}*/
/*                     {#<div class="top-comment-right ">#}*/
/*                         {#<ul>#}*/
/*                             {#<li><span > <a href="#">ShaneFreer</a></span></li>#}*/
/*                             {#<li><span >/ 58 minutes ago</span></li>#}*/
/* */
/*                         {#</ul>#}*/
/*                         {#<p>great post brainartworks</p>#}*/
/*                     {#</div>#}*/
/*                     {#<div class="clear"> </div>#}*/
/*                 {#</div>#}*/
/*             {#</div>#}*/
/*             {#<div class="top-single">#}*/
/*                 {#<h3>Leave a Comment</h3>#}*/
/*                 {#<div class="grid-single">#}*/
/*                     {#<div class="your-single">#}*/
/*                         {#<i> </i>#}*/
/*                         {#<input type="text" value="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Name';}">#}*/
/*                         {#<div class="clear"> </div>#}*/
/*                     {#</div>#}*/
/*                     {#<div class="your-single">#}*/
/*                         {#<i class="email"> </i>#}*/
/*                         {#<input type="text" value="E-mail" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'E-mail';}">#}*/
/*                         {#<div class="clear"> </div>#}*/
/*                     {#</div>#}*/
/*                     {#<div class="your-single">#}*/
/*                         {#<i class="website"> </i>#}*/
/*                         {#<input type="text" value="Website" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Website';}">#}*/
/*                         {#<div class="clear"> </div>#}*/
/*                     {#</div>#}*/
/* */
/*                 {#</div>#}*/
/*                 {#<div class="grid-single-in">#}*/
/*                     {#<textarea cols="77" rows="5" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>#}*/
/*                     {#<input type="submit" value="SENT MESSAGE">#}*/
/*                 {#</div>#}*/
/*                 {#<div class="clear"> </div>#}*/
/*             {#</div>#}*/
/*         </div>*/
/*         <div class="single-in">*/
/*             <div class="info">*/
/*                 <h3>个人信息</h3>*/
/*                 <ul class="likes">*/
/*                     <li><a href="#"><i > </i>作者</a></li>*/
/*                     <li><span><i class="like"> </i>138 喜欢</span></li>*/
/*                     <li><span><i class="dec"> </i>25 December, 2013</span></li>*/
/*                     {#<li><a href="#"><i class="comment"> </i>4 Comments</a></li>#}*/
/* */
/*                 </ul>*/
/*             </div>*/
/*             <div class="tags">*/
/*                 <h3>标签</h3>*/
/*                 <ul class="tag">*/
/*                     <li><a href="#">web design</a></li>*/
/*                     <li><a href="#">photography</a></li>*/
/*                     <li><a href="#">development</a></li>*/
/*                     <li><a href="#">php</a></li>*/
/*                     <li><a href="#">ecommerce</a></li>*/
/*                     <li><a href="#">graphic</a></li>*/
/*                 </ul>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*         <div class="clear"> </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/

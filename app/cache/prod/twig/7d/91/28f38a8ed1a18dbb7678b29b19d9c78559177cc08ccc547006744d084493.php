<?php

/* HzStoreBundle:Machine:create.html.twig */
class __TwigTemplate_7d9128f38a8ed1a18dbb7678b29b19d9c78559177cc08ccc547006744d084493 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HzStoreBundle:Default:layout.html.twig");

        $this->blocks = array(
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'content_body' => array($this, 'block_content_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HzStoreBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "HzStoreBundle:Form:fields.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    <div class=\"textarea_widget comments_box\">
        <textarea ";
        // line 6
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "></textarea>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 9
        echo "
";
    }

    // line 12
    public function block_content_body($context, array $blocks = array())
    {
        // line 13
        echo "<div class=\"cam-block\" style=\"overflow:hidden;margin-bottom:30px;\">
<div id=\"webcam\" style=\"width: 400px;height:300px;float:left;\"></div>
<div style=\"float:right;\" id=\"gallery\"></div>
</div>
<div class=\"clear\"></div>
<div class=\"form_box\">
  ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
        echo "
</div>

<script>

\$(function(){
\t\$('#webcam').photobooth().on(\"image\",function( event, dataUrl ){
\t\$( \"#gallery\" ).html( '<img src=\"' + dataUrl + '\" >');
\t\$(\".img_file\").val(dataUrl);
});
});
</script>

";
    }

    public function getTemplateName()
    {
        return "HzStoreBundle:Machine:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  23 => 10,  97 => 33,  84 => 29,  76 => 27,  34 => 4,  170 => 74,  167 => 73,  150 => 34,  100 => 112,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 24,  111 => 37,  107 => 36,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 68,  143 => 30,  135 => 53,  131 => 52,  119 => 20,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 17,  59 => 13,  47 => 7,  38 => 4,  94 => 71,  89 => 20,  85 => 25,  79 => 25,  75 => 23,  68 => 25,  56 => 9,  50 => 12,  29 => 3,  87 => 25,  72 => 26,  55 => 15,  21 => 1,  26 => 2,  98 => 73,  93 => 28,  88 => 30,  78 => 21,  46 => 7,  27 => 4,  40 => 8,  44 => 12,  35 => 3,  31 => 3,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 28,  136 => 56,  123 => 22,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 25,  66 => 15,  62 => 14,  49 => 19,  24 => 4,  32 => 4,  25 => 2,  22 => 1,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 69,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 26,  130 => 41,  125 => 44,  122 => 43,  116 => 19,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 68,  86 => 28,  82 => 26,  80 => 28,  73 => 19,  64 => 24,  60 => 13,  57 => 12,  54 => 11,  51 => 11,  48 => 13,  45 => 9,  42 => 5,  39 => 6,  36 => 5,  33 => 2,  30 => 1,);
    }
}

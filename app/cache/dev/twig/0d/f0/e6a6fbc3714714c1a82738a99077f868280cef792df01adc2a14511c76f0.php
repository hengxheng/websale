<?php

/* AcmeDemoBundle:Secured:hello.html.twig */
class __TwigTemplate_0df0e6a6fbc3714714c1a82738a99077f868280cef792df01adc2a14511c76f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>

    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello_admin", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 200,  399 => 198,  382 => 184,  378 => 183,  342 => 160,  334 => 155,  328 => 152,  319 => 147,  310 => 144,  306 => 143,  300 => 140,  295 => 137,  290 => 136,  288 => 135,  279 => 129,  275 => 128,  222 => 96,  218 => 95,  212 => 91,  198 => 84,  192 => 81,  184 => 75,  175 => 73,  216 => 85,  206 => 87,  197 => 78,  172 => 68,  155 => 64,  127 => 28,  118 => 44,  114 => 42,  110 => 22,  104 => 40,  185 => 76,  181 => 74,  160 => 66,  148 => 60,  129 => 53,  137 => 57,  124 => 50,  113 => 45,  90 => 32,  81 => 30,  77 => 25,  70 => 25,  58 => 19,  53 => 11,  23 => 10,  97 => 33,  84 => 29,  76 => 17,  34 => 5,  170 => 74,  167 => 73,  150 => 63,  100 => 35,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 182,  368 => 179,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 148,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 108,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 74,  169 => 70,  140 => 55,  132 => 51,  128 => 52,  107 => 36,  61 => 12,  273 => 96,  269 => 125,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 98,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 68,  143 => 59,  135 => 56,  119 => 20,  102 => 17,  71 => 21,  67 => 20,  63 => 22,  59 => 13,  38 => 6,  94 => 34,  89 => 20,  85 => 31,  75 => 23,  68 => 26,  56 => 11,  87 => 29,  21 => 1,  26 => 11,  93 => 28,  88 => 31,  78 => 26,  46 => 8,  27 => 4,  44 => 10,  31 => 3,  28 => 3,  201 => 80,  196 => 90,  183 => 71,  171 => 71,  166 => 69,  163 => 65,  158 => 65,  156 => 66,  151 => 63,  142 => 59,  138 => 28,  136 => 50,  121 => 48,  117 => 19,  105 => 18,  91 => 27,  62 => 25,  49 => 10,  24 => 4,  25 => 2,  19 => 1,  79 => 25,  72 => 27,  69 => 23,  47 => 8,  40 => 6,  37 => 5,  22 => 1,  246 => 90,  157 => 65,  145 => 60,  139 => 56,  131 => 56,  123 => 22,  120 => 20,  115 => 43,  111 => 44,  108 => 19,  101 => 32,  98 => 33,  96 => 31,  83 => 28,  74 => 26,  66 => 19,  55 => 23,  52 => 10,  50 => 12,  43 => 7,  41 => 5,  35 => 5,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 76,  189 => 74,  187 => 84,  182 => 66,  176 => 69,  173 => 65,  168 => 67,  164 => 66,  162 => 65,  154 => 64,  149 => 60,  147 => 58,  144 => 49,  141 => 58,  133 => 54,  130 => 41,  125 => 44,  122 => 46,  116 => 46,  112 => 45,  109 => 42,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 31,  86 => 28,  82 => 28,  80 => 29,  73 => 16,  64 => 13,  60 => 23,  57 => 12,  54 => 13,  51 => 17,  48 => 9,  45 => 8,  42 => 7,  39 => 5,  36 => 5,  33 => 3,  30 => 3,);
    }
}

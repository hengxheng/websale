<?php

/* ::base.html.twig */
class __TwigTemplate_c23461cf770a084b09b29aa8a401a1711fe1591aa3c2775d621282ec481049bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 200,  399 => 198,  382 => 184,  378 => 183,  342 => 160,  334 => 155,  328 => 152,  319 => 147,  310 => 144,  306 => 143,  300 => 140,  295 => 137,  290 => 136,  288 => 135,  279 => 129,  275 => 128,  222 => 96,  218 => 95,  212 => 91,  198 => 84,  192 => 81,  184 => 75,  175 => 73,  157 => 65,  37 => 4,  216 => 85,  206 => 87,  197 => 78,  172 => 68,  155 => 64,  127 => 47,  118 => 44,  114 => 42,  110 => 40,  104 => 40,  185 => 76,  181 => 74,  160 => 66,  148 => 60,  139 => 56,  129 => 53,  83 => 28,  145 => 60,  137 => 57,  124 => 50,  113 => 45,  90 => 31,  81 => 30,  77 => 25,  74 => 26,  70 => 25,  58 => 19,  53 => 5,  23 => 1,  97 => 33,  84 => 30,  76 => 28,  34 => 5,  170 => 74,  167 => 73,  150 => 63,  100 => 35,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 182,  368 => 179,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 148,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 108,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 74,  169 => 70,  140 => 55,  132 => 51,  128 => 52,  111 => 44,  107 => 36,  61 => 19,  273 => 96,  269 => 125,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 98,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 68,  143 => 59,  135 => 56,  131 => 56,  119 => 20,  108 => 36,  102 => 32,  71 => 21,  67 => 20,  63 => 22,  59 => 6,  47 => 12,  38 => 4,  94 => 31,  89 => 20,  85 => 31,  79 => 25,  75 => 23,  68 => 26,  56 => 20,  50 => 12,  29 => 5,  87 => 29,  72 => 27,  55 => 23,  21 => 1,  26 => 2,  98 => 33,  93 => 28,  88 => 30,  78 => 25,  46 => 7,  27 => 4,  40 => 8,  44 => 11,  35 => 7,  31 => 4,  43 => 6,  41 => 7,  28 => 3,  201 => 80,  196 => 90,  183 => 71,  171 => 71,  166 => 69,  163 => 65,  158 => 65,  156 => 66,  151 => 63,  142 => 59,  138 => 28,  136 => 50,  123 => 22,  121 => 48,  117 => 47,  115 => 43,  105 => 41,  101 => 32,  91 => 27,  69 => 11,  66 => 19,  62 => 25,  49 => 19,  24 => 4,  32 => 3,  25 => 2,  22 => 1,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 76,  189 => 74,  187 => 84,  182 => 66,  176 => 69,  173 => 65,  168 => 67,  164 => 66,  162 => 65,  154 => 64,  149 => 60,  147 => 58,  144 => 49,  141 => 58,  133 => 54,  130 => 41,  125 => 44,  122 => 46,  116 => 46,  112 => 45,  109 => 42,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 31,  86 => 28,  82 => 26,  80 => 29,  73 => 24,  64 => 10,  60 => 23,  57 => 22,  54 => 13,  51 => 17,  48 => 13,  45 => 11,  42 => 10,  39 => 5,  36 => 6,  33 => 6,  30 => 4,);
    }
}

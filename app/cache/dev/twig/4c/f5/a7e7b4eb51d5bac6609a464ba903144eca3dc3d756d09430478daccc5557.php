<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_4cf5a7e7b4eb51d5bac6609a464ba903144eca3dc3d756d09430478daccc5557 extends Twig_Template
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
        // line 1
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  161 => 63,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 125,  303 => 122,  289 => 113,  286 => 112,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 94,  233 => 87,  226 => 84,  213 => 78,  207 => 75,  200 => 72,  194 => 70,  191 => 67,  178 => 66,  165 => 60,  153 => 56,  134 => 54,  404 => 200,  399 => 198,  382 => 184,  378 => 183,  342 => 137,  334 => 155,  328 => 152,  319 => 147,  310 => 144,  306 => 143,  300 => 121,  295 => 137,  290 => 136,  288 => 135,  279 => 129,  275 => 105,  222 => 96,  218 => 95,  212 => 91,  198 => 84,  192 => 81,  184 => 75,  175 => 65,  216 => 79,  206 => 87,  197 => 71,  172 => 64,  155 => 64,  127 => 60,  118 => 49,  114 => 42,  110 => 22,  104 => 40,  185 => 66,  181 => 65,  160 => 66,  148 => 60,  129 => 53,  137 => 57,  124 => 50,  113 => 48,  90 => 27,  81 => 23,  77 => 25,  70 => 19,  58 => 17,  53 => 12,  23 => 10,  97 => 41,  84 => 24,  76 => 31,  34 => 5,  170 => 74,  167 => 73,  150 => 55,  100 => 39,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 182,  368 => 179,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 148,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 88,  278 => 106,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 108,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 74,  169 => 70,  140 => 58,  132 => 51,  128 => 52,  107 => 36,  61 => 12,  273 => 96,  269 => 125,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 98,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 68,  143 => 59,  135 => 62,  119 => 40,  102 => 40,  71 => 21,  67 => 24,  63 => 19,  59 => 14,  38 => 6,  94 => 34,  89 => 20,  85 => 32,  75 => 23,  68 => 26,  56 => 11,  87 => 34,  21 => 1,  26 => 9,  93 => 28,  88 => 31,  78 => 26,  46 => 13,  27 => 3,  44 => 10,  31 => 3,  28 => 3,  201 => 80,  196 => 90,  183 => 71,  171 => 71,  166 => 69,  163 => 65,  158 => 62,  156 => 58,  151 => 59,  142 => 59,  138 => 28,  136 => 50,  121 => 50,  117 => 19,  105 => 34,  91 => 27,  62 => 25,  49 => 14,  24 => 4,  25 => 35,  19 => 1,  79 => 25,  72 => 27,  69 => 23,  47 => 8,  40 => 6,  37 => 5,  22 => 1,  246 => 93,  157 => 65,  145 => 60,  139 => 63,  131 => 61,  123 => 42,  120 => 20,  115 => 43,  111 => 47,  108 => 19,  101 => 43,  98 => 33,  96 => 37,  83 => 33,  74 => 27,  66 => 19,  55 => 16,  52 => 14,  50 => 12,  43 => 12,  41 => 10,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 73,  199 => 67,  193 => 76,  189 => 74,  187 => 84,  182 => 66,  176 => 63,  173 => 65,  168 => 61,  164 => 66,  162 => 59,  154 => 60,  149 => 60,  147 => 54,  144 => 49,  141 => 51,  133 => 54,  130 => 46,  125 => 51,  122 => 46,  116 => 39,  112 => 45,  109 => 42,  106 => 45,  103 => 32,  99 => 31,  95 => 28,  92 => 31,  86 => 28,  82 => 28,  80 => 32,  73 => 20,  64 => 23,  60 => 23,  57 => 12,  54 => 13,  51 => 17,  48 => 9,  45 => 10,  42 => 7,  39 => 5,  36 => 5,  33 => 4,  30 => 3,);
    }
}

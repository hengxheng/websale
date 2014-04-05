<?php

/* AcmeDemoBundle:Secured:login.html.twig */
class __TwigTemplate_5a00be96c42996d80256a3412080eaaf7bf8044b5572d5dc7282ab351cee4a99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 35
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1 class=\"title\">Login</h1>

    <p>
        Choose between two default users: <em>user/userpass</em> <small>(ROLE_USER)</small> or <em>admin/adminpass</em> <small>(ROLE_ADMIN)</small>
    </p>

    ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 13
        echo "
    <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("_security_check");
        echo "\" method=\"post\" id=\"login\">
        <div>
            <label for=\"username\">Username</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
        </div>

        <div>
            <label for=\"password\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
        </div>

        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">Login</span>
                </span>
            </span>
        </button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 200,  399 => 198,  382 => 184,  378 => 183,  342 => 160,  334 => 155,  328 => 152,  319 => 147,  310 => 144,  306 => 143,  300 => 140,  295 => 137,  290 => 136,  288 => 135,  279 => 129,  275 => 128,  222 => 96,  218 => 95,  212 => 91,  198 => 84,  192 => 81,  184 => 75,  175 => 73,  216 => 85,  206 => 87,  197 => 78,  172 => 68,  155 => 64,  127 => 28,  118 => 44,  114 => 42,  110 => 22,  104 => 40,  185 => 76,  181 => 74,  160 => 66,  148 => 60,  129 => 53,  137 => 57,  124 => 50,  113 => 45,  90 => 32,  81 => 30,  77 => 25,  70 => 25,  58 => 17,  53 => 11,  23 => 10,  97 => 33,  84 => 29,  76 => 17,  34 => 5,  170 => 74,  167 => 73,  150 => 63,  100 => 35,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 182,  368 => 179,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 148,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 108,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 74,  169 => 70,  140 => 55,  132 => 51,  128 => 52,  107 => 36,  61 => 12,  273 => 96,  269 => 125,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 98,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 68,  143 => 59,  135 => 56,  119 => 20,  102 => 17,  71 => 21,  67 => 20,  63 => 22,  59 => 13,  38 => 6,  94 => 34,  89 => 20,  85 => 31,  75 => 23,  68 => 26,  56 => 11,  87 => 29,  21 => 1,  26 => 9,  93 => 28,  88 => 31,  78 => 26,  46 => 8,  27 => 4,  44 => 10,  31 => 3,  28 => 3,  201 => 80,  196 => 90,  183 => 71,  171 => 71,  166 => 69,  163 => 65,  158 => 65,  156 => 66,  151 => 63,  142 => 59,  138 => 28,  136 => 50,  121 => 48,  117 => 19,  105 => 18,  91 => 27,  62 => 25,  49 => 13,  24 => 4,  25 => 35,  19 => 1,  79 => 25,  72 => 27,  69 => 23,  47 => 8,  40 => 6,  37 => 5,  22 => 1,  246 => 90,  157 => 65,  145 => 60,  139 => 56,  131 => 56,  123 => 22,  120 => 20,  115 => 43,  111 => 44,  108 => 19,  101 => 32,  98 => 33,  96 => 31,  83 => 28,  74 => 26,  66 => 19,  55 => 23,  52 => 14,  50 => 12,  43 => 11,  41 => 10,  35 => 5,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 76,  189 => 74,  187 => 84,  182 => 66,  176 => 69,  173 => 65,  168 => 67,  164 => 66,  162 => 65,  154 => 64,  149 => 60,  147 => 58,  144 => 49,  141 => 58,  133 => 54,  130 => 41,  125 => 44,  122 => 46,  116 => 46,  112 => 45,  109 => 42,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 31,  86 => 28,  82 => 28,  80 => 29,  73 => 16,  64 => 13,  60 => 23,  57 => 12,  54 => 13,  51 => 17,  48 => 9,  45 => 8,  42 => 7,  39 => 5,  36 => 5,  33 => 4,  30 => 3,);
    }
}

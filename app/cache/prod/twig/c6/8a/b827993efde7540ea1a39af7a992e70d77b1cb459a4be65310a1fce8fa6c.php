<?php

/* HzStoreBundle:Default:index.html.twig */
class __TwigTemplate_c68ab827993efde7540ea1a39af7a992e70d77b1cb459a4be65310a1fce8fa6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HzStoreBundle:Default:layout.html.twig");

        $this->blocks = array(
            'content_body' => array($this, 'block_content_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HzStoreBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_body($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        if ((isset($context["messages"]) ? $context["messages"] : null)) {
            // line 6
            echo "<div class=\"content-info-box\">
\t";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 8
                echo "\t\t
\t\t<div class=\"info-box\">
\t\t\t<h4 class=\"info-box-title\">User: ";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["msg"]) ? $context["msg"] : null), "authorName"), "html", null, true);
                echo " 
\t\t\t<a style=\"float:right;\" href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_message_remove", array("id" => $this->getAttribute((isset($context["msg"]) ? $context["msg"] : null), "id"))), "html", null, true);
                echo "\" /><i class=\"fa fa-trash-o\"></i></a>
\t\t\t</h4>
\t\t\t<div class=\"info-box-content\">
\t\t\t\t<p>";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["msg"]) ? $context["msg"] : null), "content"), "html", null, true);
                echo "</p>
\t\t\t</div>
\t\t\t<div class=\"info-box-content\" style=\"text-align:right;\">
\t\t\t\t<p>Date: ";
                // line 17
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["msg"]) ? $context["msg"] : null), "createDate"), "Y-m-d"), "html", null, true);
                echo "</p>
\t\t\t</div>
\t\t<div>
\t\t</div>
\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t</div>
";
        }
        // line 25
        echo "<p class=\"content-sub-title\">New Reminder</p>
<form action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("_message_add");
        echo "\" method=\"post\" >
<textarea name=\"msg\" style=\"width:99%; height:200px;\"></textarea>
<input type=\"submit\" value=\"Save\" class=\"buttons\">
</form>
";
    }

    public function getTemplateName()
    {
        return "HzStoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 33,  84 => 29,  76 => 27,  34 => 5,  170 => 74,  167 => 73,  150 => 34,  100 => 112,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 24,  111 => 37,  107 => 36,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 68,  143 => 30,  135 => 53,  131 => 52,  119 => 20,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 17,  59 => 37,  47 => 10,  38 => 6,  94 => 71,  89 => 20,  85 => 25,  79 => 25,  75 => 23,  68 => 25,  56 => 9,  50 => 15,  29 => 3,  87 => 25,  72 => 26,  55 => 15,  21 => 2,  26 => 6,  98 => 73,  93 => 28,  88 => 30,  78 => 21,  46 => 7,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 4,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 28,  136 => 56,  123 => 22,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  24 => 4,  32 => 4,  25 => 2,  22 => 1,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 69,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 26,  130 => 41,  125 => 44,  122 => 43,  116 => 19,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 68,  86 => 28,  82 => 26,  80 => 28,  73 => 19,  64 => 24,  60 => 13,  57 => 14,  54 => 10,  51 => 11,  48 => 13,  45 => 8,  42 => 10,  39 => 7,  36 => 6,  33 => 5,  30 => 4,);
    }
}

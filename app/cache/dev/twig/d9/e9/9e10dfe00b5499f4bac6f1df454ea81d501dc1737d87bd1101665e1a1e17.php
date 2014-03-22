<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_d9e99e10dfe00b5499f4bac6f1df454ea81d501dc1737d87bd1101665e1a1e17 extends Twig_Template
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
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priorityName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  26 => 3,  55 => 13,  31 => 5,  25 => 4,  21 => 2,  94 => 22,  89 => 20,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  41 => 9,  24 => 3,  201 => 92,  199 => 91,  187 => 84,  183 => 82,  173 => 74,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  151 => 63,  142 => 59,  138 => 57,  123 => 47,  117 => 44,  115 => 43,  105 => 40,  101 => 24,  86 => 28,  69 => 25,  62 => 23,  51 => 12,  49 => 19,  39 => 6,  19 => 1,  98 => 40,  88 => 6,  80 => 19,  44 => 10,  36 => 7,  57 => 14,  40 => 8,  33 => 5,  30 => 3,  164 => 74,  161 => 73,  155 => 68,  152 => 67,  143 => 33,  136 => 56,  131 => 27,  126 => 25,  112 => 42,  93 => 9,  91 => 31,  85 => 19,  52 => 36,  50 => 8,  27 => 4,  22 => 2,  390 => 194,  385 => 192,  368 => 178,  364 => 177,  360 => 176,  354 => 173,  328 => 154,  320 => 149,  314 => 146,  308 => 142,  305 => 141,  296 => 138,  292 => 137,  286 => 134,  281 => 131,  276 => 130,  274 => 129,  265 => 123,  259 => 120,  237 => 103,  225 => 93,  212 => 91,  208 => 90,  202 => 86,  196 => 90,  188 => 79,  182 => 76,  174 => 70,  171 => 73,  165 => 68,  159 => 65,  156 => 66,  150 => 61,  147 => 60,  144 => 59,  140 => 58,  135 => 55,  133 => 55,  128 => 52,  121 => 46,  116 => 21,  109 => 18,  104 => 40,  92 => 21,  87 => 20,  78 => 40,  71 => 21,  66 => 15,  59 => 15,  54 => 21,  46 => 7,  43 => 8,  37 => 4,  32 => 12,  29 => 2,);
    }
}

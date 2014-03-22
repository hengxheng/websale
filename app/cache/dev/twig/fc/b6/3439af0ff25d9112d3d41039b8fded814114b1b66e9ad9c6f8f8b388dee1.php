<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_fcb63439af0ff25d9112d3d41039b8fded814114b1b66e9ad9c6f8f8b388dee1 extends Twig_Template
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
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function")) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class") . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type")) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function"));
            echo "(";
            echo $this->env->getExtension('code')->formatArgsAsText($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args"));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file");
            echo " line ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  38 => 13,  35 => 7,  26 => 5,  55 => 13,  31 => 5,  25 => 3,  21 => 2,  94 => 22,  89 => 20,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  187 => 84,  183 => 82,  173 => 74,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  151 => 63,  142 => 59,  138 => 57,  123 => 47,  117 => 44,  115 => 43,  105 => 40,  101 => 24,  86 => 28,  69 => 25,  62 => 23,  51 => 15,  49 => 19,  39 => 6,  19 => 1,  98 => 40,  88 => 6,  80 => 19,  44 => 10,  36 => 7,  57 => 16,  40 => 8,  33 => 6,  30 => 3,  164 => 74,  161 => 73,  155 => 68,  152 => 67,  143 => 33,  136 => 56,  131 => 27,  126 => 25,  112 => 42,  93 => 9,  91 => 31,  85 => 19,  52 => 36,  50 => 8,  27 => 4,  22 => 2,  390 => 194,  385 => 192,  368 => 178,  364 => 177,  360 => 176,  354 => 173,  328 => 154,  320 => 149,  314 => 146,  308 => 142,  305 => 141,  296 => 138,  292 => 137,  286 => 134,  281 => 131,  276 => 130,  274 => 129,  265 => 123,  259 => 120,  237 => 103,  225 => 93,  212 => 91,  208 => 90,  202 => 86,  196 => 90,  188 => 79,  182 => 76,  174 => 70,  171 => 73,  165 => 68,  159 => 65,  156 => 66,  150 => 61,  147 => 60,  144 => 59,  140 => 58,  135 => 55,  133 => 55,  128 => 52,  121 => 46,  116 => 21,  109 => 18,  104 => 40,  92 => 21,  87 => 20,  78 => 40,  71 => 21,  66 => 15,  59 => 15,  54 => 21,  46 => 7,  43 => 8,  37 => 4,  32 => 12,  29 => 4,);
    }
}

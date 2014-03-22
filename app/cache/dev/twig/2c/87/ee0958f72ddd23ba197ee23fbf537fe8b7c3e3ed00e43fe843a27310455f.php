<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2c87ee0958f72ddd23ba197ee23fbf537fe8b7c3e3ed00e43fe843a27310455f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  40 => 7,  33 => 4,  30 => 3,  164 => 74,  161 => 73,  155 => 68,  152 => 67,  143 => 33,  136 => 29,  131 => 27,  126 => 25,  112 => 19,  93 => 112,  91 => 73,  85 => 67,  52 => 36,  50 => 18,  27 => 4,  22 => 1,  390 => 194,  385 => 192,  368 => 178,  364 => 177,  360 => 176,  354 => 173,  328 => 154,  320 => 149,  314 => 146,  308 => 142,  305 => 141,  296 => 138,  292 => 137,  286 => 134,  281 => 131,  276 => 130,  274 => 129,  265 => 123,  259 => 120,  237 => 103,  225 => 93,  212 => 91,  208 => 90,  202 => 86,  196 => 82,  188 => 79,  182 => 76,  174 => 70,  171 => 69,  165 => 68,  159 => 65,  156 => 64,  150 => 61,  147 => 60,  144 => 59,  140 => 58,  135 => 55,  133 => 54,  128 => 52,  121 => 23,  116 => 21,  109 => 18,  104 => 40,  92 => 31,  87 => 71,  78 => 25,  71 => 21,  66 => 19,  59 => 15,  54 => 11,  46 => 7,  43 => 8,  37 => 4,  32 => 6,  29 => 2,);
    }
}

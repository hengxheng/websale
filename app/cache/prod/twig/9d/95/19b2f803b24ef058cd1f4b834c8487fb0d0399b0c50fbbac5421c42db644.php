<?php

/* HzStoreBundle:Technician:list.html.twig */
class __TwigTemplate_9d9519b2f803b24ef058cd1f4b834c8487fb0d0399b0c50fbbac5421c42db644 extends Twig_Template
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
        echo "   <h3 class=\"content-sub-title\">";
        echo twig_escape_filter($this->env, (isset($context["list_name"]) ? $context["list_name"] : null), "html", null, true);
        echo "
\t<a class=\"buttons\" style=\"float:right; width: 153px; margin-bottom: 20px;\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("_technician_add");
        echo "\">New technician</a>
   </h3>

\t<table class=\"content-table\">
\t\t<tr>
\t\t\t<th>First Name</th>
\t\t\t<th>Last Name</th>
\t\t\t<th>Email</th>
\t\t\t<th>Phone</th>
\t\t\t<th>Suburb</th>
\t\t\t<th>Action</th>
\t\t</tr>
\t\t";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["technicians"]) ? $context["technicians"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["technician"]) {
            // line 18
            echo "\t\t<tr>
\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["technician"]) ? $context["technician"] : null), "firstname"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["technician"]) ? $context["technician"] : null), "lastname"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["technician"]) ? $context["technician"] : null), "email"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["technician"]) ? $context["technician"] : null), "phone"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["technician"]) ? $context["technician"] : null), "suburb"), "html", null, true);
            echo "</td>
\t\t\t<td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_technician_view", array("tech_id" => $this->getAttribute((isset($context["technician"]) ? $context["technician"] : null), "id"))), "html", null, true);
            echo "\">View</a></td>
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['technician'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t</table>

";
    }

    public function getTemplateName()
    {
        return "HzStoreBundle:Technician:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 23,  70 => 22,  58 => 19,  53 => 13,  23 => 10,  97 => 33,  84 => 29,  76 => 27,  34 => 4,  170 => 74,  167 => 73,  150 => 34,  100 => 112,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 24,  111 => 37,  107 => 36,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 68,  143 => 30,  135 => 53,  131 => 52,  119 => 20,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 17,  59 => 13,  47 => 7,  38 => 4,  94 => 71,  89 => 20,  85 => 25,  79 => 25,  75 => 23,  68 => 25,  56 => 9,  50 => 12,  29 => 3,  87 => 27,  72 => 26,  55 => 18,  21 => 1,  26 => 2,  98 => 73,  93 => 28,  88 => 30,  78 => 24,  46 => 7,  27 => 4,  40 => 8,  44 => 10,  35 => 3,  31 => 4,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 28,  136 => 56,  123 => 22,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 25,  66 => 21,  62 => 20,  49 => 19,  24 => 4,  32 => 4,  25 => 2,  22 => 1,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 69,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 26,  130 => 41,  125 => 44,  122 => 43,  116 => 19,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 68,  86 => 28,  82 => 26,  80 => 28,  73 => 19,  64 => 24,  60 => 13,  57 => 12,  54 => 11,  51 => 17,  48 => 13,  45 => 9,  42 => 9,  39 => 8,  36 => 5,  33 => 2,  30 => 1,);
    }
}

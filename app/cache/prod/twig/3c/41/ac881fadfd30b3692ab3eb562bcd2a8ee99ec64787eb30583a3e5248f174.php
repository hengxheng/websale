<?php

/* HzStoreBundle:Technician:view.html.twig */
class __TwigTemplate_3c41ac881fadfd30b3692ab3eb562bcd2a8ee99ec64787eb30583a3e5248f174 extends Twig_Template
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
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "HzStoreBundle:Form:fields.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"form_box\">
  ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
        echo "
</div>


";
        // line 10
        if ((isset($context["working"]) ? $context["working"] : null)) {
            // line 11
            echo "<h3 class=\"content-sub-title\">Workiing Tickets</h3>
<table class=\"content-table\">
\t<tr>
\t\t<th>Customer</th>
\t\t<th>Model</th>
\t\t<th>Create Date</th>
\t\t<th>Due Date</th>
\t\t<th>Status</th>
\t</tr>
\t";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["working"]) ? $context["working"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
                // line 21
                echo "\t<tr>
\t\t<td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "firstname"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "lastname"), "html", null, true);
                echo "</td>
\t\t<td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "model"), "html", null, true);
                echo "</td>
\t\t<td>";
                // line 24
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "createDate"), "M/d/Y"), "html", null, true);
                echo "</td>
\t\t<td>";
                // line 25
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "dueDate"), "M/d/Y"), "html", null, true);
                echo "</td>
\t\t<td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status"), "html", null, true);
                echo "</td>\t
\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "</table>
";
        } else {
            // line 31
            echo "<div class=\"content-info-box\">
\t<div class=\"info-box\">
\t\t<h4 class=\"info-box-title\">Working Tickets</h4>
\t\t<div class=\"info-box-content\">
\t\t\t<p>No working with any ticket</p>
\t\t</div>
\t</div>
</div>
";
        }
        // line 40
        echo "



";
        // line 44
        if ((isset($context["history"]) ? $context["history"] : null)) {
            // line 45
            echo "<h3 class=\"content-sub-title\">History Tickets</h3>
<table class=\"content-table\">
\t<tr>
\t\t<th>Customer</th>
\t\t<th>Model</th>
\t\t<th>Create Date</th>
\t\t<th>Due Date</th>
\t\t<th>Status</th>
\t</tr>
\t";
            // line 54
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["history"]) ? $context["history"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
                // line 55
                echo "\t<tr>
\t\t<td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "firstname"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "lastname"), "html", null, true);
                echo "</td>
\t\t<td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "model"), "html", null, true);
                echo "</td>
\t\t<td>";
                // line 58
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "createDate"), "M/d/Y"), "html", null, true);
                echo "</td>
\t\t<td>";
                // line 59
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "dueDate"), "M/d/Y"), "html", null, true);
                echo "</td>
\t\t<td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status"), "html", null, true);
                echo "</td>\t
\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "</table>
";
        } else {
            // line 65
            echo "<div class=\"content-info-box\">
\t<div class=\"info-box\">
\t\t<h4 class=\"info-box-title\">History Tickets</h4>
\t\t<div class=\"info-box-content\">
\t\t\t<p>No any history ticket</p>
\t\t</div>
\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "HzStoreBundle:Technician:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 59,  137 => 57,  124 => 54,  113 => 45,  90 => 29,  81 => 26,  77 => 25,  74 => 23,  70 => 22,  58 => 19,  53 => 13,  23 => 10,  97 => 33,  84 => 29,  76 => 27,  34 => 4,  170 => 74,  167 => 73,  150 => 34,  100 => 112,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 55,  111 => 44,  107 => 36,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 68,  143 => 30,  135 => 53,  131 => 56,  119 => 20,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 22,  59 => 13,  47 => 7,  38 => 4,  94 => 31,  89 => 20,  85 => 25,  79 => 25,  75 => 23,  68 => 25,  56 => 20,  50 => 12,  29 => 3,  87 => 27,  72 => 26,  55 => 18,  21 => 1,  26 => 2,  98 => 73,  93 => 28,  88 => 30,  78 => 24,  46 => 7,  27 => 4,  40 => 8,  44 => 10,  35 => 3,  31 => 4,  43 => 10,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 63,  156 => 66,  151 => 63,  142 => 59,  138 => 28,  136 => 56,  123 => 22,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 23,  66 => 21,  62 => 20,  49 => 19,  24 => 4,  32 => 4,  25 => 2,  22 => 1,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 65,  154 => 58,  149 => 60,  147 => 58,  144 => 49,  141 => 58,  133 => 26,  130 => 41,  125 => 44,  122 => 43,  116 => 19,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 68,  86 => 28,  82 => 26,  80 => 28,  73 => 24,  64 => 24,  60 => 21,  57 => 12,  54 => 11,  51 => 17,  48 => 13,  45 => 11,  42 => 9,  39 => 8,  36 => 6,  33 => 5,  30 => 4,);
    }
}

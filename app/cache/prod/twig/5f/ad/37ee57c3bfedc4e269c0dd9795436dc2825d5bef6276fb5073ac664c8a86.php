<?php

/* HzStoreBundle:Ticket:create.html.twig */
class __TwigTemplate_5fad37ee57c3bfedc4e269c0dd9795436dc2825d5bef6276fb5073ac664c8a86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HzStoreBundle:Default:layout.html.twig");

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
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

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        // line 3
        echo "\t<h2 class=\"content-title\">Ticket: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "code"), "html", null, true);
        echo "</h2>
";
    }

    // line 5
    public function block_content_body($context, array $blocks = array())
    {
        // line 6
        echo "\t<table class=\"content-table\">
\t\t<tr>
\t\t\t<th colspan=\"4\">Customer Information</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>First Name</td>
\t\t\t<td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "firstname"), "html", null, true);
        echo "</td>
\t\t\t<td>Last Name</td>
\t\t\t<td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "lastname"), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Email</td>
\t\t\t<td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "email"), "html", null, true);
        echo "</td>
\t\t\t<td>Phone</td>
\t\t\t<td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "phone"), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td >Address</td>
\t\t\t<td colspan=\"3\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "address1"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "address2"), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Suburb</td>
\t\t\t<td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "suburb"), "html", null, true);
        echo "</td>
\t\t\t<td>Postcode</td>
\t\t\t<td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "postcode"), "html", null, true);
        echo "</td>
\t\t</tr>

\t\t<tr>
\t\t\t<th colspan=\"4\">Repair Machine</th>
\t\t</tr>
\t
\t\t<tr>
\t\t\t<td>Serial No.</td>
\t\t\t<td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machine"]) ? $context["machine"] : null), "serial"), "html", null, true);
        echo "</td>
\t\t\t<td>Brand</td>
\t\t\t<td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machine"]) ? $context["machine"] : null), "brand"), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Model</td>
\t\t\t<td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machine"]) ? $context["machine"] : null), "model"), "html", null, true);
        echo "</td>
\t\t\t<td>Password</td>
\t\t\t<td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machine"]) ? $context["machine"] : null), "password"), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t";
        // line 49
        if ((isset($context["accessories"]) ? $context["accessories"] : null)) {
            // line 50
            echo "\t\t<tr>
\t\t\t<th colspan=\"4\">Accessory</th>
\t\t</tr>
\t\t\t";
            // line 53
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["accessories"]) ? $context["accessories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ac"]) {
                // line 54
                echo "\t\t\t  ";
                if (($this->getAttribute((isset($context["ac"]) ? $context["ac"] : null), "type") == "other")) {
                    // line 55
                    echo "\t\t\t  \t<tr>
\t\t\t  \t\t<td colspan=\"4\">";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ac"]) ? $context["ac"] : null), "comments"), "html", null, true);
                    echo "</td>
\t\t\t  \t</tr>
\t\t\t  ";
                } else {
                    // line 59
                    echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"4\">";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ac"]) ? $context["ac"] : null), "type"), "html", null, true);
                    echo "</td>
\t\t\t\t</tr>
\t\t\t  ";
                }
                // line 63
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ac'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "\t\t";
        }
        // line 65
        echo "\t</table>
\t
\t<div class=\"content-info-box\">
\t\t<div class=\"info-box\">
\t\t\t<h4 class=\"info-box-title\">Description:</h4>
\t\t\t<div class=\"info-box-content\">
\t\t\t\t<p>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machine"]) ? $context["machine"] : null), "comments"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t</div>
\t\t\t<p>Price: \$";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "price"), "html", null, true);
        echo "</p>
\t<p>Date: ";
        // line 75
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "CreateDate"), "Y-m-d"), "html", null, true);
        echo "</p>
\t<p>Due Date: ";
        // line 76
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "DueDate"), "Y-m-d"), "html", null, true);
        echo "</p>
\t</div>


";
    }

    public function getTemplateName()
    {
        return "HzStoreBundle:Ticket:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 76,  181 => 75,  160 => 64,  148 => 60,  139 => 56,  129 => 53,  83 => 28,  145 => 59,  137 => 57,  124 => 50,  113 => 45,  90 => 29,  81 => 26,  77 => 25,  74 => 24,  70 => 22,  58 => 19,  53 => 13,  23 => 10,  97 => 33,  84 => 29,  76 => 27,  34 => 4,  170 => 74,  167 => 73,  150 => 34,  100 => 39,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 74,  169 => 60,  140 => 55,  132 => 51,  128 => 55,  111 => 44,  107 => 36,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 68,  143 => 30,  135 => 53,  131 => 56,  119 => 20,  108 => 36,  102 => 32,  71 => 19,  67 => 20,  63 => 22,  59 => 13,  47 => 7,  38 => 4,  94 => 31,  89 => 20,  85 => 25,  79 => 25,  75 => 23,  68 => 25,  56 => 20,  50 => 12,  29 => 2,  87 => 27,  72 => 26,  55 => 14,  21 => 1,  26 => 2,  98 => 73,  93 => 28,  88 => 30,  78 => 24,  46 => 7,  27 => 4,  40 => 8,  44 => 10,  35 => 3,  31 => 4,  43 => 10,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 71,  166 => 71,  163 => 65,  158 => 63,  156 => 66,  151 => 63,  142 => 59,  138 => 28,  136 => 55,  123 => 22,  121 => 46,  117 => 47,  115 => 43,  105 => 41,  101 => 32,  91 => 27,  69 => 23,  66 => 21,  62 => 18,  49 => 19,  24 => 4,  32 => 3,  25 => 2,  22 => 1,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 65,  154 => 63,  149 => 60,  147 => 58,  144 => 49,  141 => 58,  133 => 54,  130 => 41,  125 => 44,  122 => 49,  116 => 19,  112 => 45,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 68,  86 => 28,  82 => 26,  80 => 28,  73 => 24,  64 => 24,  60 => 21,  57 => 12,  54 => 11,  51 => 17,  48 => 13,  45 => 11,  42 => 6,  39 => 5,  36 => 6,  33 => 5,  30 => 4,);
    }
}

<?php

/* HzStoreBundle:Ticket:list.html.twig */
class __TwigTemplate_2ddb8d77a994b0c948e0bf46d2f64a2aa90dc65af2879cf8020847d9a968959f extends Twig_Template
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
        echo "<div class=\"search-box\">
\t<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("_ticket_search");
        echo "\" method=\"post\">
\t<input type=\"text\" name=\"term\" /a>
\t<input type=\"submit\" name=\"submit\" value=\"search\" />
\t</form>
</div>
    <h3 class=\"content-sub-title\">New Tickets</h3>
\t<table class=\"content-table\">
\t\t<tr>
\t\t\t<th>Customer</th>
\t\t\t<th>Model</th>
\t\t\t<th>Due Date</th>
\t\t\t<th>Status</th>
\t\t\t<th>Assign To</th>
\t\t\t<th>Priority</th>
\t\t\t<th>&nbsp;</th>
\t\t</tr>
\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["new_tickets"]) ? $context["new_tickets"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 22
            echo "\t\t<tr>
\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "lastname"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "model"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "dueDate"), "M/d/Y"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status"), "html", null, true);
            echo "</td>
\t\t\t<td><a class=\"orange_buttons assign_tech\">Assign To</a>
\t\t\t\t<div class=\"tech-list\" style=\"display:none;\">
\t\t\t\t\t<ul>
\t\t\t\t\t";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["technicians"]) ? $context["technicians"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tech"]) {
                // line 31
                echo "\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_assign_ticket", array("ticket_id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "tech_id" => $this->getAttribute((isset($context["tech"]) ? $context["tech"] : null), "id"))), "html", null, true);
                echo "\"><i class=\"fa fa-wrench\"></i>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tech"]) ? $context["tech"] : null), "firstname"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tech"]) ? $context["tech"] : null), "lastname"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tech'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t\t\t\t</ul>\t\t
\t\t\t\t</div>
\t\t\t</td>
\t\t\t<td
\t\t\t";
            // line 37
            if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "left") <= 0)) {
                echo "\t\t\t\t\t\t
\t\t\t\tclass=\"pass\"
\t\t\t";
            } elseif ((($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "left") <= 2) && ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "left") > 0))) {
                // line 40
                echo "\t\t\t\tclass=\"high\"
\t\t\t";
            } elseif ((($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "left") <= 7) && ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "left") > 2))) {
                // line 42
                echo "\t\t\t\tclass=\"middle\"
\t\t\t";
            } else {
                // line 44
                echo "\t\t\t\tclass=\"low\"
\t\t\t";
            }
            // line 46
            echo "\t\t\t>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "left"), "html", null, true);
            echo " days left</td>
\t\t\t<td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ticket_view", array("code" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "code"))), "html", null, true);
            echo "\">View</a></td>
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t</table>
\t<h3 class=\"content-sub-title\">Other Tickets</h3>

\t<table class=\"content-table\">
\t\t<tr>
\t\t\t<th>Customer</th>
\t\t\t<th>Model</th>
\t\t\t<th>Due Date</th>
\t\t\t<th>Status</th>
\t\t\t<th>Technician</th>
\t\t\t<th>Priority</th>
\t\t\t<th>&nbsp;</th>
\t\t</tr>
\t\t";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) ? $context["tickets"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 64
            echo "\t\t<tr>
\t\t\t<td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "lastname"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "model"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "dueDate"), "M/d/Y"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "t_firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "t_lastname"), "html", null, true);
            echo "</td>
\t\t\t<td 
\t\t\t";
            // line 71
            if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "left") <= 0)) {
                echo "\t\t\t\t\t\t
\t\t\t\tclass=\"pass\"
\t\t\t";
            } elseif ((($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "left") <= 2) && ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "left") > 0))) {
                // line 74
                echo "\t\t\t\tclass=\"high\"
\t\t\t";
            } elseif ((($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "left") <= 7) && ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "left") > 2))) {
                // line 76
                echo "\t\t\t\tclass=\"middle\"
\t\t\t";
            } else {
                // line 78
                echo "\t\t\t\tclass=\"low\"
\t\t\t";
            }
            // line 80
            echo "\t\t\t>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "left"), "html", null, true);
            echo " days left</td>
\t\t\t<td><a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ticket_view", array("code" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "code"))), "html", null, true);
            echo "\">View</a></td>
\t
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "\t</table>

\t

\t<script>
\t// function assignTo(url){
\t// \t\$(\".popup-bg\").show();
\t// \t\$(\".popup-box\").show();
\t// \t\t\$.ajax({
\t// \t\t\turl: url,
\t// \t\t\tsuccess:function(result){
\t// \t\t\t\t\$(\".popup-box\").html(result);
\t// \t\t\t}});
\t// }
\t</script>
";
    }

    public function getTemplateName()
    {
        return "HzStoreBundle:Ticket:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 85,  206 => 81,  197 => 78,  172 => 68,  155 => 64,  127 => 47,  118 => 44,  114 => 42,  110 => 40,  104 => 37,  185 => 76,  181 => 75,  160 => 64,  148 => 60,  139 => 56,  129 => 53,  83 => 28,  145 => 59,  137 => 57,  124 => 50,  113 => 45,  90 => 29,  81 => 30,  77 => 25,  74 => 26,  70 => 25,  58 => 19,  53 => 21,  23 => 10,  97 => 33,  84 => 29,  76 => 27,  34 => 5,  170 => 74,  167 => 73,  150 => 34,  100 => 39,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 74,  169 => 60,  140 => 55,  132 => 51,  128 => 55,  111 => 44,  107 => 36,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 68,  143 => 30,  135 => 53,  131 => 56,  119 => 20,  108 => 36,  102 => 32,  71 => 19,  67 => 20,  63 => 22,  59 => 13,  47 => 7,  38 => 4,  94 => 31,  89 => 20,  85 => 31,  79 => 25,  75 => 23,  68 => 25,  56 => 20,  50 => 12,  29 => 2,  87 => 27,  72 => 26,  55 => 14,  21 => 1,  26 => 2,  98 => 33,  93 => 28,  88 => 30,  78 => 24,  46 => 7,  27 => 4,  40 => 8,  44 => 10,  35 => 3,  31 => 4,  43 => 10,  41 => 7,  28 => 3,  201 => 80,  196 => 90,  183 => 71,  171 => 71,  166 => 71,  163 => 65,  158 => 65,  156 => 66,  151 => 63,  142 => 59,  138 => 28,  136 => 50,  123 => 22,  121 => 46,  117 => 47,  115 => 43,  105 => 41,  101 => 32,  91 => 27,  69 => 23,  66 => 24,  62 => 18,  49 => 19,  24 => 4,  32 => 3,  25 => 2,  22 => 1,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 76,  189 => 74,  187 => 84,  182 => 66,  176 => 69,  173 => 65,  168 => 67,  164 => 66,  162 => 65,  154 => 63,  149 => 60,  147 => 58,  144 => 49,  141 => 58,  133 => 54,  130 => 41,  125 => 44,  122 => 46,  116 => 19,  112 => 45,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 68,  86 => 28,  82 => 26,  80 => 28,  73 => 24,  64 => 24,  60 => 23,  57 => 22,  54 => 11,  51 => 17,  48 => 13,  45 => 11,  42 => 6,  39 => 5,  36 => 6,  33 => 5,  30 => 4,);
    }
}

<?php

/* HzStoreBundle:Ticket:view.html.twig */
class __TwigTemplate_152de8a5bb17a44c354f0b4d4d4f25457322656b43348d92f8a823e26f593080 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "code"), "html", null, true);
        echo "</h2>
\t<a class=\"content-header-button buttons\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ticket_edit", array("code" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "code"))), "html", null, true);
        echo "\">Edit</a>
";
    }

    // line 6
    public function block_content_body($context, array $blocks = array())
    {
        // line 7
        echo "\t<table class=\"content-table\">
\t\t<tr>
\t\t\t<th colspan=\"4\">Customer Information <a id=\"emailto\" href=\"#\" class=\"orange_buttons small-btn\" style=\"float:right;\">Email</a></th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>First Name</td>
\t\t\t<td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "firstname"), "html", null, true);
        echo "</td>
\t\t\t<td>Last Name</td>
\t\t\t<td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "lastname"), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Email</td>
\t\t\t<td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "email"), "html", null, true);
        echo "</td>
\t\t\t<td>Phone</td>
\t\t\t<td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "phone"), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Address</td>
\t\t\t<td colspan=\"3\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "address1"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "address2"), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Suburb</td>
\t\t\t<td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "suburb"), "html", null, true);
        echo "</td>
\t\t\t<td>Postcode</td>
\t\t\t<td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "postcode"), "html", null, true);
        echo "</td>
\t\t</tr>

\t\t<tr>
\t\t\t<th colspan=\"4\">Repair Machine</th>
\t\t</tr>
\t
\t\t<tr>
\t\t\t<td>Serial No.</td>
\t\t\t<td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "serial"), "html", null, true);
        echo "</td>
\t\t\t<td>Brand</td>
\t\t\t<td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "brand"), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Model</td>
\t\t\t<td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model"), "html", null, true);
        echo "</td>
\t\t\t<td>Password</td>
\t\t\t<td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "password"), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Reference NO.</td>
\t\t\t<td>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "reference"), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t<td colspan=\"4\">
\t\t\t<img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/machine/"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "imgUrl"), "html", null, true);
        echo "\"/>
\t\t</td>
\t\t</tr>
\t\t";
        // line 59
        if ((isset($context["accessories"]) ? $context["accessories"] : null)) {
            // line 60
            echo "\t\t<tr>
\t\t\t<th colspan=\"4\">Accessory</th>
\t\t</tr>
\t\t\t";
            // line 63
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["accessories"]) ? $context["accessories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ac"]) {
                // line 64
                echo "\t\t\t  ";
                if (($this->getAttribute((isset($context["ac"]) ? $context["ac"] : null), "type") == "other")) {
                    // line 65
                    echo "\t\t\t  \t<tr>
\t\t\t  \t\t<td colspan=\"4\">";
                    // line 66
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ac"]) ? $context["ac"] : null), "comments"), "html", null, true);
                    echo "</td>
\t\t\t  \t</tr>
\t\t\t  ";
                } else {
                    // line 69
                    echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"4\">";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ac"]) ? $context["ac"] : null), "type"), "html", null, true);
                    echo "</td>
\t\t\t\t</tr>
\t\t\t  ";
                }
                // line 73
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ac'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "\t\t";
        }
        // line 75
        echo "\t\t</table>
\t\t<br/>
\t\t<table class=\"content-table\">
\t\t<tr>
\t\t\t<th colspan=\"4\">Technician</th>
\t\t</tr>
\t\t";
        // line 81
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "t_firstname") || $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "t_lastname"))) {
            echo "\t
\t\t<tr>
\t\t\t<td colspan=\"2\">Name</td>
\t\t\t<td colspan=\"2\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "t_firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "t_lastname"), "html", null, true);
            echo "</td>
\t\t</tr>
\t\t";
        } else {
            // line 87
            echo "\t\t<tr>
\t\t\t<td colspan=\"4\">No technician working on this ticket</td>\t\t\t
\t\t</tr>
\t\t";
        }
        // line 91
        echo "\t\t<tr>
\t\t\t<td colspan=\"4\"><a class=\"orange_buttons assign_tech\">Assign To</a>
\t\t\t\t<div class=\"tech-list\" style=\"display:none;\">
\t\t\t\t\t<ul>
\t\t\t\t\t";
        // line 95
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["technicians"]) ? $context["technicians"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tech"]) {
            // line 96
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_assign", array("ticket_id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id"), "tech_id" => $this->getAttribute((isset($context["tech"]) ? $context["tech"] : null), "id"))), "html", null, true);
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
        // line 98
        echo "\t\t\t\t\t</ul>\t\t
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th colspan=\"4\">Ticket Status</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td  colspan=\"4\">
\t\t\t<select id=\"status\" name=\"status\">
\t\t\t\t<option value=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "status"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "status"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"Pending\">Pending</option>
\t\t\t\t<option value=\"Checked\">Checked</option>
\t\t\t\t<option value=\"Quoted\">Quoted</option>
\t\t\t\t<option value=\"Confirmed\">Confirmed</option>
\t\t\t\t<option value=\"Processing\">Processing</option>
\t\t\t\t<option value=\"Waiting\">Waiting</option>
\t\t\t\t<option value=\"Completed\">Completed</option>
\t\t\t\t<option value=\"Pickuped\">Pick-uped</option>
\t\t\t</select>
\t\t\t</td>
\t\t</tr>
\t</table>
\t<div class=\"content-info-box\">
\t\t<div class=\"info-box\">
\t\t\t<h4 class=\"info-box-title\">Description:</h4>
\t\t\t<div class=\"info-box-content\">
\t\t\t\t<p>";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "comments"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t</div>
\t\t\t<p>Price: \$";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "price"), "html", null, true);
        echo "</p>
\t\t\t<p>Due Date: ";
        // line 129
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "dueDate"), "Y-M-d"), "html", null, true);
        echo "</p>
\t</div>
\t<div class=\"comments\">
\t\t<div class=\"comments-title\">
\t\t\t<h2>Comments</h2>
\t\t</div>
\t\t\t";
        // line 135
        if ((isset($context["comments"]) ? $context["comments"] : null)) {
            // line 136
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 137
                echo "\t\t\t\t\t<div class=\"content-info-box\">
\t\t\t\t\t\t<div class=\"info-box\">
\t\t\t\t\t\t\t<div class=\"info-box-content comment-content\">
\t\t\t\t\t\t\t\t<p>";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "content"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>";
                // line 143
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "username"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t<p>";
                // line 144
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "createDate"), "m-d-Y H:i:s"), "html", null, true);
                echo " </p>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "\t\t\t";
        }
        // line 148
        echo "\t\t</div>
\t</div>

\t<div class=\"new_comments\">
\t<form action=\"";
        // line 152
        echo $this->env->getExtension('routing')->getPath("_comment_post");
        echo "\" method=\"post\">
\t\t<textarea name=\"content\" style=\"width:100%; height:100px;\"></textarea>
\t\t<input type=\"submit\" name=\"post\" value=\"post\"/>
\t\t<input type=\"hidden\" name=\"ticket_id\" value=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id"), "html", null, true);
        echo "\" />
\t</form>
\t</div>

\t<div class=\"popup-box email\">
\t<h3>Email to ";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "firstname"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "lastname"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "email"), "html", null, true);
        echo ")</h3>

\t\t<textarea id=\"msg\" name=\"msg\"></textarea>
\t\t<button id=\"email_send\" class=\"buttons right\" >Send</button>
\t\t<button id=\"email_cancel\" class=\"buttons right\" >Cancel</button>
\t</div>
\t<script>
\$(function(){
\t\$(\"#emailto\").click(function(e){
\t\te.preventDefault();
\t\t\$(\".email\").show();
\t});

\t\$(\"#email_cancel\").click(function(){
\t\t\$(\".email\").hide();
\t});

\t\$(\"#email_send\").click(function(){
\t\t\$.ajax({
\t\t\turl: \"";
        // line 179
        echo $this->env->getExtension('routing')->getPath("_email_customer");
        echo "\",
\t\t\ttype: \"POST\",
\t\t\tdata: {
\t\t\t\t\"c_name\": \"";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "lastname"), "html", null, true);
        echo "\",
\t\t\t\t\"c_email\": \"";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "email"), "html", null, true);
        echo "\",
\t\t\t\t\"ticket\": \"";
        // line 184
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "code"), "html", null, true);
        echo "\",
\t\t\t\t\"msg\" : \$(\"#msg\").val()
\t\t\t},
\t\t\tsuccess:function(results){
\t\t\t\tconsole.log(results);
\t\t\t}
\t\t});
\t\t\$(\".email\").hide();
\t});


\t\$(\"#status\").on(\"change\",function(){
\t\tvar status = \$(this).val();
\t\t\$.ajax({
\t\t\turl: \"";
        // line 198
        echo $this->env->getExtension('routing')->getPath("_ticket_status");
        echo "\",
\t\t\ttype: \"POST\",
\t\t\tdata: {id : ";
        // line 200
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id"), "html", null, true);
        echo " , status: status },
\t\t\tsuccess:function(result){
\t\t\t\tconsole.log(result);
\t\t\t}});\t\t
\t});
});
</script>
";
    }

    public function getTemplateName()
    {
        return "HzStoreBundle:Ticket:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 200,  399 => 198,  382 => 184,  378 => 183,  342 => 160,  334 => 155,  328 => 152,  319 => 147,  310 => 144,  306 => 143,  300 => 140,  295 => 137,  290 => 136,  288 => 135,  279 => 129,  275 => 128,  222 => 96,  218 => 95,  212 => 91,  198 => 84,  192 => 81,  184 => 75,  175 => 73,  157 => 65,  37 => 4,  216 => 85,  206 => 87,  197 => 78,  172 => 68,  155 => 64,  127 => 47,  118 => 44,  114 => 42,  110 => 40,  104 => 40,  185 => 76,  181 => 74,  160 => 66,  148 => 60,  139 => 56,  129 => 53,  83 => 28,  145 => 60,  137 => 57,  124 => 50,  113 => 45,  90 => 31,  81 => 30,  77 => 25,  74 => 26,  70 => 25,  58 => 19,  53 => 21,  23 => 10,  97 => 33,  84 => 30,  76 => 28,  34 => 5,  170 => 74,  167 => 73,  150 => 63,  100 => 35,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 182,  368 => 179,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 148,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 108,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 74,  169 => 70,  140 => 55,  132 => 51,  128 => 52,  111 => 44,  107 => 36,  61 => 19,  273 => 96,  269 => 125,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 98,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 68,  143 => 59,  135 => 56,  131 => 56,  119 => 20,  108 => 36,  102 => 32,  71 => 21,  67 => 20,  63 => 22,  59 => 15,  47 => 7,  38 => 4,  94 => 31,  89 => 20,  85 => 31,  79 => 25,  75 => 23,  68 => 26,  56 => 20,  50 => 12,  29 => 2,  87 => 29,  72 => 27,  55 => 23,  21 => 1,  26 => 2,  98 => 33,  93 => 28,  88 => 30,  78 => 25,  46 => 7,  27 => 4,  40 => 8,  44 => 10,  35 => 3,  31 => 4,  43 => 6,  41 => 7,  28 => 3,  201 => 80,  196 => 90,  183 => 71,  171 => 71,  166 => 69,  163 => 65,  158 => 65,  156 => 66,  151 => 63,  142 => 59,  138 => 28,  136 => 50,  123 => 22,  121 => 48,  117 => 47,  115 => 43,  105 => 41,  101 => 32,  91 => 27,  69 => 23,  66 => 19,  62 => 25,  49 => 19,  24 => 4,  32 => 3,  25 => 2,  22 => 1,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 76,  189 => 74,  187 => 84,  182 => 66,  176 => 69,  173 => 65,  168 => 67,  164 => 66,  162 => 65,  154 => 64,  149 => 60,  147 => 58,  144 => 49,  141 => 58,  133 => 54,  130 => 41,  125 => 44,  122 => 46,  116 => 46,  112 => 45,  109 => 42,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 31,  86 => 28,  82 => 26,  80 => 29,  73 => 24,  64 => 24,  60 => 23,  57 => 22,  54 => 13,  51 => 17,  48 => 13,  45 => 11,  42 => 6,  39 => 5,  36 => 6,  33 => 5,  30 => 4,);
    }
}

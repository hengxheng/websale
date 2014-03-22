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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "code"), "html", null, true);
        echo "</h2>
\t<a class=\"content-header-button buttons\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ticket_edit", array("code" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "code"))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "firstname"), "html", null, true);
        echo "</td>
\t\t\t<td>Last Name</td>
\t\t\t<td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "lastname"), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Email</td>
\t\t\t<td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "email"), "html", null, true);
        echo "</td>
\t\t\t<td>Phone</td>
\t\t\t<td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "phone"), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Address</td>
\t\t\t<td colspan=\"3\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "address1"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "address2"), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Suburb</td>
\t\t\t<td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "suburb"), "html", null, true);
        echo "</td>
\t\t\t<td>Postcode</td>
\t\t\t<td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "postcode"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "serial"), "html", null, true);
        echo "</td>
\t\t\t<td>Brand</td>
\t\t\t<td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "brand"), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Model</td>
\t\t\t<td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "model"), "html", null, true);
        echo "</td>
\t\t\t<td>Password</td>
\t\t\t<td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "password"), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Reference NO.</td>
\t\t\t<td>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "reference"), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t";
        // line 54
        if ((isset($context["accessories"]) ? $context["accessories"] : $this->getContext($context, "accessories"))) {
            // line 55
            echo "\t\t<tr>
\t\t\t<th colspan=\"4\">Accessory</th>
\t\t</tr>
\t\t\t";
            // line 58
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["accessories"]) ? $context["accessories"] : $this->getContext($context, "accessories")));
            foreach ($context['_seq'] as $context["_key"] => $context["ac"]) {
                // line 59
                echo "\t\t\t  ";
                if (($this->getAttribute((isset($context["ac"]) ? $context["ac"] : $this->getContext($context, "ac")), "type") == "other")) {
                    // line 60
                    echo "\t\t\t  \t<tr>
\t\t\t  \t\t<td colspan=\"4\">";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ac"]) ? $context["ac"] : $this->getContext($context, "ac")), "comments"), "html", null, true);
                    echo "</td>
\t\t\t  \t</tr>
\t\t\t  ";
                } else {
                    // line 64
                    echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"4\">";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ac"]) ? $context["ac"] : $this->getContext($context, "ac")), "type"), "html", null, true);
                    echo "</td>
\t\t\t\t</tr>
\t\t\t  ";
                }
                // line 68
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ac'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "\t\t";
        }
        // line 70
        echo "\t\t</table>
\t\t<br/>
\t\t<table class=\"content-table\">
\t\t<tr>
\t\t\t<th colspan=\"4\">Technician</th>
\t\t</tr>
\t\t";
        // line 76
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "t_firstname") || $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "t_lastname"))) {
            echo "\t
\t\t<tr>
\t\t\t<td colspan=\"2\">Name</td>
\t\t\t<td colspan=\"2\">";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "t_firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "t_lastname"), "html", null, true);
            echo "</td>
\t\t</tr>
\t\t";
        } else {
            // line 82
            echo "\t\t<tr>
\t\t\t<td colspan=\"4\">No technician working on this ticket</td>\t\t\t
\t\t</tr>
\t\t";
        }
        // line 86
        echo "\t\t<tr>
\t\t\t<td colspan=\"4\"><a class=\"orange_buttons assign_tech\">Assign To</a>
\t\t\t\t<div class=\"tech-list\" style=\"display:none;\">
\t\t\t\t\t<ul>
\t\t\t\t\t";
        // line 90
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["technicians"]) ? $context["technicians"] : $this->getContext($context, "technicians")));
        foreach ($context['_seq'] as $context["_key"] => $context["tech"]) {
            // line 91
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_assign", array("ticket_id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "tech_id" => $this->getAttribute((isset($context["tech"]) ? $context["tech"] : $this->getContext($context, "tech")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tech"]) ? $context["tech"] : $this->getContext($context, "tech")), "firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tech"]) ? $context["tech"] : $this->getContext($context, "tech")), "lastname"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tech'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
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
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "status"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "status"), "html", null, true);
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
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "comments"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t</div>
\t\t\t<p>Price: \$";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "price"), "html", null, true);
        echo "</p>
\t\t\t<p>Due Date: ";
        // line 124
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "dueDate"), "Y-M-d"), "html", null, true);
        echo "</p>
\t</div>
\t<div class=\"comments\">
\t\t<div class=\"comments-title\">
\t\t\t<h2>Comments</h2>
\t\t</div>
\t\t\t";
        // line 130
        if ((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments"))) {
            // line 131
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 132
                echo "\t\t\t\t\t<div class=\"content-info-box\">
\t\t\t\t\t\t<div class=\"info-box\">
\t\t\t\t\t\t\t<div class=\"info-box-content comment-content\">
\t\t\t\t\t\t\t\t<p>";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "content"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "username"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t<p>";
                // line 139
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "createDate"), "m-d-Y H:i:s"), "html", null, true);
                echo " </p>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "\t\t\t";
        }
        // line 143
        echo "\t\t</div>
\t</div>

\t<div class=\"new_comments\">
\t<form action=\"";
        // line 147
        echo $this->env->getExtension('routing')->getPath("_comment_post");
        echo "\" method=\"post\">
\t\t<textarea name=\"content\" style=\"width:100%; height:100px;\"></textarea>
\t\t<input type=\"submit\" name=\"post\" value=\"post\"/>
\t\t<input type=\"hidden\" name=\"ticket_id\" value=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
        echo "\" />
\t</form>
\t</div>

\t<div class=\"popup-box email\">
\t<h3>Email to ";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "firstname"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "lastname"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "email"), "html", null, true);
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
        // line 174
        echo $this->env->getExtension('routing')->getPath("_email_customer");
        echo "\",
\t\t\ttype: \"POST\",
\t\t\tdata: {
\t\t\t\t\"c_name\": \"";
        // line 177
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "lastname"), "html", null, true);
        echo "\",
\t\t\t\t\"c_email\": \"";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "email"), "html", null, true);
        echo "\",
\t\t\t\t\"ticket\": \"";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "code"), "html", null, true);
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
        // line 193
        echo $this->env->getExtension('routing')->getPath("_ticket_status");
        echo "\",
\t\t\ttype: \"POST\",
\t\t\tdata: {id : ";
        // line 195
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
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
        return array (  394 => 195,  389 => 193,  372 => 179,  368 => 178,  364 => 177,  358 => 174,  332 => 155,  324 => 150,  318 => 147,  312 => 143,  309 => 142,  300 => 139,  296 => 138,  290 => 135,  285 => 132,  280 => 131,  278 => 130,  269 => 124,  265 => 123,  259 => 120,  237 => 103,  225 => 93,  212 => 91,  208 => 90,  202 => 86,  196 => 82,  188 => 79,  182 => 76,  174 => 70,  171 => 69,  165 => 68,  159 => 65,  156 => 64,  150 => 61,  147 => 60,  144 => 59,  140 => 58,  135 => 55,  133 => 54,  128 => 52,  121 => 48,  116 => 46,  109 => 42,  104 => 40,  92 => 31,  87 => 29,  78 => 25,  71 => 21,  66 => 19,  59 => 15,  54 => 13,  46 => 7,  43 => 6,  37 => 4,  32 => 3,  29 => 2,);
    }
}

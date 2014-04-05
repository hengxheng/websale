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
\t\t\t<td>Company</td>
\t\t\t<td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "company"), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th colspan=\"4\">Repair Machine</th>
\t\t</tr>
\t
\t\t<tr>
\t\t\t<td>Serial No.</td>
\t\t\t<td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "serial"), "html", null, true);
        echo "</td>
\t\t\t<td>Brand</td>
\t\t\t<td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "brand"), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Model</td>
\t\t\t<td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "model"), "html", null, true);
        echo "</td>
\t\t\t<td>Password</td>
\t\t\t<td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "password"), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Reference NO.</td>
\t\t\t<td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "reference"), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t";
        // line 57
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "imgUrl")) {
            // line 58
            echo "\t\t<tr class=\"machine-img\">
\t\t<td colspan=\"4\">
\t\t\t<img src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/hzstore/images/machine/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "imgUrl"), "html", null, true);
            echo "\"/>
\t\t</td>
\t\t</tr>
\t\t";
        }
        // line 64
        echo "\t\t";
        if ((isset($context["accessories"]) ? $context["accessories"] : $this->getContext($context, "accessories"))) {
            // line 65
            echo "\t\t<tr>
\t\t\t<th colspan=\"4\">Accessory</th>
\t\t</tr>
\t\t\t";
            // line 68
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["accessories"]) ? $context["accessories"] : $this->getContext($context, "accessories")));
            foreach ($context['_seq'] as $context["_key"] => $context["ac"]) {
                // line 69
                echo "\t\t\t  ";
                if (($this->getAttribute((isset($context["ac"]) ? $context["ac"] : $this->getContext($context, "ac")), "type") == "other")) {
                    // line 70
                    echo "\t\t\t  \t<tr>
\t\t\t  \t\t<td colspan=\"4\">";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ac"]) ? $context["ac"] : $this->getContext($context, "ac")), "comments"), "html", null, true);
                    echo "</td>
\t\t\t  \t</tr>
\t\t\t  ";
                } else {
                    // line 74
                    echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"4\">";
                    // line 75
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ac"]) ? $context["ac"] : $this->getContext($context, "ac")), "type"), "html", null, true);
                    echo "</td>
\t\t\t\t</tr>
\t\t\t  ";
                }
                // line 78
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ac'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "\t\t";
        }
        // line 80
        echo "\t\t</table>
\t\t<br/>
\t\t<table class=\"content-table technician-table\">
\t\t<tr>
\t\t\t<th colspan=\"4\">Technician</th>
\t\t</tr>
\t\t";
        // line 86
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "t_firstname") || $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "t_lastname"))) {
            echo "\t
\t\t<tr>
\t\t\t<td colspan=\"2\">Name</td>
\t\t\t<td colspan=\"2\">";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "t_firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "t_lastname"), "html", null, true);
            echo "</td>
\t\t</tr>
\t\t";
        } else {
            // line 92
            echo "\t\t<tr>
\t\t\t<td colspan=\"4\">No technician working on this ticket</td>\t\t\t
\t\t</tr>
\t\t";
        }
        // line 96
        echo "\t\t<tr>
\t\t\t<td colspan=\"4\"><a class=\"orange_buttons assign_tech\">Assign To</a>
\t\t\t\t<div class=\"tech-list\" style=\"display:none;\">
\t\t\t\t\t<ul>
\t\t\t\t\t";
        // line 100
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["technicians"]) ? $context["technicians"] : $this->getContext($context, "technicians")));
        foreach ($context['_seq'] as $context["_key"] => $context["tech"]) {
            // line 101
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_assign", array("ticket_id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "tech_id" => $this->getAttribute((isset($context["tech"]) ? $context["tech"] : $this->getContext($context, "tech")), "id"))), "html", null, true);
            echo "\"><i class=\"fa fa-wrench\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tech"]) ? $context["tech"] : $this->getContext($context, "tech")), "firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tech"]) ? $context["tech"] : $this->getContext($context, "tech")), "lastname"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tech'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
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
        // line 113
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
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "comments"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t</div>
\t\t\t<p>Price: \$";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "price"), "html", null, true);
        echo "</p>
\t\t\t<p>Due Date: ";
        // line 134
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "dueDate"), "Y-M-d"), "html", null, true);
        echo "</p>
\t\t\t<p class=\"print-button\"><a href=\"#\" class=\"buttons\" onclick=\"event.preventDefault(); window.print();\">Print</a><p>
\t</div>
\t<div class=\"comments\">
\t\t<div class=\"comments-title\">
\t\t\t<h2>Comments</h2>
\t\t</div>
\t\t\t";
        // line 141
        if ((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments"))) {
            // line 142
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 143
                echo "\t\t\t\t\t<div class=\"content-info-box\">
\t\t\t\t\t\t<div class=\"info-box\">
\t\t\t\t\t\t\t<div class=\"info-box-content comment-content\">
\t\t\t\t\t\t\t\t<p>";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "content"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "username"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t<p>";
                // line 150
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "createDate"), "m-d-Y H:i:s"), "html", null, true);
                echo " </p>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "\t\t\t";
        }
        // line 154
        echo "\t\t</div>
\t</div>

\t<div class=\"new_comments\">
\t<form action=\"";
        // line 158
        echo $this->env->getExtension('routing')->getPath("_comment_post");
        echo "\" method=\"post\">
\t\t<textarea name=\"content\" style=\"width:100%; height:100px;\"></textarea>
\t\t<input type=\"submit\" name=\"post\" value=\"post\"/>
\t\t<input type=\"hidden\" name=\"ticket_id\" value=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
        echo "\" />
\t</form>
\t</div>

\t<div class=\"popup-box email\">
\t<h3>Email to ";
        // line 166
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
        // line 185
        echo $this->env->getExtension('routing')->getPath("_email_customer");
        echo "\",
\t\t\ttype: \"POST\",
\t\t\tdata: {
\t\t\t\t\"c_name\": \"";
        // line 188
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "lastname"), "html", null, true);
        echo "\",
\t\t\t\t\"c_email\": \"";
        // line 189
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "email"), "html", null, true);
        echo "\",
\t\t\t\t\"ticket\": \"";
        // line 190
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
        // line 204
        echo $this->env->getExtension('routing')->getPath("_ticket_status");
        echo "\",
\t\t\ttype: \"POST\",
\t\t\tdata: {id : ";
        // line 206
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
        return array (  416 => 206,  411 => 204,  394 => 190,  390 => 189,  386 => 188,  380 => 185,  354 => 166,  346 => 161,  340 => 158,  334 => 154,  331 => 153,  322 => 150,  318 => 149,  312 => 146,  307 => 143,  302 => 142,  300 => 141,  290 => 134,  286 => 133,  280 => 130,  258 => 113,  246 => 103,  233 => 101,  229 => 100,  223 => 96,  217 => 92,  209 => 89,  203 => 86,  195 => 80,  192 => 79,  186 => 78,  180 => 75,  177 => 74,  171 => 71,  168 => 70,  165 => 69,  161 => 68,  156 => 65,  153 => 64,  145 => 60,  141 => 58,  139 => 57,  134 => 55,  127 => 51,  122 => 49,  115 => 45,  110 => 43,  99 => 35,  92 => 31,  87 => 29,  78 => 25,  71 => 21,  66 => 19,  59 => 15,  54 => 13,  46 => 7,  43 => 6,  37 => 4,  32 => 3,  29 => 2,);
    }
}

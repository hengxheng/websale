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
        $context['_seq'] = twig_ensure_traversable((isset($context["new_tickets"]) ? $context["new_tickets"] : $this->getContext($context, "new_tickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 22
            echo "\t\t<tr>
\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "lastname"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "model"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "dueDate"), "M/d/Y"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status"), "html", null, true);
            echo "</td>
\t\t\t<td><a class=\"orange_buttons assign_tech\">Assign To</a>
\t\t\t\t<div class=\"tech-list\" style=\"display:none;\">
\t\t\t\t\t<ul>
\t\t\t\t\t";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["technicians"]) ? $context["technicians"] : $this->getContext($context, "technicians")));
            foreach ($context['_seq'] as $context["_key"] => $context["tech"]) {
                // line 31
                echo "\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_assign_ticket", array("ticket_id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id"), "tech_id" => $this->getAttribute((isset($context["tech"]) ? $context["tech"] : $this->getContext($context, "tech")), "id"))), "html", null, true);
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
            // line 33
            echo "\t\t\t\t\t</ul>\t\t
\t\t\t\t</div>
\t\t\t</td>
\t\t\t<td
\t\t\t";
            // line 37
            if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "left") <= 0)) {
                echo "\t\t\t\t\t\t
\t\t\t\tclass=\"pass\"
\t\t\t";
            } elseif ((($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "left") <= 2) && ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "left") > 0))) {
                // line 40
                echo "\t\t\t\tclass=\"high\"
\t\t\t";
            } elseif ((($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "left") <= 7) && ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "left") > 2))) {
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "left"), "html", null, true);
            echo " days left</td>
\t\t\t<td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ticket_view", array("code" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "code"))), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 64
            echo "\t\t<tr>
\t\t\t<td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "lastname"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "model"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "dueDate"), "M/d/Y"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "t_firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "t_lastname"), "html", null, true);
            echo "</td>
\t\t\t<td 
\t\t\t";
            // line 71
            if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "left") <= 0)) {
                echo "\t\t\t\t\t\t
\t\t\t\tclass=\"pass\"
\t\t\t";
            } elseif ((($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "left") <= 2) && ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "left") > 0))) {
                // line 74
                echo "\t\t\t\tclass=\"high\"
\t\t\t";
            } elseif ((($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "left") <= 7) && ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "left") > 2))) {
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "left"), "html", null, true);
            echo " days left</td>
\t\t\t<td><a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ticket_view", array("code" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "code"))), "html", null, true);
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
        return array (  216 => 85,  206 => 81,  201 => 80,  197 => 78,  193 => 76,  189 => 74,  183 => 71,  176 => 69,  172 => 68,  168 => 67,  164 => 66,  158 => 65,  155 => 64,  151 => 63,  136 => 50,  127 => 47,  122 => 46,  118 => 44,  114 => 42,  110 => 40,  104 => 37,  98 => 33,  85 => 31,  81 => 30,  74 => 26,  70 => 25,  66 => 24,  60 => 23,  57 => 22,  53 => 21,  34 => 5,  31 => 4,  28 => 3,);
    }
}

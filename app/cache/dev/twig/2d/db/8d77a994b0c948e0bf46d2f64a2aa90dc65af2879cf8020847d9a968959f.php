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
\t\t\t";
        // line 16
        echo "\t\t\t<th>Due Date</th>
\t\t\t<th>Status</th>
\t\t\t<th>Assign To</th>
\t\t\t<th>Priority</th>
\t\t\t<th>&nbsp;</th>
\t\t</tr>
\t\t";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["new_tickets"]) ? $context["new_tickets"] : $this->getContext($context, "new_tickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 23
            echo "\t\t<tr>
\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "lastname"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "model"), "html", null, true);
            echo "</td>
\t\t\t";
            // line 27
            echo "\t\t\t<td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "dueDate"), "M/d/Y"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status"), "html", null, true);
            echo "</td>
\t\t\t<td><a class=\"orange_buttons assign_tech\">Assign To</a>
\t\t\t\t<div class=\"tech-list\" style=\"display:none;\">
\t\t\t\t\t<ul>
\t\t\t\t\t";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["technicians"]) ? $context["technicians"] : $this->getContext($context, "technicians")));
            foreach ($context['_seq'] as $context["_key"] => $context["tech"]) {
                // line 33
                echo "\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_assign_ticket", array("ticket_id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id"), "tech_id" => $this->getAttribute((isset($context["tech"]) ? $context["tech"] : $this->getContext($context, "tech")), "id"))), "html", null, true);
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
            // line 35
            echo "\t\t\t\t\t</ul>\t\t
\t\t\t\t</div>
\t\t\t</td>
\t\t\t<td
\t\t\t";
            // line 39
            if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "left") <= 2)) {
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
\t\t\t";
        // line 58
        echo "\t\t\t<th>Due Date</th>
\t\t\t<th>Status</th>
\t\t\t<th>Technician</th>
\t\t\t<th>Priority</th>
\t\t\t<th>&nbsp;</th>
\t\t</tr>
\t\t";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 65
            echo "\t\t<tr>
\t\t\t<td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "lastname"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "model"), "html", null, true);
            echo "</td>
\t\t\t";
            // line 69
            echo "\t\t\t<td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "dueDate"), "M/d/Y"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "t_firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "t_lastname"), "html", null, true);
            echo "</td>
\t\t\t<td 
\t\t\t";
            // line 73
            if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "left") <= 2)) {
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
        return array (  214 => 85,  204 => 81,  199 => 80,  195 => 78,  191 => 76,  187 => 74,  185 => 73,  178 => 71,  174 => 70,  169 => 69,  165 => 67,  159 => 66,  156 => 65,  152 => 64,  144 => 58,  135 => 50,  126 => 47,  121 => 46,  117 => 44,  113 => 42,  109 => 40,  107 => 39,  101 => 35,  88 => 33,  84 => 32,  77 => 28,  72 => 27,  68 => 25,  62 => 24,  59 => 23,  55 => 22,  47 => 16,  34 => 5,  31 => 4,  28 => 3,);
    }
}

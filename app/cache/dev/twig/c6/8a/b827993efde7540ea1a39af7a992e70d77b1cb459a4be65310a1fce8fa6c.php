<?php

/* HzStoreBundle:Default:index.html.twig */
class __TwigTemplate_c68ab827993efde7540ea1a39af7a992e70d77b1cb459a4be65310a1fce8fa6c extends Twig_Template
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
        echo "
";
        // line 5
        if ((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages"))) {
            // line 6
            echo "<h2 class=\"content-sub-title\">Reminders</h2>
<div class=\"content-info-box\">
\t";
            // line 8
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 9
                echo "\t\t
\t\t<div class=\"info-box\">
\t\t\t<h4 class=\"info-box-title\">User: ";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "authorName"), "html", null, true);
                echo " 
\t\t\t<a style=\"float:right;\" href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_message_remove", array("id" => $this->getAttribute((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "id"))), "html", null, true);
                echo "\" /><i class=\"fa fa-trash-o\"></i></a>
\t\t\t</h4>
\t\t\t<div class=\"info-box-content\">
\t\t\t\t<p>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "content"), "html", null, true);
                echo "</p>
\t\t\t</div>
\t\t\t<div class=\"info-box-content\" style=\"text-align:right;\">
\t\t\t\t<p>Date: ";
                // line 18
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "createDate"), "Y-m-d"), "html", null, true);
                echo "</p>
\t\t\t</div>
\t\t<div>
\t\t</div>
\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t</div>
";
        }
        // line 26
        echo "
";
        // line 27
        if ((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets"))) {
            // line 28
            echo "<h2 class=\"content-sub-title\">New Tickets</h2>
<table class=\"content-table\">
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
            // line 39
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")));
            foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
                // line 40
                echo "\t\t<tr>
\t\t\t<td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "firstname"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "lastname"), "html", null, true);
                echo "</td>
\t\t\t<td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "model"), "html", null, true);
                echo "</td>
\t\t\t<td>";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "dueDate"), "M/d/Y"), "html", null, true);
                echo "</td>
\t\t\t<td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status"), "html", null, true);
                echo "</td>
\t\t\t<td><a class=\"orange_buttons assign_tech\">Assign To</a>
\t\t\t\t<div class=\"tech-list\" style=\"display:none;\">
\t\t\t\t\t<ul>
\t\t\t\t\t";
                // line 48
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["technicians"]) ? $context["technicians"] : $this->getContext($context, "technicians")));
                foreach ($context['_seq'] as $context["_key"] => $context["tech"]) {
                    // line 49
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
                // line 51
                echo "\t\t\t\t\t</ul>\t\t
\t\t\t\t</div>
\t\t\t</td>
\t\t\t<td
\t\t\t";
                // line 55
                if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "left") <= 0)) {
                    echo "\t\t\t\t\t\t
\t\t\t\tclass=\"pass\"
\t\t\t";
                } elseif ((($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "left") <= 2) && ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "left") > 0))) {
                    // line 58
                    echo "\t\t\t\tclass=\"high\"
\t\t\t";
                } elseif ((($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "left") <= 7) && ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "left") > 2))) {
                    // line 60
                    echo "\t\t\t\tclass=\"middle\"
\t\t\t";
                } else {
                    // line 62
                    echo "\t\t\t\tclass=\"low\"
\t\t\t";
                }
                // line 64
                echo "\t\t\t>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "left"), "html", null, true);
                echo " days left</td>
\t\t\t<td><a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ticket_view", array("code" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "code"))), "html", null, true);
                echo "\">View</a></td>
\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "\t</table>
";
        }
    }

    public function getTemplateName()
    {
        return "HzStoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 68,  172 => 65,  167 => 64,  163 => 62,  159 => 60,  155 => 58,  149 => 55,  143 => 51,  130 => 49,  126 => 48,  119 => 44,  115 => 43,  111 => 42,  105 => 41,  102 => 40,  98 => 39,  85 => 28,  83 => 27,  80 => 26,  76 => 24,  64 => 18,  58 => 15,  52 => 12,  48 => 11,  44 => 9,  40 => 8,  36 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}

<?php

/* HzStoreBundle:Ticket:search-result.html.twig */
class __TwigTemplate_2aa117a629564c5554d1490229fbae6d77a4bf18d4191f4e58070bbafccc9ca9 extends Twig_Template
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

<h3 class=\"content-sub-title\">Tickets</h3>

<table class=\"content-table\">
\t<tr>
\t\t<th>Customer</th>
\t\t<th>Model</th>
\t\t<th>Create Date</th>
\t\t<th>Due Date</th>
\t\t<th>Status</th>
\t\t<th>Technician</th>
\t\t<th>&nbsp;</th>
\t</tr>
\t";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 24
            echo "\t<tr>
\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "lastname"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "model"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "createDate"), "M/d/Y"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "dueDate"), "M/d/Y"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "t_firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "t_lastname"), "html", null, true);
            echo "</td>
\t\t<td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ticket_view", array("code" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "code"))), "html", null, true);
            echo "\">View</a></td>

\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</table>

";
    }

    public function getTemplateName()
    {
        return "HzStoreBundle:Ticket:search-result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 35,  90 => 31,  84 => 30,  80 => 29,  76 => 28,  72 => 27,  68 => 26,  62 => 25,  59 => 24,  55 => 23,  34 => 5,  31 => 4,  28 => 3,);
    }
}

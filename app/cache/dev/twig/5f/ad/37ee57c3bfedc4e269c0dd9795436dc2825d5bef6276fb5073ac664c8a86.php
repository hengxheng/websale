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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "code"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "firstname"), "html", null, true);
        echo "</td>
\t\t\t<td>Last Name</td>
\t\t\t<td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "lastname"), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Email</td>
\t\t\t<td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "email"), "html", null, true);
        echo "</td>
\t\t\t<td>Phone</td>
\t\t\t<td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "phone"), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td >Address</td>
\t\t\t<td colspan=\"3\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "address1"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "address2"), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Suburb</td>
\t\t\t<td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "suburb"), "html", null, true);
        echo "</td>
\t\t\t<td>Postcode</td>
\t\t\t<td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "postcode"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")), "serial"), "html", null, true);
        echo "</td>
\t\t\t<td>Brand</td>
\t\t\t<td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")), "brand"), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Model</td>
\t\t\t<td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")), "model"), "html", null, true);
        echo "</td>
\t\t\t<td>Password</td>
\t\t\t<td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")), "password"), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t";
        // line 49
        if ((isset($context["accessories"]) ? $context["accessories"] : $this->getContext($context, "accessories"))) {
            // line 50
            echo "\t\t<tr>
\t\t\t<th colspan=\"4\">Accessory</th>
\t\t</tr>
\t\t\t";
            // line 53
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["accessories"]) ? $context["accessories"] : $this->getContext($context, "accessories")));
            foreach ($context['_seq'] as $context["_key"] => $context["ac"]) {
                // line 54
                echo "\t\t\t  ";
                if (($this->getAttribute((isset($context["ac"]) ? $context["ac"] : $this->getContext($context, "ac")), "type") == "other")) {
                    // line 55
                    echo "\t\t\t  \t<tr>
\t\t\t  \t\t<td colspan=\"4\">";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ac"]) ? $context["ac"] : $this->getContext($context, "ac")), "comments"), "html", null, true);
                    echo "</td>
\t\t\t  \t</tr>
\t\t\t  ";
                } else {
                    // line 59
                    echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"4\">";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ac"]) ? $context["ac"] : $this->getContext($context, "ac")), "type"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")), "comments"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t</div>
\t\t\t<p>Price: \$";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "price"), "html", null, true);
        echo "</p>
\t<p>Date: ";
        // line 75
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "CreateDate"), "Y-m-d"), "html", null, true);
        echo "</p>
\t<p>Due Date: ";
        // line 76
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "DueDate"), "Y-m-d"), "html", null, true);
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
        return array (  185 => 76,  181 => 75,  177 => 74,  171 => 71,  163 => 65,  160 => 64,  154 => 63,  148 => 60,  145 => 59,  139 => 56,  136 => 55,  133 => 54,  129 => 53,  124 => 50,  122 => 49,  117 => 47,  112 => 45,  105 => 41,  100 => 39,  88 => 30,  83 => 28,  74 => 24,  67 => 20,  62 => 18,  55 => 14,  50 => 12,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}

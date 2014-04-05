<?php

/* HzStoreBundle:Customer:list.html.twig */
class __TwigTemplate_1dae8e6e604adeac9fa4291bcea9e72a3162bf03164e297e7ab93791b314a5ca extends Twig_Template
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
<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("_customer_search");
        echo "\" method=\"post\">
<input type=\"text\" name=\"term\" />
<input type=\"submit\" name=\"submit\" value=\"search\" />
</form>
</div>
   <h3 class=\"content-sub-title\">";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["list_name"]) ? $context["list_name"] : $this->getContext($context, "list_name")), "html", null, true);
        echo "</h3>

\t<table class=\"content-table\">
\t\t<tr>
\t\t\t<th>First Name</th>
\t\t\t<th>Last Name</th>
\t\t\t<th>Email</th>
\t\t\t<th>Phone</th>
\t\t\t<th>Suburb</th>
\t\t\t<th>Company</th>
\t\t\t<th>Action</th>
\t\t</tr>
\t\t";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customers"]) ? $context["customers"] : $this->getContext($context, "customers")));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 23
            echo "\t\t<tr>
\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "firstname"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "lastname"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "email"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "phone"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "suburb"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "company"), "html", null, true);
            echo "</td>
\t\t\t<td>
\t\t\t<a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_customer_view", array("customer_id" => $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "id"))), "html", null, true);
            echo "\">View</a>
\t\t\t<a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_machine_add", array("customer_id" => $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "id"))), "html", null, true);
            echo "\">New ticket</a>
\t\t\t</td>
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t</table>
";
    }

    public function getTemplateName()
    {
        return "HzStoreBundle:Customer:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 36,  93 => 32,  89 => 31,  84 => 29,  80 => 28,  76 => 27,  72 => 26,  68 => 25,  64 => 24,  61 => 23,  57 => 22,  42 => 10,  34 => 5,  31 => 4,  28 => 3,);
    }
}

<?php

/* HzStoreBundle:Technician:list.html.twig */
class __TwigTemplate_9d9519b2f803b24ef058cd1f4b834c8487fb0d0399b0c50fbbac5421c42db644 extends Twig_Template
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
        echo "   <h3 class=\"content-sub-title\">";
        echo twig_escape_filter($this->env, (isset($context["list_name"]) ? $context["list_name"] : $this->getContext($context, "list_name")), "html", null, true);
        echo "
\t<a class=\"buttons\" style=\"float:right; width: 153px; margin-bottom: 20px;\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("_technician_add");
        echo "\">New technician</a>
   </h3>

\t<table class=\"content-table\">
\t\t<tr>
\t\t\t<th>First Name</th>
\t\t\t<th>Last Name</th>
\t\t\t<th>Email</th>
\t\t\t<th>Phone</th>
\t\t\t<th>Suburb</th>
\t\t\t<th>Action</th>
\t\t</tr>
\t\t";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["technicians"]) ? $context["technicians"] : $this->getContext($context, "technicians")));
        foreach ($context['_seq'] as $context["_key"] => $context["technician"]) {
            // line 18
            echo "\t\t<tr>
\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["technician"]) ? $context["technician"] : $this->getContext($context, "technician")), "firstname"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["technician"]) ? $context["technician"] : $this->getContext($context, "technician")), "lastname"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["technician"]) ? $context["technician"] : $this->getContext($context, "technician")), "email"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["technician"]) ? $context["technician"] : $this->getContext($context, "technician")), "phone"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["technician"]) ? $context["technician"] : $this->getContext($context, "technician")), "suburb"), "html", null, true);
            echo "</td>
\t\t\t<td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_technician_view", array("tech_id" => $this->getAttribute((isset($context["technician"]) ? $context["technician"] : $this->getContext($context, "technician")), "id"))), "html", null, true);
            echo "\">View</a></td>
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['technician'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t</table>

";
    }

    public function getTemplateName()
    {
        return "HzStoreBundle:Technician:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 27,  78 => 24,  74 => 23,  70 => 22,  66 => 21,  62 => 20,  58 => 19,  55 => 18,  51 => 17,  36 => 5,  31 => 4,  28 => 3,);
    }
}

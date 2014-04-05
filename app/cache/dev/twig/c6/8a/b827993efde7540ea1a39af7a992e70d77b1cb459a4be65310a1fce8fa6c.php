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
            echo "<div class=\"content-info-box\">
\t";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 8
                echo "\t\t
\t\t<div class=\"info-box\">
\t\t\t<h4 class=\"info-box-title\">User: ";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "authorName"), "html", null, true);
                echo " 
\t\t\t<a style=\"float:right;\" href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_message_remove", array("id" => $this->getAttribute((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "id"))), "html", null, true);
                echo "\" /><i class=\"fa fa-trash-o\"></i></a>
\t\t\t</h4>
\t\t\t<div class=\"info-box-content\">
\t\t\t\t<p>";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "content"), "html", null, true);
                echo "</p>
\t\t\t</div>
\t\t\t<div class=\"info-box-content\" style=\"text-align:right;\">
\t\t\t\t<p>Date: ";
                // line 17
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
            // line 23
            echo "\t</div>
";
        }
        // line 25
        echo "<p class=\"content-sub-title\">New Reminder</p>
<form action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("_message_add");
        echo "\" method=\"post\" >
<textarea name=\"msg\" style=\"width:99%; height:200px;\"></textarea>
<input type=\"submit\" value=\"Save\" class=\"buttons\">
</form>
";
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
        return array (  82 => 26,  79 => 25,  75 => 23,  63 => 17,  57 => 14,  51 => 11,  47 => 10,  43 => 8,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}

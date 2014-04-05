<?php

/* HzStoreBundle:Customer:create.html.twig */
class __TwigTemplate_982ca9718258648fe5100808005df0be593d80cd3ef6d4a611cd9df7492bdbc0 extends Twig_Template
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
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "HzStoreBundle:Form:fields.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"col-2\">
<h2 class=\"content-sub-title\">New Customer</h2>
<div class=\"form_box\">
  ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>
</div>
<div class=\"col-2\">
<h2 class=\"content-sub-title\">Existing Customer</h2>
<div class=\"search-box\">
<form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("_customer_search");
        echo "\" method=\"post\">
<input type=\"text\" name=\"term\" />
<input type=\"submit\" name=\"submit\" value=\"search\" />
</form>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "HzStoreBundle:Customer:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 14,  38 => 8,  33 => 5,  30 => 4,  25 => 2,);
    }
}

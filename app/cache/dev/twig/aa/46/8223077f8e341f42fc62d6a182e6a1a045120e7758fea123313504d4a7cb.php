<?php

/* HzStoreBundle:Customer:view.html.twig */
class __TwigTemplate_aa468223077f8e341f42fc62d6a182e6a1a045120e7758fea123313504d4a7cb extends Twig_Template
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
        echo "<div class=\"form_box\">
  ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "HzStoreBundle:Customer:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  33 => 5,  30 => 4,  25 => 2,);
    }
}

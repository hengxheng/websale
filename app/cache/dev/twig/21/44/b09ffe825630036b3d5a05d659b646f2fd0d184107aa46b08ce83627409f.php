<?php

/* HzStoreBundle:Form:fields.html.twig */
class __TwigTemplate_2144b09ffe825630036b3d5a05d659b646f2fd0d184107aa46b08ce83627409f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_row', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('textarea_widget', $context, $blocks);
    }

    // line 1
    public function block_form_row($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    <div class=\"form_row\">
        <div class=\"form_label\">";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "</div>
        <div class=\"form_widget\">";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "</div>
    </div>
     <span class=\"form_error\">";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 11
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 12
        ob_start();
        // line 13
        echo "    <div class=\"textarea_widget_comments\">
        <textarea ";
        // line 14
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "HzStoreBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  59 => 13,  57 => 12,  54 => 11,  47 => 7,  42 => 5,  38 => 4,  35 => 3,  26 => 11,  23 => 10,  21 => 1,  36 => 6,  33 => 2,  30 => 1,  25 => 2,);
    }
}

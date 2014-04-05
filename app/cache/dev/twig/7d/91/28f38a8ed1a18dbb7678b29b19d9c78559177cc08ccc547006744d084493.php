<?php

/* HzStoreBundle:Machine:create.html.twig */
class __TwigTemplate_7d9128f38a8ed1a18dbb7678b29b19d9c78559177cc08ccc547006744d084493 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HzStoreBundle:Default:layout.html.twig");

        $this->blocks = array(
            'textarea_widget' => array($this, 'block_textarea_widget'),
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

    // line 3
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    <div class=\"textarea_widget comments_box\">
        <textarea ";
        // line 6
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "></textarea>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 9
        echo "
";
    }

    // line 12
    public function block_content_body($context, array $blocks = array())
    {
        // line 13
        echo "<div class=\"cam-block\" style=\"overflow:hidden;margin-bottom:30px;\">
<div id=\"webcam\" style=\"width: 400px;height:300px;float:left;\"></div>
<div style=\"float:right;\" id=\"gallery\"></div>
</div>
<div class=\"clear\"></div>
<div class=\"form_box\">
  ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>

<script>

\$(function(){
\t\$('#webcam').photobooth().on(\"image\",function( event, dataUrl ){
\t\$( \"#gallery\" ).html( '<img src=\"' + dataUrl + '\" >');
\t\$(\".img_file\").val(dataUrl);
});
});
</script>

";
    }

    public function getTemplateName()
    {
        return "HzStoreBundle:Machine:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 19,  53 => 13,  50 => 12,  45 => 9,  39 => 6,  36 => 5,  34 => 4,  31 => 3,  26 => 2,);
    }
}

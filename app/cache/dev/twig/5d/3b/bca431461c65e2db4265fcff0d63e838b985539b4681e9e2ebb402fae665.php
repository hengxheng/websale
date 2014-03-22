<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_5d3bbca431461c65e2db4265fcff0d63e838b985539b4681e9e2ebb402fae665 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  70 => 26,  42 => 12,  38 => 13,  35 => 7,  26 => 3,  55 => 13,  31 => 5,  25 => 3,  21 => 2,  94 => 22,  89 => 20,  79 => 29,  75 => 28,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  41 => 9,  24 => 2,  201 => 92,  199 => 91,  187 => 84,  183 => 82,  173 => 74,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  151 => 63,  142 => 59,  138 => 57,  123 => 47,  117 => 44,  115 => 43,  105 => 40,  101 => 24,  86 => 28,  69 => 25,  62 => 24,  51 => 15,  49 => 19,  39 => 6,  19 => 1,  98 => 40,  88 => 6,  80 => 19,  44 => 10,  36 => 7,  57 => 16,  40 => 8,  33 => 6,  30 => 5,  164 => 74,  161 => 73,  155 => 68,  152 => 67,  143 => 33,  136 => 56,  131 => 27,  126 => 25,  112 => 42,  93 => 9,  91 => 35,  85 => 19,  52 => 36,  50 => 15,  27 => 4,  22 => 2,  390 => 194,  385 => 192,  368 => 178,  364 => 177,  360 => 176,  354 => 173,  328 => 154,  320 => 149,  314 => 146,  308 => 142,  305 => 141,  296 => 138,  292 => 137,  286 => 134,  281 => 131,  276 => 130,  274 => 129,  265 => 123,  259 => 120,  237 => 103,  225 => 93,  212 => 91,  208 => 90,  202 => 86,  196 => 90,  188 => 79,  182 => 76,  174 => 70,  171 => 73,  165 => 68,  159 => 65,  156 => 66,  150 => 61,  147 => 60,  144 => 59,  140 => 58,  135 => 55,  133 => 55,  128 => 52,  121 => 46,  116 => 21,  109 => 18,  104 => 40,  92 => 21,  87 => 20,  78 => 40,  71 => 21,  66 => 25,  59 => 15,  54 => 21,  46 => 14,  43 => 8,  37 => 4,  32 => 6,  29 => 4,);
    }
}

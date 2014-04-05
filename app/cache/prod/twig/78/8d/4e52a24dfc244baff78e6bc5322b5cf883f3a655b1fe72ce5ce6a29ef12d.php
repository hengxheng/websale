<?php

/* HzStoreBundle:Default:layout.html.twig */
class __TwigTemplate_788d4e52a24dfc244baff78e6bc5322b5cf883f3a655b1fe72ce5ce6a29ef12d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'page_title' => array($this, 'block_page_title'),
            'content_body' => array($this, 'block_content_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<head>
\t<title>Online Repair Store Management System</title>
\t<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/hzstore/css/stylesheets/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/hzstore/css/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t<script src=\"http://code.jquery.com/jquery-1.11.0.min.js\"></script>
\t<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/hzstore/js/javascript.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/hzstore/js/photobooth_min.js"), "html", null, true);
        echo "\"></script>
</head>
<body>
  <div class=\"page\">
\t\t<header>
\t\t<div class=\"header-content\">
\t\t\t<div class=\"logo\">
\t\t\t\t<img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/hzstore/images/logo.jpg"), "html", null, true);
        echo "\"/>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"menu\">
\t\t";
        // line 19
        $this->displayBlock('menu', $context, $blocks);
        // line 37
        echo "\t\t</div>

\t\t</header>
\t\t<div class=\"container\">
\t\t\t<!-- <div class=\"sidebar\">
\t\t\t\t<ul class=\"sidebar-menu\">
\t\t\t\t\t<li><a href=\"#\">AMC</a></li>
\t\t\t\t\t<li><a href=\"#\">AMC</a></li>
\t\t\t\t\t<li><a href=\"#\">AMC</a></li>
\t\t\t\t\t<li class=\"selected\"><a class=\"selected\" href=\"#\">Merisant</a>
\t\t\t\t\t\t<div class=\"sec-lv-menu\">
\t\t\t\t\t\t\t<ul class=\"sidebar-sec-lv-menu\">
\t\t\t\t\t\t\t\t<li class=\"selected\"><a class=\"selected\" href=\"#\">Equal-APAC</a>
\t\t\t\t\t\t\t\t\t<div class=\"trd-lv-menu\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"sidebar-trd-lv-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Design</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Stage</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"#\">AMC</a></li>
\t\t\t\t\t<li><a href=\"#\">AMC</a></li>
\t\t\t\t\t<li><a href=\"#\">AMC</a></li>
\t\t\t\t\t<li><a href=\"#\">AMC</a></li>
\t\t\t\t</ul>
\t\t\t</div> -->
\t\t\t<div class=\"page-content\">
\t\t\t\t<div class=\"content-header\">
\t\t\t\t\t";
        // line 68
        $this->displayBlock('page_title', $context, $blocks);
        // line 71
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"content-body\">
\t\t\t\t";
        // line 73
        $this->displayBlock('content_body', $context, $blocks);
        // line 112
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t\t<footer>
\t\t<span class=\"copyright\">&copy;Copyright Websale Pty Lt<span>
\t\t</footer>
\t</div>

</body>
</html>

";
    }

    // line 19
    public function block_menu($context, array $blocks = array())
    {
        // line 20
        echo "\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("_homepage");
        echo "\">Dashboard</a></li>
\t\t\t\t\t<li class=\"seperator\">|</li>
\t\t\t\t\t<li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("_customer");
        echo "\">Customers</a></li>
\t\t\t\t\t<li class=\"seperator\">|</li>
\t\t\t\t\t<li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("_ticket");
        echo "\">Tickets</a></li>
\t\t\t\t\t<li class=\"seperator\">|</li>
\t\t\t\t\t<li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("_technician");
        echo "\">Technicians</a></li>
\t\t\t\t\t<li class=\"seperator\">|</li>
\t\t\t\t\t<li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("_customer_add");
        echo "\">Leads</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"menu-items\">
\t\t\t\t<i class=\"fa fa-user\"></i> ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username"), "html", null, true);
        echo " (<a href=\"";
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a>)
\t\t\t</div>
\t\t";
    }

    // line 68
    public function block_page_title($context, array $blocks = array())
    {
        // line 69
        echo "\t\t\t\t\t<h2 class=\"content-title\">Websale CRM</h2>
\t\t\t\t\t";
    }

    // line 73
    public function block_content_body($context, array $blocks = array())
    {
        // line 74
        echo "
\t\t\t\t\t<p>Flat HTML site for creating base html and css and javascript to be used Flat HTML site for creating base html and css and javascript to be used </p>
\t\t\t\t\t<h3 class=\"content-sub-title\">Version Control</h3>

\t\t\t\t\t<table class=\"content-table\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>View Repo: </td>
\t\t\t\t\t\t\t<td><a href=\"#\">https://your.repo.location</a></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>View Repo: </td>
\t\t\t\t\t\t\t<td><a href=\"#\">https://your.repo.location</a></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>View Repo: </td>
\t\t\t\t\t\t\t<td><a href=\"#\">https://your.repo.location</a></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>

\t\t\t\t\t<h3 class=\"content-sub-title\">Hosting</h3>
\t\t\t\t\t<p>No information available</p>
\t\t\t\t\t<div class=\"content-info-box\">
\t\t\t\t\t\t<h3 class=\"content-info-box-title\">Website</h3>
\t\t\t\t\t\t<div class=\"info-box\">
\t\t\t\t\t\t\t<h4 class=\"info-box-title\">Description:</h4>
\t\t\t\t\t\t\t<div class=\"info-box-content\">
\t\t\t\t\t\t\t\t<p>Only run locally</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"info-box\">
\t\t\t\t\t\t\t<h4 class=\"info-box-title\">Description:</h4>
\t\t\t\t\t\t\t<div class=\"info-box-content\">
\t\t\t\t\t\t\t\t<p>Only run locally</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a class=\"buttons\" href=\"#\">Add</a>
\t\t\t\t\t</div>
\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "HzStoreBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 74,  167 => 73,  150 => 34,  100 => 112,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 24,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 68,  143 => 30,  135 => 53,  131 => 52,  119 => 20,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 37,  47 => 9,  38 => 6,  94 => 71,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 14,  56 => 9,  50 => 15,  29 => 3,  87 => 25,  72 => 16,  55 => 15,  21 => 2,  26 => 6,  98 => 73,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 5,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 28,  136 => 56,  123 => 22,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  24 => 4,  32 => 4,  25 => 2,  22 => 1,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 69,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 26,  130 => 41,  125 => 44,  122 => 43,  116 => 19,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 68,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 13,  57 => 19,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 7,  33 => 5,  30 => 4,);
    }
}

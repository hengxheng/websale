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
  <title>Online Repair Store Management System</title>
  <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/hzstore/css/stylesheets/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
  <script src=\"http://code.jquery.com/jquery-1.11.0.min.js\"></script>
  <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/hzstore/js/javascript.js"), "html", null, true);
        echo "\"></script>

</head>
<body>
  <div class=\"page\">
\t\t<header>
\t\t<div class=\"header-content\">
\t\t\t<div class=\"logo\">
\t\t\t\t<img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/hzstore/images/logo.jpg"), "html", null, true);
        echo "\"/>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"menu\">
\t\t";
        // line 18
        $this->displayBlock('menu', $context, $blocks);
        // line 36
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
        // line 67
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

    // line 18
    public function block_menu($context, array $blocks = array())
    {
        // line 19
        echo "\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("_homepage");
        echo "\">Dashboard</a></li>
\t\t\t\t\t<li class=\"seperator\">|</li>
\t\t\t\t\t<li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("_customer");
        echo "\">Customers</a></li>
\t\t\t\t\t<li class=\"seperator\">|</li>
\t\t\t\t\t<li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("_ticket");
        echo "\">Tickets</a></li>
\t\t\t\t\t<li class=\"seperator\">|</li>
\t\t\t\t\t<li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("_technician");
        echo "\">Technicians</a></li>
\t\t\t\t\t<li class=\"seperator\">|</li>
\t\t\t\t\t<li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("_customer_add");
        echo "\">Leads</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"menu-items\">
\t\t\t\t";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        echo " (<a href=\"";
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a>)
\t\t\t</div>
\t\t";
    }

    // line 67
    public function block_page_title($context, array $blocks = array())
    {
        // line 68
        echo "\t\t\t\t\t<h2 class=\"content-title\">Hello! GOOD!</h2>
\t\t\t\t\t<!-- <a class=\"content-header-button buttons\" href=\"#\">Edit</a> -->
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
        return array (  164 => 74,  161 => 73,  155 => 68,  152 => 67,  143 => 33,  136 => 29,  131 => 27,  126 => 25,  121 => 23,  116 => 21,  112 => 19,  109 => 18,  93 => 112,  91 => 73,  85 => 67,  52 => 36,  50 => 18,  43 => 14,  32 => 6,  27 => 4,  22 => 1,  87 => 71,  78 => 24,  74 => 23,  70 => 22,  66 => 21,  62 => 20,  58 => 19,  55 => 18,  51 => 17,  36 => 5,  31 => 4,  28 => 3,);
    }
}

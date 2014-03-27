<?php

/* ::backbone.html.twig */
class __TwigTemplate_694f40472c5090bf515cba4c79300158763ddb185e3e6719f41a7ff58556f219 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'carousel' => array($this, 'block_carousel'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <meta NAME=\"ROBOTS\" CONTENT=\"NOINDEX, NOFOLLOW\">
    
    <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("icon/favicon.png"), "html", null, true);
        echo "\" /> 

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "        

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/html5shiv.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->

    
  </head>
  ";
        // line 34
        echo "  <body ";
        if (array_key_exists("onLoadEvent", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["onLoadEvent"]) ? $context["onLoadEvent"] : $this->getContext($context, "onLoadEvent")), "html", null, true);
            echo " ";
        }
        echo ">
    ";
        // line 36
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") != "fos_user_security_login")) {
            // line 37
            echo "          ";
            $this->env->loadTemplate("nav.html.twig")->display($context);
            // line 38
            echo "    ";
        }
        // line 39
        echo "    
    
    ";
        // line 42
        echo "    ";
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "jlfa_web_site_homepage") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "root"))) {
            // line 44
            echo "          ";
            $this->displayBlock('carousel', $context, $blocks);
            // line 46
            echo "    ";
        }
        // line 47
        echo "    

    <!-- start content -->
    <div class=\"container marketing first\">
        ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "        
      <hr class=\"featurette-divider\">
      <!-- FOOTER -->
      ";
        // line 56
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") != "fos_user_security_login")) {
            // line 57
            echo "        <footer>
          <p class=\"pull-right\"><a href=\"#\">Back to top</a></p>
          <p>&copy; 2013 Company, Inc. &middot; <a href=\"#\">Privacy</a> &middot; <a href=\"#\">Terms</a></p>
        </footer>
      ";
        }
        // line 62
        echo "    </div><!-- end content -->
    ";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 73
        echo "  </body>
</html>
";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo "JLFA Javascrit Library For Adobe";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "      ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "698357f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_698357f_0") : $this->env->getExtension('assets')->getAssetUrl("css/main_bootstrap_1.css");
            // line 20
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
            // asset "698357f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_698357f_1") : $this->env->getExtension('assets')->getAssetUrl("css/main_theme_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
        } else {
            // asset "698357f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_698357f") : $this->env->getExtension('assets')->getAssetUrl("css/main.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
        }
        unset($context["asset_url"]);
        // line 22
        echo "    ";
    }

    // line 44
    public function block_carousel($context, array $blocks = array())
    {
        // line 45
        echo "          ";
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        // line 52
        echo "        ";
    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        // line 64
        echo "      ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0304230_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0304230_0") : $this->env->getExtension('assets')->getAssetUrl("js/main_jquery.min_1.js");
            // line 70
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
      ";
            // asset "0304230_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0304230_1") : $this->env->getExtension('assets')->getAssetUrl("js/main_bootstrap.min_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
      ";
            // asset "0304230_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0304230_2") : $this->env->getExtension('assets')->getAssetUrl("js/main_holder_3.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
      ";
            // asset "0304230_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0304230_3") : $this->env->getExtension('assets')->getAssetUrl("js/main_nav_4.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
      ";
        } else {
            // asset "0304230"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0304230") : $this->env->getExtension('assets')->getAssetUrl("js/main.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
      ";
        }
        unset($context["asset_url"]);
        // line 72
        echo "    ";
    }

    public function getTemplateName()
    {
        return "::backbone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 72,  190 => 70,  185 => 64,  182 => 63,  178 => 52,  175 => 51,  171 => 45,  168 => 44,  164 => 22,  139 => 16,  136 => 15,  130 => 12,  124 => 73,  122 => 63,  119 => 62,  112 => 57,  110 => 56,  105 => 53,  103 => 51,  97 => 47,  94 => 46,  91 => 44,  88 => 42,  84 => 39,  81 => 38,  78 => 37,  66 => 34,  58 => 28,  54 => 27,  48 => 23,  46 => 15,  40 => 12,  35 => 10,  24 => 1,  144 => 20,  135 => 67,  126 => 61,  116 => 53,  113 => 52,  99 => 40,  89 => 35,  79 => 30,  75 => 36,  71 => 28,  63 => 25,  55 => 20,  45 => 15,  32 => 4,  29 => 3,);
    }
}

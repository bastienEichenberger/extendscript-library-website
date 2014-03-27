<?php

/* ::backbone.html.twig */
class __TwigTemplate_ec04e9120d584586cbe4072cc52427bf8d01da3159d5336afd1eeb4b41ac6c09 extends Twig_Template
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
            echo twig_escape_filter($this->env, $this->getContext($context, "onLoadEvent"), "html", null, true);
            echo " ";
        }
        echo ">
    ";
        // line 36
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") != "fos_user_security_login")) {
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
        if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") == "jlfa_web_site_homepage") || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") == "root"))) {
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") != "fos_user_security_login")) {
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_698357f_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/main_bootstrap_1.css");
            // line 20
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
            // asset "698357f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_698357f_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/main_theme_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
        } else {
            // asset "698357f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_698357f") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/main.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0304230_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/main_jquery.min_1.js");
            // line 70
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
      ";
            // asset "0304230_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0304230_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/main_bootstrap.min_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
      ";
            // asset "0304230_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0304230_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/main_holder_3.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
      ";
            // asset "0304230_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0304230_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/main_nav_4.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
      ";
        } else {
            // asset "0304230"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0304230") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/main.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
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
        return array (  222 => 72,  190 => 70,  185 => 64,  178 => 52,  175 => 51,  124 => 73,  110 => 56,  97 => 47,  84 => 39,  81 => 38,  58 => 28,  34 => 5,  172 => 70,  150 => 60,  146 => 59,  134 => 53,  118 => 46,  114 => 45,  77 => 29,  70 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 62,  102 => 39,  71 => 20,  67 => 17,  63 => 15,  59 => 15,  38 => 6,  94 => 46,  89 => 20,  85 => 22,  75 => 36,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 2,  93 => 36,  88 => 42,  78 => 37,  46 => 15,  27 => 4,  44 => 12,  31 => 4,  28 => 7,  201 => 92,  196 => 90,  183 => 82,  171 => 45,  166 => 67,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 15,  121 => 46,  117 => 44,  105 => 53,  91 => 44,  62 => 16,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 12,  37 => 6,  22 => 2,  246 => 90,  157 => 64,  145 => 46,  139 => 16,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 38,  96 => 31,  83 => 25,  74 => 14,  66 => 34,  55 => 15,  52 => 21,  50 => 6,  43 => 4,  41 => 9,  35 => 10,  32 => 5,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 63,  176 => 64,  173 => 65,  168 => 44,  164 => 22,  162 => 66,  154 => 58,  149 => 51,  147 => 58,  144 => 20,  141 => 57,  133 => 55,  130 => 12,  125 => 50,  122 => 63,  116 => 41,  112 => 57,  109 => 43,  106 => 36,  103 => 51,  99 => 31,  95 => 28,  92 => 24,  86 => 32,  82 => 31,  80 => 19,  73 => 19,  64 => 17,  60 => 14,  57 => 13,  54 => 27,  51 => 14,  48 => 23,  45 => 15,  42 => 7,  39 => 8,  36 => 7,  33 => 4,  30 => 3,);
    }
}

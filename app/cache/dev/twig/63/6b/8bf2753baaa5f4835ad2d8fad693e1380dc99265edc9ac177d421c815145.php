<?php

/* JlfaWebSiteBundle:webpage:contributors.html.twig */
class __TwigTemplate_636b8bf2753baaa5f4835ad2d8fad693e1380dc99265edc9ac177d421c815145 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::backbone.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::backbone.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " 
  ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "324f466_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_324f466_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/main_leaflet_1.css");
            // line 11
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" />
  ";
            // asset "324f466_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_324f466_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/main_map_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" />
  ";
            // asset "324f466_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_324f466_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/main_MarkerCluster_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" />
  ";
            // asset "324f466_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_324f466_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/main_MarkerCluster.Default_4.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" />
  ";
        } else {
            // asset "324f466"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_324f466") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/main.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" />
  ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jlfawebsite/css/L.Control.ZoomMin.css"), "html", null, true);
        echo "\" media=\"screen\">
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "        
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div id=\"map\"></div>
            </div>
        </div>
    
        <hr class=\"featurette-divider\">
    
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1>Our partenaires</h1>
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"col-md-4\">
                    <img alt=\"500x500\" data-src=\"holder.js/500x500/auto\" src=\"data:image/png;base64,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AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAI8D8DU2HQuQ6EkQAAAABJRU5ErkJggg==\" class=\"featurette-image img-responsive\">
                </div>
                <div class=\"col-md-8\">
                    <h2>Images 3</h2>
                    <p>Eelit. Aenean lacinia bibendum nulla sed consectetur.</p>
                    <p><a href=\"#\">www.images3.ch</a></p>
                </div>
            </div>
            
            <div class=\"col-md-4\">
                <div class=\"col-md-4\">
                    <img alt=\"500x500\" data-src=\"holder.js/500x500/auto\" src=\"data:image/png;base64,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AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAI8D8DU2HQuQ6EkQAAAABJRU5ErkJggg==\" class=\"featurette-image img-responsive\">
                </div>
                <div class=\"col-md-8\">
                    <h2>Images 3</h2>
                    <p>Eelit. Aenean lacinia bibendum nulla sed consectetur.</p>
                    <p><a href=\"#\">www.images3.ch</a></p>
                </div>
            </div>
            
            <div class=\"col-md-4\">
                <div class=\"col-md-4\">
                    <img alt=\"500x500\" data-src=\"holder.js/500x500/auto\" src=\"data:image/png;base64,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AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAIIOgAEEDQASCAoANAAEEHgACCDgABBB0AAgg6AAQQdAAI8D8DU2HQuQ6EkQAAAABJRU5ErkJggg==\" class=\"featurette-image img-responsive\">
                </div>
                <div class=\"col-md-8\">
                    <h2>Images 3</h2>
                    <p>Eelit. Aenean lacinia bibendum nulla sed consectetur.</p>
                    <p><a href=\"#\">www.images3.ch</a></p>
                </div>
            </div>
        </div>
        
        
";
    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        // line 72
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        
    <!-- library with imagepath dependency couldn't not be moved -->
    <script type=\"text/javascript\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jlfawebsite/js/leaflet-0.7.1/leaflet.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jlfawebsite/js/leaflet-cluster/leaflet.markercluster.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jlfawebsite/js/leaflet-zoom-min/L.Control.ZoomMin.js"), "html", null, true);
        echo "\"></script>
    
    ";
        // line 79
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "51021b2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_51021b2_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/main_countries_1.js");
            // line 84
            echo "    
      <script type=\"text/javascript\" src=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
    ";
            // asset "51021b2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_51021b2_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/main_members_2.js");
            // line 84
            echo "    
      <script type=\"text/javascript\" src=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
    ";
            // asset "51021b2_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_51021b2_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/main_map-choropleth_3.js");
            // line 84
            echo "    
      <script type=\"text/javascript\" src=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "51021b2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_51021b2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/main.js");
            // line 84
            echo "    
      <script type=\"text/javascript\" src=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "JlfaWebSiteBundle:webpage:contributors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 85,  194 => 84,  184 => 84,  113 => 32,  65 => 16,  181 => 59,  170 => 56,  155 => 63,  153 => 76,  90 => 28,  174 => 73,  152 => 60,  148 => 59,  127 => 50,  104 => 29,  100 => 39,  137 => 41,  126 => 36,  53 => 10,  23 => 4,  222 => 72,  190 => 70,  185 => 61,  178 => 85,  175 => 84,  124 => 43,  110 => 37,  97 => 32,  84 => 17,  81 => 16,  58 => 14,  34 => 7,  172 => 70,  150 => 60,  146 => 59,  134 => 53,  118 => 40,  114 => 41,  77 => 22,  70 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 85,  140 => 55,  132 => 53,  128 => 45,  107 => 36,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 72,  159 => 64,  143 => 57,  135 => 53,  119 => 62,  102 => 39,  71 => 20,  67 => 21,  63 => 15,  59 => 12,  38 => 5,  94 => 32,  89 => 34,  85 => 33,  75 => 36,  68 => 19,  56 => 15,  87 => 25,  21 => 1,  26 => 12,  93 => 35,  88 => 32,  78 => 37,  46 => 15,  27 => 5,  44 => 10,  31 => 4,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 45,  166 => 84,  163 => 55,  158 => 54,  156 => 66,  151 => 47,  142 => 72,  138 => 54,  136 => 53,  121 => 48,  117 => 44,  105 => 41,  91 => 44,  62 => 24,  49 => 19,  24 => 7,  25 => 5,  19 => 2,  79 => 24,  72 => 23,  69 => 20,  47 => 10,  40 => 7,  37 => 13,  22 => 3,  246 => 90,  157 => 77,  145 => 56,  139 => 71,  131 => 52,  123 => 47,  120 => 46,  115 => 43,  111 => 43,  108 => 30,  101 => 28,  98 => 38,  96 => 31,  83 => 25,  74 => 13,  66 => 19,  55 => 9,  52 => 17,  50 => 10,  43 => 12,  41 => 9,  35 => 8,  32 => 5,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 85,  182 => 63,  176 => 64,  173 => 65,  168 => 67,  164 => 66,  162 => 79,  154 => 58,  149 => 75,  147 => 46,  144 => 20,  141 => 55,  133 => 55,  130 => 37,  125 => 49,  122 => 63,  116 => 46,  112 => 31,  109 => 42,  106 => 36,  103 => 51,  99 => 31,  95 => 36,  92 => 29,  86 => 28,  82 => 31,  80 => 19,  73 => 27,  64 => 16,  60 => 14,  57 => 20,  54 => 14,  51 => 16,  48 => 12,  45 => 7,  42 => 11,  39 => 7,  36 => 7,  33 => 4,  30 => 3,);
    }
}

<?php

/* JlfaWebSiteBundle:webpage:home.html.twig */
class __TwigTemplate_972eda265395d5293b3948c42356e6ec79d05f9f282baa78bcd223022a4505cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::backbone.html.twig");

        $this->blocks = array(
            'carousel' => array($this, 'block_carousel'),
            'content' => array($this, 'block_content'),
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
    public function block_carousel($context, array $blocks = array())
    {
        // line 4
        echo "<!-- Carousel
    ================================================== -->
    <div id=\"myCarousel\" class=\"carousel slide\">
      <!-- Indicators -->
      <ol class=\"carousel-indicators\">
        <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
      </ol>
      <div class=\"carousel-inner\">
\t<div class=\"item active\">
          <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/extendscript-library.svg"), "html", null, true);
        echo "\" onerror=\"this.onerror=null; this.src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/extendscript-library.png"), "html", null, true);
        echo "'\">
          <div class=\"container\">
            <div class=\"carousel-caption\">
              <h1>ExtendScript-library</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class=\"btn btn-large btn-ai\" href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("jlfa_web_site_startpage");
        echo "\">Start</a></p>
            </div>
          </div>
        </div>
        <div class=\"item\">
          <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/become-member.svg"), "html", null, true);
        echo "\" onerror=\"this.onerror=null; this.src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/become-member.png"), "html", null, true);
        echo "'\">
          <div class=\"container\">
            <div class=\"carousel-caption\">
              <h1>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("page_content.home.carrousel.become_member.title"), "html", null, true);
        echo "</h1>
              <p>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("page_content.home.carrousel.become_member.content"), "html", null, true);
        echo "</p>
              <p><a class=\"btn btn-large btn-indd\" href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("page_content.home.carrousel.become_member.sign_in"), "html", null, true);
        echo "</a></p>
            </div>
          </div>
        </div>
        <div class=\"item\">
          <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/open-source.svg"), "html", null, true);
        echo "\" onerror=\"this.onerror=null; this.src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/open-source.png"), "html", null, true);
        echo "'\">
          <div class=\"container\">
            <div class=\"carousel-caption\">
              <h1>Open source</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class=\"btn btn-large btn-ps\" href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("jlfa_web_site_licencespage");
        echo "\">Licences</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\"><span class=\"glyphicon glyphicon-chevron-left\"></span></a>
      <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a>
    </div><!-- /.carousel -->

";
    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
        // line 53
        echo "    <!-- Three columns of text below the carousel -->
      <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1>Our goals</h1>
            <div class=\"col-md-4\">
              <img class=\"img-circle\" src=\"data:image/png;base64,\" data-src=\"holder.js/140x140\" alt=\"Generic placeholder image\">
              <h2 class=\"logo\">Build a library</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vehicula vestibulum dui, at aliquet turpis accumsan et. Nam porta est sed urna ullamcorper consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam molestie diam eget enim ullamcorper, a tempus neque porta.</p>
              <p><a class=\"btn btn-default\" href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("jlfa_web_site_startpage");
        echo "\">Start &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class=\"col-md-4\">
              <img class=\"img-circle\" src=\"data:image/png;base64,\" data-src=\"holder.js/140x140\" alt=\"Generic placeholder image\">
              <h2 class=\"logo\">Work together</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vehicula vestibulum dui, at aliquet turpis accumsan et. Nam porta est sed urna ullamcorper consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <p><a class=\"btn btn-default\" href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("jlfa_web_site_participatepage");
        echo "\">Participe</a></p>
            </div><!-- /.col-lg-4 -->
            <div class=\"col-md-4\">
              <img class=\"img-circle\" src=\"data:image/png;base64,\" data-src=\"holder.js/140x140\" alt=\"Generic placeholder image\">
              <h2 class=\"logo\">Open source</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vehicula vestibulum dui, at aliquet turpis accumsan et. Nam porta est sed urna ullamcorper consectetur.</p>
              <p><a class=\"btn btn-default\" href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("jlfa_web_site_contributorspage");
        echo "\">Contributors</a></p>
            </div><!-- /.col-lg-4 -->
        </div>
      </div>
      


      <!-- START THE FEATURETTES -->

      <hr class=\"featurette-divider\">

      <div class=\"row featurette\">
        <div class=\"col-md-7\">
          <h2>Why use JLFA. <span class=\"text-muted\">It'll blow your mind.</span></h2>
          <p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class=\"col-md-5\">
          <img class=\"featurette-image img-responsive\" src=\"data:image/png;base64,\" data-src=\"holder.js/500x500/auto\" alt=\"Generic placeholder image\">
        </div>
      </div>

";
    }

    public function getTemplateName()
    {
        return "JlfaWebSiteBundle:webpage:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 85,  194 => 84,  184 => 84,  113 => 52,  65 => 16,  181 => 59,  170 => 56,  155 => 63,  153 => 76,  90 => 28,  174 => 73,  152 => 60,  148 => 59,  127 => 50,  104 => 29,  100 => 39,  137 => 41,  126 => 61,  53 => 10,  23 => 4,  222 => 72,  190 => 70,  185 => 61,  178 => 85,  175 => 84,  124 => 43,  110 => 37,  97 => 32,  84 => 17,  81 => 16,  58 => 14,  34 => 7,  172 => 70,  150 => 60,  146 => 59,  134 => 53,  118 => 40,  114 => 41,  77 => 22,  70 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 85,  140 => 55,  132 => 53,  128 => 45,  107 => 36,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 72,  159 => 64,  143 => 57,  135 => 67,  119 => 62,  102 => 39,  71 => 28,  67 => 21,  63 => 25,  59 => 12,  38 => 5,  94 => 32,  89 => 35,  85 => 33,  75 => 29,  68 => 19,  56 => 15,  87 => 25,  21 => 1,  26 => 12,  93 => 35,  88 => 32,  78 => 37,  46 => 15,  27 => 5,  44 => 10,  31 => 4,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 45,  166 => 84,  163 => 55,  158 => 54,  156 => 66,  151 => 47,  142 => 72,  138 => 54,  136 => 53,  121 => 48,  117 => 44,  105 => 41,  91 => 44,  62 => 24,  49 => 19,  24 => 7,  25 => 5,  19 => 2,  79 => 30,  72 => 23,  69 => 20,  47 => 10,  40 => 7,  37 => 13,  22 => 3,  246 => 90,  157 => 77,  145 => 56,  139 => 71,  131 => 52,  123 => 47,  120 => 46,  115 => 43,  111 => 43,  108 => 30,  101 => 28,  98 => 38,  96 => 31,  83 => 25,  74 => 13,  66 => 19,  55 => 20,  52 => 17,  50 => 10,  43 => 12,  41 => 9,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 85,  182 => 63,  176 => 64,  173 => 65,  168 => 67,  164 => 66,  162 => 79,  154 => 58,  149 => 75,  147 => 46,  144 => 73,  141 => 55,  133 => 55,  130 => 37,  125 => 49,  122 => 63,  116 => 53,  112 => 31,  109 => 42,  106 => 36,  103 => 51,  99 => 40,  95 => 36,  92 => 29,  86 => 28,  82 => 31,  80 => 19,  73 => 27,  64 => 16,  60 => 14,  57 => 20,  54 => 14,  51 => 16,  48 => 12,  45 => 15,  42 => 11,  39 => 7,  36 => 7,  33 => 4,  30 => 3,);
    }
}

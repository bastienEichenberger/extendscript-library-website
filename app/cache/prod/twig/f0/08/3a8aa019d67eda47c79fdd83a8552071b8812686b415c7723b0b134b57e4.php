<?php

/* JlfaWebSiteBundle:webpage:home.html.twig */
class __TwigTemplate_f0083a8aa019d67eda47c79fdd83a8552071b8812686b415c7723b0b134b57e4 extends Twig_Template
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
        return array (  144 => 73,  135 => 67,  126 => 61,  116 => 53,  113 => 52,  99 => 40,  89 => 35,  79 => 30,  75 => 29,  71 => 28,  63 => 25,  55 => 20,  45 => 15,  32 => 4,  29 => 3,);
    }
}

<?php

/* JlfaWebSiteBundle:webpage:licences.html.twig */
class __TwigTemplate_d08742f92e28ef9e02d730133ba756b334fff562be15f1bea720a267f43f9315 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::backbone.html.twig");

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Licences</h1>
    <div class=\"row\">
        <div class=\"col-lg-7\">
            <h2>Open source project</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
        </div>
        <div class=\"col-md-3\">
            <img class=\"featurette-image img-responsive\" src=\"data:image/png;base64,\" data-src=\"holder.js/500x500/auto\" alt=\"Generic placeholder image\">
        </div>
    </div>
    <hr class=\"featurette-divider\">
    <div class=\"row green\">
        <div class=\"col-lg-12\">
            <h2>What can you do</h2>
            <div class=\"col-lg-6\">
              <img class=\"img-circle\" src=\"data:image/png;base64,\" data-src=\"holder.js/140x140\" alt=\"Generic placeholder image\">
              <h3 class=\"logo\">Use</h3>
              <p>The principal goal of JLFA is to  in JavaSce</p>
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-6\">
              <img class=\"img-circle\" src=\"data:image/png;base64,\" data-src=\"holder.js/140x140\" alt=\"Generic placeholder image\">
              <h3 class=\"logo\">Sell personnal scripts</h3>
              <p>Work together to improve the developpement. The graphic industrie has to improve their process to become stronger.</p>
            </div><!-- /.col-lg-4 -->
        </div>
    </div><!-- /.row -->
    <hr class=\"featurette-divider\">
    <div class=\"row red\">
        <div class=\"col-lg-12\">
            <h2>What cannot  do</h2>
            <div class=\"col-lg-6\">
              <img class=\"img-circle\" src=\"data:image/png;base64,\" data-src=\"holder.js/140x140\" alt=\"Generic placeholder image\">
              <h3 class=\"logo\">Use</h3>
              <p>The principal goal of JLFA is to  in JavaSce</p>
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-6\">
              <img class=\"img-circle\" src=\"data:image/png;base64,\" data-src=\"holder.js/140x140\" alt=\"Generic placeholder image\">
              <h3 class=\"logo\">Sell personnal scripts</h3>
              <p>Work together to improve the developpement. The graphic industrie has to improve their process to become stronger.</p>
            </div><!-- /.col-lg-4 -->
        </div>
    </div><!-- /.row -->
";
    }

    public function getTemplateName()
    {
        return "JlfaWebSiteBundle:webpage:licences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}

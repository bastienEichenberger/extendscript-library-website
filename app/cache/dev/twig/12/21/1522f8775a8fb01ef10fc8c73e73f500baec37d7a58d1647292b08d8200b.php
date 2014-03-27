<?php

/* JlfaWebSiteBundle:webpage:participate.html.twig */
class __TwigTemplate_12211522f8775a8fb01ef10fc8c73e73f500baec37d7a58d1647292b08d8200b extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"col-lg-12\">
        <h1>How can I participate?</h1>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-lg-9\">
        <h2>Community</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
        <p><a class=\"btn btn-large btn-primary\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("forum_jlfa_homepage");
        echo "\">Forum</a></p>
    </div>
    <div class=\"col-md-3\">
        <img class=\"featurette-image img-responsive\" src=\"data:image/png;base64,\" data-src=\"holder.js/500x500/auto\" alt=\"Generic placeholder image\">
    </div>
</div>
<hr class=\"featurette-divider\">
<div class=\"row\">
    <div class=\"col-lg-9\">
        <h2>Write code</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div>
    <div class=\"col-md-3\">
        <img class=\"featurette-image img-responsive\" src=\"data:image/png;base64,\" data-src=\"holder.js/500x500/auto\" alt=\"Generic placeholder image\">
    </div>
</div>
<hr class=\"featurette-divider\">
<div class=\"row\">
    <div class=\"col-lg-9\">
        <h2>Debug</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div>
    <div class=\"col-md-3\">
        <img class=\"featurette-image img-responsive\" src=\"data:image/png;base64,\" data-src=\"holder.js/500x500/auto\" alt=\"Generic placeholder image\">
    </div>
</div>
<hr class=\"featurette-divider\">
<div class=\"row\">
    <div class=\"col-lg-9\">
        <h2>Write documentation</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div>
    <div class=\"col-md-3\">
        <img class=\"featurette-image img-responsive\" src=\"data:image/png;base64,\" data-src=\"holder.js/500x500/auto\" alt=\"Generic placeholder image\">
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "JlfaWebSiteBundle:webpage:participate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  31 => 4,  28 => 3,);
    }
}

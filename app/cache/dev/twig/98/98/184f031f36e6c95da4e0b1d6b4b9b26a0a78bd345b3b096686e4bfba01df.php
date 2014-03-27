<?php

/* JlfaWebSiteBundle:webpage:start.html.twig */
class __TwigTemplate_9898184f031f36e6c95da4e0b1d6b4b9b26a0a78bd345b3b096686e4bfba01df extends Twig_Template
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
        // line 2
        $context["onLoadEvent"] = "onload=prettyPrint()";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " 
  ";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4428d6b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4428d6b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/main_prettify_1.css");
            // line 10
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
  ";
        } else {
            // asset "4428d6b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4428d6b") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/main.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
  ";
        }
        unset($context["asset_url"]);
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
                <h1>Start</h1>
                <h2>Download JLFA</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
                <p><a class=\"btn btn-large btn-primary\" href=\"https://github.com/bastienEichenberger/extendscript-library.org\" target=\"_blank\">Git repository</a></p>
        </div>
    </div>
    <hr class=\"featurette-divider\">
    <div class=\"row\">  
        <div class=\"col-lg-12\">
            <h2>Examples of codes</h2>
            <pre class=\"prettyprint linenums lang-JavaScript\">
                function test(param1){return null};
                function test2(){alert(\"hello world\"};
            </pre>
        </div>  
    </div>
           
";
    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        // line 40
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo " 
";
        // line 41
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b00b151_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b00b151_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/main_prettify_1.js");
            // line 44
            echo "  <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "b00b151"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b00b151") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/main.js");
            echo "  <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "JlfaWebSiteBundle:webpage:start.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 44,  93 => 41,  89 => 40,  86 => 39,  63 => 16,  60 => 15,  44 => 10,  40 => 7,  35 => 6,  32 => 5,  27 => 2,);
    }
}

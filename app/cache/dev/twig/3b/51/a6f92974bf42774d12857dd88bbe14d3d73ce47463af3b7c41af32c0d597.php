<?php

/* SdzBlogBundle::layout.html.twig */
class __TwigTemplate_3b51a6f92974bf42774d12857dd88bbe14d3d73ce47463af3b7c41af32c0d597 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::backbone.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " 
  ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6cd9740_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6cd9740_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/main_blog_1.css");
            // line 9
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
  ";
        } else {
            // asset "6cd9740"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6cd9740") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/main.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
  ";
        }
        unset($context["asset_url"]);
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "    
";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  41 => 9,  32 => 5,  29 => 4,  66 => 13,  62 => 11,  60 => 14,  55 => 9,  50 => 15,  48 => 13,  45 => 12,  43 => 9,  39 => 7,  37 => 6,  185 => 61,  181 => 59,  170 => 56,  163 => 55,  158 => 54,  155 => 52,  153 => 51,  149 => 49,  142 => 47,  128 => 45,  124 => 43,  121 => 42,  118 => 40,  110 => 37,  107 => 36,  105 => 35,  100 => 33,  94 => 32,  90 => 30,  86 => 28,  84 => 27,  79 => 25,  74 => 24,  72 => 23,  69 => 14,  67 => 21,  44 => 17,  33 => 4,  30 => 3,  25 => 3,);
    }
}

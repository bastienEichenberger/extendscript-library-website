<?php

/* CCDNForumForumBundle::base.html.twig */
class __TwigTemplate_2e3147519b235b4a5210057d5375233f158c55d81504b3ea1c743adca663ab77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::backbone.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'messages' => array($this, 'block_messages'),
            'body_content' => array($this, 'block_body_content'),
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
            // asset "a059ca5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a059ca5_0") : $this->env->getExtension('assets')->getAssetUrl("css/main_forum_1.css");
            // line 8
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
  ";
        } else {
            // asset "a059ca5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a059ca5") : $this->env->getExtension('assets')->getAssetUrl("css/main.css");
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
 <div class=\"row\">
     
    ";
        // line 17
        $this->displayBlock('sidebar', $context, $blocks);
        // line 20
        echo "<div class=\"col-lg-9 col-lg\">
        ";
        // line 21
        $this->displayBlock('messages', $context, $blocks);
        // line 24
        echo "            
        ";
        // line 25
        $this->displayBlock('body_content', $context, $blocks);
        // line 27
        echo "
    </div>
</div>
";
    }

    // line 17
    public function block_sidebar($context, array $blocks = array())
    {
        // line 18
        echo "    ";
    }

    // line 21
    public function block_messages($context, array $blocks = array())
    {
        echo "    
            ";
        // line 22
        $this->env->loadTemplate("messages.html.twig")->display($context);
        // line 23
        echo "        ";
    }

    // line 25
    public function block_body_content($context, array $blocks = array())
    {
        // line 26
        echo "        ";
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 23,  99 => 22,  90 => 18,  80 => 27,  70 => 20,  63 => 14,  60 => 13,  40 => 5,  35 => 4,  32 => 3,  156 => 76,  154 => 74,  151 => 73,  146 => 70,  141 => 73,  139 => 70,  137 => 68,  135 => 66,  132 => 65,  127 => 58,  125 => 56,  122 => 55,  117 => 39,  112 => 37,  108 => 26,  105 => 25,  94 => 21,  92 => 37,  87 => 17,  85 => 30,  77 => 24,  75 => 24,  72 => 21,  68 => 17,  62 => 15,  54 => 13,  50 => 8,  44 => 8,  39 => 6,  115 => 38,  113 => 32,  109 => 29,  96 => 27,  78 => 25,  76 => 24,  73 => 21,  69 => 16,  66 => 15,  59 => 40,  57 => 14,  55 => 19,  53 => 15,  46 => 10,  43 => 9,  36 => 5,  33 => 5,  28 => 2,);
    }
}

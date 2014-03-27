<?php

/* SdzBlogBundle::sidebar_layout.html.twig */
class __TwigTemplate_af31e1be42d282a93bb05b2e313777e9da5be4eaf8063101e17505dc6fbe0adb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SdzBlogBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'messages' => array($this, 'block_messages'),
            'body_content' => array($this, 'block_body_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SdzBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
        
        ";
        // line 6
        $this->env->loadTemplate("SdzBlogBundle::nav/blog_nav.html.twig")->display($context);
        // line 7
        echo "
        <div class=\"col-lg-8 col-lg-offset-1\">
                ";
        // line 9
        $this->displayBlock('messages', $context, $blocks);
        // line 12
        echo "                
                ";
        // line 13
        $this->displayBlock('body_content', $context, $blocks);
        // line 15
        echo "        </div>
";
    }

    // line 9
    public function block_messages($context, array $blocks = array())
    {
        echo "    
                    ";
        // line 10
        $this->env->loadTemplate("messages.html.twig")->display($context);
        // line 11
        echo "                ";
    }

    // line 13
    public function block_body_content($context, array $blocks = array())
    {
        // line 14
        echo "                ";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle::sidebar_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  62 => 11,  60 => 10,  55 => 9,  50 => 15,  48 => 13,  45 => 12,  43 => 9,  39 => 7,  37 => 6,  185 => 61,  181 => 59,  170 => 56,  163 => 55,  158 => 54,  155 => 52,  153 => 51,  149 => 49,  142 => 47,  128 => 45,  124 => 43,  121 => 42,  118 => 40,  110 => 37,  107 => 36,  105 => 35,  100 => 33,  94 => 32,  90 => 30,  86 => 28,  84 => 27,  79 => 25,  74 => 24,  72 => 23,  69 => 14,  67 => 21,  44 => 17,  33 => 4,  30 => 3,  25 => 3,);
    }
}

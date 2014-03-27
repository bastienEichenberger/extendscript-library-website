<?php

/* SdzBlogBundle::full_layout.html.twig */
class __TwigTemplate_2ed6e06a871b5b0633088085616a4846f2d4768fd6c38247aa34e55e87e100b5 extends Twig_Template
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
        echo "    ";
        $this->displayBlock('messages', $context, $blocks);
        // line 7
        echo "
    ";
        // line 8
        $this->displayBlock('body_content', $context, $blocks);
    }

    // line 4
    public function block_messages($context, array $blocks = array())
    {
        echo "    
        ";
        // line 5
        $this->env->loadTemplate("messages.html.twig")->display($context);
        // line 6
        echo "    ";
    }

    // line 8
    public function block_body_content($context, array $blocks = array())
    {
        // line 9
        echo "    ";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle::full_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  54 => 8,  50 => 6,  48 => 5,  36 => 7,  92 => 24,  85 => 22,  71 => 20,  67 => 17,  62 => 16,  59 => 15,  43 => 4,  39 => 8,  34 => 5,  31 => 4,  26 => 2,  179 => 72,  174 => 70,  168 => 67,  164 => 66,  159 => 64,  152 => 60,  148 => 59,  143 => 57,  136 => 53,  132 => 52,  127 => 50,  120 => 46,  116 => 45,  111 => 43,  104 => 39,  100 => 38,  95 => 36,  88 => 23,  84 => 31,  79 => 29,  72 => 25,  68 => 24,  63 => 22,  56 => 18,  52 => 17,  47 => 15,  38 => 11,  33 => 4,  30 => 3,  25 => 4,);
    }
}

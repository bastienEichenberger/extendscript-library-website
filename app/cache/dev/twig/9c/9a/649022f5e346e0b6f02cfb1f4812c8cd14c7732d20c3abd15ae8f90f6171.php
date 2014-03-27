<?php

/* SdzBlogBundle::full_layout.html.twig */
class __TwigTemplate_9c9a649022f5e346e0b6f02cfb1f4812c8cd14c7732d20c3abd15ae8f90f6171 extends Twig_Template
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
        return array (  57 => 9,  54 => 8,  50 => 6,  48 => 5,  36 => 7,  33 => 4,  30 => 3,  121 => 45,  116 => 42,  114 => 41,  105 => 35,  101 => 34,  97 => 32,  92 => 29,  90 => 28,  79 => 22,  73 => 19,  69 => 18,  65 => 16,  62 => 15,  59 => 14,  43 => 4,  39 => 8,  34 => 6,  31 => 5,  26 => 2,);
    }
}

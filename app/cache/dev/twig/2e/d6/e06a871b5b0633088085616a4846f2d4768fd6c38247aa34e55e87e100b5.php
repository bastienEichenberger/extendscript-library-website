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
        return array (  34 => 5,  172 => 70,  150 => 60,  146 => 59,  134 => 53,  118 => 46,  114 => 45,  77 => 29,  70 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 39,  71 => 20,  67 => 17,  63 => 15,  59 => 15,  38 => 6,  94 => 28,  89 => 20,  85 => 22,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 2,  93 => 36,  88 => 23,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 4,  28 => 7,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 67,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 16,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 64,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 38,  96 => 31,  83 => 25,  74 => 14,  66 => 24,  55 => 15,  52 => 21,  50 => 6,  43 => 4,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 66,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 57,  133 => 55,  130 => 52,  125 => 50,  122 => 43,  116 => 41,  112 => 42,  109 => 43,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 24,  86 => 32,  82 => 31,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 9,  54 => 8,  51 => 14,  48 => 5,  45 => 15,  42 => 7,  39 => 8,  36 => 7,  33 => 4,  30 => 3,);
    }
}

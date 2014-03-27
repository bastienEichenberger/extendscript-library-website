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
        return array (  181 => 59,  170 => 56,  155 => 52,  153 => 51,  90 => 30,  174 => 70,  152 => 60,  148 => 59,  127 => 50,  104 => 39,  100 => 33,  137 => 41,  126 => 36,  53 => 12,  23 => 3,  222 => 72,  190 => 70,  185 => 61,  178 => 52,  175 => 51,  124 => 43,  110 => 37,  97 => 47,  84 => 27,  81 => 38,  58 => 14,  34 => 11,  172 => 70,  150 => 60,  146 => 59,  134 => 53,  118 => 40,  114 => 45,  77 => 29,  70 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 52,  128 => 45,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 72,  159 => 64,  143 => 57,  135 => 53,  119 => 62,  102 => 39,  71 => 20,  67 => 21,  63 => 22,  59 => 15,  38 => 11,  94 => 32,  89 => 20,  85 => 24,  75 => 36,  68 => 24,  56 => 18,  87 => 25,  21 => 5,  26 => 2,  93 => 36,  88 => 32,  78 => 37,  46 => 17,  27 => 4,  44 => 17,  31 => 4,  28 => 9,  201 => 92,  196 => 90,  183 => 82,  171 => 45,  166 => 67,  163 => 55,  158 => 54,  156 => 66,  151 => 47,  142 => 47,  138 => 54,  136 => 53,  121 => 42,  117 => 44,  105 => 35,  91 => 44,  62 => 11,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 25,  72 => 23,  69 => 14,  47 => 15,  40 => 14,  37 => 6,  22 => 2,  246 => 90,  157 => 50,  145 => 46,  139 => 16,  131 => 52,  123 => 47,  120 => 46,  115 => 43,  111 => 43,  108 => 29,  101 => 27,  98 => 38,  96 => 31,  83 => 25,  74 => 24,  66 => 13,  55 => 9,  52 => 17,  50 => 15,  43 => 9,  41 => 9,  35 => 10,  32 => 5,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 63,  176 => 64,  173 => 65,  168 => 67,  164 => 66,  162 => 66,  154 => 58,  149 => 49,  147 => 46,  144 => 20,  141 => 57,  133 => 55,  130 => 37,  125 => 50,  122 => 63,  116 => 45,  112 => 31,  109 => 43,  106 => 36,  103 => 51,  99 => 31,  95 => 36,  92 => 24,  86 => 28,  82 => 31,  80 => 19,  73 => 20,  64 => 16,  60 => 10,  57 => 13,  54 => 27,  51 => 11,  48 => 13,  45 => 12,  42 => 7,  39 => 7,  36 => 7,  33 => 4,  30 => 3,);
    }
}

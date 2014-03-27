<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_5767fdcf053a81ce92e1011aaedd708f2ca64326b53e40b419cd983dbe9b2b86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute($this->getContext($context, "user"), "username"), "%confirmationUrl%" => $this->getContext($context, "confirmationUrl")), "FOSUserBundle");
        echo "
";
    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute($this->getContext($context, "user"), "username"), "%confirmationUrl%" => $this->getContext($context, "confirmationUrl")), "FOSUserBundle");
        echo "
";
    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  65 => 16,  181 => 59,  170 => 56,  155 => 63,  153 => 51,  90 => 28,  174 => 73,  152 => 60,  148 => 59,  127 => 50,  104 => 39,  100 => 39,  137 => 41,  126 => 36,  53 => 10,  23 => 4,  222 => 72,  190 => 70,  185 => 61,  178 => 74,  175 => 51,  124 => 43,  110 => 37,  97 => 32,  84 => 32,  81 => 38,  58 => 14,  34 => 8,  172 => 70,  150 => 60,  146 => 59,  134 => 53,  118 => 40,  114 => 41,  77 => 28,  70 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 71,  140 => 55,  132 => 53,  128 => 45,  107 => 36,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 72,  159 => 64,  143 => 57,  135 => 53,  119 => 62,  102 => 39,  71 => 25,  67 => 21,  63 => 20,  59 => 12,  38 => 8,  94 => 32,  89 => 34,  85 => 33,  75 => 36,  68 => 27,  56 => 15,  87 => 25,  21 => 1,  26 => 12,  93 => 35,  88 => 32,  78 => 37,  46 => 15,  27 => 4,  44 => 12,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 45,  166 => 67,  163 => 55,  158 => 54,  156 => 66,  151 => 47,  142 => 47,  138 => 54,  136 => 53,  121 => 48,  117 => 44,  105 => 41,  91 => 44,  62 => 24,  49 => 19,  24 => 7,  25 => 5,  19 => 2,  79 => 32,  72 => 23,  69 => 18,  47 => 10,  40 => 11,  37 => 13,  22 => 2,  246 => 90,  157 => 50,  145 => 56,  139 => 16,  131 => 52,  123 => 47,  120 => 46,  115 => 43,  111 => 43,  108 => 29,  101 => 34,  98 => 38,  96 => 31,  83 => 25,  74 => 30,  66 => 13,  55 => 9,  52 => 17,  50 => 10,  43 => 6,  41 => 9,  35 => 10,  32 => 6,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 63,  176 => 64,  173 => 65,  168 => 67,  164 => 66,  162 => 66,  154 => 58,  149 => 49,  147 => 46,  144 => 20,  141 => 55,  133 => 55,  130 => 37,  125 => 49,  122 => 63,  116 => 46,  112 => 31,  109 => 42,  106 => 36,  103 => 51,  99 => 31,  95 => 36,  92 => 29,  86 => 28,  82 => 31,  80 => 19,  73 => 27,  64 => 16,  60 => 10,  57 => 20,  54 => 14,  51 => 16,  48 => 12,  45 => 7,  42 => 9,  39 => 7,  36 => 7,  33 => 4,  30 => 2,);
    }
}

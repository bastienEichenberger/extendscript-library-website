<?php

/* APYJsFormValidationBundle:Frameworks:JsFormValidation.js.prototype.twig */
class __TwigTemplate_035b9142b125a51b95abc8df294e4119807720c85afed474834f37f5f9800272 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("APYJsFormValidationBundle::JsFormValidation.js.twig");

        $this->blocks = array(
            'removeErrors' => array($this, 'block_removeErrors'),
            'addError' => array($this, 'block_addError'),
            'onEvent' => array($this, 'block_onEvent'),
            'onReady' => array($this, 'block_onReady'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "APYJsFormValidationBundle::JsFormValidation.js.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_removeErrors($context, array $blocks = array())
    {
        // line 4
        echo "\$(field).adjacent('.error_list').each(function(el) { el.remove(); });
";
    }

    // line 7
    public function block_addError($context, array $blocks = array())
    {
        // line 8
        echo "// Add errors block
field = \$(field);
if (field.adjacent('ul.error_list').length == 0) {
    field.insert({ before: '<ul class=\"error_list\"></ul>' });
}

// Add error
field.previous('ul').insert('<li>'+errorMessage+'</li>');
";
    }

    // line 18
    public function block_onEvent($context, array $blocks = array())
    {
        // line 19
        echo "\$(field).observe(eventType, handler);
";
    }

    // line 22
    public function block_onReady($context, array $blocks = array())
    {
        // line 23
        echo "document.observe(\"dom:loaded\", jsfv['";
        echo twig_escape_filter($this->env, $this->getContext($context, "formName"), "html", null, true);
        echo "'].onReady);
";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Frameworks:JsFormValidation.js.prototype.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  518 => 177,  511 => 174,  508 => 173,  502 => 133,  492 => 120,  471 => 118,  467 => 117,  463 => 116,  458 => 115,  454 => 114,  452 => 113,  449 => 112,  441 => 100,  426 => 84,  406 => 71,  399 => 46,  396 => 45,  391 => 42,  383 => 37,  378 => 10,  371 => 176,  369 => 173,  364 => 170,  352 => 167,  348 => 166,  345 => 165,  343 => 164,  340 => 163,  328 => 160,  324 => 159,  321 => 158,  319 => 157,  316 => 156,  307 => 150,  295 => 143,  293 => 142,  280 => 134,  277 => 133,  260 => 129,  256 => 127,  236 => 111,  223 => 109,  212 => 105,  195 => 104,  192 => 103,  180 => 71,  165 => 64,  197 => 85,  194 => 84,  184 => 96,  113 => 52,  65 => 23,  181 => 59,  170 => 56,  155 => 61,  153 => 76,  90 => 28,  174 => 67,  152 => 60,  148 => 59,  127 => 50,  104 => 29,  100 => 39,  137 => 58,  126 => 61,  53 => 10,  23 => 3,  222 => 72,  190 => 100,  185 => 61,  178 => 85,  175 => 84,  124 => 43,  110 => 37,  97 => 44,  84 => 30,  81 => 29,  58 => 14,  34 => 4,  172 => 70,  150 => 60,  146 => 59,  134 => 57,  118 => 40,  114 => 41,  77 => 22,  70 => 29,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 101,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 83,  413 => 134,  409 => 72,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 177,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 144,  294 => 90,  285 => 89,  283 => 135,  278 => 86,  268 => 85,  264 => 130,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 85,  140 => 59,  132 => 53,  128 => 45,  107 => 48,  61 => 15,  273 => 132,  269 => 94,  254 => 92,  243 => 88,  240 => 124,  238 => 112,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 108,  217 => 75,  208 => 68,  204 => 72,  179 => 72,  159 => 64,  143 => 57,  135 => 67,  119 => 62,  102 => 39,  71 => 28,  67 => 25,  63 => 16,  59 => 21,  38 => 5,  94 => 38,  89 => 40,  85 => 33,  75 => 26,  68 => 19,  56 => 20,  87 => 25,  21 => 1,  26 => 3,  93 => 41,  88 => 32,  78 => 37,  46 => 15,  27 => 2,  44 => 9,  31 => 3,  28 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 45,  166 => 84,  163 => 55,  158 => 62,  156 => 66,  151 => 47,  142 => 72,  138 => 54,  136 => 53,  121 => 48,  117 => 56,  105 => 45,  91 => 44,  62 => 22,  49 => 12,  24 => 2,  25 => 3,  19 => 1,  79 => 27,  72 => 27,  69 => 23,  47 => 10,  40 => 8,  37 => 13,  22 => 2,  246 => 90,  157 => 77,  145 => 56,  139 => 71,  131 => 52,  123 => 47,  120 => 46,  115 => 43,  111 => 43,  108 => 30,  101 => 28,  98 => 42,  96 => 31,  83 => 25,  74 => 38,  66 => 26,  55 => 19,  52 => 13,  50 => 16,  43 => 9,  41 => 10,  35 => 4,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 85,  182 => 83,  176 => 64,  173 => 65,  168 => 67,  164 => 66,  162 => 63,  154 => 58,  149 => 75,  147 => 46,  144 => 73,  141 => 55,  133 => 55,  130 => 37,  125 => 49,  122 => 63,  116 => 53,  112 => 31,  109 => 42,  106 => 36,  103 => 51,  99 => 40,  95 => 36,  92 => 37,  86 => 39,  82 => 30,  80 => 10,  73 => 52,  64 => 24,  60 => 20,  57 => 19,  54 => 18,  51 => 16,  48 => 23,  45 => 42,  42 => 8,  39 => 7,  36 => 15,  33 => 4,  30 => 1,);
    }
}

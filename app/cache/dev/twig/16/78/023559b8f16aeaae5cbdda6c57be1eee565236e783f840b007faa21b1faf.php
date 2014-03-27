<?php

/* APYJsFormValidationBundle:Constraints:LengthValidator.js.twig */
class __TwigTemplate_1678023559b8f16aeaae5cbdda6c57be1eee565236e783f840b007faa21b1faf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "function Length(field, params)
{
    var value = field && field.nodeName ? ";
        // line 3
        echo $this->env->getExtension('JsFormValidation')->getJsFormElementValue("field");
        echo " : field;

    if (isNotDefined(value)) {
        return true;
    }

    value = String(value);
\t
\tif (params['exactMessage'] !== undefined && 
\t    params['min'] !== undefined && params['max'] !== undefined && 
\t    params.min == params.max) {
\t    if (value.length != parseInt(params.min)) {
    \t\treturn getComputeMessage(params.exactMessage, { 'limit' : params.min }, params.min);
\t    }
    } else {
\t    if (params['min'] !== undefined && value.length < parseInt(params.min)) {
\t        return getComputeMessage(params.minMessage, { 'limit' : params.min }, params.min);
\t    }
\t    if (params['max'] !== undefined && value.length > parseInt(params.max)) {
\t        return getComputeMessage(params.maxMessage, { 'limit' : params.max }, params.max);
\t    }
    }

    return true;
}
";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Constraints:LengthValidator.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 85,  194 => 84,  184 => 84,  113 => 52,  65 => 16,  181 => 59,  170 => 56,  155 => 63,  153 => 76,  90 => 28,  174 => 73,  152 => 60,  148 => 59,  127 => 50,  104 => 29,  100 => 39,  137 => 41,  126 => 61,  53 => 10,  23 => 3,  222 => 72,  190 => 70,  185 => 61,  178 => 85,  175 => 84,  124 => 43,  110 => 37,  97 => 44,  84 => 30,  81 => 29,  58 => 14,  34 => 11,  172 => 70,  150 => 60,  146 => 59,  134 => 53,  118 => 40,  114 => 41,  77 => 22,  70 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 85,  140 => 55,  132 => 53,  128 => 45,  107 => 36,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 72,  159 => 64,  143 => 57,  135 => 67,  119 => 62,  102 => 39,  71 => 28,  67 => 21,  63 => 16,  59 => 23,  38 => 5,  94 => 32,  89 => 40,  85 => 33,  75 => 29,  68 => 19,  56 => 7,  87 => 25,  21 => 1,  26 => 3,  93 => 41,  88 => 32,  78 => 37,  46 => 15,  27 => 2,  44 => 10,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 45,  166 => 84,  163 => 55,  158 => 54,  156 => 66,  151 => 47,  142 => 72,  138 => 54,  136 => 53,  121 => 48,  117 => 44,  105 => 41,  91 => 44,  62 => 24,  49 => 19,  24 => 2,  25 => 3,  19 => 1,  79 => 30,  72 => 29,  69 => 20,  47 => 10,  40 => 5,  37 => 13,  22 => 2,  246 => 90,  157 => 77,  145 => 56,  139 => 71,  131 => 52,  123 => 47,  120 => 46,  115 => 43,  111 => 43,  108 => 30,  101 => 28,  98 => 38,  96 => 31,  83 => 25,  74 => 38,  66 => 26,  55 => 20,  52 => 17,  50 => 42,  43 => 12,  41 => 9,  35 => 5,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 85,  182 => 63,  176 => 64,  173 => 65,  168 => 67,  164 => 66,  162 => 79,  154 => 58,  149 => 75,  147 => 46,  144 => 73,  141 => 55,  133 => 55,  130 => 37,  125 => 49,  122 => 63,  116 => 53,  112 => 31,  109 => 42,  106 => 36,  103 => 51,  99 => 40,  95 => 36,  92 => 29,  86 => 39,  82 => 31,  80 => 10,  73 => 52,  64 => 16,  60 => 15,  57 => 20,  54 => 14,  51 => 16,  48 => 23,  45 => 15,  42 => 13,  39 => 6,  36 => 4,  33 => 4,  30 => 3,);
    }
}

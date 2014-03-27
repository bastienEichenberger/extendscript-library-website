<?php

/* APYJsFormValidationBundle:Constraints:NotBlankValidator.js.twig */
class __TwigTemplate_bef2200ef10a6948646f78767e74ba483cf019c2f108a2d12436c6ba6459387a extends Twig_Template
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
        echo "function NotBlank(field, params)
{
    var value = field && field.nodeName ? ";
        // line 3
        echo $this->env->getExtension('JsFormValidation')->getJsFormElementValue("field");
        echo " : field;

    if (isNotDefined(value)) {
        return getComputeMessage(params.message);
    }

    return true;
}";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Constraints:NotBlankValidator.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,  518 => 177,  511 => 174,  508 => 173,  502 => 133,  492 => 120,  471 => 118,  467 => 117,  463 => 116,  458 => 115,  454 => 114,  452 => 113,  449 => 112,  444 => 101,  441 => 100,  426 => 84,  423 => 83,  409 => 72,  406 => 71,  399 => 46,  396 => 45,  391 => 42,  383 => 37,  378 => 10,  374 => 177,  371 => 176,  369 => 173,  364 => 170,  352 => 167,  348 => 166,  345 => 165,  343 => 164,  340 => 163,  328 => 160,  324 => 159,  321 => 158,  319 => 157,  316 => 156,  307 => 150,  298 => 144,  295 => 143,  293 => 142,  283 => 135,  280 => 134,  277 => 133,  273 => 132,  264 => 130,  260 => 129,  256 => 127,  240 => 124,  238 => 112,  236 => 111,  223 => 109,  219 => 108,  212 => 105,  195 => 104,  192 => 103,  190 => 100,  184 => 96,  182 => 83,  180 => 71,  165 => 64,  162 => 63,  158 => 62,  155 => 61,  140 => 59,  137 => 58,  134 => 57,  117 => 56,  107 => 48,  105 => 45,  94 => 38,  75 => 26,  69 => 23,  65 => 22,  60 => 20,  171 => 44,  166 => 42,  163 => 41,  156 => 38,  153 => 37,  146 => 32,  138 => 28,  129 => 25,  123 => 24,  121 => 23,  115 => 20,  103 => 17,  98 => 42,  89 => 13,  86 => 12,  83 => 11,  77 => 7,  64 => 4,  61 => 3,  58 => 2,  55 => 1,  46 => 41,  41 => 10,  29 => 11,  24 => 1,  57 => 9,  54 => 8,  50 => 16,  48 => 47,  36 => 34,  92 => 37,  85 => 22,  71 => 20,  67 => 17,  62 => 16,  59 => 15,  43 => 11,  39 => 8,  34 => 31,  31 => 30,  26 => 10,  179 => 72,  174 => 67,  168 => 43,  164 => 66,  159 => 64,  152 => 60,  148 => 59,  143 => 31,  136 => 53,  132 => 26,  127 => 50,  120 => 46,  116 => 45,  111 => 19,  104 => 39,  100 => 38,  95 => 15,  88 => 23,  84 => 31,  79 => 27,  72 => 25,  68 => 5,  63 => 22,  56 => 19,  52 => 17,  47 => 15,  38 => 11,  33 => 4,  30 => 1,  25 => 4,);
    }
}

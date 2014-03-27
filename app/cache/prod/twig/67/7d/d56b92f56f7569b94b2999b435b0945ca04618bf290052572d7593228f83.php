<?php

/* APYJsFormValidationBundle:Constraints:IsAdresseValidValidator.js.twig */
class __TwigTemplate_677dd56b92f56f7569b94b2999b435b0945ca04618bf290052572d7593228f83 extends Twig_Template
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
        echo "function IsAdresseValid(field, params)
{
    var value = field && field.nodeName ? ";
        // line 3
        echo $this->env->getExtension('JsFormValidation')->getJsFormElementValue("field");
        echo " : field;
    /*if (isNotDefined(value)) {
        // clear lat + lng
        return true;
    }*/
    
    var cache, cacheindex = 'm' + value + '';
    if (params && field.nodeName) {
            cache = \$(field).data('_adresseValidCache');
            if (!cache) cache = {};
            
            if (cache[cacheindex] != undefined) {
                if (cache[cacheindex] === false) {
                    return getComputeMessage(params.message);
                } else return true;
            }

        \$(field).trigger(\"geocode\");

        \$(field).bind(\"geocode:error\", function(event, result) {
            if (!cache) cache = {};
            
            if (cache[cacheindex] != undefined) {
                if (cache[cacheindex] === false) {
                    return getComputeMessage(params.message);
                } else return true;
            }
            cache[cacheindex] = false;
            \$(field).data('_adresseValidCache', cache);
            checkError(\$(field).attr('id'), IsAdresseValid, params);
        });

        \$(field).bind(\"geocode:result\", function(event, result) {
            if (!cache) cache = {};
            
            if (cache[cacheindex] != undefined) {
                if (cache[cacheindex] === false) {
                    return getComputeMessage(params.message);
                } else return true;
            }
            cache[cacheindex] = true;
            \$(field).data('_adresseValidCache', cache);
            checkError(\$(field).attr('id'), IsAdresseValid, params);
        });
    }
    return true;
}

function asynchrone_state(){

}

";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Constraints:IsAdresseValidValidator.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 30,  70 => 29,  55 => 19,  52 => 18,  45 => 42,  74 => 38,  72 => 38,  66 => 26,  62 => 24,  59 => 21,  48 => 23,  25 => 3,  21 => 1,  23 => 3,  518 => 177,  511 => 174,  508 => 173,  502 => 133,  492 => 120,  471 => 118,  467 => 117,  463 => 116,  458 => 115,  454 => 114,  452 => 113,  449 => 112,  444 => 101,  441 => 100,  426 => 84,  423 => 83,  409 => 72,  406 => 71,  399 => 46,  396 => 45,  391 => 42,  383 => 37,  378 => 10,  374 => 177,  371 => 176,  369 => 173,  364 => 170,  352 => 167,  348 => 166,  345 => 165,  343 => 164,  340 => 163,  328 => 160,  324 => 159,  321 => 158,  319 => 157,  316 => 156,  307 => 150,  298 => 144,  295 => 143,  293 => 142,  283 => 135,  280 => 134,  277 => 133,  273 => 132,  264 => 130,  260 => 129,  256 => 127,  240 => 124,  238 => 112,  236 => 111,  223 => 109,  219 => 108,  212 => 105,  195 => 104,  192 => 103,  190 => 100,  184 => 96,  182 => 83,  180 => 71,  165 => 64,  162 => 63,  158 => 62,  140 => 59,  137 => 58,  134 => 57,  117 => 56,  107 => 48,  98 => 42,  94 => 38,  92 => 37,  79 => 29,  75 => 26,  69 => 23,  65 => 22,  56 => 19,  43 => 18,  41 => 10,  30 => 1,  178 => 74,  174 => 67,  169 => 71,  159 => 64,  155 => 61,  145 => 56,  141 => 55,  132 => 53,  125 => 49,  121 => 48,  116 => 46,  109 => 42,  105 => 45,  100 => 39,  93 => 35,  89 => 34,  84 => 30,  73 => 27,  61 => 21,  57 => 20,  50 => 42,  46 => 15,  37 => 13,  28 => 6,  19 => 1,  113 => 32,  108 => 30,  104 => 29,  101 => 28,  81 => 29,  77 => 28,  71 => 20,  68 => 25,  63 => 15,  60 => 20,  44 => 10,  40 => 7,  35 => 6,  32 => 5,  27 => 2,);
    }
}

<?php

/* APYJsFormValidationBundle:Constraints:UniqueEntityValidator.js.twig */
class __TwigTemplate_bdec7dd36a95629955a8ed12663d867fbd8600b0a60ad19cd2e9afd0a243f8de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'check_uniquity_async_request' => array($this, 'block_check_uniquity_async_request'),
            'check_uniquity_handler' => array($this, 'block_check_uniquity_handler'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "/**
 * @author   Vitaliy Demidov   <zend@i.ua>
 */
function UniqueEntity(field, params)
{
    var value = field && field.nodeName ? ";
        // line 6
        echo $this->env->getExtension('JsFormValidation')->getJsFormElementValue("field");
        echo " : field;
    var cache, url, cacheindex = 'm' + value + '';
    console.log(params)
    if (params && params.fields && field.nodeName) {
        //TODO This part is compartible only with jquery
        cache = \$(field).data('_uniqueEntityCache');
        if (!cache) cache = {};
        if (cache[cacheindex] != undefined) {
            if (cache[cacheindex] === false) {
                return getComputeMessage(params.message);
            } else return true;
        }
";
        // line 18
        $this->displayBlock('check_uniquity_async_request', $context, $blocks);
        // line 42
        echo "    }
    return true;
}
";
    }

    // line 18
    public function block_check_uniquity_async_request($context, array $blocks = array())
    {
        // line 19
        echo "        \$.ajax({
            type: 'POST',
            url: '";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("apy_js_form_validation_unique_entity", array("_format" => "json", "_locale" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale"))), "js", null, true);
        echo "',
            data: {
                'entity': params.entity,
                'target': params.fields,
                'value': value,
                'ignore': params.identifier_field_id ? self.id(params.identifier_field_id).value : ''
            },
            success: function(data, textStatus) {
";
        // line 29
        $this->displayBlock('check_uniquity_handler', $context, $blocks);
        // line 38
        echo "            },
            dataType: 'json'
       });
";
    }

    // line 29
    public function block_check_uniquity_handler($context, array $blocks = array())
    {
        // line 30
        echo "                if (data.status && data.status == 'ok') {
                    cache[cacheindex] = data.isUnique;
                    \$(field).data('_uniqueEntityCache', cache);
                    if (!cache[cacheindex]) {
                        checkError(\$(field).attr('id'), UniqueEntity, params);
                    }
                }
";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Constraints:UniqueEntityValidator.js.twig";
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

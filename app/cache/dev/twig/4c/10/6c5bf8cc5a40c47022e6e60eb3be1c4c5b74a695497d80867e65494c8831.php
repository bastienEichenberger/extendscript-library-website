<?php

/* APYJsFormValidationBundle:Constraints:IpValidator.js.twig */
class __TwigTemplate_4c106c5bf8cc5a40c47022e6e60eb3be1c4c5b74a695497d80867e65494c8831 extends Twig_Template
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
        echo "function Ip(field, params)
{
    var value = field && field.nodeName ? ";
        // line 3
        echo $this->env->getExtension('JsFormValidation')->getJsFormElementValue("field");
        echo " : field;

    if (isNotDefined(value)) {
        return true;
    }

    /*
     * Private functions
     * Inspired by php_filter_validate_ip function
     * Copyright (c) 1997-2011 The PHP Group
     */
    var isIPv4 = function (value) {
        var ip = value.match(/^(\\d+)\\.(\\d+)\\.(\\d+)\\.(\\d+)\$/);
        return ip != null && ip[1] <= 255 && ip[2] <= 255 && ip[3] <= 255 && ip[4] <= 255;
    };

    var isIPv4_no_priv = function (value) {
        var ip = value.match(/^(\\d+)\\.(\\d+)\\.(\\d+)\\.(\\d+)\$/);
        if ( (ip[0] == 10)
          || (ip[0] == 172 && (ip[1] >= 16 && ip[1] <= 31))
          || (ip[0] == 192 && ip[1] == 168) )
        {
            return false;
        }
        else {
            return true;
        }
    };

    var isIPv4_no_res = function (value) {
        var ip = value.match(/^(\\d+)\\.(\\d+)\\.(\\d+)\\.(\\d+)\$/);
        if ( (ip[0] == 0)
          || (ip[0] == 128 && ip[1] == 0)
          || (ip[0] == 191 && ip[1] == 255)
          || (ip[0] == 169 && ip[1] == 254)
          || (ip[0] == 192 && ip[1] == 0 && ip[2] == 2)
          || (ip[0] == 127 && ip[1] == 0 && ip[2] == 0 && ip[3] == 1)
          || (ip[0] >= 224 && ip[0] <= 255) )
        {
            return false;
        }
        else {
            return true;
        }
    };

    var isIPv6 = function (ip) {
";
        // line 52
        echo "
        var pattern = /^\\s*((([0-9A-Fa-f]{1,4}:){7}([0-9A-Fa-f]{1,4}|:))|(([0-9A-Fa-f]{1,4}:){6}(:[0-9A-Fa-f]{1,4}|((25[0-5]|2[0-4]\\d|1\\d\\d|[1-9]?\\d)(\\.(25[0-5]|2[0-4]\\d|1\\d\\d|[1-9]?\\d)){3})|:))|(([0-9A-Fa-f]{1,4}:){5}(((:[0-9A-Fa-f]{1,4}){1,2})|:((25[0-5]|2[0-4]\\d|1\\d\\d|[1-9]?\\d)(\\.(25[0-5]|2[0-4]\\d|1\\d\\d|[1-9]?\\d)){3})|:))|(([0-9A-Fa-f]{1,4}:){4}(((:[0-9A-Fa-f]{1,4}){1,3})|((:[0-9A-Fa-f]{1,4})?:((25[0-5]|2[0-4]\\d|1\\d\\d|[1-9]?\\d)(\\.(25[0-5]|2[0-4]\\d|1\\d\\d|[1-9]?\\d)){3}))|:))|(([0-9A-Fa-f]{1,4}:){3}(((:[0-9A-Fa-f]{1,4}){1,4})|((:[0-9A-Fa-f]{1,4}){0,2}:((25[0-5]|2[0-4]\\d|1\\d\\d|[1-9]?\\d)(\\.(25[0-5]|2[0-4]\\d|1\\d\\d|[1-9]?\\d)){3}))|:))|(([0-9A-Fa-f]{1,4}:){2}(((:[0-9A-Fa-f]{1,4}){1,5})|((:[0-9A-Fa-f]{1,4}){0,3}:((25[0-5]|2[0-4]\\d|1\\d\\d|[1-9]?\\d)(\\.(25[0-5]|2[0-4]\\d|1\\d\\d|[1-9]?\\d)){3}))|:))|(([0-9A-Fa-f]{1,4}:){1}(((:[0-9A-Fa-f]{1,4}){1,6})|((:[0-9A-Fa-f]{1,4}){0,4}:((25[0-5]|2[0-4]\\d|1\\d\\d|[1-9]?\\d)(\\.(25[0-5]|2[0-4]\\d|1\\d\\d|[1-9]?\\d)){3}))|:))|(:(((:[0-9A-Fa-f]{1,4}){1,7})|((:[0-9A-Fa-f]{1,4}){0,5}:((25[0-5]|2[0-4]\\d|1\\d\\d|[1-9]?\\d)(\\.(25[0-5]|2[0-4]\\d|1\\d\\d|[1-9]?\\d)){3}))|:)))(%.+)?\\s*\$/
";
        echo "
        return pattern.test(ip);
    };

    var isIPv6_no_priv = function (value) {
        var vallow = value.toLowerCase();
        if ( value.length >=2 && ( 'fc' == vallow.substr(0, 2) || 'fd' == vallow.substr(0, 2) ) ) {
            return false;
        }
        else {
            return true;
        }
    };

    var isIPv6_no_res = function (value) {
        var vallow = value.toLowerCase();
        var vallen = value.length;
        switch (vallen) {
            case 0:
            case 1: break;
            case 2:
                if ( '::' == vallow ) {
                    return false;
                }
                break;
            case 3:
                if ( '::1' == vallow || '5f:' == vallow ) {
                    return false;
                }
                break;
            default:
                if (vallen >= 5) {
                    if ( \"fe8\" == vallow.substr(0, 3)
                      || \"fe9\" == vallow.substr(0, 3)
                      || \"fea\" == vallow.substr(0, 3)
                      || \"feb\" == vallow.substr(0, 3) )
                    {
                           return false;
                    }
                }
                if ( (vallen >= 9 && \"2001:0db8\" == vallow.substr(0, 9))
                  || (vallen >= 2 && \"5f\" == vallow.substr(0, 2))
                  || (vallen >= 4 && \"3ff3\" == vallow.substr(0, 4))
                  || (vallen >= 8 && \"2001:001\" == vallow.substr(0, 8)) )
                {
                    return false;
                }
            break;
        }

        return true;
    };

    value = String(value);

    var result = false;
    switch (params.version) {
        case '4':
            result = isIPv4(value);
            break;
        case '6':
            result = isIPv6(value);
            break;
        case 'all':
            result = isIPv4(value) || isIPv6(value);
            break;
        case '4_no_priv':
            result = isIPv4(value) && isIPv4_no_priv(value);
            break;
        case '6_no_priv':
            result = isIPv6(value) && isIPv6_no_priv(value);
            break;
        case 'all_no_priv':
            result = ( (isIPv4(value) && isIPv4_no_priv(value))
                    || (isIPv6(value) && isIPv6_no_priv(value)) );
            break;
        case '4_no_res':
            result = isIPv4(value) && isIPv4_no_res(value);
            break;
        case '6_no_res':
            result = isIPv6(value) && isIPv6_no_res(value);
            break;
        case 'all_no_res':
            result = ( (isIPv4(value) && isIPv4_no_res(value))
                    || (isIPv6(value) && isIPv6_no_res(value)) );
            break;
        case '4_public':
            result = isIPv4(value) && isIPv4_no_priv(value) && isIPv4_no_res(value);
            break;
        case '6_public':
            result = isIPv6(value) && isIPv6_no_priv(value) && isIPv6_no_res(value);
            break;
        case 'all_public':
            result = ( (isIPv4(value) && isIPv4_no_priv(value) && isIPv4_no_res(value))
                    || (isIPv6(value) && isIPv6_no_priv(value) && isIPv6_no_res(value)) );
            break;
        default:
            result = false
            break;
    }

    return result ? result : getComputeMessage(params.message);
}";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Constraints:IpValidator.js.twig";
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

<?php

/* WebProfilerBundle:Profiler:base_js.html.twig */
class __TwigTemplate_7568421307cdb5250d6d245bec458d5881e0d3b8b1e0a87418b007093cdcfa8d extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  810 => 492,  807 => 491,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  727 => 476,  710 => 475,  706 => 473,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  649 => 462,  625 => 453,  620 => 451,  601 => 446,  549 => 411,  532 => 410,  529 => 409,  517 => 404,  389 => 160,  386 => 159,  358 => 151,  326 => 138,  302 => 125,  296 => 121,  363 => 153,  357 => 123,  344 => 119,  332 => 116,  327 => 114,  318 => 111,  274 => 110,  263 => 95,  255 => 101,  231 => 83,  672 => 345,  664 => 342,  660 => 464,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  629 => 454,  613 => 320,  606 => 449,  593 => 310,  591 => 309,  581 => 305,  577 => 303,  541 => 290,  533 => 284,  531 => 283,  527 => 408,  522 => 406,  519 => 278,  515 => 276,  509 => 272,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  465 => 249,  459 => 246,  438 => 236,  436 => 235,  428 => 230,  418 => 224,  412 => 222,  410 => 221,  400 => 214,  397 => 213,  376 => 205,  367 => 155,  347 => 191,  313 => 183,  297 => 104,  288 => 118,  462 => 202,  446 => 197,  439 => 195,  431 => 189,  429 => 188,  408 => 176,  401 => 172,  394 => 168,  373 => 156,  361 => 152,  351 => 120,  342 => 137,  335 => 134,  325 => 129,  323 => 128,  320 => 127,  300 => 105,  286 => 112,  270 => 102,  226 => 84,  216 => 79,  191 => 67,  257 => 98,  198 => 76,  161 => 63,  76 => 34,  1214 => 513,  1208 => 511,  1202 => 509,  1200 => 508,  1198 => 507,  1194 => 506,  1185 => 505,  1183 => 504,  1180 => 503,  1167 => 497,  1161 => 495,  1155 => 493,  1153 => 492,  1151 => 491,  1147 => 490,  1141 => 489,  1139 => 488,  1136 => 487,  1123 => 481,  1117 => 479,  1111 => 477,  1109 => 476,  1107 => 475,  1103 => 474,  1097 => 473,  1091 => 472,  1087 => 471,  1083 => 470,  1079 => 469,  1073 => 468,  1071 => 467,  1068 => 466,  1059 => 461,  1055 => 460,  1053 => 459,  1050 => 458,  1040 => 450,  1038 => 449,  1034 => 448,  1032 => 447,  1029 => 446,  1022 => 440,  1016 => 438,  1014 => 433,  1012 => 432,  1008 => 431,  1005 => 429,  1003 => 428,  1001 => 427,  998 => 426,  991 => 420,  985 => 418,  983 => 413,  981 => 412,  977 => 411,  974 => 409,  972 => 408,  970 => 407,  967 => 406,  960 => 402,  958 => 401,  955 => 400,  950 => 396,  947 => 394,  945 => 393,  943 => 392,  940 => 391,  932 => 386,  930 => 385,  906 => 384,  903 => 382,  900 => 380,  898 => 379,  896 => 378,  894 => 377,  891 => 376,  886 => 372,  884 => 371,  882 => 370,  880 => 369,  877 => 368,  872 => 362,  870 => 361,  867 => 360,  862 => 356,  860 => 355,  858 => 354,  856 => 353,  853 => 352,  848 => 348,  845 => 346,  843 => 345,  841 => 344,  839 => 343,  837 => 342,  832 => 338,  830 => 337,  828 => 336,  822 => 335,  820 => 334,  817 => 332,  815 => 331,  811 => 330,  809 => 329,  806 => 328,  801 => 324,  799 => 319,  796 => 489,  791 => 314,  785 => 309,  783 => 308,  778 => 306,  776 => 305,  761 => 304,  758 => 301,  756 => 300,  753 => 298,  751 => 297,  748 => 295,  746 => 478,  744 => 292,  742 => 291,  740 => 290,  737 => 289,  732 => 283,  730 => 282,  728 => 281,  725 => 280,  720 => 276,  718 => 275,  716 => 274,  713 => 273,  702 => 472,  699 => 267,  697 => 266,  695 => 265,  692 => 264,  687 => 260,  685 => 259,  683 => 258,  680 => 257,  675 => 253,  673 => 252,  671 => 251,  668 => 344,  663 => 246,  661 => 245,  659 => 244,  656 => 243,  650 => 239,  648 => 238,  646 => 237,  643 => 236,  638 => 232,  636 => 231,  634 => 456,  631 => 327,  626 => 325,  624 => 224,  622 => 452,  619 => 222,  614 => 218,  612 => 217,  609 => 319,  604 => 212,  602 => 317,  600 => 210,  597 => 209,  592 => 205,  590 => 204,  588 => 308,  585 => 307,  579 => 196,  576 => 194,  574 => 193,  572 => 192,  569 => 300,  567 => 414,  565 => 188,  563 => 298,  559 => 296,  557 => 295,  555 => 184,  552 => 293,  550 => 181,  548 => 292,  545 => 291,  539 => 174,  537 => 172,  536 => 171,  535 => 170,  534 => 169,  530 => 168,  528 => 167,  525 => 280,  523 => 164,  521 => 163,  512 => 157,  510 => 156,  506 => 154,  504 => 153,  500 => 152,  498 => 151,  495 => 149,  493 => 148,  491 => 147,  488 => 146,  473 => 254,  468 => 140,  451 => 135,  448 => 240,  422 => 226,  419 => 126,  417 => 125,  415 => 180,  411 => 123,  392 => 121,  390 => 120,  382 => 115,  380 => 158,  372 => 110,  370 => 109,  366 => 107,  353 => 149,  338 => 135,  336 => 97,  334 => 141,  331 => 140,  317 => 185,  315 => 131,  310 => 81,  308 => 80,  304 => 181,  291 => 102,  289 => 113,  281 => 114,  276 => 111,  271 => 62,  265 => 105,  253 => 100,  251 => 51,  249 => 50,  237 => 45,  233 => 87,  218 => 34,  215 => 37,  206 => 27,  160 => 91,  244 => 90,  239 => 93,  213 => 78,  210 => 77,  207 => 75,  205 => 108,  202 => 94,  200 => 72,  186 => 69,  329 => 188,  306 => 107,  303 => 106,  301 => 77,  290 => 119,  287 => 115,  284 => 113,  282 => 112,  279 => 111,  275 => 105,  272 => 109,  267 => 101,  262 => 98,  259 => 103,  250 => 98,  248 => 97,  245 => 96,  232 => 88,  228 => 89,  225 => 84,  167 => 95,  188 => 90,  129 => 71,  518 => 162,  511 => 174,  508 => 155,  502 => 133,  492 => 120,  471 => 253,  467 => 117,  463 => 248,  458 => 115,  454 => 244,  452 => 113,  449 => 198,  441 => 196,  426 => 84,  406 => 71,  399 => 46,  396 => 45,  391 => 42,  383 => 207,  378 => 157,  371 => 156,  369 => 173,  364 => 106,  352 => 167,  348 => 140,  345 => 147,  343 => 146,  340 => 145,  328 => 139,  324 => 113,  321 => 135,  319 => 86,  316 => 156,  307 => 128,  295 => 178,  293 => 120,  280 => 134,  277 => 133,  260 => 129,  256 => 96,  236 => 92,  223 => 109,  212 => 78,  195 => 112,  192 => 21,  180 => 103,  165 => 83,  197 => 69,  194 => 68,  184 => 63,  113 => 48,  65 => 22,  181 => 65,  170 => 84,  155 => 47,  153 => 77,  90 => 42,  174 => 65,  152 => 46,  148 => 83,  127 => 35,  104 => 32,  100 => 39,  137 => 77,  126 => 48,  53 => 12,  23 => 5,  222 => 83,  190 => 76,  185 => 74,  178 => 59,  175 => 58,  124 => 68,  110 => 60,  97 => 43,  84 => 40,  81 => 23,  58 => 25,  34 => 5,  172 => 57,  150 => 55,  146 => 81,  134 => 39,  118 => 49,  114 => 62,  77 => 20,  70 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 83,  413 => 134,  409 => 122,  407 => 131,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 177,  368 => 108,  365 => 197,  362 => 110,  360 => 109,  355 => 150,  341 => 118,  337 => 103,  322 => 101,  314 => 130,  312 => 130,  309 => 129,  305 => 95,  298 => 120,  294 => 119,  285 => 175,  283 => 115,  278 => 98,  268 => 85,  264 => 104,  258 => 94,  252 => 102,  247 => 98,  241 => 93,  229 => 87,  220 => 81,  214 => 69,  177 => 102,  169 => 95,  140 => 58,  132 => 66,  128 => 83,  107 => 59,  61 => 12,  273 => 174,  269 => 107,  254 => 101,  243 => 92,  240 => 124,  238 => 112,  235 => 89,  230 => 42,  227 => 86,  224 => 81,  221 => 41,  219 => 108,  217 => 38,  208 => 76,  204 => 72,  179 => 98,  159 => 90,  143 => 51,  135 => 76,  119 => 40,  102 => 24,  71 => 31,  67 => 14,  63 => 18,  59 => 16,  38 => 18,  94 => 21,  89 => 39,  85 => 24,  75 => 19,  68 => 30,  56 => 16,  87 => 41,  21 => 3,  26 => 6,  93 => 27,  88 => 25,  78 => 31,  46 => 13,  27 => 7,  44 => 20,  31 => 8,  28 => 3,  201 => 106,  196 => 92,  183 => 17,  171 => 69,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 72,  138 => 73,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 33,  62 => 27,  49 => 14,  24 => 4,  25 => 6,  19 => 1,  79 => 18,  72 => 18,  69 => 17,  47 => 21,  40 => 14,  37 => 14,  22 => 17,  246 => 136,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 58,  111 => 47,  108 => 39,  101 => 31,  98 => 45,  96 => 37,  83 => 33,  74 => 33,  66 => 26,  55 => 24,  52 => 12,  50 => 22,  43 => 12,  41 => 19,  35 => 9,  32 => 6,  29 => 7,  209 => 82,  203 => 73,  199 => 93,  193 => 82,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 60,  149 => 91,  147 => 75,  144 => 42,  141 => 73,  133 => 67,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 48,  99 => 23,  95 => 51,  92 => 43,  86 => 38,  82 => 19,  80 => 27,  73 => 33,  64 => 13,  60 => 21,  57 => 24,  54 => 17,  51 => 13,  48 => 16,  45 => 9,  42 => 11,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}

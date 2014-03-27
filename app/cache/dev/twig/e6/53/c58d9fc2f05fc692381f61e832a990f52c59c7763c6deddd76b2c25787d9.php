<?php

/* ::nav.html.twig */
class __TwigTemplate_e653c58d9fc2f05fc692381f61e832a990f52c59c7763c6deddd76b2c25787d9 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"col-lg-10\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
            <div class=\"logo\">
                <a class=\"navbar-brand\" href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("jlfa_web_site_homepage");
        echo "\">
                    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo_extlib.svg"), "html", null, true);
        echo "\" onerror=\"this.onerror=null; this.src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo_extlib.svg"), "html", null, true);
        echo "'\">
                    <h1>ExtendScript library</h1>
                </a>
            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
            <ul class=\"nav navbar-nav navbar-left\">
                <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("jlfa_web_site_homepage");
        echo "\">Home</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Get started<b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("jlfa_web_site_startpage");
        echo "\">Start</a></li>
                        <li class=\"divider\"></li>
                        <li class=\"dropdown-header\">Documentation</li>
                        <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("jlfa_jsdoc");
        echo "\" target=\"_blank\">View html doc</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Get involved<b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("jlfa_web_site_participatepage");
        echo "\">Participate</a></li>
                        <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("forum_jlfa_homepage");
        echo "\">Forum</a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("sdzblog_accueil");
        echo "\">News</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">About<b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("jlfa_web_site_contributorspage");
        echo "\">Contributors</a></li>
                        <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("jlfa_web_site_licencespage");
        echo "\">Licences</a></li>
                    </ul>
                </li>
            </ul>
            ";
        // line 49
        echo "            ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 50
            echo "            <ul class=\"nav navbar-nav navbar-right\">
              <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
            echo "<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
                    <li><a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Profile</a></li>
                </ul>
              </li>
            </ul>
            ";
            // line 60
            echo "            ";
        } else {
            // line 61
            echo "              <ul class=\"nav navbar-nav navbar-right\">
                  <li><a href=\"";
            // line 62
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connection</a></li>
              </ul>
            ";
        }
        // line 65
        echo "        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
      <div class=\"col-lg-1 navbar-collapse pull-right\">
        <ul id=\"language-screen\" class=\"language nav navbar-nav\">
              <li class=\"dropdown\">
                  ";
        // line 70
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            // line 71
            echo "                      ";
            $context["flag_class"] = "flag-fr";
            // line 72
            echo "                  ";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "en")) {
            // line 73
            echo "                      ";
            $context["flag_class"] = "flag-en";
            // line 74
            echo "                  ";
        } else {
            // line 75
            echo "                      ";
            $context["flag_class"] = "flag-de";
            // line 76
            echo "                  ";
        }
        // line 77
        echo "                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"glyphicon ";
        echo twig_escape_filter($this->env, $this->getContext($context, "flag_class"), "html", null, true);
        echo "\"></span><b class=\"caret\"></b></a>
                  <ul class=\"dropdown-menu\">
                      <li><a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method"), twig_array_merge(twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route_params"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "query"), "all")), array("_locale" => "fr"))), "html", null, true);
        // line 84
        echo "\">
                          <span class=\"glyphicon flag-fr\"></span></a>
                      </li>
                      <li><a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method"), twig_array_merge(twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route_params"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "query"), "all")), array("_locale" => "de"))), "html", null, true);
        // line 92
        echo "\">
                          <span class=\"glyphicon flag-de\"></span></a>
                      </li>
                      <li><a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method"), twig_array_merge(twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route_params"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "query"), "all")), array("_locale" => "en"))), "html", null, true);
        // line 100
        echo "\">
                          <span class=\"glyphicon flag-en\"></span></a>
                      </li>
                  </ul>
              </li>
          </ul>
      </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "::nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1106 => 316,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1051 => 291,  1048 => 290,  1036 => 284,  1027 => 281,  1024 => 280,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  964 => 255,  961 => 254,  952 => 251,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  897 => 227,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  833 => 199,  825 => 196,  814 => 191,  812 => 190,  798 => 184,  793 => 182,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  707 => 148,  696 => 140,  689 => 137,  678 => 133,  666 => 126,  662 => 125,  658 => 124,  654 => 123,  635 => 117,  617 => 112,  598 => 107,  596 => 106,  564 => 99,  547 => 93,  524 => 90,  503 => 81,  501 => 80,  496 => 79,  490 => 77,  478 => 74,  470 => 73,  464 => 71,  456 => 68,  450 => 64,  442 => 62,  433 => 60,  414 => 52,  405 => 49,  403 => 48,  388 => 42,  385 => 41,  377 => 37,  350 => 26,  311 => 14,  299 => 8,  266 => 366,  349 => 323,  20 => 1,  810 => 492,  807 => 491,  792 => 488,  788 => 486,  775 => 485,  749 => 162,  727 => 476,  710 => 149,  706 => 473,  698 => 471,  694 => 138,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  649 => 122,  625 => 453,  620 => 451,  601 => 446,  549 => 411,  532 => 410,  529 => 92,  517 => 404,  389 => 160,  386 => 159,  358 => 151,  326 => 138,  302 => 281,  296 => 121,  363 => 32,  357 => 123,  344 => 24,  332 => 20,  327 => 114,  318 => 111,  274 => 110,  263 => 365,  255 => 353,  231 => 83,  672 => 345,  664 => 342,  660 => 464,  651 => 337,  647 => 336,  644 => 335,  640 => 119,  629 => 454,  613 => 320,  606 => 449,  593 => 105,  591 => 309,  581 => 305,  577 => 303,  541 => 290,  533 => 284,  531 => 283,  527 => 91,  522 => 406,  519 => 278,  515 => 85,  509 => 83,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  465 => 249,  459 => 69,  438 => 236,  436 => 235,  428 => 59,  418 => 224,  412 => 222,  410 => 221,  400 => 47,  397 => 213,  376 => 205,  367 => 155,  347 => 322,  313 => 15,  297 => 104,  288 => 4,  462 => 202,  446 => 197,  439 => 195,  431 => 189,  429 => 188,  408 => 50,  401 => 172,  394 => 168,  373 => 156,  361 => 333,  351 => 120,  342 => 23,  335 => 21,  325 => 129,  323 => 128,  320 => 127,  300 => 280,  286 => 112,  270 => 102,  226 => 84,  216 => 79,  191 => 246,  257 => 98,  198 => 76,  161 => 76,  76 => 36,  1214 => 513,  1208 => 511,  1202 => 347,  1200 => 508,  1198 => 346,  1194 => 506,  1185 => 505,  1183 => 504,  1180 => 503,  1167 => 497,  1161 => 495,  1155 => 493,  1153 => 492,  1151 => 491,  1147 => 490,  1141 => 489,  1139 => 488,  1136 => 487,  1123 => 481,  1117 => 479,  1111 => 477,  1109 => 317,  1107 => 475,  1103 => 315,  1097 => 473,  1091 => 472,  1087 => 471,  1083 => 470,  1079 => 306,  1073 => 468,  1071 => 467,  1068 => 466,  1059 => 461,  1055 => 460,  1053 => 292,  1050 => 458,  1040 => 285,  1038 => 449,  1034 => 448,  1032 => 283,  1029 => 282,  1022 => 440,  1016 => 276,  1014 => 272,  1012 => 271,  1008 => 431,  1005 => 429,  1003 => 428,  1001 => 427,  998 => 426,  991 => 420,  985 => 418,  983 => 413,  981 => 412,  977 => 411,  974 => 409,  972 => 408,  970 => 257,  967 => 256,  960 => 402,  958 => 253,  955 => 252,  950 => 250,  947 => 249,  945 => 393,  943 => 392,  940 => 391,  932 => 386,  930 => 385,  906 => 384,  903 => 229,  900 => 228,  898 => 379,  896 => 378,  894 => 226,  891 => 376,  886 => 372,  884 => 371,  882 => 370,  880 => 369,  877 => 368,  872 => 362,  870 => 361,  867 => 360,  862 => 212,  860 => 211,  858 => 354,  856 => 353,  853 => 352,  848 => 348,  845 => 346,  843 => 345,  841 => 203,  839 => 343,  837 => 342,  832 => 338,  830 => 198,  828 => 197,  822 => 335,  820 => 334,  817 => 192,  815 => 331,  811 => 330,  809 => 189,  806 => 328,  801 => 185,  799 => 319,  796 => 183,  791 => 314,  785 => 178,  783 => 177,  778 => 306,  776 => 305,  761 => 304,  758 => 301,  756 => 165,  753 => 164,  751 => 163,  748 => 295,  746 => 161,  744 => 292,  742 => 291,  740 => 290,  737 => 289,  732 => 283,  730 => 282,  728 => 281,  725 => 280,  720 => 276,  718 => 275,  716 => 274,  713 => 273,  702 => 472,  699 => 142,  697 => 141,  695 => 139,  692 => 264,  687 => 260,  685 => 259,  683 => 135,  680 => 134,  675 => 132,  673 => 252,  671 => 251,  668 => 344,  663 => 246,  661 => 245,  659 => 244,  656 => 243,  650 => 239,  648 => 238,  646 => 237,  643 => 120,  638 => 118,  636 => 231,  634 => 456,  631 => 327,  626 => 325,  624 => 224,  622 => 452,  619 => 113,  614 => 111,  612 => 217,  609 => 319,  604 => 212,  602 => 317,  600 => 210,  597 => 209,  592 => 205,  590 => 204,  588 => 308,  585 => 307,  579 => 196,  576 => 101,  574 => 193,  572 => 192,  569 => 300,  567 => 414,  565 => 188,  563 => 298,  559 => 296,  557 => 96,  555 => 95,  552 => 293,  550 => 94,  548 => 292,  545 => 291,  539 => 174,  537 => 172,  536 => 171,  535 => 170,  534 => 169,  530 => 168,  528 => 167,  525 => 280,  523 => 164,  521 => 163,  512 => 84,  510 => 156,  506 => 154,  504 => 153,  500 => 152,  498 => 151,  495 => 149,  493 => 78,  491 => 147,  488 => 146,  473 => 254,  468 => 140,  451 => 135,  448 => 240,  422 => 226,  419 => 126,  417 => 125,  415 => 180,  411 => 123,  392 => 121,  390 => 43,  382 => 115,  380 => 158,  372 => 110,  370 => 109,  366 => 33,  353 => 149,  338 => 135,  336 => 97,  334 => 141,  331 => 140,  317 => 185,  315 => 131,  310 => 81,  308 => 13,  304 => 181,  291 => 102,  289 => 113,  281 => 411,  276 => 395,  271 => 374,  265 => 105,  253 => 342,  251 => 51,  249 => 50,  237 => 45,  233 => 304,  218 => 34,  215 => 280,  206 => 27,  160 => 91,  244 => 90,  239 => 93,  213 => 78,  210 => 270,  207 => 269,  205 => 108,  202 => 266,  200 => 72,  186 => 100,  329 => 188,  306 => 107,  303 => 106,  301 => 77,  290 => 5,  287 => 115,  284 => 113,  282 => 112,  279 => 111,  275 => 105,  272 => 109,  267 => 101,  262 => 98,  259 => 103,  250 => 341,  248 => 336,  245 => 335,  232 => 88,  228 => 89,  225 => 298,  167 => 95,  188 => 90,  129 => 25,  518 => 162,  511 => 174,  508 => 155,  502 => 133,  492 => 120,  471 => 253,  467 => 72,  463 => 248,  458 => 115,  454 => 244,  452 => 113,  449 => 198,  441 => 196,  426 => 58,  406 => 71,  399 => 46,  396 => 45,  391 => 42,  383 => 207,  378 => 157,  371 => 35,  369 => 173,  364 => 106,  352 => 167,  348 => 140,  345 => 147,  343 => 146,  340 => 145,  328 => 139,  324 => 113,  321 => 135,  319 => 86,  316 => 16,  307 => 128,  295 => 178,  293 => 6,  280 => 134,  277 => 133,  260 => 363,  256 => 96,  236 => 92,  223 => 109,  212 => 279,  195 => 112,  192 => 21,  180 => 103,  165 => 83,  197 => 249,  194 => 248,  184 => 95,  113 => 40,  65 => 16,  181 => 232,  170 => 79,  155 => 74,  153 => 37,  90 => 27,  174 => 217,  152 => 73,  148 => 83,  127 => 35,  104 => 90,  100 => 49,  137 => 65,  126 => 147,  53 => 5,  23 => 3,  222 => 297,  190 => 76,  185 => 74,  178 => 59,  175 => 58,  124 => 132,  110 => 38,  97 => 28,  84 => 24,  81 => 30,  58 => 2,  34 => 31,  172 => 84,  150 => 55,  146 => 71,  134 => 161,  118 => 55,  114 => 111,  77 => 7,  70 => 17,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 61,  435 => 146,  430 => 144,  427 => 143,  423 => 57,  413 => 134,  409 => 122,  407 => 131,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 36,  368 => 34,  365 => 197,  362 => 110,  360 => 109,  355 => 27,  341 => 118,  337 => 22,  322 => 101,  314 => 130,  312 => 130,  309 => 129,  305 => 95,  298 => 120,  294 => 119,  285 => 3,  283 => 115,  278 => 410,  268 => 373,  264 => 104,  258 => 354,  252 => 102,  247 => 98,  241 => 93,  229 => 87,  220 => 290,  214 => 69,  177 => 87,  169 => 210,  140 => 58,  132 => 26,  128 => 61,  107 => 52,  61 => 3,  273 => 394,  269 => 107,  254 => 101,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 81,  221 => 41,  219 => 108,  217 => 289,  208 => 76,  204 => 267,  179 => 92,  159 => 196,  143 => 31,  135 => 76,  119 => 117,  102 => 30,  71 => 19,  67 => 16,  63 => 29,  59 => 6,  38 => 6,  94 => 57,  89 => 43,  85 => 26,  75 => 13,  68 => 5,  56 => 12,  87 => 26,  21 => 2,  26 => 10,  93 => 44,  88 => 25,  78 => 14,  46 => 41,  27 => 7,  44 => 13,  31 => 5,  28 => 4,  201 => 106,  196 => 92,  183 => 17,  171 => 44,  166 => 42,  163 => 41,  158 => 75,  156 => 38,  151 => 188,  142 => 72,  138 => 28,  136 => 168,  121 => 23,  117 => 39,  105 => 30,  91 => 56,  62 => 15,  49 => 12,  24 => 1,  25 => 6,  19 => 1,  79 => 32,  72 => 35,  69 => 12,  47 => 22,  40 => 6,  37 => 8,  22 => 3,  246 => 136,  157 => 89,  145 => 74,  139 => 169,  131 => 62,  123 => 24,  120 => 31,  115 => 20,  111 => 19,  108 => 33,  101 => 29,  98 => 16,  96 => 67,  83 => 11,  74 => 11,  66 => 12,  55 => 1,  52 => 13,  50 => 22,  43 => 40,  41 => 37,  35 => 9,  32 => 12,  29 => 11,  209 => 82,  203 => 73,  199 => 265,  193 => 82,  189 => 240,  187 => 75,  182 => 87,  176 => 223,  173 => 85,  168 => 43,  164 => 77,  162 => 59,  154 => 189,  149 => 72,  147 => 75,  144 => 70,  141 => 175,  133 => 67,  130 => 46,  125 => 60,  122 => 41,  116 => 116,  112 => 54,  109 => 31,  106 => 104,  103 => 50,  99 => 68,  95 => 15,  92 => 14,  86 => 12,  82 => 39,  80 => 23,  73 => 23,  64 => 4,  60 => 20,  57 => 26,  54 => 8,  51 => 14,  48 => 47,  45 => 11,  42 => 5,  39 => 9,  36 => 13,  33 => 6,  30 => 3,);
    }
}

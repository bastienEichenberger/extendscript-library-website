<?php

/* JlfaForumBundle:User/Post/Partial:item_post_body.html.twig */
class __TwigTemplate_4bfac181c5bf00e9b9ca67bdf6664b712f55d96fdaf42eab49e3250f5f4cb056 extends Twig_Template
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
        ob_start();
        // line 3
        if ((($this->getAttribute($this->getContext($context, "post"), "isDeleted") == false) || $this->env->getExtension('security')->isGranted("ROLE_MODERATOR"))) {
            // line 4
            if ($this->getAttribute($this->getContext($context, "post"), "getEditedDate")) {
                // line 5
                echo "<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-pencil\"></i>";
                // line 9
                echo $this->env->getExtension('translator')->trans("post.edited-by");
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "getEditedBy"), "html", null, true);
                // line 12
                echo "&nbsp;&#183;

\t\t\t\t\t<abbr class=\"timestamper\" title=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "getEditedDate"), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
                echo "\">";
                // line 15
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "getEditedDate"), $this->getAttribute($this->getAttribute($this->getContext($context, "ccdn_forum_forum"), "item_post"), "edited_datetime_format")), "html", null, true);
                // line 16
                echo "</abbr>
\t\t\t\t</div>
\t\t    </div>";
            }
        }
        // line 22
        if (($this->getAttribute($this->getContext($context, "post"), "isDeleted") == true)) {
            // line 23
            echo "<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t        <i class=\"glyphicon glyphicon-trash\"></i>";
            // line 27
            echo $this->env->getExtension('translator')->trans("post.deleted-by");
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "getDeletedBy"), "html", null, true);
            // line 30
            echo "&nbsp;&#183;

\t\t        <abbr class=\"timestamper\" title=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "getDeletedDate"), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
            echo "\">";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "getDeletedDate"), $this->getAttribute($this->getAttribute($this->getContext($context, "ccdn_forum_forum"), "item_post"), "deleted_datetime_format")), "html", null, true);
            // line 34
            echo "</abbr>
\t\t\t</div>";
            // line 37
            if ($this->env->getExtension('security')->isGranted("ROLE_MODERATOR")) {
                // line 38
                echo "<div class=\"pull-right\">
\t                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#post_";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "getId", array(), "method"), "html", null, true);
                echo "\" href=\"#post_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "getId", array(), "method"), "html", null, true);
                echo "_body\">";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.show"), "html", null, true);
                // line 41
                echo "</a>
\t\t\t\t</div>";
            }
            // line 44
            echo "</div>";
            // line 46
            if ($this->env->getExtension('security')->isGranted("ROLE_MODERATOR")) {
                // line 47
                echo "<section class=\"accordion-body collapse\" id=\"post_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "getId", array(), "method"), "html", null, true);
                echo "_body\">";
                // line 48
                $this->env->loadTemplate("CCDNForumForumBundle:User:Post/Partial/body_content.html.twig")->display(array_merge($context, array("post" => $this->getContext($context, "post"))));
                // line 49
                echo "</section>";
            }
        } else {
            // line 52
            echo "<section id=\"post_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "getId", array(), "method"), "html", null, true);
            echo "_body\">";
            // line 53
            $this->env->loadTemplate("CCDNForumForumBundle:User:Post/Partial/body_content.html.twig")->display(array_merge($context, array("post" => $this->getContext($context, "post"))));
            // line 54
            echo "</section>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "JlfaForumBundle:User/Post/Partial:item_post_body.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 98,  198 => 76,  161 => 67,  76 => 10,  1214 => 513,  1208 => 511,  1202 => 509,  1200 => 508,  1198 => 507,  1194 => 506,  1185 => 505,  1183 => 504,  1180 => 503,  1167 => 497,  1161 => 495,  1155 => 493,  1153 => 492,  1151 => 491,  1147 => 490,  1141 => 489,  1139 => 488,  1136 => 487,  1123 => 481,  1117 => 479,  1111 => 477,  1109 => 476,  1107 => 475,  1103 => 474,  1097 => 473,  1091 => 472,  1087 => 471,  1083 => 470,  1079 => 469,  1073 => 468,  1071 => 467,  1068 => 466,  1059 => 461,  1055 => 460,  1053 => 459,  1050 => 458,  1040 => 450,  1038 => 449,  1034 => 448,  1032 => 447,  1029 => 446,  1022 => 440,  1016 => 438,  1014 => 433,  1012 => 432,  1008 => 431,  1005 => 429,  1003 => 428,  1001 => 427,  998 => 426,  991 => 420,  985 => 418,  983 => 413,  981 => 412,  977 => 411,  974 => 409,  972 => 408,  970 => 407,  967 => 406,  960 => 402,  958 => 401,  955 => 400,  950 => 396,  947 => 394,  945 => 393,  943 => 392,  940 => 391,  932 => 386,  930 => 385,  906 => 384,  903 => 382,  900 => 380,  898 => 379,  896 => 378,  894 => 377,  891 => 376,  886 => 372,  884 => 371,  882 => 370,  880 => 369,  877 => 368,  872 => 362,  870 => 361,  867 => 360,  862 => 356,  860 => 355,  858 => 354,  856 => 353,  853 => 352,  848 => 348,  845 => 346,  843 => 345,  841 => 344,  839 => 343,  837 => 342,  832 => 338,  830 => 337,  828 => 336,  822 => 335,  820 => 334,  817 => 332,  815 => 331,  811 => 330,  809 => 329,  806 => 328,  801 => 324,  799 => 319,  796 => 318,  791 => 314,  785 => 309,  783 => 308,  778 => 306,  776 => 305,  761 => 304,  758 => 301,  756 => 300,  753 => 298,  751 => 297,  748 => 295,  746 => 294,  744 => 292,  742 => 291,  740 => 290,  737 => 289,  732 => 283,  730 => 282,  728 => 281,  725 => 280,  720 => 276,  718 => 275,  716 => 274,  713 => 273,  702 => 269,  699 => 267,  697 => 266,  695 => 265,  692 => 264,  687 => 260,  685 => 259,  683 => 258,  680 => 257,  675 => 253,  673 => 252,  671 => 251,  668 => 250,  663 => 246,  661 => 245,  659 => 244,  656 => 243,  650 => 239,  648 => 238,  646 => 237,  643 => 236,  638 => 232,  636 => 231,  634 => 230,  631 => 229,  626 => 225,  624 => 224,  622 => 223,  619 => 222,  614 => 218,  612 => 217,  609 => 216,  604 => 212,  602 => 211,  600 => 210,  597 => 209,  592 => 205,  590 => 204,  588 => 202,  585 => 201,  579 => 196,  576 => 194,  574 => 193,  572 => 192,  569 => 190,  567 => 189,  565 => 188,  563 => 187,  559 => 186,  557 => 185,  555 => 184,  552 => 182,  550 => 181,  548 => 180,  545 => 179,  539 => 174,  537 => 172,  536 => 171,  535 => 170,  534 => 169,  530 => 168,  528 => 167,  525 => 165,  523 => 164,  521 => 163,  512 => 157,  510 => 156,  506 => 154,  504 => 153,  500 => 152,  498 => 151,  495 => 149,  493 => 148,  491 => 147,  488 => 146,  473 => 142,  468 => 140,  451 => 135,  448 => 134,  422 => 128,  419 => 126,  417 => 125,  415 => 124,  411 => 123,  392 => 121,  390 => 120,  382 => 115,  380 => 114,  372 => 110,  370 => 109,  366 => 107,  353 => 103,  338 => 99,  336 => 97,  334 => 96,  331 => 95,  317 => 85,  315 => 84,  310 => 81,  308 => 80,  304 => 78,  291 => 71,  289 => 70,  281 => 65,  276 => 64,  271 => 62,  265 => 60,  253 => 94,  251 => 51,  249 => 50,  237 => 45,  233 => 43,  218 => 34,  215 => 33,  206 => 27,  160 => 6,  244 => 90,  239 => 93,  213 => 82,  210 => 29,  207 => 83,  205 => 79,  202 => 76,  200 => 75,  186 => 69,  329 => 133,  306 => 79,  303 => 122,  301 => 77,  290 => 117,  287 => 115,  284 => 113,  282 => 112,  279 => 111,  275 => 110,  272 => 109,  267 => 61,  262 => 59,  259 => 102,  250 => 98,  248 => 97,  245 => 96,  232 => 91,  228 => 89,  225 => 84,  167 => 63,  188 => 70,  129 => 63,  518 => 162,  511 => 174,  508 => 155,  502 => 133,  492 => 120,  471 => 141,  467 => 117,  463 => 116,  458 => 115,  454 => 114,  452 => 113,  449 => 112,  441 => 100,  426 => 84,  406 => 71,  399 => 46,  396 => 45,  391 => 42,  383 => 37,  378 => 113,  371 => 176,  369 => 173,  364 => 106,  352 => 167,  348 => 166,  345 => 165,  343 => 102,  340 => 100,  328 => 160,  324 => 89,  321 => 87,  319 => 86,  316 => 156,  307 => 150,  295 => 143,  293 => 142,  280 => 134,  277 => 133,  260 => 129,  256 => 54,  236 => 92,  223 => 109,  212 => 105,  195 => 22,  192 => 21,  180 => 71,  165 => 83,  197 => 23,  194 => 84,  184 => 96,  113 => 32,  65 => 33,  181 => 71,  170 => 85,  155 => 75,  153 => 78,  90 => 47,  174 => 15,  152 => 61,  148 => 59,  127 => 62,  104 => 53,  100 => 52,  137 => 68,  126 => 48,  53 => 17,  23 => 4,  222 => 36,  190 => 72,  185 => 61,  178 => 17,  175 => 89,  124 => 64,  110 => 44,  97 => 47,  84 => 39,  81 => 13,  58 => 30,  34 => 6,  172 => 14,  150 => 60,  146 => 61,  134 => 55,  118 => 60,  114 => 59,  77 => 22,  70 => 37,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 136,  444 => 101,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 83,  413 => 134,  409 => 122,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 119,  384 => 121,  381 => 120,  379 => 119,  374 => 177,  368 => 108,  365 => 111,  362 => 110,  360 => 109,  355 => 104,  341 => 105,  337 => 103,  322 => 101,  314 => 130,  312 => 82,  309 => 126,  305 => 95,  298 => 120,  294 => 119,  285 => 67,  283 => 66,  278 => 86,  268 => 85,  264 => 104,  258 => 81,  252 => 102,  247 => 98,  241 => 88,  229 => 73,  220 => 35,  214 => 69,  177 => 72,  169 => 13,  140 => 57,  132 => 66,  128 => 50,  107 => 57,  61 => 21,  273 => 63,  269 => 108,  254 => 101,  243 => 88,  240 => 124,  238 => 112,  235 => 44,  230 => 42,  227 => 85,  224 => 71,  221 => 77,  219 => 108,  217 => 83,  208 => 28,  204 => 72,  179 => 67,  159 => 66,  143 => 73,  135 => 67,  119 => 57,  102 => 49,  71 => 42,  67 => 34,  63 => 14,  59 => 21,  38 => 15,  94 => 48,  89 => 19,  85 => 16,  75 => 39,  68 => 32,  56 => 28,  87 => 40,  21 => 3,  26 => 5,  93 => 43,  88 => 46,  78 => 11,  46 => 12,  27 => 2,  44 => 11,  31 => 10,  28 => 29,  201 => 78,  196 => 90,  183 => 72,  171 => 69,  166 => 63,  163 => 8,  158 => 5,  156 => 64,  151 => 77,  142 => 72,  138 => 73,  136 => 56,  121 => 58,  117 => 289,  105 => 56,  91 => 26,  62 => 32,  49 => 16,  24 => 4,  25 => 5,  19 => 1,  79 => 33,  72 => 38,  69 => 6,  47 => 37,  40 => 15,  37 => 14,  22 => 17,  246 => 91,  157 => 81,  145 => 466,  139 => 426,  131 => 65,  123 => 328,  120 => 61,  115 => 59,  111 => 39,  108 => 54,  101 => 229,  98 => 45,  96 => 49,  83 => 36,  74 => 9,  66 => 15,  55 => 3,  52 => 17,  50 => 23,  43 => 9,  41 => 33,  35 => 6,  32 => 5,  29 => 9,  209 => 82,  203 => 79,  199 => 67,  193 => 82,  189 => 71,  187 => 71,  182 => 85,  176 => 16,  173 => 70,  168 => 84,  164 => 70,  162 => 61,  154 => 63,  149 => 503,  147 => 487,  144 => 58,  141 => 446,  133 => 391,  130 => 54,  125 => 61,  122 => 44,  116 => 60,  112 => 58,  109 => 29,  106 => 54,  103 => 55,  99 => 48,  95 => 27,  92 => 44,  86 => 44,  82 => 41,  80 => 40,  73 => 28,  64 => 28,  60 => 21,  57 => 23,  54 => 27,  51 => 16,  48 => 22,  45 => 36,  42 => 16,  39 => 32,  36 => 6,  33 => 12,  30 => 8,);
    }
}

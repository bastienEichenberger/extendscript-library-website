<?php

/* JlfaForumBundle:User/Board/Partial:item_topic_list.html.twig */
class __TwigTemplate_731592771c74ab336e1830d8d403a3329a6e94de1e74a6ab34e1b03ce9842349 extends Twig_Template
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
        // line 2
        echo "<tr>
\t\t<td class=\"center\">";
        // line 4
        if ($this->getAttribute($this->getContext($context, "topic"), "isDeleted")) {
            // line 5
            echo "<i class=\"glyphicon glyphicon-trash\"></i>";
        } else {
            // line 7
            if ($this->getAttribute($this->getContext($context, "topic"), "isClosed")) {
                // line 8
                echo "<i class=\"glyphicon glyph-icon-lock\"></i>";
            } else {
                // line 11
                if (($this->getAttribute($this->getContext($context, "topic"), "cachedReplyCount") > 100)) {
                    // line 12
                    echo "<i class=\"glyphicon glyphicon-fire\"></i>";
                }
            }
        }
        // line 16
        echo "</td>
\t\t<td class=\"center\">
\t\t\t";
        // line 19
        echo "\t\t\t<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => $this->getContext($context, "forumName"), "topicId" => $this->getAttribute($this->getContext($context, "topic"), "getId"))), "html", null, true);
        echo "\">";
        // line 20
        if ($this->getAttribute($this->getContext($context, "topic"), "isSticky")) {
            // line 21
            echo "<i class=\"glyphicon glyphicon-bullhorn\"></i>";
        } else {
            // line 23
            echo "<i class=\"glyphicon glyphicon-comment\"></i>";
        }
        // line 25
        echo "</a>
\t\t</td>
\t\t<td class=\"left\">";
        // line 28
        if ($this->getAttribute($this->getContext($context, "topic"), "getClosedDate")) {
            // line 29
            echo "<span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topic.badge.closed"), "html", null, true);
            echo "</span>&nbsp;";
        }
        // line 32
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => $this->getContext($context, "forumName"), "topicId" => $this->getAttribute($this->getContext($context, "topic"), "getId"))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "topic"), "getTitle"), "html", null, true);
        echo "\">";
        // line 33
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getContext($context, "topic"), "getTitle")), "html", null, true);
        // line 34
        echo "</a>

\t\t\t<br>";
        // line 38
        if ($this->getAttribute($this->getContext($context, "topic"), "getFirstPost")) {
            // line 39
            echo $this->env->getExtension('translator')->trans("post.posted-by");
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "topic"), "getFirstPost"), "getCreatedBy"), "html", null, true);
            // line 42
            echo "&nbsp;&#183;
                <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => $this->getContext($context, "forumName"), "topicId" => $this->getAttribute($this->getContext($context, "topic"), "getId"))), "html", null, true);
            echo "\">
                    <abbr class=\"timestamper\" title=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "topic"), "getFirstPost"), "getCreatedDate"), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
            echo "\">";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "topic"), "getFirstPost"), "getCreatedDate"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "ccdn_forum_forum"), "board"), "user"), "show"), "first_post_datetime_format")), "html", null, true);
            // line 46
            echo "</abbr>
                </a>";
        }
        // line 49
        echo "</td>
\t\t<td class=\"center\">
\t\t\t<span class=\"label label-info lead\" title=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "topic"), "getCachedReplyCount"), "html", null, true);
        echo "\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "topic"), "getCachedReplyCount"), "html", null, true);
        // line 53
        echo "</span>
\t\t</td>
\t\t<td class=\"center\">
\t\t\t<span class=\"label label-info lead\" title=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "topic"), "getCachedViewCount"), "html", null, true);
        echo "\">";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "topic"), "getCachedViewCount"), "html", null, true);
        // line 58
        echo "</span>
\t\t</td>
\t\t<td class=\"center\">";
        // line 61
        if ($this->getAttribute($this->getContext($context, "topic"), "getLastPost")) {
            // line 62
            echo $this->env->getExtension('translator')->trans("post.posted-by");
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "topic"), "getLastPost"), "getCreatedBy"), "html", null, true);
            // line 65
            echo "<br>


\t\t\t\t";
            // line 72
            $context["page"] = 1;
            // line 73
            if (($this->getContext($context, "page") < 2)) {
                // line 74
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => $this->getContext($context, "forumName"), "topicId" => $this->getAttribute($this->getContext($context, "topic"), "getId"))), "html", null, true);
                echo "#";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "topic"), "getLastPost"), "getId"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-arrow-right\"></i>
\t\t\t\t\t\t<abbr class=\"timestamper\" title=\"";
                // line 76
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "topic"), "getLastPost"), "getCreatedDate"), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
                echo "\">";
                // line 77
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "topic"), "getLastPost"), "getCreatedDate"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "ccdn_forum_forum"), "board"), "user"), "show"), "last_post_datetime_format")), "html", null, true);
                // line 78
                echo "</abbr>
\t\t\t\t\t</a>";
            } else {
                // line 81
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => $this->getContext($context, "forumName"), "topicId" => $this->getAttribute($this->getContext($context, "topic"), "getId"), "page" => $this->getContext($context, "page"))), "html", null, true);
                echo "#";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "topic"), "getLastPost"), "getId"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-arrow-right\"></i>
\t\t\t\t\t\t<abbr class=\"timestamper\" title=\"";
                // line 83
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "topic"), "getLastPost"), "getCreatedDate"), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
                echo "\">";
                // line 84
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "topic"), "getLastPost"), "getCreatedDate"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "ccdn_forum_forum"), "board"), "user"), "show"), "last_post_datetime_format")), "html", null, true);
                // line 85
                echo "</abbr>
\t\t\t\t\t</a>";
            }
        }
        // line 89
        echo "</td>
\t</tr>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "JlfaForumBundle:User/Board/Partial:item_topic_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 34,  1214 => 513,  1208 => 511,  1202 => 509,  1200 => 508,  1198 => 507,  1194 => 506,  1185 => 505,  1183 => 504,  1180 => 503,  1167 => 497,  1161 => 495,  1155 => 493,  1153 => 492,  1151 => 491,  1147 => 490,  1141 => 489,  1139 => 488,  1136 => 487,  1123 => 481,  1117 => 479,  1111 => 477,  1109 => 476,  1107 => 475,  1103 => 474,  1097 => 473,  1091 => 472,  1087 => 471,  1083 => 470,  1079 => 469,  1073 => 468,  1071 => 467,  1068 => 466,  1059 => 461,  1055 => 460,  1053 => 459,  1050 => 458,  1040 => 450,  1038 => 449,  1034 => 448,  1032 => 447,  1029 => 446,  1022 => 440,  1016 => 438,  1014 => 433,  1012 => 432,  1008 => 431,  1005 => 429,  1003 => 428,  1001 => 427,  998 => 426,  991 => 420,  985 => 418,  983 => 413,  981 => 412,  977 => 411,  974 => 409,  972 => 408,  970 => 407,  967 => 406,  960 => 402,  958 => 401,  955 => 400,  950 => 396,  947 => 394,  945 => 393,  943 => 392,  940 => 391,  932 => 386,  930 => 385,  906 => 384,  903 => 382,  900 => 380,  898 => 379,  896 => 378,  894 => 377,  891 => 376,  886 => 372,  884 => 371,  882 => 370,  880 => 369,  877 => 368,  872 => 362,  870 => 361,  867 => 360,  862 => 356,  860 => 355,  858 => 354,  856 => 353,  853 => 352,  848 => 348,  845 => 346,  843 => 345,  841 => 344,  839 => 343,  837 => 342,  832 => 338,  830 => 337,  828 => 336,  822 => 335,  820 => 334,  817 => 332,  815 => 331,  811 => 330,  809 => 329,  806 => 328,  801 => 324,  799 => 319,  796 => 318,  791 => 314,  785 => 309,  783 => 308,  778 => 306,  776 => 305,  761 => 304,  758 => 301,  756 => 300,  753 => 298,  751 => 297,  748 => 295,  746 => 294,  744 => 292,  742 => 291,  740 => 290,  737 => 289,  732 => 283,  730 => 282,  728 => 281,  725 => 280,  720 => 276,  718 => 275,  716 => 274,  713 => 273,  702 => 269,  699 => 267,  697 => 266,  695 => 265,  692 => 264,  687 => 260,  685 => 259,  683 => 258,  680 => 257,  675 => 253,  673 => 252,  671 => 251,  668 => 250,  663 => 246,  661 => 245,  659 => 244,  656 => 243,  650 => 239,  648 => 238,  646 => 237,  643 => 236,  638 => 232,  636 => 231,  634 => 230,  631 => 229,  626 => 225,  624 => 224,  622 => 223,  619 => 222,  614 => 218,  612 => 217,  609 => 216,  604 => 212,  602 => 211,  600 => 210,  597 => 209,  592 => 205,  590 => 204,  588 => 202,  585 => 201,  579 => 196,  576 => 194,  574 => 193,  572 => 192,  569 => 190,  567 => 189,  565 => 188,  563 => 187,  559 => 186,  557 => 185,  555 => 184,  552 => 182,  550 => 181,  548 => 180,  545 => 179,  539 => 174,  537 => 172,  536 => 171,  535 => 170,  534 => 169,  530 => 168,  528 => 167,  525 => 165,  523 => 164,  521 => 163,  512 => 157,  510 => 156,  506 => 154,  504 => 153,  500 => 152,  498 => 151,  495 => 149,  493 => 148,  491 => 147,  488 => 146,  473 => 142,  468 => 140,  451 => 135,  448 => 134,  422 => 128,  419 => 126,  417 => 125,  415 => 124,  411 => 123,  392 => 121,  390 => 120,  382 => 115,  380 => 114,  372 => 110,  370 => 109,  366 => 107,  353 => 103,  338 => 99,  336 => 97,  334 => 96,  331 => 95,  317 => 85,  315 => 84,  310 => 81,  308 => 80,  304 => 78,  291 => 71,  289 => 70,  281 => 65,  276 => 64,  271 => 62,  265 => 60,  253 => 52,  251 => 51,  249 => 50,  237 => 45,  233 => 43,  218 => 34,  215 => 33,  206 => 27,  160 => 6,  244 => 96,  239 => 93,  213 => 82,  210 => 29,  207 => 80,  205 => 79,  202 => 76,  200 => 75,  186 => 69,  329 => 133,  306 => 79,  303 => 122,  301 => 77,  290 => 117,  287 => 115,  284 => 113,  282 => 112,  279 => 111,  275 => 110,  272 => 109,  267 => 61,  262 => 59,  259 => 102,  250 => 98,  248 => 97,  245 => 96,  232 => 91,  228 => 89,  225 => 38,  167 => 63,  188 => 70,  129 => 63,  518 => 162,  511 => 174,  508 => 155,  502 => 133,  492 => 120,  471 => 141,  467 => 117,  463 => 116,  458 => 115,  454 => 114,  452 => 113,  449 => 112,  441 => 100,  426 => 84,  406 => 71,  399 => 46,  396 => 45,  391 => 42,  383 => 37,  378 => 113,  371 => 176,  369 => 173,  364 => 106,  352 => 167,  348 => 166,  345 => 165,  343 => 102,  340 => 100,  328 => 160,  324 => 89,  321 => 87,  319 => 86,  316 => 156,  307 => 150,  295 => 143,  293 => 142,  280 => 134,  277 => 133,  260 => 129,  256 => 54,  236 => 92,  223 => 109,  212 => 105,  195 => 22,  192 => 21,  180 => 71,  165 => 83,  197 => 23,  194 => 84,  184 => 96,  113 => 56,  65 => 22,  181 => 68,  170 => 85,  155 => 75,  153 => 78,  90 => 41,  174 => 15,  152 => 61,  148 => 76,  127 => 62,  104 => 52,  100 => 33,  137 => 406,  126 => 63,  53 => 17,  23 => 4,  222 => 36,  190 => 72,  185 => 61,  178 => 17,  175 => 89,  124 => 62,  110 => 44,  97 => 216,  84 => 40,  81 => 35,  58 => 20,  34 => 11,  172 => 14,  150 => 60,  146 => 61,  134 => 55,  118 => 40,  114 => 59,  77 => 77,  70 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 136,  444 => 101,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 83,  413 => 134,  409 => 122,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 119,  384 => 121,  381 => 120,  379 => 119,  374 => 177,  368 => 108,  365 => 111,  362 => 110,  360 => 109,  355 => 104,  341 => 105,  337 => 103,  322 => 101,  314 => 130,  312 => 82,  309 => 126,  305 => 95,  298 => 120,  294 => 119,  285 => 67,  283 => 66,  278 => 86,  268 => 85,  264 => 104,  258 => 81,  252 => 102,  247 => 98,  241 => 94,  229 => 73,  220 => 35,  214 => 69,  177 => 72,  169 => 13,  140 => 74,  132 => 65,  128 => 47,  107 => 250,  61 => 28,  273 => 63,  269 => 108,  254 => 101,  243 => 88,  240 => 124,  238 => 112,  235 => 44,  230 => 42,  227 => 81,  224 => 71,  221 => 77,  219 => 108,  217 => 83,  208 => 28,  204 => 72,  179 => 67,  159 => 65,  143 => 458,  135 => 400,  119 => 57,  102 => 49,  71 => 42,  67 => 21,  63 => 29,  59 => 20,  38 => 15,  94 => 45,  89 => 43,  85 => 140,  75 => 29,  68 => 32,  56 => 19,  87 => 40,  21 => 2,  26 => 5,  93 => 44,  88 => 36,  78 => 49,  46 => 12,  27 => 3,  44 => 11,  31 => 8,  28 => 7,  201 => 24,  196 => 90,  183 => 68,  171 => 69,  166 => 63,  163 => 8,  158 => 5,  156 => 4,  151 => 77,  142 => 72,  138 => 73,  136 => 72,  121 => 58,  117 => 289,  105 => 243,  91 => 179,  62 => 24,  49 => 20,  24 => 4,  25 => 6,  19 => 1,  79 => 33,  72 => 41,  69 => 33,  47 => 23,  40 => 17,  37 => 15,  22 => 17,  246 => 49,  157 => 81,  145 => 466,  139 => 426,  131 => 65,  123 => 328,  120 => 44,  115 => 280,  111 => 53,  108 => 54,  101 => 229,  98 => 46,  96 => 45,  83 => 37,  74 => 33,  66 => 26,  55 => 18,  52 => 27,  50 => 16,  43 => 18,  41 => 16,  35 => 6,  32 => 5,  29 => 7,  209 => 82,  203 => 25,  199 => 67,  193 => 82,  189 => 71,  187 => 71,  182 => 85,  176 => 16,  173 => 70,  168 => 84,  164 => 66,  162 => 61,  154 => 58,  149 => 503,  147 => 487,  144 => 58,  141 => 446,  133 => 391,  130 => 54,  125 => 61,  122 => 55,  116 => 56,  112 => 56,  109 => 52,  106 => 51,  103 => 236,  99 => 222,  95 => 209,  92 => 42,  86 => 42,  82 => 39,  80 => 38,  73 => 28,  64 => 25,  60 => 21,  57 => 25,  54 => 23,  51 => 21,  48 => 14,  45 => 19,  42 => 10,  39 => 9,  36 => 12,  33 => 9,  30 => 8,);
    }
}

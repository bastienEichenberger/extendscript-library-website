<?php

/* JlfaForumBundle:User/Subscription:show.html.twig */
class __TwigTemplate_b66cd2f416569422ed50b4a469b58e55fc4d929394b8ed4256c49f47e516f893 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CCDNForumForumBundle:Common:Layout/base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
            'body_content' => array($this, 'block_body_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CCDNForumForumBundle:Common:Layout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["LayoutTemplate"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "ccdn_forum_forum"), "subscription"), "list"), "layout_template");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.subscription.index"), "html", null, true);
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        $this->displayParentBlock("sidebar", $context, $blocks);
        // line 12
        $this->env->loadTemplate("CCDNForumForumBundle:Common:Layout/Sidebar/user_subscriptions.html.twig")->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 47
    public function block_body_content($context, array $blocks = array())
    {
        // line 48
        ob_start();
        // line 50
        echo "<section class=\"row clearfix\">
\t\t<div class=\"col-md-12\">
\t\t\t<ul class=\"nav nav-tabs\">";
        // line 53
        $context["tabs"] = $this;
        // line 54
        if ((!(null === $this->getContext($context, "forum")))) {
            // line 55
            echo $context["tabs"]->getsubscription_tab("all", $this->getContext($context, "forumName"), "all", $this->getContext($context, "filter"), $this->getAttribute($this->getContext($context, "total_subscribed_forums"), "count_read", array(), "array"), $this->getAttribute($this->getContext($context, "total_subscribed_forums"), "count_unread", array(), "array"), $this->getAttribute($this->getContext($context, "total_subscribed_forums"), "count_total", array(), "array"));
            // line 56
            echo $context["tabs"]->getsubscription_tab("unread", $this->getContext($context, "forumName"), "unread", $this->getContext($context, "filter"), null, $this->getAttribute($this->getContext($context, "total_subscribed_forums"), "count_unread", array(), "array"), null);
            // line 57
            echo $context["tabs"]->getsubscription_tab("read", $this->getContext($context, "forumName"), "read", $this->getContext($context, "filter"), $this->getAttribute($this->getContext($context, "total_subscribed_forums"), "count_read", array(), "array"), null, null);
        } else {
            // line 59
            echo $context["tabs"]->getsubscription_tab("all", "~", "all", $this->getContext($context, "filter"), $this->getAttribute($this->getContext($context, "total_subscribed_forums"), "count_read", array(), "array"), $this->getAttribute($this->getContext($context, "total_subscribed_forums"), "count_unread", array(), "array"), $this->getAttribute($this->getContext($context, "total_subscribed_forums"), "count_total", array(), "array"));
            // line 60
            echo $context["tabs"]->getsubscription_tab("unread", "~", "unread", $this->getContext($context, "filter"), null, $this->getAttribute($this->getContext($context, "total_subscribed_forums"), "count_unread", array(), "array"), null);
            // line 61
            echo $context["tabs"]->getsubscription_tab("read", "~", "read", $this->getContext($context, "filter"), $this->getAttribute($this->getContext($context, "total_subscribed_forums"), "count_read", array(), "array"), null, null);
        }
        // line 63
        echo "</ul>
\t\t</div>
\t</section>";
        // line 67
        echo $this->env->getExtension('knp_pagination')->render($this->getContext($context, "pager"));
        // line 69
        echo "<section class=\"clearfix\">
\t\t<table class=\"table table-striped table-hover\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"center\" style=\"width:18px;\"></th>
\t\t\t\t\t<th class=\"center\" style=\"width:18px;\"></th>
\t\t\t\t\t<th class=\"left\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.topic-th"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th class=\"center\" style=\"width: 100px;\">";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.reply-count-th"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th class=\"center\" style=\"width: 100px;\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.view-count-th"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th class=\"center\" style=\"width: 170px;\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.last-post-th"), "html", null, true);
        echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>";
        // line 82
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "pager"), "getItems", array(), "method"));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["row"] => $context["subscription"]) {
            // line 83
            $context["topic"] = $this->getAttribute($this->getContext($context, "subscription"), "getTopic");
            // line 85
            $this->env->loadTemplate("CCDNForumForumBundle:User:Subscription/Partial/item_topic_list.html.twig")->display($context);
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 87
            echo "<tr>
\t\t\t\t\t\t<td class=\"text-center\" colspan=\"6\">
\t\t\t\t\t\t\t<span class=\"lead\">";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("subscription.no-topics"), "html", null, true);
            // line 91
            echo "</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['row'], $context['subscription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "</tbody>
\t\t</table>
\t</section>";
        // line 99
        echo $this->env->getExtension('knp_pagination')->render($this->getContext($context, "pager"));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 16
    public function getsubscription_tab($_label = null, $_forum_name = null, $_filter_key = null, $_filter_value = null, $_count_read = null, $_count_unread = null, $_count_total = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $_label,
            "forum_name" => $_forum_name,
            "filter_key" => $_filter_key,
            "filter_value" => $_filter_value,
            "count_read" => $_count_read,
            "count_unread" => $_count_unread,
            "count_total" => $_count_total,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 17
            if (($this->getContext($context, "filter_key") == $this->getContext($context, "filter_value"))) {
                // line 18
                echo "<li class=\"active\">";
            } else {
                // line 20
                echo "<li>";
            }
            // line 22
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_subscription_index", array("forumName" => $this->getContext($context, "forum_name"), "filter" => $this->getContext($context, "filter_key"))), "html", null, true);
            echo "\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
            // line 25
            echo "&nbsp;

\t\t\t<span class=\"badge\">";
            // line 28
            if (((!(null === $this->getContext($context, "count_unread"))) && (!(null === $this->getContext($context, "count_total"))))) {
                // line 29
                echo twig_escape_filter($this->env, $this->getContext($context, "count_unread"), "html", null, true);
                // line 30
                echo "&nbsp;/&nbsp;";
                // line 31
                echo twig_escape_filter($this->env, $this->getContext($context, "count_total"), "html", null, true);
            } else {
                // line 33
                if ((!(null === $this->getContext($context, "count_unread")))) {
                    // line 34
                    echo twig_escape_filter($this->env, $this->getContext($context, "count_unread"), "html", null, true);
                }
                // line 37
                if ((!(null === $this->getContext($context, "count_read")))) {
                    // line 38
                    echo twig_escape_filter($this->env, $this->getContext($context, "count_read"), "html", null, true);
                }
            }
            // line 41
            echo "</span>
\t\t</a>
\t</li>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "JlfaForumBundle:User/Subscription:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 22,  257 => 98,  198 => 76,  161 => 99,  76 => 10,  1214 => 513,  1208 => 511,  1202 => 509,  1200 => 508,  1198 => 507,  1194 => 506,  1185 => 505,  1183 => 504,  1180 => 503,  1167 => 497,  1161 => 495,  1155 => 493,  1153 => 492,  1151 => 491,  1147 => 490,  1141 => 489,  1139 => 488,  1136 => 487,  1123 => 481,  1117 => 479,  1111 => 477,  1109 => 476,  1107 => 475,  1103 => 474,  1097 => 473,  1091 => 472,  1087 => 471,  1083 => 470,  1079 => 469,  1073 => 468,  1071 => 467,  1068 => 466,  1059 => 461,  1055 => 460,  1053 => 459,  1050 => 458,  1040 => 450,  1038 => 449,  1034 => 448,  1032 => 447,  1029 => 446,  1022 => 440,  1016 => 438,  1014 => 433,  1012 => 432,  1008 => 431,  1005 => 429,  1003 => 428,  1001 => 427,  998 => 426,  991 => 420,  985 => 418,  983 => 413,  981 => 412,  977 => 411,  974 => 409,  972 => 408,  970 => 407,  967 => 406,  960 => 402,  958 => 401,  955 => 400,  950 => 396,  947 => 394,  945 => 393,  943 => 392,  940 => 391,  932 => 386,  930 => 385,  906 => 384,  903 => 382,  900 => 380,  898 => 379,  896 => 378,  894 => 377,  891 => 376,  886 => 372,  884 => 371,  882 => 370,  880 => 369,  877 => 368,  872 => 362,  870 => 361,  867 => 360,  862 => 356,  860 => 355,  858 => 354,  856 => 353,  853 => 352,  848 => 348,  845 => 346,  843 => 345,  841 => 344,  839 => 343,  837 => 342,  832 => 338,  830 => 337,  828 => 336,  822 => 335,  820 => 334,  817 => 332,  815 => 331,  811 => 330,  809 => 329,  806 => 328,  801 => 324,  799 => 319,  796 => 318,  791 => 314,  785 => 309,  783 => 308,  778 => 306,  776 => 305,  761 => 304,  758 => 301,  756 => 300,  753 => 298,  751 => 297,  748 => 295,  746 => 294,  744 => 292,  742 => 291,  740 => 290,  737 => 289,  732 => 283,  730 => 282,  728 => 281,  725 => 280,  720 => 276,  718 => 275,  716 => 274,  713 => 273,  702 => 269,  699 => 267,  697 => 266,  695 => 265,  692 => 264,  687 => 260,  685 => 259,  683 => 258,  680 => 257,  675 => 253,  673 => 252,  671 => 251,  668 => 250,  663 => 246,  661 => 245,  659 => 244,  656 => 243,  650 => 239,  648 => 238,  646 => 237,  643 => 236,  638 => 232,  636 => 231,  634 => 230,  631 => 229,  626 => 225,  624 => 224,  622 => 223,  619 => 222,  614 => 218,  612 => 217,  609 => 216,  604 => 212,  602 => 211,  600 => 210,  597 => 209,  592 => 205,  590 => 204,  588 => 202,  585 => 201,  579 => 196,  576 => 194,  574 => 193,  572 => 192,  569 => 190,  567 => 189,  565 => 188,  563 => 187,  559 => 186,  557 => 185,  555 => 184,  552 => 182,  550 => 181,  548 => 180,  545 => 179,  539 => 174,  537 => 172,  536 => 171,  535 => 170,  534 => 169,  530 => 168,  528 => 167,  525 => 165,  523 => 164,  521 => 163,  512 => 157,  510 => 156,  506 => 154,  504 => 153,  500 => 152,  498 => 151,  495 => 149,  493 => 148,  491 => 147,  488 => 146,  473 => 142,  468 => 140,  451 => 135,  448 => 134,  422 => 128,  419 => 126,  417 => 125,  415 => 124,  411 => 123,  392 => 121,  390 => 120,  382 => 115,  380 => 114,  372 => 110,  370 => 109,  366 => 107,  353 => 103,  338 => 99,  336 => 97,  334 => 96,  331 => 95,  317 => 85,  315 => 84,  310 => 81,  308 => 80,  304 => 78,  291 => 71,  289 => 70,  281 => 65,  276 => 64,  271 => 62,  265 => 60,  253 => 94,  251 => 51,  249 => 50,  237 => 45,  233 => 43,  218 => 34,  215 => 37,  206 => 27,  160 => 91,  244 => 90,  239 => 93,  213 => 82,  210 => 33,  207 => 31,  205 => 30,  202 => 76,  200 => 75,  186 => 69,  329 => 133,  306 => 79,  303 => 122,  301 => 77,  290 => 117,  287 => 115,  284 => 113,  282 => 112,  279 => 111,  275 => 110,  272 => 109,  267 => 61,  262 => 59,  259 => 102,  250 => 98,  248 => 97,  245 => 96,  232 => 91,  228 => 89,  225 => 84,  167 => 94,  188 => 20,  129 => 63,  518 => 162,  511 => 174,  508 => 155,  502 => 133,  492 => 120,  471 => 141,  467 => 117,  463 => 116,  458 => 115,  454 => 114,  452 => 113,  449 => 112,  441 => 100,  426 => 84,  406 => 71,  399 => 46,  396 => 45,  391 => 42,  383 => 37,  378 => 113,  371 => 176,  369 => 173,  364 => 106,  352 => 167,  348 => 166,  345 => 165,  343 => 102,  340 => 100,  328 => 160,  324 => 89,  321 => 87,  319 => 86,  316 => 156,  307 => 150,  295 => 143,  293 => 142,  280 => 134,  277 => 133,  260 => 129,  256 => 54,  236 => 92,  223 => 109,  212 => 34,  195 => 23,  192 => 21,  180 => 93,  165 => 83,  197 => 25,  194 => 84,  184 => 96,  113 => 32,  65 => 28,  181 => 71,  170 => 87,  155 => 75,  153 => 80,  90 => 44,  174 => 15,  152 => 85,  148 => 83,  127 => 62,  104 => 78,  100 => 77,  137 => 70,  126 => 48,  53 => 24,  23 => 3,  222 => 36,  190 => 72,  185 => 18,  178 => 17,  175 => 89,  124 => 68,  110 => 82,  97 => 47,  84 => 69,  81 => 13,  58 => 30,  34 => 14,  172 => 14,  150 => 60,  146 => 61,  134 => 55,  118 => 65,  114 => 63,  77 => 35,  70 => 37,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 136,  444 => 101,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 83,  413 => 134,  409 => 122,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 119,  384 => 121,  381 => 120,  379 => 119,  374 => 177,  368 => 108,  365 => 111,  362 => 110,  360 => 109,  355 => 104,  341 => 105,  337 => 103,  322 => 101,  314 => 130,  312 => 82,  309 => 126,  305 => 95,  298 => 120,  294 => 119,  285 => 67,  283 => 66,  278 => 86,  268 => 85,  264 => 104,  258 => 81,  252 => 102,  247 => 98,  241 => 88,  229 => 73,  220 => 35,  214 => 69,  177 => 102,  169 => 95,  140 => 57,  132 => 66,  128 => 83,  107 => 57,  61 => 22,  273 => 63,  269 => 108,  254 => 101,  243 => 88,  240 => 124,  238 => 112,  235 => 44,  230 => 42,  227 => 85,  224 => 71,  221 => 41,  219 => 108,  217 => 38,  208 => 28,  204 => 72,  179 => 67,  159 => 66,  143 => 87,  135 => 68,  119 => 57,  102 => 49,  71 => 59,  67 => 31,  63 => 28,  59 => 21,  38 => 15,  94 => 48,  89 => 48,  85 => 16,  75 => 61,  68 => 57,  56 => 50,  87 => 47,  21 => 2,  26 => 5,  93 => 52,  88 => 43,  78 => 63,  46 => 12,  27 => 3,  44 => 11,  31 => 10,  28 => 29,  201 => 28,  196 => 90,  183 => 17,  171 => 69,  166 => 16,  163 => 92,  158 => 82,  156 => 81,  151 => 77,  142 => 72,  138 => 73,  136 => 56,  121 => 58,  117 => 57,  105 => 56,  91 => 26,  62 => 54,  49 => 22,  24 => 4,  25 => 4,  19 => 1,  79 => 43,  72 => 38,  69 => 32,  47 => 19,  40 => 14,  37 => 11,  22 => 17,  246 => 91,  157 => 95,  145 => 78,  139 => 77,  131 => 65,  123 => 328,  120 => 61,  115 => 56,  111 => 39,  108 => 53,  101 => 229,  98 => 54,  96 => 76,  83 => 45,  74 => 35,  66 => 56,  55 => 23,  52 => 17,  50 => 23,  43 => 9,  41 => 33,  35 => 6,  32 => 5,  29 => 8,  209 => 82,  203 => 29,  199 => 67,  193 => 82,  189 => 71,  187 => 71,  182 => 85,  176 => 16,  173 => 88,  168 => 84,  164 => 70,  162 => 85,  154 => 86,  149 => 91,  147 => 90,  144 => 58,  141 => 76,  133 => 67,  130 => 85,  125 => 61,  122 => 60,  116 => 60,  112 => 55,  109 => 29,  106 => 57,  103 => 55,  99 => 48,  95 => 47,  92 => 75,  86 => 41,  82 => 67,  80 => 36,  73 => 60,  64 => 55,  60 => 53,  57 => 24,  54 => 48,  51 => 47,  48 => 16,  45 => 36,  42 => 10,  39 => 9,  36 => 6,  33 => 12,  30 => 7,);
    }
}

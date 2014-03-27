<?php

/* JlfaForumBundle:User/Topic:reply.html.twig */
class __TwigTemplate_3cfbec81663cf48eaed63e43efd6ecf7882f46b5c7e8a5c714e88cd009f03bb5 extends Twig_Template
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
        $context["LayoutTemplate"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "ccdn_forum_forum"), "topic"), "user"), "reply"), "layout_template");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.topic.reply", array("%topic_title%" => $this->getAttribute($this->getContext($context, "topic"), "getTitle"))), "html", null, true);
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        $this->displayParentBlock("sidebar", $context, $blocks);
        // line 12
        $this->env->loadTemplate("CCDNForumForumBundle:Common:Layout/Sidebar/user_forum.html.twig")->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 16
    public function block_body_content($context, array $blocks = array())
    {
        // line 17
        ob_start();
        // line 19
        echo "<section class=\"clearfix\">";
        // line 20
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form"), array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "ccdn_forum_forum"), "topic"), "user"), "reply"), "form_theme")));
        // line 21
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_reply_process", array("forumName" => $this->getContext($context, "forumName"), "topicId" => $this->getAttribute($this->getContext($context, "topic"), "id"))), "html", null, true);
        echo "\"
\t\t method=\"post\" ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"form-horizontal\" role=\"form\" novalidate>
\t\t\t<fieldset>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-lg-offset-2 col-lg-10\">
\t\t\t\t\t\t<h4>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.topic.reply"), "html", null, true);
        // line 29
        echo "</h4>
\t\t\t\t\t\t<h5>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "topic"), "getTitle"), "html", null, true);
        // line 32
        echo "</h5>
\t\t\t\t\t</div>
\t\t\t\t</div>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        // line 40
        echo "<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-lg-offset-2 col-lg-10\">
\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.button.topic.reply"), "html", null, true);
        // line 44
        echo "\" name=\"submit[post]\" id=\"submit[post]\">

\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => $this->getContext($context, "forumName"), "topicId" => $this->getAttribute($this->getContext($context, "topic"), "id"))), "html", null, true);
        echo "\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.button.cancel"), "html", null, true);
        // line 48
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</fieldset>
\t\t</form>
\t</section>";
        // line 56
        if (array_key_exists("preview", $context)) {
            // line 57
            if ((!twig_test_empty($this->getContext($context, "preview")))) {
                // line 58
                $this->env->loadTemplate("CCDNForumForumBundle:User:Post/Partial/post_preview.html.twig")->display(array_merge($context, array("post" => $this->getContext($context, "preview"))));
            }
        }
        // line 62
        $this->env->loadTemplate("CCDNForumForumBundle:User:Topic/Partial/transcript.html.twig")->display(array_merge($context, array("topic" => $this->getContext($context, "topic"))));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "JlfaForumBundle:User/Topic:reply.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 108,  257 => 98,  198 => 76,  161 => 90,  76 => 10,  1214 => 513,  1208 => 511,  1202 => 509,  1200 => 508,  1198 => 507,  1194 => 506,  1185 => 505,  1183 => 504,  1180 => 503,  1167 => 497,  1161 => 495,  1155 => 493,  1153 => 492,  1151 => 491,  1147 => 490,  1141 => 489,  1139 => 488,  1136 => 487,  1123 => 481,  1117 => 479,  1111 => 477,  1109 => 476,  1107 => 475,  1103 => 474,  1097 => 473,  1091 => 472,  1087 => 471,  1083 => 470,  1079 => 469,  1073 => 468,  1071 => 467,  1068 => 466,  1059 => 461,  1055 => 460,  1053 => 459,  1050 => 458,  1040 => 450,  1038 => 449,  1034 => 448,  1032 => 447,  1029 => 446,  1022 => 440,  1016 => 438,  1014 => 433,  1012 => 432,  1008 => 431,  1005 => 429,  1003 => 428,  1001 => 427,  998 => 426,  991 => 420,  985 => 418,  983 => 413,  981 => 412,  977 => 411,  974 => 409,  972 => 408,  970 => 407,  967 => 406,  960 => 402,  958 => 401,  955 => 400,  950 => 396,  947 => 394,  945 => 393,  943 => 392,  940 => 391,  932 => 386,  930 => 385,  906 => 384,  903 => 382,  900 => 380,  898 => 379,  896 => 378,  894 => 377,  891 => 376,  886 => 372,  884 => 371,  882 => 370,  880 => 369,  877 => 368,  872 => 362,  870 => 361,  867 => 360,  862 => 356,  860 => 355,  858 => 354,  856 => 353,  853 => 352,  848 => 348,  845 => 346,  843 => 345,  841 => 344,  839 => 343,  837 => 342,  832 => 338,  830 => 337,  828 => 336,  822 => 335,  820 => 334,  817 => 332,  815 => 331,  811 => 330,  809 => 329,  806 => 328,  801 => 324,  799 => 319,  796 => 318,  791 => 314,  785 => 309,  783 => 308,  778 => 306,  776 => 305,  761 => 304,  758 => 301,  756 => 300,  753 => 298,  751 => 297,  748 => 295,  746 => 294,  744 => 292,  742 => 291,  740 => 290,  737 => 289,  732 => 283,  730 => 282,  728 => 281,  725 => 280,  720 => 276,  718 => 275,  716 => 274,  713 => 273,  702 => 269,  699 => 267,  697 => 266,  695 => 265,  692 => 264,  687 => 260,  685 => 259,  683 => 258,  680 => 257,  675 => 253,  673 => 252,  671 => 251,  668 => 250,  663 => 246,  661 => 245,  659 => 244,  656 => 243,  650 => 239,  648 => 238,  646 => 237,  643 => 236,  638 => 232,  636 => 231,  634 => 230,  631 => 229,  626 => 225,  624 => 224,  622 => 223,  619 => 222,  614 => 218,  612 => 217,  609 => 216,  604 => 212,  602 => 211,  600 => 210,  597 => 209,  592 => 205,  590 => 204,  588 => 202,  585 => 201,  579 => 196,  576 => 194,  574 => 193,  572 => 192,  569 => 190,  567 => 189,  565 => 188,  563 => 187,  559 => 186,  557 => 185,  555 => 184,  552 => 182,  550 => 181,  548 => 180,  545 => 179,  539 => 174,  537 => 172,  536 => 171,  535 => 170,  534 => 169,  530 => 168,  528 => 167,  525 => 165,  523 => 164,  521 => 163,  512 => 157,  510 => 156,  506 => 154,  504 => 153,  500 => 152,  498 => 151,  495 => 149,  493 => 148,  491 => 147,  488 => 146,  473 => 142,  468 => 140,  451 => 135,  448 => 134,  422 => 128,  419 => 126,  417 => 125,  415 => 124,  411 => 123,  392 => 121,  390 => 120,  382 => 115,  380 => 114,  372 => 110,  370 => 109,  366 => 107,  353 => 103,  338 => 99,  336 => 97,  334 => 96,  331 => 95,  317 => 85,  315 => 84,  310 => 81,  308 => 80,  304 => 78,  291 => 71,  289 => 70,  281 => 65,  276 => 64,  271 => 62,  265 => 60,  253 => 94,  251 => 51,  249 => 50,  237 => 45,  233 => 43,  218 => 34,  215 => 37,  206 => 27,  160 => 91,  244 => 90,  239 => 93,  213 => 82,  210 => 33,  207 => 31,  205 => 30,  202 => 76,  200 => 75,  186 => 69,  329 => 133,  306 => 79,  303 => 122,  301 => 77,  290 => 117,  287 => 115,  284 => 113,  282 => 112,  279 => 111,  275 => 110,  272 => 109,  267 => 61,  262 => 59,  259 => 102,  250 => 98,  248 => 97,  245 => 96,  232 => 91,  228 => 89,  225 => 84,  167 => 95,  188 => 20,  129 => 71,  518 => 162,  511 => 174,  508 => 155,  502 => 133,  492 => 120,  471 => 141,  467 => 117,  463 => 116,  458 => 115,  454 => 114,  452 => 113,  449 => 112,  441 => 100,  426 => 84,  406 => 71,  399 => 46,  396 => 45,  391 => 42,  383 => 37,  378 => 113,  371 => 176,  369 => 173,  364 => 106,  352 => 167,  348 => 166,  345 => 165,  343 => 102,  340 => 100,  328 => 160,  324 => 89,  321 => 87,  319 => 86,  316 => 156,  307 => 150,  295 => 143,  293 => 142,  280 => 134,  277 => 133,  260 => 129,  256 => 54,  236 => 92,  223 => 109,  212 => 34,  195 => 112,  192 => 21,  180 => 103,  165 => 94,  197 => 25,  194 => 84,  184 => 96,  113 => 57,  65 => 22,  181 => 71,  170 => 96,  155 => 87,  153 => 80,  90 => 49,  174 => 98,  152 => 86,  148 => 83,  127 => 62,  104 => 78,  100 => 77,  137 => 77,  126 => 48,  53 => 20,  23 => 5,  222 => 36,  190 => 72,  185 => 105,  178 => 17,  175 => 89,  124 => 68,  110 => 60,  97 => 43,  84 => 36,  81 => 33,  58 => 20,  34 => 9,  172 => 14,  150 => 85,  146 => 81,  134 => 55,  118 => 65,  114 => 62,  77 => 44,  70 => 39,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 136,  444 => 101,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 83,  413 => 134,  409 => 122,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 119,  384 => 121,  381 => 120,  379 => 119,  374 => 177,  368 => 108,  365 => 111,  362 => 110,  360 => 109,  355 => 104,  341 => 105,  337 => 103,  322 => 101,  314 => 130,  312 => 82,  309 => 126,  305 => 95,  298 => 120,  294 => 119,  285 => 67,  283 => 66,  278 => 86,  268 => 85,  264 => 104,  258 => 81,  252 => 102,  247 => 98,  241 => 88,  229 => 73,  220 => 35,  214 => 69,  177 => 102,  169 => 95,  140 => 78,  132 => 66,  128 => 83,  107 => 59,  61 => 28,  273 => 63,  269 => 108,  254 => 101,  243 => 88,  240 => 124,  238 => 112,  235 => 44,  230 => 42,  227 => 85,  224 => 71,  221 => 41,  219 => 108,  217 => 38,  208 => 28,  204 => 72,  179 => 67,  159 => 89,  143 => 87,  135 => 76,  119 => 62,  102 => 49,  71 => 26,  67 => 31,  63 => 29,  59 => 21,  38 => 12,  94 => 44,  89 => 39,  85 => 16,  75 => 29,  68 => 33,  56 => 19,  87 => 38,  21 => 3,  26 => 6,  93 => 52,  88 => 40,  78 => 31,  46 => 12,  27 => 3,  44 => 11,  31 => 8,  28 => 10,  201 => 28,  196 => 90,  183 => 17,  171 => 69,  166 => 16,  163 => 92,  158 => 82,  156 => 81,  151 => 77,  142 => 72,  138 => 73,  136 => 56,  121 => 58,  117 => 57,  105 => 58,  91 => 40,  62 => 20,  49 => 20,  24 => 4,  25 => 6,  19 => 1,  79 => 31,  72 => 41,  69 => 25,  47 => 16,  40 => 14,  37 => 14,  22 => 17,  246 => 91,  157 => 95,  145 => 78,  139 => 77,  131 => 72,  123 => 328,  120 => 67,  115 => 58,  111 => 56,  108 => 53,  101 => 47,  98 => 46,  96 => 76,  83 => 35,  74 => 42,  66 => 32,  55 => 21,  52 => 17,  50 => 23,  43 => 19,  41 => 18,  35 => 6,  32 => 5,  29 => 7,  209 => 82,  203 => 29,  199 => 67,  193 => 82,  189 => 107,  187 => 71,  182 => 104,  176 => 99,  173 => 88,  168 => 84,  164 => 70,  162 => 85,  154 => 86,  149 => 91,  147 => 90,  144 => 80,  141 => 76,  133 => 67,  130 => 85,  125 => 69,  122 => 68,  116 => 63,  112 => 55,  109 => 53,  106 => 57,  103 => 48,  99 => 53,  95 => 51,  92 => 43,  86 => 38,  82 => 67,  80 => 32,  73 => 28,  64 => 55,  60 => 21,  57 => 24,  54 => 17,  51 => 16,  48 => 13,  45 => 18,  42 => 10,  39 => 9,  36 => 10,  33 => 9,  30 => 11,);
    }
}

<?php

/* CCDNForumForumBundle:User:Post/Partial/post_preview.html.twig */
class __TwigTemplate_b5f909807f0b900e1593747381bec98551bd049c6595756886e0053b331c0bde extends Twig_Template
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
        if ($this->getAttribute((isset($context["preview"]) ? $context["preview"] : $this->getContext($context, "preview")), "getBody")) {
            // line 3
            echo "<h4>";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.preview"), "html", null, true);
            // line 5
            echo "</h4>

\t\t<div class=\"col-md-12\">
\t\t\t<article class=\"row panel panel-default clearfix\"";
            // line 8
            if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id")) {
                echo " id=\"";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getBody"), 0, 24), "html", null, true);
                echo "\"";
            }
            echo ">

\t\t\t    <header class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">";
            // line 12
            if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedBy")) {
                // line 13
                echo $this->env->getExtension('translator')->trans("post.posted-by");
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedBy"), "username"), "html", null, true);
                // line 16
                echo "&nbsp;&#183;&nbsp;";
            }
            // line 20
            echo "<span class=\"timestamper\" title=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedDate"), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
            echo "\">";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedDate"), $this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "item_post"), "created_datetime_format")), "html", null, true);
            // line 22
            echo "</span>
\t\t\t\t\t</h3>
\t\t\t\t</header>

\t\t\t\t<div class=\"panel-body\">";
            // line 27
            $this->env->loadTemplate("CCDNForumForumBundle:User:Post/Partial/item_post_body.html.twig")->display(array_merge($context, array("post" => (isset($context["preview"]) ? $context["preview"] : $this->getContext($context, "preview")))));
            // line 28
            echo "</div>

\t\t\t</article>
\t\t</div>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User:Post/Partial/post_preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 22,  55 => 21,  51 => 20,  42 => 12,  32 => 8,  25 => 4,  23 => 3,  21 => 2,  19 => 1,  1214 => 513,  1208 => 511,  1202 => 509,  1200 => 508,  1198 => 507,  1194 => 506,  1185 => 505,  1183 => 504,  1180 => 503,  1167 => 497,  1161 => 495,  1155 => 493,  1153 => 492,  1151 => 491,  1147 => 490,  1141 => 489,  1139 => 488,  1136 => 487,  1123 => 481,  1117 => 479,  1111 => 477,  1109 => 476,  1107 => 475,  1103 => 474,  1097 => 473,  1091 => 472,  1087 => 471,  1083 => 470,  1079 => 469,  1073 => 468,  1071 => 467,  1068 => 466,  1059 => 461,  1055 => 460,  1053 => 459,  1050 => 458,  1040 => 450,  1038 => 449,  1034 => 448,  1032 => 447,  1029 => 446,  1022 => 440,  1016 => 438,  1014 => 433,  1012 => 432,  1008 => 431,  1005 => 429,  1003 => 428,  1001 => 427,  998 => 426,  991 => 420,  985 => 418,  983 => 413,  981 => 412,  977 => 411,  974 => 409,  972 => 408,  970 => 407,  967 => 406,  960 => 402,  958 => 401,  955 => 400,  950 => 396,  947 => 394,  945 => 393,  943 => 392,  940 => 391,  932 => 386,  930 => 385,  906 => 384,  903 => 382,  900 => 380,  898 => 379,  896 => 378,  894 => 377,  891 => 376,  886 => 372,  884 => 371,  882 => 370,  880 => 369,  877 => 368,  872 => 362,  870 => 361,  867 => 360,  862 => 356,  860 => 355,  858 => 354,  856 => 353,  853 => 352,  848 => 348,  845 => 346,  843 => 345,  841 => 344,  839 => 343,  837 => 342,  832 => 338,  830 => 337,  828 => 336,  822 => 335,  820 => 334,  817 => 332,  815 => 331,  811 => 330,  809 => 329,  806 => 328,  801 => 324,  799 => 319,  796 => 318,  791 => 314,  785 => 309,  783 => 308,  778 => 306,  776 => 305,  761 => 304,  758 => 301,  756 => 300,  753 => 298,  751 => 297,  748 => 295,  746 => 294,  744 => 292,  742 => 291,  740 => 290,  737 => 289,  732 => 283,  730 => 282,  728 => 281,  725 => 280,  720 => 276,  718 => 275,  716 => 274,  713 => 273,  702 => 269,  699 => 267,  697 => 266,  695 => 265,  692 => 264,  687 => 260,  685 => 259,  683 => 258,  680 => 257,  675 => 253,  673 => 252,  671 => 251,  668 => 250,  663 => 246,  661 => 245,  659 => 244,  656 => 243,  650 => 239,  648 => 238,  646 => 237,  643 => 236,  638 => 232,  636 => 231,  634 => 230,  631 => 229,  626 => 225,  624 => 224,  622 => 223,  619 => 222,  614 => 218,  612 => 217,  609 => 216,  604 => 212,  602 => 211,  600 => 210,  597 => 209,  592 => 205,  590 => 204,  588 => 202,  585 => 201,  579 => 196,  576 => 194,  574 => 193,  572 => 192,  569 => 190,  567 => 189,  565 => 188,  563 => 187,  559 => 186,  557 => 185,  555 => 184,  552 => 182,  550 => 181,  548 => 180,  545 => 179,  539 => 174,  537 => 172,  536 => 171,  535 => 170,  534 => 169,  530 => 168,  528 => 167,  525 => 165,  523 => 164,  521 => 163,  518 => 162,  512 => 157,  510 => 156,  508 => 155,  506 => 154,  504 => 153,  500 => 152,  498 => 151,  495 => 149,  493 => 148,  491 => 147,  488 => 146,  473 => 142,  471 => 141,  468 => 140,  453 => 136,  451 => 135,  448 => 134,  422 => 128,  419 => 126,  417 => 125,  415 => 124,  411 => 123,  409 => 122,  392 => 121,  390 => 120,  387 => 119,  382 => 115,  380 => 114,  378 => 113,  372 => 110,  370 => 109,  368 => 108,  366 => 107,  364 => 106,  355 => 104,  353 => 103,  343 => 102,  340 => 100,  338 => 99,  336 => 97,  334 => 96,  331 => 95,  324 => 89,  321 => 87,  319 => 86,  317 => 85,  315 => 84,  312 => 82,  310 => 81,  308 => 80,  306 => 79,  304 => 78,  301 => 77,  291 => 71,  289 => 70,  285 => 67,  283 => 66,  281 => 65,  276 => 64,  273 => 63,  271 => 62,  267 => 61,  265 => 60,  262 => 59,  256 => 54,  253 => 52,  251 => 51,  249 => 50,  246 => 49,  237 => 45,  235 => 44,  233 => 43,  230 => 42,  225 => 38,  222 => 36,  220 => 35,  218 => 34,  215 => 33,  210 => 29,  208 => 28,  206 => 27,  203 => 25,  201 => 24,  197 => 23,  195 => 22,  192 => 21,  178 => 17,  176 => 16,  174 => 15,  172 => 14,  169 => 13,  163 => 8,  160 => 6,  158 => 5,  156 => 4,  153 => 3,  149 => 503,  147 => 487,  145 => 466,  143 => 458,  141 => 446,  139 => 426,  137 => 406,  135 => 400,  133 => 391,  131 => 376,  129 => 368,  127 => 360,  125 => 352,  123 => 328,  121 => 318,  119 => 314,  117 => 289,  115 => 280,  113 => 273,  105 => 243,  103 => 236,  101 => 229,  95 => 209,  93 => 201,  91 => 179,  85 => 140,  73 => 49,  71 => 42,  69 => 33,  67 => 21,  65 => 28,  63 => 27,  111 => 264,  109 => 257,  107 => 250,  99 => 222,  97 => 216,  94 => 42,  89 => 162,  87 => 146,  83 => 134,  81 => 119,  79 => 95,  77 => 77,  75 => 59,  72 => 26,  66 => 23,  62 => 22,  58 => 20,  56 => 18,  53 => 17,  48 => 16,  46 => 14,  44 => 13,  41 => 10,  37 => 7,  34 => 6,  29 => 4,  27 => 5,);
    }
}

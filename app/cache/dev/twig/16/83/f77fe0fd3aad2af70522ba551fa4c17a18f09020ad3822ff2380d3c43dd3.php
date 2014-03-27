<?php

/* WebProfilerBundle:Collector:events.html.twig */
class __TwigTemplate_1683f77fe0fd3aad2af70522ba551fa4c17a18f09020ad3822ff2380d3c43dd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_3b4ccb522ad0e665bf2f022bd44e65179754fc3277c29cd8ad8a53f65e2b99f4"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAiCAQAAADragGFAAAD60lEQVR42o2UfUxbVRjGb7fy4ah2QwdECSgjEpcYUP8hmtiWljbt+Gih62zGVqBjXkqgVcYQKzNLJF1HBxt0S9YMgqHVLt1oZRqidcpcgQ1dMpkxgyVK2NSYyWTAJoPB4/1g0iLQnZub+348v3vOPe95L/FogFO+pbBMbtPmgEsEDXC1OXJbYVn5FnBoPwg4wVfVCc7J3WRToxoxIbmYRjXZJHcLzqnqTvAZkEUsSfI2iddxCHtR8LkIvBCIR0UKsNdxSOKVt1mSwGGQ87GKNk3ncO1ARdFxkU/qxMYQaKPUKfIVHR+oGK7VdCrazsdSGKJKqsW+oRqnMcu7s91Td02FuBAo7prKU7ezPcvrNA7ViH0l1Ygi/Kmiz+y2H3Tirvqj0PvLqk09ieAsfW1PYrXJXwZ9/VFx11Vda2OW159KmEvFvkkdadvunN19oEbYrXSczMD6/6D1JzOUDmH3gZrZ3dudpG1SJ/aZSwnSuqsDebIz9oZBtbC7/SDykATu0oZTXl77QWH3oNreIDuD3F0dpJXoU3sMU9nG5ku6lop8N9RIAw9ccqvGoDGQWymIR0XUqk+PVF0qNjZPZXsMfWoCKUijrky8Qt0KyuIiWtMqnBdAAOG8phXRVORFKvM6rWC0KQQiqfAG8PEUnkY8ZUVW7hdg6arcTyk2UJlnKAWfsqIRSSwfSFDeDIaUN5FAhBtIlz4IhqQPkB4eytROBEPaCWQ+xkyu3mDI1fs4Mz33dUsw9KUdieGhzVXf0GIF8hmoPIC4sNBEmuweLbbca56kn9kzI+ngrIkgosHMLqu/90c/a31oQVSYxemu0ELNDCph0E0z+3cd8WshnMAb4jlaqP/rjuwPWelt2hYtfCHFutWhJ95vXTw8v6l/yh3dNyphPJMLMatDz6rHaJHhnwsXJQ+33R/z1d6l/dxxJK+GrHMVsvOUTOdNX+ztvKycaLnORo6Vg7sy9GRVFyspnhp2wIDKs+6cGTay5wI2rQj9nbpt8dTtuzVM4gW89JVlB7V/a1QLEUeMrEBDNaDkfvHht07TrVi/eObrrStUC7H6AJ0smH848MnPWUzn5swM9qNHzyxRO4KE/1XoRoZklk5aRy/bdX8KIJ8XLwhQ+ut3H526ylbLk7OsWogy29hlkL+LKPEHd25f+WXIdJf+T7xzQ8RkjG7wljW5duRRM+yYDvThMIpQjGP+79mtWKzW8yEV8snp9wsgWzh1a64De/Ay+NiEV0HOdXw8plhgsaaKoGohxuSigxKM9cOMN7GZTSIC8ZT33vi3BczG6AOIXYKS85mj+e443kYKokO/FsnQWUeZl84OvUZX618UFpIDvqMM6gAAAABJRU5ErkJggg==\" alt=\"Events\"></span>
    <strong>Events</strong>
</span>
";
    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "calledlisteners"))) {
            // line 14
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        } else {
            // line 16
            echo "        <h2>Events</h2>
        <p>
            <em>No events have been recorded. Are you sure that debugging is enabled in the kernel?</em>
        </p>
    ";
        }
    }

    // line 23
    public function block_panelContent($context, array $blocks = array())
    {
        // line 24
        echo "    <h2>Called Listeners</h2>

    <table>
        <tr>
            <th>Event name</th>
            <th>Listener</th>
        </tr>
        ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "collector"), "calledlisteners"));
        foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
            // line 32
            echo "            <tr>
                <td><code>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listener"), "event"), "html", null, true);
            echo "</code></td>
                <td><code>";
            // line 34
            echo $context["__internal_3b4ccb522ad0e665bf2f022bd44e65179754fc3277c29cd8ad8a53f65e2b99f4"]->getdisplay_listener($this->getContext($context, "listener"));
            echo "</code></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </table>

    ";
        // line 39
        if ($this->getAttribute($this->getContext($context, "collector"), "notcalledlisteners")) {
            // line 40
            echo "        <h2>Not Called Listeners</h2>

        <table>
            <tr>
                <th>Event name</th>
                <th>Listener</th>
            </tr>
            ";
            // line 47
            $context["listeners"] = $this->getAttribute($this->getContext($context, "collector"), "notcalledlisteners");
            // line 48
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter($this->getContext($context, "listeners"))));
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 49
                echo "                <tr>
                    <td><code>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "listeners"), $this->getContext($context, "listener"), array(), "array"), "event"), "html", null, true);
                echo "</code></td>
                    <td><code>";
                // line 51
                echo $context["__internal_3b4ccb522ad0e665bf2f022bd44e65179754fc3277c29cd8ad8a53f65e2b99f4"]->getdisplay_listener($this->getAttribute($this->getContext($context, "listeners"), $this->getContext($context, "listener"), array(), "array"));
                echo "</code></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        </table>
    ";
        }
    }

    // line 58
    public function getdisplay_listener($_listener = null)
    {
        $context = $this->env->mergeGlobals(array(
            "listener" => $_listener,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 59
            echo "    ";
            if (($this->getAttribute($this->getContext($context, "listener"), "type") == "Closure")) {
                // line 60
                echo "        Closure
    ";
            } elseif (($this->getAttribute($this->getContext($context, "listener"), "type") == "Function")) {
                // line 62
                echo "        ";
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($this->getContext($context, "listener"), "file"), $this->getAttribute($this->getContext($context, "listener"), "line"));
                // line 63
                echo "        ";
                if ($this->getContext($context, "link")) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "link"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listener"), "function"), "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listener"), "function"), "html", null, true);
                }
                // line 64
                echo "    ";
            } elseif (($this->getAttribute($this->getContext($context, "listener"), "type") == "Method")) {
                // line 65
                echo "        ";
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($this->getContext($context, "listener"), "file"), $this->getAttribute($this->getContext($context, "listener"), "line"));
                // line 66
                echo "        ";
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute($this->getContext($context, "listener"), "class"));
                echo "::";
                if ($this->getContext($context, "link")) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "link"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listener"), "method"), "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listener"), "method"), "html", null, true);
                }
                // line 67
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 202,  446 => 197,  439 => 195,  431 => 189,  429 => 188,  408 => 176,  401 => 172,  394 => 168,  373 => 156,  361 => 146,  351 => 141,  342 => 137,  335 => 134,  325 => 129,  323 => 128,  320 => 127,  300 => 121,  286 => 112,  270 => 102,  226 => 84,  216 => 79,  191 => 67,  257 => 98,  198 => 76,  161 => 63,  76 => 31,  1214 => 513,  1208 => 511,  1202 => 509,  1200 => 508,  1198 => 507,  1194 => 506,  1185 => 505,  1183 => 504,  1180 => 503,  1167 => 497,  1161 => 495,  1155 => 493,  1153 => 492,  1151 => 491,  1147 => 490,  1141 => 489,  1139 => 488,  1136 => 487,  1123 => 481,  1117 => 479,  1111 => 477,  1109 => 476,  1107 => 475,  1103 => 474,  1097 => 473,  1091 => 472,  1087 => 471,  1083 => 470,  1079 => 469,  1073 => 468,  1071 => 467,  1068 => 466,  1059 => 461,  1055 => 460,  1053 => 459,  1050 => 458,  1040 => 450,  1038 => 449,  1034 => 448,  1032 => 447,  1029 => 446,  1022 => 440,  1016 => 438,  1014 => 433,  1012 => 432,  1008 => 431,  1005 => 429,  1003 => 428,  1001 => 427,  998 => 426,  991 => 420,  985 => 418,  983 => 413,  981 => 412,  977 => 411,  974 => 409,  972 => 408,  970 => 407,  967 => 406,  960 => 402,  958 => 401,  955 => 400,  950 => 396,  947 => 394,  945 => 393,  943 => 392,  940 => 391,  932 => 386,  930 => 385,  906 => 384,  903 => 382,  900 => 380,  898 => 379,  896 => 378,  894 => 377,  891 => 376,  886 => 372,  884 => 371,  882 => 370,  880 => 369,  877 => 368,  872 => 362,  870 => 361,  867 => 360,  862 => 356,  860 => 355,  858 => 354,  856 => 353,  853 => 352,  848 => 348,  845 => 346,  843 => 345,  841 => 344,  839 => 343,  837 => 342,  832 => 338,  830 => 337,  828 => 336,  822 => 335,  820 => 334,  817 => 332,  815 => 331,  811 => 330,  809 => 329,  806 => 328,  801 => 324,  799 => 319,  796 => 318,  791 => 314,  785 => 309,  783 => 308,  778 => 306,  776 => 305,  761 => 304,  758 => 301,  756 => 300,  753 => 298,  751 => 297,  748 => 295,  746 => 294,  744 => 292,  742 => 291,  740 => 290,  737 => 289,  732 => 283,  730 => 282,  728 => 281,  725 => 280,  720 => 276,  718 => 275,  716 => 274,  713 => 273,  702 => 269,  699 => 267,  697 => 266,  695 => 265,  692 => 264,  687 => 260,  685 => 259,  683 => 258,  680 => 257,  675 => 253,  673 => 252,  671 => 251,  668 => 250,  663 => 246,  661 => 245,  659 => 244,  656 => 243,  650 => 239,  648 => 238,  646 => 237,  643 => 236,  638 => 232,  636 => 231,  634 => 230,  631 => 229,  626 => 225,  624 => 224,  622 => 223,  619 => 222,  614 => 218,  612 => 217,  609 => 216,  604 => 212,  602 => 211,  600 => 210,  597 => 209,  592 => 205,  590 => 204,  588 => 202,  585 => 201,  579 => 196,  576 => 194,  574 => 193,  572 => 192,  569 => 190,  567 => 189,  565 => 188,  563 => 187,  559 => 186,  557 => 185,  555 => 184,  552 => 182,  550 => 181,  548 => 180,  545 => 179,  539 => 174,  537 => 172,  536 => 171,  535 => 170,  534 => 169,  530 => 168,  528 => 167,  525 => 165,  523 => 164,  521 => 163,  512 => 157,  510 => 156,  506 => 154,  504 => 153,  500 => 152,  498 => 151,  495 => 149,  493 => 148,  491 => 147,  488 => 146,  473 => 142,  468 => 140,  451 => 135,  448 => 134,  422 => 184,  419 => 126,  417 => 125,  415 => 180,  411 => 123,  392 => 121,  390 => 120,  382 => 115,  380 => 160,  372 => 110,  370 => 109,  366 => 107,  353 => 103,  338 => 135,  336 => 97,  334 => 96,  331 => 95,  317 => 85,  315 => 125,  310 => 81,  308 => 80,  304 => 78,  291 => 71,  289 => 113,  281 => 65,  276 => 64,  271 => 62,  265 => 60,  253 => 94,  251 => 51,  249 => 50,  237 => 45,  233 => 87,  218 => 34,  215 => 37,  206 => 27,  160 => 91,  244 => 90,  239 => 93,  213 => 78,  210 => 33,  207 => 75,  205 => 30,  202 => 76,  200 => 72,  186 => 69,  329 => 131,  306 => 79,  303 => 122,  301 => 77,  290 => 117,  287 => 115,  284 => 113,  282 => 112,  279 => 111,  275 => 105,  272 => 109,  267 => 101,  262 => 98,  259 => 102,  250 => 98,  248 => 94,  245 => 96,  232 => 91,  228 => 89,  225 => 84,  167 => 95,  188 => 20,  129 => 71,  518 => 162,  511 => 174,  508 => 155,  502 => 133,  492 => 120,  471 => 141,  467 => 117,  463 => 116,  458 => 115,  454 => 114,  452 => 113,  449 => 198,  441 => 196,  426 => 84,  406 => 71,  399 => 46,  396 => 45,  391 => 42,  383 => 37,  378 => 113,  371 => 176,  369 => 173,  364 => 106,  352 => 167,  348 => 140,  345 => 165,  343 => 102,  340 => 100,  328 => 160,  324 => 89,  321 => 87,  319 => 86,  316 => 156,  307 => 150,  295 => 143,  293 => 142,  280 => 134,  277 => 133,  260 => 129,  256 => 96,  236 => 92,  223 => 109,  212 => 34,  195 => 112,  192 => 21,  180 => 103,  165 => 60,  197 => 71,  194 => 70,  184 => 96,  113 => 48,  65 => 22,  181 => 65,  170 => 96,  155 => 87,  153 => 56,  90 => 27,  174 => 98,  152 => 86,  148 => 83,  127 => 62,  104 => 78,  100 => 39,  137 => 77,  126 => 48,  53 => 12,  23 => 5,  222 => 36,  190 => 72,  185 => 66,  178 => 66,  175 => 65,  124 => 68,  110 => 60,  97 => 43,  84 => 24,  81 => 23,  58 => 20,  34 => 9,  172 => 64,  150 => 55,  146 => 81,  134 => 54,  118 => 49,  114 => 62,  77 => 44,  70 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 101,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 83,  413 => 134,  409 => 122,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 177,  368 => 108,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 130,  312 => 124,  309 => 126,  305 => 95,  298 => 120,  294 => 119,  285 => 67,  283 => 66,  278 => 106,  268 => 85,  264 => 104,  258 => 81,  252 => 102,  247 => 98,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 102,  169 => 95,  140 => 58,  132 => 66,  128 => 83,  107 => 59,  61 => 28,  273 => 63,  269 => 108,  254 => 101,  243 => 88,  240 => 124,  238 => 112,  235 => 44,  230 => 42,  227 => 85,  224 => 71,  221 => 41,  219 => 108,  217 => 38,  208 => 28,  204 => 72,  179 => 67,  159 => 89,  143 => 87,  135 => 76,  119 => 40,  102 => 40,  71 => 31,  67 => 24,  63 => 29,  59 => 14,  38 => 6,  94 => 44,  89 => 39,  85 => 16,  75 => 29,  68 => 33,  56 => 19,  87 => 34,  21 => 3,  26 => 6,  93 => 52,  88 => 40,  78 => 31,  46 => 13,  27 => 3,  44 => 11,  31 => 8,  28 => 10,  201 => 28,  196 => 90,  183 => 17,  171 => 69,  166 => 16,  163 => 92,  158 => 62,  156 => 58,  151 => 59,  142 => 72,  138 => 73,  136 => 56,  121 => 50,  117 => 57,  105 => 34,  91 => 34,  62 => 23,  49 => 14,  24 => 4,  25 => 6,  19 => 1,  79 => 31,  72 => 41,  69 => 29,  47 => 16,  40 => 14,  37 => 14,  22 => 17,  246 => 93,  157 => 95,  145 => 78,  139 => 77,  131 => 72,  123 => 42,  120 => 67,  115 => 58,  111 => 47,  108 => 39,  101 => 47,  98 => 46,  96 => 37,  83 => 33,  74 => 33,  66 => 26,  55 => 16,  52 => 17,  50 => 23,  43 => 12,  41 => 18,  35 => 6,  32 => 5,  29 => 7,  209 => 82,  203 => 73,  199 => 67,  193 => 82,  189 => 107,  187 => 71,  182 => 104,  176 => 63,  173 => 88,  168 => 61,  164 => 70,  162 => 59,  154 => 60,  149 => 91,  147 => 54,  144 => 80,  141 => 51,  133 => 67,  130 => 46,  125 => 51,  122 => 68,  116 => 39,  112 => 55,  109 => 53,  106 => 57,  103 => 48,  99 => 31,  95 => 51,  92 => 43,  86 => 38,  82 => 67,  80 => 32,  73 => 20,  64 => 23,  60 => 21,  57 => 24,  54 => 17,  51 => 16,  48 => 13,  45 => 10,  42 => 10,  39 => 9,  36 => 10,  33 => 4,  30 => 3,);
    }
}

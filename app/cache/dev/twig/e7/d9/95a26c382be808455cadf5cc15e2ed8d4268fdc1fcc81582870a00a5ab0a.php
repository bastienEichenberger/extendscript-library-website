<?php

/* JlfaForumBundle:Common/Layout/Sidebar/Partial:user_boards.html.twig */
class __TwigTemplate_e7d995a26c382be808455cadf5cc15e2ed8d4268fdc1fcc81582870a00a5ab0a extends Twig_Template
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
        $context["sidebar_categories"] = $this->env->getExtension('boardList')->boardList($this->getContext($context, "forumName"));
        // line 5
        if (twig_length_filter($this->env, $this->getContext($context, "sidebar_categories"))) {
            // line 6
            echo "<li>
\t\t\t<ul class=\"nav nav-pills nav-stacked\">";
            // line 8
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sidebar_categories"));
            foreach ($context['_seq'] as $context["_key"] => $context["sidebar_category"]) {
                // line 9
                if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "sidebar_category"), "boards"))) {
                    // line 10
                    if ((array_key_exists("category", $context) && ($this->getContext($context, "route") == "ccdn_forum_user_category_show"))) {
                        // line 11
                        if (($this->getAttribute($this->getContext($context, "sidebar_category"), "id") == $this->getAttribute($this->getContext($context, "category"), "id"))) {
                            // line 12
                            echo "<li class=\"active\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 13
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_category_show", array("categoryId" => $this->getAttribute($this->getContext($context, "sidebar_category"), "id"), "forumName" => $this->getContext($context, "forumName"))), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t\t\t title=\"";
                            // line 14
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sidebar_category"), "name"), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-open\"></i>";
                        } else {
                            // line 17
                            echo "<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 18
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_category_show", array("categoryId" => $this->getAttribute($this->getContext($context, "sidebar_category"), "id"), "forumName" => $this->getContext($context, "forumName"))), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t\t\t title=\"";
                            // line 19
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sidebar_category"), "name"), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-open\"></i>";
                        }
                    } else {
                        // line 23
                        echo "<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 24
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_category_show", array("categoryId" => $this->getAttribute($this->getContext($context, "sidebar_category"), "id"), "forumName" => $this->getContext($context, "forumName"))), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\t\t\t title=\"";
                        // line 25
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sidebar_category"), "name"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-open\"></i>";
                    }
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sidebar_category"), "name"), "html", null, true);
                    // line 29
                    echo "</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">";
                    // line 34
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "sidebar_category"), "boards"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sidebar_board"]) {
                        // line 35
                        if (array_key_exists("board", $context)) {
                            // line 36
                            if (($this->getAttribute($this->getContext($context, "sidebar_board"), "id") == $this->getAttribute($this->getContext($context, "board"), "id"))) {
                                // line 37
                                echo "<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 38
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_board_show", array("boardId" => $this->getAttribute($this->getContext($context, "sidebar_board"), "id"), "forumName" => $this->getContext($context, "forumName"))), "html", null, true);
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t title=\"";
                                // line 39
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sidebar_board"), "name"), "html", null, true);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-open\"></i>";
                            } else {
                                // line 42
                                echo "<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 43
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_board_show", array("boardId" => $this->getAttribute($this->getContext($context, "sidebar_board"), "id"), "forumName" => $this->getContext($context, "forumName"))), "html", null, true);
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t title=\"";
                                // line 44
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sidebar_board"), "name"), "html", null, true);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-close\"></i>";
                            }
                        } else {
                            // line 48
                            echo "<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 49
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_board_show", array("boardId" => $this->getAttribute($this->getContext($context, "sidebar_board"), "id"), "forumName" => $this->getContext($context, "forumName"))), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t title=\"";
                            // line 50
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sidebar_board"), "name"), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-close\"></i>";
                        }
                        // line 53
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sidebar_board"), "name"), "html", null, true);
                        // line 54
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</li>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sidebar_board'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 57
                    echo "</ul>
\t\t\t\t\t\t</li>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sidebar_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "</ul>
\t\t</li>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "JlfaForumBundle:Common/Layout/Sidebar/Partial:user_boards.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 96,  239 => 93,  213 => 82,  210 => 81,  207 => 80,  205 => 79,  202 => 76,  200 => 75,  186 => 69,  329 => 133,  306 => 124,  303 => 122,  301 => 121,  290 => 117,  287 => 115,  284 => 113,  282 => 112,  279 => 111,  275 => 110,  272 => 109,  267 => 105,  262 => 103,  259 => 102,  250 => 98,  248 => 97,  245 => 96,  232 => 91,  228 => 89,  225 => 87,  167 => 76,  188 => 70,  129 => 64,  518 => 177,  511 => 174,  508 => 173,  502 => 133,  492 => 120,  471 => 118,  467 => 117,  463 => 116,  458 => 115,  454 => 114,  452 => 113,  449 => 112,  441 => 100,  426 => 84,  406 => 71,  399 => 46,  396 => 45,  391 => 42,  383 => 37,  378 => 10,  371 => 176,  369 => 173,  364 => 170,  352 => 167,  348 => 166,  345 => 165,  343 => 164,  340 => 163,  328 => 160,  324 => 159,  321 => 158,  319 => 157,  316 => 156,  307 => 150,  295 => 143,  293 => 142,  280 => 134,  277 => 133,  260 => 129,  256 => 127,  236 => 92,  223 => 109,  212 => 105,  195 => 104,  192 => 73,  180 => 71,  165 => 75,  197 => 74,  194 => 84,  184 => 96,  113 => 43,  65 => 22,  181 => 81,  170 => 64,  155 => 75,  153 => 76,  90 => 18,  174 => 65,  152 => 61,  148 => 60,  127 => 49,  104 => 51,  100 => 33,  137 => 57,  126 => 63,  53 => 18,  23 => 5,  222 => 85,  190 => 72,  185 => 61,  178 => 80,  175 => 71,  124 => 62,  110 => 44,  97 => 52,  84 => 48,  81 => 31,  58 => 20,  34 => 10,  172 => 70,  150 => 60,  146 => 61,  134 => 55,  118 => 40,  114 => 59,  77 => 29,  70 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 101,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 83,  413 => 134,  409 => 72,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 177,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 130,  312 => 98,  309 => 126,  305 => 95,  298 => 120,  294 => 119,  285 => 89,  283 => 135,  278 => 86,  268 => 85,  264 => 104,  258 => 81,  252 => 102,  247 => 98,  241 => 94,  229 => 73,  220 => 84,  214 => 69,  177 => 72,  169 => 85,  140 => 66,  132 => 65,  128 => 53,  107 => 52,  61 => 35,  273 => 132,  269 => 108,  254 => 101,  243 => 88,  240 => 124,  238 => 112,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 108,  217 => 83,  208 => 89,  204 => 72,  179 => 67,  159 => 65,  143 => 57,  135 => 55,  119 => 49,  102 => 39,  71 => 28,  67 => 23,  63 => 23,  59 => 20,  38 => 12,  94 => 38,  89 => 36,  85 => 30,  75 => 28,  68 => 17,  56 => 32,  87 => 35,  21 => 3,  26 => 7,  93 => 43,  88 => 36,  78 => 49,  46 => 21,  27 => 7,  44 => 8,  31 => 25,  28 => 8,  201 => 84,  196 => 90,  183 => 68,  171 => 69,  166 => 63,  163 => 62,  158 => 62,  156 => 63,  151 => 73,  142 => 72,  138 => 56,  136 => 53,  121 => 46,  117 => 46,  105 => 25,  91 => 37,  62 => 21,  49 => 11,  24 => 5,  25 => 6,  19 => 1,  79 => 33,  72 => 29,  69 => 39,  47 => 10,  40 => 5,  37 => 8,  22 => 17,  246 => 90,  157 => 77,  145 => 61,  139 => 56,  131 => 54,  123 => 50,  120 => 57,  115 => 44,  111 => 42,  108 => 26,  101 => 23,  98 => 39,  96 => 44,  83 => 34,  74 => 30,  66 => 24,  55 => 31,  52 => 16,  50 => 17,  43 => 12,  41 => 13,  35 => 4,  32 => 9,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 82,  189 => 71,  187 => 84,  182 => 85,  176 => 64,  173 => 70,  168 => 80,  164 => 66,  162 => 67,  154 => 62,  149 => 73,  147 => 46,  144 => 58,  141 => 73,  133 => 55,  130 => 54,  125 => 48,  122 => 55,  116 => 48,  112 => 37,  109 => 41,  106 => 43,  103 => 42,  99 => 22,  95 => 38,  92 => 37,  86 => 53,  82 => 33,  80 => 27,  73 => 43,  64 => 36,  60 => 13,  57 => 19,  54 => 17,  51 => 26,  48 => 14,  45 => 14,  42 => 8,  39 => 9,  36 => 11,  33 => 14,  30 => 13,);
    }
}

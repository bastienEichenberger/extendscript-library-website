<?php

/* JlfaForumBundle:Admin/Board:list.html.twig */
class __TwigTemplate_4d93d158232fc08f1f1518ffcf7d8d6591b1798fdbe7c22db35c98f884cba6b1 extends Twig_Template
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
        $context["LayoutTemplate"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "ccdn_forum_forum"), "board"), "admin"), "list"), "layout_template");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.admin.manage-boards.index"), "html", null, true);
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        $this->displayParentBlock("sidebar", $context, $blocks);
        // line 12
        $this->env->loadTemplate("CCDNForumForumBundle:Common:Layout/Sidebar/admin_forum.html.twig")->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 16
    public function block_body_content($context, array $blocks = array())
    {
        // line 17
        ob_start();
        // line 19
        echo "<section class=\"row btn-toolbar clearfix\">
    <a class=\"btn btn-primary\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_create", array("forum_filter" => $this->getContext($context, "forum_filter"), "category_filter" => $this->getContext($context, "category_filter"))), "html", null, true);
        echo "\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.board.create"), "html", null, true);
        // line 22
        echo "</a>
    </section>

    <section class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("filter.forums"), "html", null, true);
        // line 30
        echo "</div>
                    <div class=\"list-group\">
                        <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_list");
        echo "\"
                           class=\"list-group-item ellipsis";
        // line 33
        if (((null === $this->getContext($context, "forum_filter")) || ($this->getContext($context, "forum_filter") == ""))) {
            echo " active";
        }
        echo "\">
                            <i class=\"glyphicon glyphicon-exclamation-sign\"></i>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.unassigned"), "html", null, true);
        // line 36
        echo "</a>";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "forums"));
        foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
            // line 38
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_list", array("forum_filter" => $this->getAttribute($this->getContext($context, "forum"), "id"))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "forum"), "name"), "html", null, true);
            echo "\"
                           class=\"list-group-item ellipsis";
            // line 39
            if (($this->getContext($context, "forum_filter") == $this->getAttribute($this->getContext($context, "forum"), "id"))) {
                echo " active";
            }
            echo "\">
                            <span class=\"label pull-right\">";
            // line 41
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "forum"), "getCategories")), "html", null, true);
            // line 42
            echo "</span>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "forum"), "name"), "html", null, true);
            // line 44
            echo "</a>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("filter.categories"), "html", null, true);
        // line 53
        echo "</div>
                            <div class=\"list-group\">
                                <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_list", array("forum_filter" => $this->getContext($context, "forum_filter"))), "html", null, true);
        echo "\"
                                   class=\"list-group-item ellipsis";
        // line 56
        if (((null === $this->getContext($context, "category_filter")) || ($this->getContext($context, "category_filter") == ""))) {
            echo " active";
        }
        echo "\">
                                    <i class=\"glyphicon glyphicon-exclamation-sign\"></i>";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.unassigned"), "html", null, true);
        // line 59
        echo "</a>";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "categories"));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 61
            echo "<a href=\"";
            // line 62
            if ($this->getAttribute($this->getContext($context, "category"), "forum")) {
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_list", array("forum_filter" => $this->getAttribute($this->getAttribute($this->getContext($context, "category"), "forum"), "id"), "category_filter" => $this->getAttribute($this->getContext($context, "category"), "id"))), "html", null, true);
            } else {
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_list", array("category_filter" => $this->getAttribute($this->getContext($context, "category"), "id"))), "html", null, true);
            }
            // line 67
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "category"), "name"), "html", null, true);
            echo "\" class=\"list-group-item ellipsis";
            if (($this->getContext($context, "category_filter") == $this->getAttribute($this->getContext($context, "category"), "id"))) {
                echo " active";
            }
            echo "\">
                                       <span class=\"label pull-right\">";
            // line 69
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "category"), "getBoards")), "html", null, true);
            // line 70
            echo "</span>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "category"), "name"), "html", null, true);
            // line 72
            echo "</a>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "</div>
                                </div>
                            </div>

                            <div class=\"col-md-12\">
                                <table class=\"table table-bordered\" id=\"admin-boards-list\">
                                    <thead>
                                        <tr>
                                            <th>";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.id-th"), "html", null, true);
        echo "</th>
                                            <th>";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.name-th"), "html", null, true);
        echo "</th>
                                            <th>";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.topic-count-th"), "html", null, true);
        echo "</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>";
        // line 89
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "boards"));
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
        foreach ($context['_seq'] as $context["board_index"] => $context["board"]) {
            // line 90
            echo "<tr>
                                                <td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "board"), "id"), "html", null, true);
            echo "</td>
                                                <td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "board"), "name"), "html", null, true);
            echo "</td>
                                                <td>";
            // line 93
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "board"), "topics")), "html", null, true);
            echo "</td>
                                                <td>
                                                    <a class=\"btn btn-default\" href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_edit", array("boardId" => $this->getAttribute($this->getContext($context, "board"), "id"), "forum_filter" => $this->getContext($context, "forum_filter"), "category_filter" => $this->getContext($context, "category_filter"))), "html", null, true);
            echo "\"
                                                       id=\"update_board[";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "board"), "name"), "html", null, true);
            echo "]\">";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.edit"), "html", null, true);
            // line 98
            echo "</a>";
            // line 100
            if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 101
                echo "<a class=\"btn btn-danger\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_delete", array("boardId" => $this->getAttribute($this->getContext($context, "board"), "id"), "forum_filter" => $this->getContext($context, "forum_filter"), "category_filter" => $this->getContext($context, "category_filter"))), "html", null, true);
                echo "\"
                                                       id=\"delete_board[";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "board"), "name"), "html", null, true);
                echo "]\">";
                // line 103
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.delete"), "html", null, true);
                // line 104
                echo "</a>";
            }
            // line 107
            if (((!(null === $this->getContext($context, "category_filter"))) && ($this->getContext($context, "category_filter") != ""))) {
                // line 108
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getContext($context, "loop"), "length") > 1)) {
                    // line 109
                    echo "                                                    <div class=\"btn-group\">
                                                        <a class=\"btn btn-default\" href=\"";
                    // line 110
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_reorder_up", array("boardId" => $this->getAttribute($this->getContext($context, "board"), "id"), "forum_filter" => $this->getContext($context, "forum_filter"), "category_filter" => $this->getContext($context, "category_filter"))), "html", null, true);
                    echo "\"
                                                           id=\"reorder_up_board[";
                    // line 111
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "board"), "name"), "html", null, true);
                    echo "]\">";
                    // line 112
                    if ($this->getAttribute($this->getContext($context, "loop"), "first")) {
                        // line 113
                        echo "<i class=\"glyphicon glyphicon-retweet\"></i>";
                    } else {
                        // line 115
                        echo "<i class=\"glyphicon glyphicon-chevron-up\"></i>";
                    }
                    // line 117
                    echo "</a>

                                                        <a class=\"btn btn-default\" href=\"";
                    // line 119
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_reorder_down", array("boardId" => $this->getAttribute($this->getContext($context, "board"), "id"), "forum_filter" => $this->getContext($context, "forum_filter"), "category_filter" => $this->getContext($context, "category_filter"))), "html", null, true);
                    echo "\"
                                                           id=\"reorder_down_board[";
                    // line 120
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "board"), "name"), "html", null, true);
                    echo "]\">";
                    // line 121
                    if ($this->getAttribute($this->getContext($context, "loop"), "last")) {
                        // line 122
                        echo "<i class=\"glyphicon glyphicon-retweet\"></i>";
                    } else {
                        // line 124
                        echo "<i class=\"glyphicon glyphicon-chevron-down\"></i>";
                    }
                    // line 126
                    echo "</a>
                                                    </div>";
                }
            }
            // line 130
            echo "</td>
                                            </tr>";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['board_index'], $context['board'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "</tbody>
                                    </table>
                                </div>
                            </section>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "JlfaForumBundle:Admin/Board:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 133,  306 => 124,  303 => 122,  301 => 121,  290 => 117,  287 => 115,  284 => 113,  282 => 112,  279 => 111,  275 => 110,  272 => 109,  267 => 107,  262 => 103,  259 => 102,  250 => 98,  248 => 97,  245 => 96,  232 => 92,  228 => 91,  225 => 90,  167 => 76,  188 => 88,  129 => 64,  518 => 177,  511 => 174,  508 => 173,  502 => 133,  492 => 120,  471 => 118,  467 => 117,  463 => 116,  458 => 115,  454 => 114,  452 => 113,  449 => 112,  441 => 100,  426 => 84,  406 => 71,  399 => 46,  396 => 45,  391 => 42,  383 => 37,  378 => 10,  371 => 176,  369 => 173,  364 => 170,  352 => 167,  348 => 166,  345 => 165,  343 => 164,  340 => 163,  328 => 160,  324 => 159,  321 => 158,  319 => 157,  316 => 156,  307 => 150,  295 => 143,  293 => 142,  280 => 134,  277 => 133,  260 => 129,  256 => 127,  236 => 93,  223 => 109,  212 => 105,  195 => 104,  192 => 103,  180 => 71,  165 => 75,  197 => 83,  194 => 84,  184 => 96,  113 => 43,  65 => 22,  181 => 81,  170 => 77,  155 => 75,  153 => 76,  90 => 36,  174 => 67,  152 => 61,  148 => 60,  127 => 58,  104 => 51,  100 => 33,  137 => 68,  126 => 63,  53 => 17,  23 => 3,  222 => 72,  190 => 100,  185 => 61,  178 => 80,  175 => 71,  124 => 62,  110 => 37,  97 => 52,  84 => 48,  81 => 35,  58 => 20,  34 => 6,  172 => 70,  150 => 60,  146 => 59,  134 => 55,  118 => 40,  114 => 59,  77 => 24,  70 => 29,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 101,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 83,  413 => 134,  409 => 72,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 177,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 130,  312 => 98,  309 => 126,  305 => 95,  298 => 120,  294 => 119,  285 => 89,  283 => 135,  278 => 86,  268 => 85,  264 => 104,  258 => 81,  252 => 100,  247 => 78,  241 => 95,  229 => 73,  220 => 70,  214 => 69,  177 => 72,  169 => 85,  140 => 66,  132 => 65,  128 => 52,  107 => 52,  61 => 21,  273 => 132,  269 => 108,  254 => 101,  243 => 88,  240 => 124,  238 => 112,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 108,  217 => 75,  208 => 89,  204 => 72,  179 => 84,  159 => 65,  143 => 57,  135 => 66,  119 => 62,  102 => 39,  71 => 28,  67 => 23,  63 => 34,  59 => 20,  38 => 10,  94 => 42,  89 => 41,  85 => 30,  75 => 29,  68 => 16,  56 => 19,  87 => 40,  21 => 1,  26 => 3,  93 => 43,  88 => 35,  78 => 32,  46 => 12,  27 => 3,  44 => 11,  31 => 25,  28 => 20,  201 => 84,  196 => 90,  183 => 74,  171 => 69,  166 => 79,  163 => 78,  158 => 62,  156 => 63,  151 => 73,  142 => 72,  138 => 56,  136 => 53,  121 => 46,  117 => 39,  105 => 30,  91 => 50,  62 => 21,  49 => 11,  24 => 18,  25 => 3,  19 => 16,  79 => 33,  72 => 29,  69 => 40,  47 => 10,  40 => 8,  37 => 7,  22 => 17,  246 => 90,  157 => 77,  145 => 56,  139 => 70,  131 => 61,  123 => 58,  120 => 57,  115 => 44,  111 => 42,  108 => 31,  101 => 28,  98 => 45,  96 => 38,  83 => 37,  74 => 30,  66 => 39,  55 => 31,  52 => 16,  50 => 8,  43 => 12,  41 => 10,  35 => 6,  32 => 5,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 82,  189 => 71,  187 => 84,  182 => 85,  176 => 64,  173 => 70,  168 => 80,  164 => 66,  162 => 67,  154 => 62,  149 => 73,  147 => 46,  144 => 58,  141 => 73,  133 => 55,  130 => 53,  125 => 56,  122 => 55,  116 => 53,  112 => 37,  109 => 41,  106 => 36,  103 => 39,  99 => 40,  95 => 36,  92 => 37,  86 => 45,  82 => 33,  80 => 43,  73 => 28,  64 => 22,  60 => 20,  57 => 14,  54 => 17,  51 => 16,  48 => 13,  45 => 30,  42 => 10,  39 => 9,  36 => 5,  33 => 22,  30 => 21,);
    }
}

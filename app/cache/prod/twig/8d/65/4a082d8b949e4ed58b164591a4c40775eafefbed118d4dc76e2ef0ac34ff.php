<?php

/* CCDNForumForumBundle:Admin:/Board/list.html.twig */
class __TwigTemplate_8d654a082d8b949e4ed58b164591a4c40775eafefbed118d4dc76e2ef0ac34ff extends Twig_Template
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
        $context["LayoutTemplate"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "board"), "admin"), "list"), "layout_template");
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_create", array("forum_filter" => (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")), "category_filter" => (isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter")))), "html", null, true);
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
        if (((null === (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter"))) || ((isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")) == ""))) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["forums"]) ? $context["forums"] : $this->getContext($context, "forums")));
        foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
            // line 38
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_list", array("forum_filter" => $this->getAttribute((isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), "id"))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), "name"), "html", null, true);
            echo "\"
                           class=\"list-group-item ellipsis";
            // line 39
            if (((isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")) == $this->getAttribute((isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), "id"))) {
                echo " active";
            }
            echo "\">
                            <span class=\"label pull-right\">";
            // line 41
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), "getCategories")), "html", null, true);
            // line 42
            echo "</span>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), "name"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_list", array("forum_filter" => (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")))), "html", null, true);
        echo "\"
                                   class=\"list-group-item ellipsis";
        // line 56
        if (((null === (isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter"))) || ((isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter")) == ""))) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 61
            echo "<a href=\"";
            // line 62
            if ($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "forum")) {
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_list", array("forum_filter" => $this->getAttribute($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "forum"), "id"), "category_filter" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
            } else {
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_list", array("category_filter" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
            }
            // line 67
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
            echo "\" class=\"list-group-item ellipsis";
            if (((isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter")) == $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))) {
                echo " active";
            }
            echo "\">
                                       <span class=\"label pull-right\">";
            // line 69
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "getBoards")), "html", null, true);
            // line 70
            echo "</span>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["boards"]) ? $context["boards"] : $this->getContext($context, "boards")));
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "id"), "html", null, true);
            echo "</td>
                                                <td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "name"), "html", null, true);
            echo "</td>
                                                <td>";
            // line 93
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "topics")), "html", null, true);
            echo "</td>
                                                <td>
                                                    <a class=\"btn btn-default\" href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_edit", array("boardId" => $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "id"), "forum_filter" => (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")), "category_filter" => (isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter")))), "html", null, true);
            echo "\"
                                                       id=\"update_board[";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "name"), "html", null, true);
            echo "]\">";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.edit"), "html", null, true);
            // line 98
            echo "</a>";
            // line 100
            if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 101
                echo "<a class=\"btn btn-danger\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_delete", array("boardId" => $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "id"), "forum_filter" => (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")), "category_filter" => (isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter")))), "html", null, true);
                echo "\"
                                                       id=\"delete_board[";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "name"), "html", null, true);
                echo "]\">";
                // line 103
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.delete"), "html", null, true);
                // line 104
                echo "</a>";
            }
            // line 107
            if (((!(null === (isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter")))) && ((isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter")) != ""))) {
                // line 108
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "length") > 1)) {
                    // line 109
                    echo "                                                    <div class=\"btn-group\">
                                                        <a class=\"btn btn-default\" href=\"";
                    // line 110
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_reorder_up", array("boardId" => $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "id"), "forum_filter" => (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")), "category_filter" => (isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter")))), "html", null, true);
                    echo "\"
                                                           id=\"reorder_up_board[";
                    // line 111
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "name"), "html", null, true);
                    echo "]\">";
                    // line 112
                    if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first")) {
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
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_reorder_down", array("boardId" => $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "id"), "forum_filter" => (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")), "category_filter" => (isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter")))), "html", null, true);
                    echo "\"
                                                           id=\"reorder_down_board[";
                    // line 120
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "name"), "html", null, true);
                    echo "]\">";
                    // line 121
                    if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last")) {
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
        return "CCDNForumForumBundle:Admin:/Board/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 133,  314 => 130,  309 => 126,  306 => 124,  303 => 122,  301 => 121,  298 => 120,  294 => 119,  290 => 117,  287 => 115,  284 => 113,  282 => 112,  279 => 111,  275 => 110,  272 => 109,  269 => 108,  267 => 107,  264 => 104,  262 => 103,  259 => 102,  254 => 101,  252 => 100,  250 => 98,  248 => 97,  245 => 96,  241 => 95,  236 => 93,  232 => 92,  228 => 91,  225 => 90,  208 => 89,  201 => 84,  197 => 83,  193 => 82,  183 => 74,  177 => 72,  175 => 71,  173 => 70,  171 => 69,  162 => 67,  159 => 65,  156 => 63,  154 => 62,  152 => 61,  148 => 60,  146 => 59,  144 => 58,  138 => 56,  134 => 55,  130 => 53,  128 => 52,  121 => 46,  115 => 44,  113 => 43,  111 => 42,  109 => 41,  103 => 39,  96 => 38,  92 => 37,  90 => 36,  88 => 35,  82 => 33,  78 => 32,  74 => 30,  72 => 29,  64 => 22,  62 => 21,  59 => 20,  56 => 19,  54 => 17,  51 => 16,  46 => 12,  44 => 11,  42 => 10,  39 => 9,  35 => 6,  32 => 5,  27 => 3,);
    }
}

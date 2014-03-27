<?php

/* CCDNForumForumBundle:User:Board/show.html.twig */
class __TwigTemplate_a85796515a2b6bc4af3a030b314a63c179bfa5afaaf843602dcc10f77acf6605 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CCDNForumForumBundle:Common:Layout/base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
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
        $context["LayoutTemplate"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "board"), "user"), "show"), "layout_template");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.board.show", array("%board_name%" => $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "name"))), "html", null, true);
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "

 <div class=\"row\">
    ";
        // line 13
        $this->displayBlock('sidebar', $context, $blocks);
        // line 16
        echo "<div class=\"col-lg-9 col-lg\">";
        // line 18
        $this->displayBlock('body_content', $context, $blocks);
        // line 103
        echo "</div>
</div>
";
    }

    // line 13
    public function block_sidebar($context, array $blocks = array())
    {
        // line 14
        $this->env->loadTemplate("CCDNForumForumBundle:Common:Layout/Sidebar/user_forum.html.twig")->display($context);
    }

    // line 18
    public function block_body_content($context, array $blocks = array())
    {
        // line 19
        ob_start();
        // line 21
        echo "<section class=\"row btn-toolbar\">
            ";
        // line 22
        $context["is_topic_create_disabled"] = (($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "isAuthorisedToCreateTopic", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security")), "method")) ? ("") : (" disabled"));
        // line 23
        echo "
            <a class=\"btn btn-danger";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["is_topic_create_disabled"]) ? $context["is_topic_create_disabled"] : $this->getContext($context, "is_topic_create_disabled")), "html", null, true);
        echo "\" rel=\"nofollow\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_create", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "boardId" => $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getId"))), "html", null, true);
        echo "\">
\t\t\t\t<i class=\"glyphicon glyphicon-asterisk\"></i>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.topic.create"), "html", null, true);
        // line 27
        echo "</a>

\t</section>

\t<header class=\"row\">
\t\t<div class=\"col-md-6\">
\t\t    <span class=\"lead\" title=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "name"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "name"), "html", null, true);
        echo "</span>
\t\t</div>
\t\t<div class=\"col-md-6 text-right\">
\t\t    <span class=\"label label-default\" title=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "cachedTopicCount"), "html", null, true);
        echo "\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.topic-count-label"), "html", null, true);
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "cachedTopicCount"), "html", null, true);
        // line 39
        echo "</span>
\t\t\t&nbsp;
\t\t    <span class=\"label label-default\" title=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "cachedPostCount"), "html", null, true);
        echo "\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.post-count-label"), "html", null, true);
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "cachedPostCount"), "html", null, true);
        // line 44
        echo "</span>
\t\t</div>
\t</header>";
        // line 48
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")));
        // line 50
        echo "<section class=\"clearfix\">
        <table class=\"table table-striped table-hover\">
            <thead>
                <tr>
                    <th class=\"center\" style=\"width: 18px;\"></th>
                    <th class=\"center\" style=\"width: 18px;\"></th>
                    <th class=\"left\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.topic-th"), "html", null, true);
        echo "</th>
                    <th class=\"center\" style=\"width: 80px;\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.reply-count-th"), "html", null, true);
        echo "</th>
                    <th class=\"center\" style=\"width: 80px;\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.view-count-th"), "html", null, true);
        echo "</th>
                    <th class=\"center\" style=\"width: 170px;\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.last-post-th"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>";
        // line 63
        if ((!twig_test_empty((isset($context["sticky_topics"]) ? $context["sticky_topics"] : $this->getContext($context, "sticky_topics"))))) {
            // line 64
            echo "<tr>
\t\t\t\t\t\t<td colspan=\"6\" class=\"row-group-heading\">";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.announcements-th"), "html", null, true);
            // line 67
            echo "</td>
\t\t\t\t\t</tr>";
            // line 70
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sticky_topics"]) ? $context["sticky_topics"] : $this->getContext($context, "sticky_topics")));
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
            foreach ($context['_seq'] as $context["row"] => $context["topic"]) {
                // line 71
                if (((!$this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isDeleted")) || $this->env->getExtension('security')->isGranted("ROLE_MODERATOR"))) {
                    // line 72
                    $this->env->loadTemplate("CCDNForumForumBundle:User:Board/Partial/item_topic_list.html.twig")->display($context);
                }
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
            unset($context['_seq'], $context['_iterated'], $context['row'], $context['topic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "<tr>
\t\t\t\t\t\t<td colspan=\"6\" class=\"row-group-heading\">";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.topics-th"), "html", null, true);
            // line 79
            echo "</td>
\t\t\t\t\t</tr>";
        }
        // line 83
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getItems", array(), "method"));
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
        foreach ($context['_seq'] as $context["row"] => $context["topic"]) {
            // line 84
            if (((!$this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isDeleted")) || $this->env->getExtension('security')->isGranted("ROLE_MODERATOR"))) {
                // line 85
                $this->env->loadTemplate("CCDNForumForumBundle:User:Board/Partial/item_topic_list.html.twig")->display($context);
            }
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
            // line 88
            echo "<tr>
\t\t                <td class=\"center\" colspan=\"6\">";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.no-topics"), "html", null, true);
            // line 91
            echo "</td>
\t\t            </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['row'], $context['topic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "</tbody>
        </table>
\t</section>";
        // line 98
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User:Board/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 98,  253 => 94,  246 => 91,  244 => 90,  241 => 88,  227 => 85,  225 => 84,  207 => 83,  203 => 79,  201 => 78,  198 => 76,  183 => 72,  181 => 71,  164 => 70,  161 => 67,  159 => 66,  156 => 64,  154 => 63,  148 => 59,  144 => 58,  140 => 57,  136 => 56,  128 => 50,  126 => 48,  122 => 44,  120 => 43,  118 => 42,  115 => 41,  111 => 39,  109 => 38,  107 => 37,  104 => 36,  96 => 33,  88 => 27,  86 => 26,  80 => 24,  77 => 23,  75 => 22,  72 => 21,  70 => 19,  67 => 18,  63 => 14,  60 => 13,  54 => 103,  52 => 18,  50 => 16,  48 => 13,  43 => 10,  40 => 9,  36 => 6,  33 => 5,  28 => 3,);
    }
}

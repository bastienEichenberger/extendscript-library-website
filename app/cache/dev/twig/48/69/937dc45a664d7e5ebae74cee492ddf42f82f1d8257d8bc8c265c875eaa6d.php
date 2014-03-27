<?php

/* CCDNForumForumBundle:User:Category/Partial/item_board.html.twig */
class __TwigTemplate_4869937dc45a664d7e5ebae74cee492ddf42f82f1d8257d8bc8c265c875eaa6d extends Twig_Template
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
\t    <td class=\"center\">";
        // line 4
        if ($this->env->getExtension('authorizer')->canCreateTopicOnBoard((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")))) {
            // line 5
            if ($this->env->getExtension('authorizer')->canReplyToTopicOnBoard((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")))) {
                // line 6
                echo "<i class=\"glyphicon glyphicon-folder-close\" style=\"margin-top:10px;\"></i>";
            } else {
                // line 8
                echo "<i class=\"glyphicon glyphicon-lock\" style=\"margin-top:10px;\"></i>";
            }
        } else {
            // line 11
            if ($this->env->getExtension('authorizer')->canReplyToTopicOnBoard((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")))) {
                // line 12
                echo "<i class=\"glyphicon glyphicon-eye-open\" style=\"margin-top:10px;\"></i>";
            } else {
                // line 14
                echo "<i class=\"glyphicon glyphicon-lock\" style=\"margin-top:10px;\"></i>";
            }
        }
        // line 17
        echo "</td>

\t    <td class=\"left\">
\t        <h4>
\t            <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_board_show", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "boardId" => $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getId"))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getName"), "html", null, true);
        echo "\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getName"), "html", null, true);
        // line 23
        echo "</a>
\t        </h4>

\t\t\t<blockquote class=\"slim\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getDescription"), "html", null, true);
        // line 28
        echo "</blockquote>
\t    </td>

\t    <td class=\"center\" style=\"width: 100px;\">
\t\t\t<span class=\"label label-info lead\" title=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getCachedTopicCount"), "html", null, true);
        echo "\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getCachedTopicCount"), "html", null, true);
        // line 34
        echo "</span>
\t    </td>

\t    <td class=\"center\" style=\"width: 100px;\">
\t\t\t<span class=\"label label-info lead\" title=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getCachedPostCount"), "html", null, true);
        echo "\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getCachedPostCount"), "html", null, true);
        // line 40
        echo "</span>
\t    </td>

\t    <td class=\"center\" style=\"width:170px;\">";
        // line 44
        if ($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost")) {
            // line 45
            if ($this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost"), "getTopic")) {
                // line 46
                echo $this->env->getExtension('translator')->trans("post.posted-by");
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost"), "getCreatedBy"), "html", null, true);
                // line 49
                echo "<br>

\t\t\t\t\t";
                // line 55
                $context["page"] = 1;
                // line 56
                if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) < 2)) {
                    // line 57
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost"), "getTopic"), "getId"))), "html", null, true);
                    echo "#";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost"), "getId"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-arrow-right\"></i>
\t                        <abbr class=\"timestamper\" title=\"";
                    // line 59
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost"), "getCreatedDate"), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
                    echo "\">";
                    // line 60
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost"), "getCreatedDate"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "category"), "user"), "last_post_datetime_format")), "html", null, true);
                    // line 61
                    echo "</abbr>
\t                    </a>";
                } else {
                    // line 64
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show_paginated", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost"), "getTopic"), "getId"), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
                    echo "#";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost"), "getId"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-arrow-right\"></i>
\t                        <abbr class=\"timestamper\" title=\"";
                    // line 66
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost"), "getCreatedDate"), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
                    echo "\">";
                    // line 67
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost"), "getCreatedDate"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "category"), "user"), "last_post_datetime_format")), "html", null, true);
                    // line 68
                    echo "</abbr>
\t                    </a>";
                }
            }
        }
        // line 73
        echo "</td>
\t</tr>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User:Category/Partial/item_board.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 73,  124 => 64,  120 => 61,  118 => 60,  107 => 57,  97 => 47,  86 => 40,  84 => 39,  81 => 38,  64 => 28,  37 => 12,  102 => 30,  95 => 46,  93 => 45,  49 => 16,  31 => 8,  29 => 5,  145 => 61,  130 => 54,  128 => 53,  123 => 50,  119 => 49,  116 => 48,  110 => 44,  106 => 43,  103 => 55,  91 => 44,  89 => 36,  83 => 34,  25 => 6,  23 => 5,  98 => 39,  67 => 38,  65 => 37,  58 => 29,  51 => 25,  45 => 15,  41 => 14,  38 => 12,  34 => 10,  30 => 9,  26 => 5,  24 => 4,  21 => 2,  19 => 1,  101 => 23,  99 => 49,  90 => 24,  80 => 45,  70 => 32,  63 => 23,  60 => 30,  40 => 14,  35 => 11,  32 => 9,  156 => 76,  154 => 74,  151 => 73,  146 => 70,  141 => 73,  139 => 70,  137 => 68,  135 => 67,  132 => 66,  127 => 58,  125 => 56,  122 => 55,  117 => 39,  112 => 37,  108 => 26,  105 => 56,  94 => 38,  92 => 53,  87 => 35,  85 => 48,  77 => 22,  75 => 34,  72 => 41,  68 => 17,  62 => 27,  54 => 13,  50 => 21,  44 => 17,  39 => 6,  115 => 59,  113 => 68,  109 => 29,  96 => 57,  78 => 25,  76 => 24,  73 => 33,  69 => 40,  66 => 24,  59 => 21,  57 => 23,  55 => 22,  53 => 17,  46 => 10,  43 => 18,  36 => 11,  33 => 5,  28 => 6,);
    }
}

<?php

/* CCDNForumForumBundle:User:Board/Partial/item_topic_list.html.twig */
class __TwigTemplate_39d8d6b20a91e117f578362d024158e612bc8a2f0766989737096a607fbc672e extends Twig_Template
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
        if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isDeleted")) {
            // line 5
            echo "<i class=\"glyphicon glyphicon-trash\"></i>";
        } else {
            // line 7
            if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isClosed")) {
                // line 8
                echo "<i class=\"glyphicon glyph-icon-lock\"></i>";
            } else {
                // line 11
                if (($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "cachedReplyCount") > 100)) {
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId"))), "html", null, true);
        echo "\">";
        // line 20
        if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isSticky")) {
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
        if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getClosedDate")) {
            // line 29
            echo "<span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topic.badge.closed"), "html", null, true);
            echo "</span>&nbsp;";
        }
        // line 32
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId"))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getTitle"), "html", null, true);
        echo "\">";
        // line 33
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getTitle")), "html", null, true);
        // line 34
        echo "</a>

\t\t\t<br>";
        // line 38
        if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getFirstPost")) {
            // line 39
            echo $this->env->getExtension('translator')->trans("post.posted-by");
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getFirstPost"), "getCreatedBy"), "html", null, true);
            // line 42
            echo "&nbsp;&#183;
                <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId"))), "html", null, true);
            echo "\">
                    <abbr class=\"timestamper\" title=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getFirstPost"), "getCreatedDate"), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
            echo "\">";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getFirstPost"), "getCreatedDate"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "board"), "user"), "show"), "first_post_datetime_format")), "html", null, true);
            // line 46
            echo "</abbr>
                </a>";
        }
        // line 49
        echo "</td>
\t\t<td class=\"center\">
\t\t\t<span class=\"label label-info lead\" title=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getCachedReplyCount"), "html", null, true);
        echo "\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getCachedReplyCount"), "html", null, true);
        // line 53
        echo "</span>
\t\t</td>
\t\t<td class=\"center\">
\t\t\t<span class=\"label label-info lead\" title=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getCachedViewCount"), "html", null, true);
        echo "\">";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getCachedViewCount"), "html", null, true);
        // line 58
        echo "</span>
\t\t</td>
\t\t<td class=\"center\">";
        // line 61
        if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost")) {
            // line 62
            echo $this->env->getExtension('translator')->trans("post.posted-by");
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost"), "getCreatedBy"), "html", null, true);
            // line 65
            echo "<br>


\t\t\t\t";
            // line 72
            $context["page"] = 1;
            // line 73
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) < 2)) {
                // line 74
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId"))), "html", null, true);
                echo "#";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost"), "getId"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-arrow-right\"></i>
\t\t\t\t\t\t<abbr class=\"timestamper\" title=\"";
                // line 76
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost"), "getCreatedDate"), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
                echo "\">";
                // line 77
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost"), "getCreatedDate"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "board"), "user"), "show"), "last_post_datetime_format")), "html", null, true);
                // line 78
                echo "</abbr>
\t\t\t\t\t</a>";
            } else {
                // line 81
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId"), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
                echo "#";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost"), "getId"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-arrow-right\"></i>
\t\t\t\t\t\t<abbr class=\"timestamper\" title=\"";
                // line 83
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost"), "getCreatedDate"), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
                echo "\">";
                // line 84
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost"), "getCreatedDate"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "board"), "user"), "show"), "last_post_datetime_format")), "html", null, true);
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
        return "CCDNForumForumBundle:User:Board/Partial/item_topic_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 89,  170 => 85,  168 => 84,  165 => 83,  157 => 81,  153 => 78,  151 => 77,  138 => 73,  131 => 65,  129 => 63,  127 => 62,  125 => 61,  121 => 58,  119 => 57,  116 => 56,  106 => 51,  102 => 49,  98 => 46,  93 => 44,  84 => 40,  82 => 39,  76 => 34,  74 => 33,  68 => 32,  61 => 28,  57 => 25,  51 => 21,  49 => 20,  45 => 19,  34 => 11,  31 => 8,  26 => 5,  21 => 2,  114 => 39,  108 => 36,  105 => 35,  103 => 34,  100 => 33,  94 => 30,  91 => 29,  89 => 43,  79 => 25,  73 => 23,  65 => 20,  62 => 19,  59 => 18,  55 => 17,  46 => 13,  41 => 16,  38 => 10,  32 => 7,  29 => 7,  27 => 5,  24 => 4,  22 => 3,  19 => 1,  257 => 98,  253 => 94,  246 => 91,  244 => 90,  241 => 88,  227 => 85,  225 => 84,  207 => 83,  203 => 79,  201 => 78,  198 => 76,  183 => 72,  181 => 71,  164 => 70,  161 => 67,  159 => 66,  156 => 64,  154 => 63,  148 => 76,  144 => 58,  140 => 74,  136 => 72,  128 => 50,  126 => 48,  122 => 44,  120 => 43,  118 => 42,  115 => 41,  111 => 53,  109 => 52,  107 => 37,  104 => 36,  96 => 45,  88 => 27,  86 => 42,  80 => 38,  77 => 23,  75 => 22,  72 => 21,  70 => 19,  67 => 18,  63 => 29,  60 => 13,  54 => 23,  52 => 16,  50 => 16,  48 => 13,  43 => 12,  40 => 9,  36 => 12,  33 => 5,  28 => 3,);
    }
}

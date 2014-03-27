<?php

/* CCDNForumForumBundle:User:Post/Partial/item_post_head.html.twig */
class __TwigTemplate_4f598a433a53f897b06de648370bb3e11b3f344f05f2884b7d101e9b94dd11b8 extends Twig_Template
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
        echo "<div class=\"row clearfix\">
\t    <div class=\"col-md-7\">
\t\t\t<h3 class=\"panel-title\">";
        // line 6
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedBy")) {
            // line 7
            echo $this->env->getExtension('translator')->trans("post.posted-by");
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedBy"), "username"), "html", null, true);
            // line 10
            echo "&nbsp;&#183;&nbsp;";
        }
        // line 14
        echo "<span class=\"timestamper\" title=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedDate"), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
        echo "\">";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedDate"), $this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "item_post"), "created_datetime_format")), "html", null, true);
        // line 16
        echo "</span>
\t\t\t</h3>
\t    </div>

\t    <div class=\"col-md-5 pull-right text-right\">
\t        ";
        // line 21
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id") && (!$this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "isDeleted")))) {
            // line 22
            echo "\t            <div class=\"btn-group\">
\t                <a class=\"btn btn-xs btn-icon-only\" title=\"show post\"
\t\t\t\t\t href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_post_show", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId"))), "html", null, true);
            echo "\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-fullscreen\"></i>
\t\t\t\t\t</a>
\t                <a class=\"btn btn-xs btn-icon-only\" href=\"#post_";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId"), "html", null, true);
            echo "\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-link\"></i>
\t\t\t\t\t</a>
\t            </div>
\t        ";
        }
        // line 33
        if ((($this->env->getExtension('security')->isGranted("ROLE_USER") && $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id")) && ($this->env->getExtension('security')->isGranted("ROLE_MODERATOR") || (!$this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "isDeleted"))))) {
            // line 34
            echo "&nbsp;
                <div class=\"dropdown btn-group text-left\">
                    <a class=\"dropdown-toggle btn btn-xs btn-icon-only\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-cog\"></i>
\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t</a>
                    <ul class=\"dropdown-menu pull-right content-left\" style=\"z-index:15;\">";
            // line 42
            if ($this->env->getExtension('authorizer')->canReplyToTopic($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getTopic"))) {
                // line 43
                echo "<li>
\t\t\t\t\t\t\t\t<a rel=\"nofollow\"
\t\t\t\t\t\t\t\t href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_reply", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getTopic"), "getId"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-share-alt\"></i>";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.topic.reply"), "html", null, true);
                // line 48
                echo "</a>
\t\t\t\t\t\t\t</li>";
            }
            // line 52
            if ($this->env->getExtension('authorizer')->canEditPost((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")))) {
                // line 53
                echo "<li>
\t\t\t\t\t\t\t\t<a rel=\"nofollow\" id=\"post_edit[";
                // line 54
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getBody"), 0, 24), "html", null, true);
                echo "]\"
\t\t\t\t\t\t\t\t href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_post_edit", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-pencil\"></i>";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.edit"), "html", null, true);
                // line 58
                echo "</a>
\t\t\t\t\t\t\t</li>";
            }
            // line 62
            if ($this->env->getExtension('authorizer')->canDeletePost((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")))) {
                // line 63
                echo "<li>
\t\t\t\t\t\t\t\t<a rel=\"nofollow\"
\t\t\t\t\t\t\t\t href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_post_delete", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-minus\"></i>";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.post.delete"), "html", null, true);
                // line 68
                echo "</a>
\t\t\t\t\t\t\t</li>";
            }
            // line 72
            if ($this->env->getExtension('authorizer')->canRestorePost((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")))) {
                // line 73
                echo "<li>
                                <a rel=\"nofollow\" href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_moderator_post_restore", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId"))), "html", null, true);
                echo "\">
                                    <i class=\"glyphicon glyphicon-arrow-up\"></i>";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.post.restore"), "html", null, true);
                // line 77
                echo "</a>
                            </li>";
            }
            // line 81
            if ($this->env->getExtension('authorizer')->canLockPost((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")))) {
                // line 82
                echo "<li>
                                <a rel=\"nofollow\" href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_moderator_post_lock", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId"))), "html", null, true);
                echo "\">
                                    <i class=\"glyphicon glyphicon-lock\"></i>";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.post.lock"), "html", null, true);
                // line 86
                echo "</a>
                            </li>";
            }
            // line 90
            if ($this->env->getExtension('authorizer')->canUnlockPost((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")))) {
                // line 91
                echo "<li>
                                <a rel=\"nofollow\" href=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_moderator_post_unlock", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId"))), "html", null, true);
                echo "\">
                                    <i class=\"glyphicon glyphicon-ok-circle\"></i>";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.post.unlock"), "html", null, true);
                // line 95
                echo "</a>
                            </li>";
            }
            // line 99
            echo "</ul>
                </div>";
        }
        // line 102
        echo "</div>
\t</div>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User:Post/Partial/item_post_head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 102,  173 => 99,  169 => 95,  163 => 92,  160 => 91,  158 => 90,  154 => 86,  148 => 83,  145 => 82,  143 => 81,  139 => 77,  133 => 74,  130 => 73,  128 => 72,  124 => 68,  118 => 65,  112 => 62,  106 => 57,  102 => 55,  98 => 54,  93 => 52,  87 => 47,  83 => 45,  79 => 43,  77 => 42,  59 => 27,  40 => 16,  29 => 8,  89 => 48,  85 => 16,  81 => 13,  76 => 10,  72 => 8,  67 => 33,  41 => 33,  65 => 25,  55 => 3,  53 => 24,  47 => 21,  38 => 15,  36 => 10,  34 => 14,  31 => 10,  195 => 112,  191 => 108,  189 => 107,  185 => 105,  182 => 104,  180 => 103,  176 => 99,  174 => 98,  170 => 96,  167 => 94,  165 => 94,  161 => 90,  159 => 89,  155 => 87,  152 => 85,  150 => 85,  146 => 81,  144 => 80,  140 => 78,  137 => 76,  135 => 76,  131 => 72,  129 => 71,  125 => 69,  122 => 67,  120 => 67,  116 => 63,  114 => 63,  110 => 60,  107 => 59,  101 => 54,  99 => 53,  95 => 53,  92 => 50,  90 => 49,  86 => 45,  84 => 44,  80 => 41,  78 => 11,  75 => 36,  73 => 35,  68 => 27,  63 => 24,  61 => 23,  49 => 22,  45 => 36,  37 => 14,  33 => 12,  30 => 11,  28 => 29,  25 => 6,  23 => 26,  21 => 3,  19 => 1,  108 => 58,  105 => 58,  91 => 34,  74 => 9,  71 => 31,  69 => 34,  66 => 32,  64 => 25,  62 => 23,  60 => 21,  58 => 22,  56 => 26,  54 => 25,  51 => 18,  46 => 12,  44 => 15,  42 => 17,  39 => 32,  35 => 6,  32 => 5,  27 => 7,);
    }
}

<?php

/* CCDNForumForumBundle:Common:Layout/Sidebar/user_forum.html.twig */
class __TwigTemplate_41e2b7efd0bfe6a1e9265ee94e1cc84b8a3b47eed060e5e6b04f8b5022fd4ac4 extends Twig_Template
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
        echo "<div class=\"col-lg-3\">
\t<ul class=\"nav nav-pills nav-stacked\">";
        // line 5
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method");
        // line 7
        if ((!array_key_exists("topic", $context))) {
            // line 8
            if (array_key_exists("post", $context)) {
                // line 9
                $context["topic"] = $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getTopic");
            }
        }
        // line 13
        if ((!array_key_exists("board", $context))) {
            // line 14
            if (array_key_exists("topic", $context)) {
                // line 15
                $context["board"] = $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getBoard");
            } else {
                // line 17
                if (array_key_exists("post", $context)) {
                    // line 18
                    if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "getTopic", array(), "any", true, true)) {
                        // line 19
                        $context["board"] = $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getTopic"), "getBoard");
                    }
                }
            }
        }
        // line 25
        if ((!array_key_exists("category", $context))) {
            // line 26
            if (array_key_exists("board", $context)) {
                // line 27
                $context["category"] = $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getCategory");
            } else {
                // line 29
                if (array_key_exists("topic", $context)) {
                    // line 30
                    $context["category"] = $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getBoard");
                }
            }
        }
        // line 37
        if ((array_key_exists("forum", $context) && (!null))) {
            // line 38
            if ((((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_homepage") || ((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_forum_user_category_index"))) {
                // line 40
                echo "<li class=\"active\">
\t\t\t\t\t<a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_category_index", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")))), "html", null, true);
                echo "\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-home\"></i>";
            } else {
                // line 44
                echo "<li>
\t\t\t\t\t<a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_category_index", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")))), "html", null, true);
                echo "\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-home\"></i>";
            }
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.category.index"), "html", null, true);
            // line 49
            echo "</a>
\t\t\t\t</li>";
            // line 52
            if ((twig_slice($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), 0, 28) != "ccdn_forum_user_subscription")) {
                // line 53
                $this->env->loadTemplate("CCDNForumForumBundle:Common:Layout/Sidebar/Partial/user_boards.html.twig")->display($context);
            }
        }
        // line 57
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 58
            echo "                    <hr class=\"featurette-divider\">
                    <div id=\"admin-nav\">
                        <h3>Admin</h3>
                        <ul class=\"nav nav-pills nav-stacked\">
                            <li>
                                <a href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_index");
            echo "\"><i class=\"glyphicon glyphicon-plus\"></i>forum</a>
                            </li>
                        </ul>
                    </div>
                ";
        }
        // line 68
        echo "\t</ul>
    </div>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:Common:Layout/Sidebar/user_forum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 58,  67 => 38,  65 => 37,  58 => 29,  51 => 25,  45 => 19,  41 => 17,  38 => 15,  34 => 13,  30 => 9,  26 => 7,  24 => 5,  21 => 2,  19 => 1,  101 => 23,  99 => 22,  90 => 52,  80 => 45,  70 => 20,  63 => 14,  60 => 30,  40 => 5,  35 => 4,  32 => 3,  156 => 76,  154 => 74,  151 => 73,  146 => 70,  141 => 73,  139 => 70,  137 => 68,  135 => 66,  132 => 65,  127 => 58,  125 => 56,  122 => 55,  117 => 39,  112 => 37,  108 => 26,  105 => 63,  94 => 21,  92 => 53,  87 => 49,  85 => 48,  77 => 44,  75 => 24,  72 => 41,  68 => 17,  62 => 15,  54 => 13,  50 => 8,  44 => 8,  39 => 6,  115 => 38,  113 => 68,  109 => 29,  96 => 57,  78 => 25,  76 => 24,  73 => 21,  69 => 40,  66 => 15,  59 => 40,  57 => 14,  55 => 27,  53 => 26,  46 => 10,  43 => 18,  36 => 14,  33 => 5,  28 => 8,);
    }
}

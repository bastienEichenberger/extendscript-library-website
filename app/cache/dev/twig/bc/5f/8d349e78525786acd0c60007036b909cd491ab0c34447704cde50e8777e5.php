<?php

/* SdzBlogBundle::nav/blog_nav.html.twig */
class __TwigTemplate_bc5f8d349e78525786acd0c60007036b909cd491ab0c34447704cde50e8777e5 extends Twig_Template
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
        echo "<div class=\"col-lg-3\">
    <div id=\"post-nav\">
        <h3>Recent comments</h3>
        <ul class=\"nav nav-pills nav-stacked\">
            ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["last_comments"]) ? $context["last_comments"] : $this->getContext($context, "last_comments")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 6
            echo "                <li>
                    <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_voir", array("slug" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "article"), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "contenu"), 25, true, "..."), "html", null, true);
            echo "</a>
                </li>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 10
            echo "                <li>aucun commentaire</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </ul>
    </div>
    ";
        // line 14
        if ($this->env->getExtension('security')->isGranted("ROLE_AUTHOR")) {
            // line 15
            echo "        <hr class=\"featurette-divider\">
        <div id=\"admin-nav\">
            <h3>Admin</h3>
            <ul class=\"nav nav-pills nav-stacked\">
                <li>
                    <a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("sdzblog_add_post");
            echo "\"><i class=\"glyphicon glyphicon-plus\"></i>add post</a>
                </li>
            </ul>
        </div>
    ";
        }
        // line 25
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle::nav/blog_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 25,  56 => 15,  186 => 100,  184 => 95,  179 => 92,  177 => 87,  172 => 84,  161 => 76,  152 => 73,  146 => 71,  137 => 65,  131 => 62,  125 => 60,  93 => 44,  89 => 43,  82 => 39,  76 => 36,  63 => 20,  19 => 1,  59 => 12,  53 => 10,  36 => 13,  21 => 1,  222 => 72,  190 => 70,  182 => 63,  178 => 52,  175 => 51,  171 => 45,  168 => 44,  164 => 77,  144 => 70,  139 => 16,  136 => 15,  130 => 12,  122 => 63,  119 => 62,  112 => 54,  103 => 50,  97 => 47,  91 => 44,  88 => 42,  81 => 38,  78 => 37,  75 => 36,  58 => 28,  54 => 14,  46 => 15,  40 => 12,  35 => 10,  24 => 1,  57 => 26,  41 => 5,  32 => 12,  29 => 4,  66 => 34,  62 => 11,  60 => 14,  55 => 9,  50 => 12,  48 => 23,  45 => 7,  43 => 10,  39 => 4,  37 => 6,  185 => 64,  181 => 59,  170 => 79,  163 => 55,  158 => 75,  155 => 74,  153 => 51,  149 => 72,  142 => 47,  128 => 61,  124 => 73,  121 => 42,  118 => 55,  110 => 56,  107 => 52,  105 => 53,  100 => 49,  94 => 46,  90 => 30,  86 => 28,  84 => 39,  79 => 25,  74 => 24,  72 => 35,  69 => 14,  67 => 21,  44 => 17,  33 => 7,  30 => 6,  25 => 5,);
    }
}

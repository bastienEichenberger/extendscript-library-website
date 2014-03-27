<?php

/* SdzBlogBundle::nav/blog_nav.html.twig */
class __TwigTemplate_acdedc00f426f21e081b50d6cb0011d61a39f7abbe919492c7fea29548c47962 extends Twig_Template
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
        return array (  71 => 25,  63 => 20,  56 => 15,  54 => 14,  19 => 1,  59 => 12,  53 => 10,  36 => 3,  21 => 1,  57 => 13,  41 => 5,  32 => 5,  29 => 4,  66 => 13,  62 => 11,  60 => 14,  55 => 9,  50 => 12,  48 => 13,  45 => 7,  43 => 10,  39 => 4,  37 => 6,  185 => 61,  181 => 59,  170 => 56,  163 => 55,  158 => 54,  155 => 52,  153 => 51,  149 => 49,  142 => 47,  128 => 45,  124 => 43,  121 => 42,  118 => 40,  110 => 37,  107 => 36,  105 => 35,  100 => 33,  94 => 32,  90 => 30,  86 => 28,  84 => 27,  79 => 25,  74 => 24,  72 => 23,  69 => 14,  67 => 21,  44 => 17,  33 => 7,  30 => 6,  25 => 5,);
    }
}

<?php

/* CCDNForumForumBundle:User:Post/Partial/item_post_body.html.twig */
class __TwigTemplate_b9eb9280c1db5c42e849ff44310f1b82fc458600ff86aa03e72ae8914102a2f6 extends Twig_Template
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
        if ((($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "isDeleted") == false) || $this->env->getExtension('security')->isGranted("ROLE_MODERATOR"))) {
            // line 4
            if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getEditedDate")) {
                // line 5
                echo "<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-pencil\"></i>";
                // line 9
                echo $this->env->getExtension('translator')->trans("post.edited-by");
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getEditedBy"), "html", null, true);
                // line 12
                echo "&nbsp;&#183;

\t\t\t\t\t<abbr class=\"timestamper\" title=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getEditedDate"), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
                echo "\">";
                // line 15
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getEditedDate"), $this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "item_post"), "edited_datetime_format")), "html", null, true);
                // line 16
                echo "</abbr>
\t\t\t\t</div>
\t\t    </div>";
            }
        }
        // line 22
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "isDeleted") == true)) {
            // line 23
            echo "<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t        <i class=\"glyphicon glyphicon-trash\"></i>";
            // line 27
            echo $this->env->getExtension('translator')->trans("post.deleted-by");
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getDeletedBy"), "html", null, true);
            // line 30
            echo "&nbsp;&#183;

\t\t        <abbr class=\"timestamper\" title=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getDeletedDate"), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
            echo "\">";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getDeletedDate"), $this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "item_post"), "deleted_datetime_format")), "html", null, true);
            // line 34
            echo "</abbr>
\t\t\t</div>";
            // line 37
            if ($this->env->getExtension('security')->isGranted("ROLE_MODERATOR")) {
                // line 38
                echo "<div class=\"pull-right\">
\t                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#post_";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId", array(), "method"), "html", null, true);
                echo "\" href=\"#post_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId", array(), "method"), "html", null, true);
                echo "_body\">";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.show"), "html", null, true);
                // line 41
                echo "</a>
\t\t\t\t</div>";
            }
            // line 44
            echo "</div>";
            // line 46
            if ($this->env->getExtension('security')->isGranted("ROLE_MODERATOR")) {
                // line 47
                echo "<section class=\"accordion-body collapse\" id=\"post_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId", array(), "method"), "html", null, true);
                echo "_body\">";
                // line 48
                $this->env->loadTemplate("CCDNForumForumBundle:User:Post/Partial/body_content.html.twig")->display(array_merge($context, array("post" => (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")))));
                // line 49
                echo "</section>";
            }
        } else {
            // line 52
            echo "<section id=\"post_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId", array(), "method"), "html", null, true);
            echo "_body\">";
            // line 53
            $this->env->loadTemplate("CCDNForumForumBundle:User:Post/Partial/body_content.html.twig")->display(array_merge($context, array("post" => (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")))));
            // line 54
            echo "</section>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User:Post/Partial/item_post_body.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 53,  100 => 52,  96 => 49,  94 => 48,  88 => 46,  82 => 41,  70 => 37,  50 => 23,  48 => 22,  177 => 102,  173 => 99,  169 => 95,  163 => 92,  160 => 91,  158 => 90,  154 => 86,  148 => 83,  145 => 82,  143 => 81,  139 => 77,  133 => 74,  130 => 73,  128 => 72,  124 => 68,  118 => 65,  112 => 62,  106 => 54,  102 => 55,  98 => 54,  93 => 52,  87 => 47,  83 => 45,  79 => 43,  77 => 42,  59 => 27,  40 => 15,  29 => 9,  89 => 48,  85 => 16,  81 => 13,  76 => 10,  72 => 38,  67 => 34,  41 => 33,  65 => 33,  55 => 3,  53 => 24,  47 => 21,  38 => 15,  36 => 10,  34 => 14,  31 => 10,  195 => 112,  191 => 108,  189 => 107,  185 => 105,  182 => 104,  180 => 103,  176 => 99,  174 => 98,  170 => 96,  167 => 94,  165 => 94,  161 => 90,  159 => 89,  155 => 87,  152 => 85,  150 => 85,  146 => 81,  144 => 80,  140 => 78,  137 => 76,  135 => 76,  131 => 72,  129 => 71,  125 => 69,  122 => 67,  120 => 67,  116 => 63,  114 => 63,  110 => 60,  107 => 59,  101 => 54,  99 => 53,  95 => 53,  92 => 50,  90 => 47,  86 => 44,  84 => 44,  80 => 40,  78 => 11,  75 => 39,  73 => 35,  68 => 27,  63 => 24,  61 => 23,  49 => 22,  45 => 36,  37 => 14,  33 => 12,  30 => 11,  28 => 29,  25 => 5,  23 => 4,  21 => 3,  19 => 1,  108 => 58,  105 => 58,  91 => 34,  74 => 9,  71 => 31,  69 => 34,  66 => 32,  64 => 25,  62 => 32,  60 => 21,  58 => 30,  56 => 28,  54 => 27,  51 => 18,  46 => 12,  44 => 15,  42 => 16,  39 => 32,  35 => 6,  32 => 5,  27 => 7,);
    }
}

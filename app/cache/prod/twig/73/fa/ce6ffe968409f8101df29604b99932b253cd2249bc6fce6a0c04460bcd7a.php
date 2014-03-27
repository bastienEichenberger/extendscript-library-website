<?php

/* CCDNForumForumBundle:User:Topic/Partial/transcript.html.twig */
class __TwigTemplate_73face6ffe968409f8101df29604b99932b253cd2249bc6fce6a0c04460bcd7a extends Twig_Template
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
        echo "<div class=\"forum-topic-transcript\">
\t\t<h3>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topic.transcript"), "html", null, true);
        echo "</h3>

\t\t<div class=\"well pre-scrollable\">";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getPosts"));
        foreach ($context['_seq'] as $context["key"] => $context["post"]) {
            // line 9
            if ((($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "isDeleted") == false) || $this->env->getExtension('security')->isGranted("ROLE_MODERATOR"))) {
                // line 11
                echo "<div class=\"col-md-12\">
\t\t\t\t\t\t<article class=\"row panel panel-";
                // line 12
                if ((($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "isDeleted") == false) || $this->env->getExtension('security')->isGranted("ROLE_MODERATOR"))) {
                    echo "default ";
                } else {
                    echo "danger ";
                }
                // line 13
                echo "clearfix\" data-snip=\"";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getBody"), 0, 24), "html", null, true);
                echo "\"";
                if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id")) {
                    echo " id=\"post_";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId"), "html", null, true);
                    echo "\"";
                }
                echo ">

\t\t\t\t\t\t    <header class=\"panel-heading\">";
                // line 16
                if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedBy")) {
                    // line 17
                    echo $this->env->getExtension('translator')->trans("post.posted-by");
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedBy"), "username"), "html", null, true);
                    // line 20
                    echo "&nbsp;&#183;";
                }
                // line 24
                echo "<span class=\"timestamper\" title=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedDate"), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
                echo "\">";
                // line 25
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedDate"), $this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "item_post"), "created_datetime_format")), "html", null, true);
                // line 26
                echo "</span>
\t\t\t\t\t\t\t</header>

\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getBody"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</article>
\t\t\t\t\t</div>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</div>
\t</div>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User:Topic/Partial/transcript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 40,  71 => 26,  69 => 25,  62 => 20,  38 => 12,  33 => 9,  29 => 7,  24 => 4,  21 => 3,  19 => 1,  119 => 62,  115 => 58,  113 => 57,  111 => 56,  103 => 48,  101 => 47,  98 => 46,  94 => 44,  92 => 43,  88 => 40,  86 => 38,  84 => 36,  80 => 32,  78 => 31,  75 => 29,  73 => 28,  65 => 24,  60 => 18,  58 => 17,  56 => 16,  54 => 17,  51 => 16,  46 => 12,  44 => 13,  42 => 10,  39 => 9,  35 => 11,  32 => 5,  27 => 3,);
    }
}

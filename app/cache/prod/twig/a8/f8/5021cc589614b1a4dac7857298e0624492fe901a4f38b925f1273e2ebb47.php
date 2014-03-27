<?php

/* CCDNForumForumBundle:User:Topic/Partial/stat_mods.html.twig */
class __TwigTemplate_a8f85021cc589614b1a4dac7857298e0624492fe901a4f38b925f1273e2ebb47 extends Twig_Template
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
        echo "<section class=\"row clearfix\">
            <div class=\"col-md-12\">";
        // line 5
        if (($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isDeleted") || $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isClosed"))) {
            // line 6
            echo "\t        <div class=\"alert alert-danger\">";
            // line 7
            if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isDeleted")) {
                // line 8
                echo "<i class=\"glyphicon glyphicon-trash\"></i>";
                // line 10
                echo $this->env->getExtension('translator')->trans("topic.deleted-by");
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getDeletedBy"), "html", null, true);
                // line 13
                echo "&nbsp;&#183;";
                // line 15
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getDeletedDate"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "topic"), "user"), "show"), "deleted_datetime_format")), "html", null, true);
            }
            // line 18
            if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isClosed")) {
                // line 19
                if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isDeleted")) {
                    echo "<br>";
                }
                // line 20
                echo "<i class=\"glyphicon glyphicon-lock\"></i>";
                // line 22
                echo $this->env->getExtension('translator')->trans("topic.closed-by");
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getClosedBy"), "html", null, true);
                // line 25
                echo "&nbsp;&#183;";
                // line 27
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getClosedDate"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "topic"), "user"), "show"), "closed_datetime_format")), "html", null, true);
            }
            // line 29
            echo "</div>";
        }
        // line 32
        if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isSticky")) {
            // line 33
            echo "<div class=\"alert alert-info\">
\t\t        <i class=\"glyphicon glyphicon-bullhorn\"></i>";
            // line 36
            echo $this->env->getExtension('translator')->trans("topic.stickied-by");
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "stickiedBy"), "html", null, true);
            // line 39
            echo "&nbsp;&#183;";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getStickiedDate"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "topic"), "user"), "show"), "deleted_datetime_format")), "html", null, true);
            // line 42
            echo "</div>";
        }
        // line 44
        echo "</div>
\t</section>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User:Topic/Partial/stat_mods.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 44,  74 => 42,  72 => 41,  70 => 39,  68 => 37,  66 => 36,  63 => 33,  61 => 32,  58 => 29,  55 => 27,  53 => 25,  51 => 23,  49 => 22,  47 => 20,  43 => 19,  41 => 18,  38 => 15,  36 => 13,  34 => 11,  32 => 10,  30 => 8,  28 => 7,  26 => 6,  24 => 5,  21 => 3,  19 => 1,);
    }
}

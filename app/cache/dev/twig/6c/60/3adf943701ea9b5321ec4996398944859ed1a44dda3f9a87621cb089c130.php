<?php

/* CCDNForumForumBundle:User:Topic/Partial/stat_vitals.html.twig */
class __TwigTemplate_6c603adf943701ea9b5321ec4996398944859ed1a44dda3f9a87621cb089c130 extends Twig_Template
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
        echo "<header class=\"row clearfix\">
\t\t<div class=\"col-md-6\">
\t\t    <h2>";
        // line 5
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getTitle")), "html", null, true);
        echo "</h2>
\t\t</div>
\t\t<div class=\"col-md-6 text-right\">
\t\t    <span class=\"label label-default\" title=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "cachedReplyCount"), "html", null, true);
        echo "\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topic.reply-count-label"), "html", null, true);
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "cachedReplyCount"), "html", null, true);
        // line 11
        echo "</span>

\t\t\t&nbsp;

\t\t\t<span class=\"label label-default\" title=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "cachedViewCount"), "html", null, true);
        echo "\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topic.view-count-label"), "html", null, true);
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "cachedViewCount"), "html", null, true);
        // line 18
        echo "</span>";
        // line 20
        if (array_key_exists("subscription_count", $context)) {
            // line 21
            echo "&nbsp;
\t\t        <span class=\"label label-default\" title=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["subscription_count"]) ? $context["subscription_count"] : $this->getContext($context, "subscription_count")), "html", null, true);
            echo "\">";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topic.subscription-count-label"), "html", null, true);
            // line 24
            echo twig_escape_filter($this->env, (isset($context["subscription_count"]) ? $context["subscription_count"] : $this->getContext($context, "subscription_count")), "html", null, true);
            // line 25
            echo "</span>";
        }
        // line 27
        echo "</div>
\t</header>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User:Topic/Partial/stat_vitals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 25,  55 => 21,  53 => 20,  47 => 16,  38 => 11,  36 => 10,  34 => 9,  31 => 8,  195 => 112,  191 => 108,  189 => 107,  185 => 105,  182 => 104,  180 => 103,  176 => 99,  174 => 98,  170 => 96,  167 => 95,  165 => 94,  161 => 90,  159 => 89,  155 => 87,  152 => 86,  150 => 85,  146 => 81,  144 => 80,  140 => 78,  137 => 77,  135 => 76,  131 => 72,  129 => 71,  125 => 69,  122 => 68,  120 => 67,  116 => 63,  114 => 62,  110 => 60,  107 => 59,  101 => 54,  99 => 53,  95 => 51,  92 => 50,  90 => 49,  86 => 45,  84 => 44,  80 => 41,  78 => 40,  75 => 36,  73 => 35,  68 => 27,  63 => 24,  61 => 23,  49 => 17,  45 => 18,  37 => 14,  33 => 12,  30 => 11,  28 => 10,  25 => 5,  23 => 5,  21 => 3,  19 => 1,  108 => 39,  105 => 58,  91 => 34,  74 => 33,  71 => 31,  69 => 29,  66 => 32,  64 => 25,  62 => 23,  60 => 21,  58 => 22,  56 => 26,  54 => 25,  51 => 18,  46 => 12,  44 => 15,  42 => 17,  39 => 15,  35 => 6,  32 => 5,  27 => 3,);
    }
}

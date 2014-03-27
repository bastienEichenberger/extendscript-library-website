<?php

/* JlfaForumBundle:Common/Layout/SubTitle:sub_title_default.html.twig */
class __TwigTemplate_833faee0888ad956976c503b2a1ef05a80ce62fa2412ee857c95b21787aa0924 extends Twig_Template
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
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method");
        // line 5
        echo "<div class=\"btn-group btn-block\" id=\"settings-accessor\">";
        // line 6
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method");
        // line 8
        echo "<button class=\"btn btn-default btn-block dropdown-toggle\" data-toggle=\"dropdown\" type=\"button\">";
        // line 9
        if ((twig_slice($this->env, $this->getContext($context, "route"), 0, 16) == "ccdn_forum_admin")) {
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.admin.index"), "html", null, true);
        }
        // line 13
        if (((twig_slice($this->env, $this->getContext($context, "route"), 0, 15) == "ccdn_forum_user") || (twig_slice($this->env, $this->getContext($context, "route"), 0, 20) == "ccdn_forum_moderator"))) {
            // line 14
            if ((twig_slice($this->env, $this->getContext($context, "route"), 0, 28) == "ccdn_forum_user_subscription")) {
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.subscription.index"), "html", null, true);
            } else {
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.forum.index"), "html", null, true);
            }
        }
        // line 21
        echo "<span class=\"caret\"></span>
\t\t</button>

\t\t<ul class=\"dropdown-menu section-indicator\" role=\"menu\">";
        // line 26
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 27
            echo "<li";
            // line 28
            if ((twig_slice($this->env, $this->getContext($context, "route"), 0, 16) == "ccdn_forum_admin")) {
                echo " class=\"selected\"";
            }
            echo ">
\t\t\t\t\t\t<a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_index");
            echo "\" rel=\"nofollow\">";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.admin.index"), "html", null, true);
            // line 31
            echo "</a>
\t\t\t\t</li>";
        }
        // line 35
        echo "<li";
        // line 36
        if ((((twig_slice($this->env, $this->getContext($context, "route"), 0, 15) == "ccdn_forum_user") && (twig_slice($this->env, $this->getContext($context, "route"), 0, 28) != "ccdn_forum_user_subscription")) || (twig_slice($this->env, $this->getContext($context, "route"), 0, 20) == "ccdn_forum_moderator"))) {
            echo " class=\"selected\"";
        }
        echo ">
\t\t\t\t<a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("ccdn_forum_user_category_index");
        echo "\" rel=\"nofollow\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.forum.index"), "html", null, true);
        // line 39
        echo "</a>
\t\t\t</li>";
        // line 42
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 43
            echo "<li";
            // line 44
            if ((twig_slice($this->env, $this->getContext($context, "route"), 0, 28) == "ccdn_forum_user_subscription")) {
                echo " class=\"selected\"";
            }
            echo ">";
            // line 45
            if ((array_key_exists("forum", $context) && (!(null === $this->getContext($context, "forum"))))) {
                // line 46
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_subscription_index", array("forumName" => $this->getAttribute($this->getContext($context, "forum"), "name"))), "html", null, true);
                echo "\" rel=\"nofollow\">";
            } else {
                // line 48
                echo "<a href=\"";
                echo $this->env->getExtension('routing')->getPath("ccdn_forum_user_subscription_index", array("forumName" => "default"));
                echo "\" rel=\"nofollow\">";
            }
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.subscription.index"), "html", null, true);
            // line 52
            echo "</a>
\t\t\t\t</li>";
        }
        // line 56
        echo "</ul>

\t</div>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "JlfaForumBundle:Common/Layout/SubTitle:sub_title_default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 96,  239 => 93,  213 => 82,  210 => 81,  207 => 80,  205 => 79,  202 => 76,  200 => 75,  186 => 69,  329 => 133,  306 => 124,  303 => 122,  301 => 121,  290 => 117,  287 => 115,  284 => 113,  282 => 112,  279 => 111,  275 => 110,  272 => 109,  267 => 105,  262 => 103,  259 => 102,  250 => 98,  248 => 97,  245 => 96,  232 => 91,  228 => 89,  225 => 87,  167 => 76,  188 => 70,  129 => 64,  518 => 177,  511 => 174,  508 => 173,  502 => 133,  492 => 120,  471 => 118,  467 => 117,  463 => 116,  458 => 115,  454 => 114,  452 => 113,  449 => 112,  441 => 100,  426 => 84,  406 => 71,  399 => 46,  396 => 45,  391 => 42,  383 => 37,  378 => 10,  371 => 176,  369 => 173,  364 => 170,  352 => 167,  348 => 166,  345 => 165,  343 => 164,  340 => 163,  328 => 160,  324 => 159,  321 => 158,  319 => 157,  316 => 156,  307 => 150,  295 => 143,  293 => 142,  280 => 134,  277 => 133,  260 => 129,  256 => 127,  236 => 92,  223 => 109,  212 => 105,  195 => 104,  192 => 73,  180 => 71,  165 => 75,  197 => 74,  194 => 84,  184 => 96,  113 => 68,  65 => 31,  181 => 81,  170 => 64,  155 => 75,  153 => 76,  90 => 52,  174 => 65,  152 => 61,  148 => 60,  127 => 49,  104 => 51,  100 => 33,  137 => 57,  126 => 63,  53 => 26,  23 => 5,  222 => 85,  190 => 72,  185 => 61,  178 => 80,  175 => 71,  124 => 62,  110 => 44,  97 => 52,  84 => 48,  81 => 31,  58 => 29,  34 => 13,  172 => 70,  150 => 60,  146 => 61,  134 => 55,  118 => 40,  114 => 59,  77 => 37,  70 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 101,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 83,  413 => 134,  409 => 72,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 177,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 130,  312 => 98,  309 => 126,  305 => 95,  298 => 120,  294 => 119,  285 => 89,  283 => 135,  278 => 86,  268 => 85,  264 => 104,  258 => 81,  252 => 102,  247 => 98,  241 => 94,  229 => 73,  220 => 84,  214 => 69,  177 => 72,  169 => 85,  140 => 66,  132 => 65,  128 => 53,  107 => 52,  61 => 35,  273 => 132,  269 => 108,  254 => 101,  243 => 88,  240 => 124,  238 => 112,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 108,  217 => 83,  208 => 89,  204 => 72,  179 => 67,  159 => 65,  143 => 57,  135 => 55,  119 => 49,  102 => 39,  71 => 36,  67 => 38,  63 => 30,  59 => 20,  38 => 15,  94 => 45,  89 => 44,  85 => 42,  75 => 28,  68 => 27,  56 => 28,  87 => 43,  21 => 3,  26 => 7,  93 => 43,  88 => 36,  78 => 49,  46 => 21,  27 => 8,  44 => 13,  31 => 10,  28 => 8,  201 => 84,  196 => 90,  183 => 68,  171 => 69,  166 => 63,  163 => 62,  158 => 62,  156 => 63,  151 => 73,  142 => 72,  138 => 56,  136 => 53,  121 => 46,  117 => 46,  105 => 63,  91 => 37,  62 => 24,  49 => 24,  24 => 5,  25 => 6,  19 => 1,  79 => 33,  72 => 41,  69 => 35,  47 => 23,  40 => 17,  37 => 15,  22 => 17,  246 => 90,  157 => 77,  145 => 61,  139 => 56,  131 => 54,  123 => 50,  120 => 57,  115 => 44,  111 => 42,  108 => 52,  101 => 48,  98 => 58,  96 => 46,  83 => 34,  74 => 30,  66 => 26,  55 => 27,  52 => 27,  50 => 26,  43 => 18,  41 => 17,  35 => 14,  32 => 9,  29 => 9,  209 => 82,  203 => 78,  199 => 67,  193 => 82,  189 => 71,  187 => 84,  182 => 85,  176 => 64,  173 => 70,  168 => 80,  164 => 66,  162 => 67,  154 => 62,  149 => 73,  147 => 46,  144 => 58,  141 => 73,  133 => 55,  130 => 54,  125 => 48,  122 => 55,  116 => 48,  112 => 56,  109 => 41,  106 => 51,  103 => 42,  99 => 22,  95 => 38,  92 => 53,  86 => 53,  82 => 39,  80 => 38,  73 => 43,  64 => 25,  60 => 29,  57 => 19,  54 => 28,  51 => 25,  48 => 14,  45 => 21,  42 => 18,  39 => 9,  36 => 14,  33 => 13,  30 => 9,);
    }
}

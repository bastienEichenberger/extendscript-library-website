<?php

/* JlfaForumBundle:Common/Layout/Sidebar:admin_forum.html.twig */
class __TwigTemplate_96ed80a29a6609a9caf1735e98cf93bfa97c0b641e10a9b76848750c1dcaa5a0 extends Twig_Template
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
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method");
        // line 7
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 8
            if ((((($this->getContext($context, "route") == "ccdn_forum_admin_forum_list") || ($this->getContext($context, "route") == "ccdn_forum_admin_forum_create")) || ($this->getContext($context, "route") == "ccdn_forum_admin_forum_edit")) || ($this->getContext($context, "route") == "ccdn_forum_admin_forum_delete"))) {
                // line 13
                echo "<li class=\"active\">
\t\t\t\t\t<a href=\"";
                // line 14
                echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_forum_list");
                echo "\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-list\"></i>";
            } else {
                // line 17
                echo "<li>
\t\t\t\t\t<a href=\"";
                // line 18
                echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_forum_list");
                echo "\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-list\"></i>";
            }
            // line 21
            echo "Manage Forums
\t\t\t\t\t</a>
\t\t\t\t</li>";
        }
        // line 26
        if ((((($this->getContext($context, "route") == "ccdn_forum_admin_category_list") || ($this->getContext($context, "route") == "ccdn_forum_admin_category_create")) || ($this->getContext($context, "route") == "ccdn_forum_admin_category_edit")) || ($this->getContext($context, "route") == "ccdn_forum_admin_category_delete"))) {
            // line 31
            echo "<li class=\"active\">
\t\t\t\t<a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_category_list");
            echo "\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-list\"></i>";
        } else {
            // line 35
            echo "<li>
\t\t\t\t<a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_category_list");
            echo "\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-list\"></i>";
        }
        // line 39
        echo "Manage Categories
\t\t\t\t</a>
\t\t\t</li>";
        // line 43
        if ((((($this->getContext($context, "route") == "ccdn_forum_admin_board_list") || ($this->getContext($context, "route") == "ccdn_forum_admin_board_create")) || ($this->getContext($context, "route") == "ccdn_forum_admin_board_edit")) || ($this->getContext($context, "route") == "ccdn_forum_admin_board_delete"))) {
            // line 48
            echo "<li class=\"active\">
\t\t\t\t<a href=\"";
            // line 49
            echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_list");
            echo "\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-list\"></i>";
        } else {
            // line 52
            echo "<li>
\t\t\t\t<a href=\"";
            // line 53
            echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_list");
            echo "\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-list\"></i>";
        }
        // line 56
        echo "Manage Boards
\t\t\t\t</a>
\t\t\t</li>

\t<ul>    
</div>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "JlfaForumBundle:Common/Layout/Sidebar:admin_forum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 96,  239 => 93,  213 => 82,  210 => 81,  207 => 80,  205 => 79,  202 => 76,  200 => 75,  186 => 69,  329 => 133,  306 => 124,  303 => 122,  301 => 121,  290 => 117,  287 => 115,  284 => 113,  282 => 112,  279 => 111,  275 => 110,  272 => 109,  267 => 105,  262 => 103,  259 => 102,  250 => 98,  248 => 97,  245 => 96,  232 => 91,  228 => 89,  225 => 87,  167 => 76,  188 => 70,  129 => 64,  518 => 177,  511 => 174,  508 => 173,  502 => 133,  492 => 120,  471 => 118,  467 => 117,  463 => 116,  458 => 115,  454 => 114,  452 => 113,  449 => 112,  441 => 100,  426 => 84,  406 => 71,  399 => 46,  396 => 45,  391 => 42,  383 => 37,  378 => 10,  371 => 176,  369 => 173,  364 => 170,  352 => 167,  348 => 166,  345 => 165,  343 => 164,  340 => 163,  328 => 160,  324 => 159,  321 => 158,  319 => 157,  316 => 156,  307 => 150,  295 => 143,  293 => 142,  280 => 134,  277 => 133,  260 => 129,  256 => 127,  236 => 92,  223 => 109,  212 => 105,  195 => 104,  192 => 73,  180 => 71,  165 => 75,  197 => 74,  194 => 84,  184 => 96,  113 => 43,  65 => 22,  181 => 81,  170 => 64,  155 => 75,  153 => 76,  90 => 18,  174 => 65,  152 => 61,  148 => 60,  127 => 49,  104 => 51,  100 => 33,  137 => 54,  126 => 63,  53 => 31,  23 => 3,  222 => 85,  190 => 72,  185 => 61,  178 => 80,  175 => 71,  124 => 62,  110 => 37,  97 => 52,  84 => 48,  81 => 31,  58 => 20,  34 => 6,  172 => 70,  150 => 60,  146 => 61,  134 => 55,  118 => 40,  114 => 59,  77 => 30,  70 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 101,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 83,  413 => 134,  409 => 72,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 177,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 130,  312 => 98,  309 => 126,  305 => 95,  298 => 120,  294 => 119,  285 => 89,  283 => 135,  278 => 86,  268 => 85,  264 => 104,  258 => 81,  252 => 102,  247 => 98,  241 => 94,  229 => 73,  220 => 84,  214 => 69,  177 => 72,  169 => 85,  140 => 66,  132 => 65,  128 => 52,  107 => 52,  61 => 35,  273 => 132,  269 => 108,  254 => 101,  243 => 88,  240 => 124,  238 => 112,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 108,  217 => 83,  208 => 89,  204 => 72,  179 => 67,  159 => 65,  143 => 57,  135 => 55,  119 => 47,  102 => 39,  71 => 28,  67 => 23,  63 => 14,  59 => 20,  38 => 17,  94 => 21,  89 => 41,  85 => 30,  75 => 48,  68 => 17,  56 => 32,  87 => 17,  21 => 2,  26 => 7,  93 => 43,  88 => 36,  78 => 49,  46 => 21,  27 => 7,  44 => 8,  31 => 25,  28 => 8,  201 => 84,  196 => 90,  183 => 68,  171 => 69,  166 => 63,  163 => 62,  158 => 62,  156 => 63,  151 => 73,  142 => 72,  138 => 56,  136 => 53,  121 => 46,  117 => 46,  105 => 25,  91 => 56,  62 => 21,  49 => 11,  24 => 5,  25 => 3,  19 => 1,  79 => 33,  72 => 29,  69 => 39,  47 => 10,  40 => 5,  37 => 8,  22 => 17,  246 => 90,  157 => 77,  145 => 56,  139 => 56,  131 => 54,  123 => 58,  120 => 57,  115 => 44,  111 => 42,  108 => 26,  101 => 23,  98 => 45,  96 => 44,  83 => 52,  74 => 30,  66 => 39,  55 => 31,  52 => 16,  50 => 8,  43 => 12,  41 => 18,  35 => 4,  32 => 3,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 82,  189 => 71,  187 => 84,  182 => 85,  176 => 64,  173 => 70,  168 => 80,  164 => 66,  162 => 67,  154 => 62,  149 => 73,  147 => 46,  144 => 58,  141 => 73,  133 => 55,  130 => 51,  125 => 48,  122 => 55,  116 => 53,  112 => 37,  109 => 41,  106 => 36,  103 => 40,  99 => 22,  95 => 38,  92 => 37,  86 => 53,  82 => 33,  80 => 27,  73 => 43,  64 => 36,  60 => 13,  57 => 14,  54 => 17,  51 => 26,  48 => 14,  45 => 30,  42 => 8,  39 => 9,  36 => 7,  33 => 14,  30 => 13,);
    }
}

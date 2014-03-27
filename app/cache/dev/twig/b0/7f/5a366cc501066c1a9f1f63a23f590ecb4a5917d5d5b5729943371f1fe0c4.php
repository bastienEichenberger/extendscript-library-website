<?php

/* JlfaForumBundle:Common/Paginator:twitter_bootstrap.html.twig */
class __TwigTemplate_b07f5a366cc501066c1a9f1f63a23f590ecb4a5917d5d5b5729943371f1fe0c4 extends Twig_Template
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
        if (($this->getContext($context, "pageCount") > 1)) {
            // line 4
            echo "\t\t<nav class=\"btn-toolbar text-center clearfix\">
\t        <ul class=\"pagination text-center\">

                ";
            // line 7
            if (array_key_exists("previous", $context)) {
                // line 8
                echo "                    <li>
                        <a href=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "previous")))), "html", null, true);
                echo "\">&laquo;&nbsp;";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
                echo "</a>
                    </li>
                ";
            } else {
                // line 12
                echo "                    <li class=\"disabled\">
                        <span>&laquo;&nbsp;";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
                echo "</span>
                    </li>
                ";
            }
            // line 16
            echo "
                ";
            // line 17
            if (($this->getContext($context, "startPage") > 1)) {
                // line 18
                echo "                    <li>
                        <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => 1))), "html", null, true);
                echo "\">1</a>
                    </li>
                    ";
                // line 21
                if (($this->getContext($context, "startPage") == 3)) {
                    // line 22
                    echo "                        <li>
                            <a href=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => 2))), "html", null, true);
                    echo "\">2</a>
                        </li>
                    ";
                } elseif (($this->getContext($context, "startPage") != 2)) {
                    // line 26
                    echo "                    <li class=\"disabled\">
                        <span>&hellip;</span>
                    </li>
                    ";
                }
                // line 30
                echo "                ";
            }
            // line 31
            echo "
                ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pagesInRange"));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 33
                echo "                    ";
                if (($this->getContext($context, "page") != $this->getContext($context, "current"))) {
                    // line 34
                    echo "                        <li>
                            <a href=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "page")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a>
                        </li>
                    ";
                } else {
                    // line 38
                    echo "                        <li class=\"active\">
                            <span>";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</span>
                        </li>
                    ";
                }
                // line 42
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "
                ";
            // line 45
            if (($this->getContext($context, "pageCount") > $this->getContext($context, "endPage"))) {
                // line 46
                echo "                    ";
                if (($this->getContext($context, "pageCount") > ($this->getContext($context, "endPage") + 1))) {
                    // line 47
                    echo "                        ";
                    if (($this->getContext($context, "pageCount") > ($this->getContext($context, "endPage") + 2))) {
                        // line 48
                        echo "                            <li class=\"disabled\">
                                <span>&hellip;</span>
                            </li>
                        ";
                    } else {
                        // line 52
                        echo "                            <li>
                                <a href=\"";
                        // line 53
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => ($this->getContext($context, "pageCount") - 1)))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ($this->getContext($context, "pageCount") - 1), "html", null, true);
                        echo "</a>
                            </li>
                        ";
                    }
                    // line 56
                    echo "                    ";
                }
                // line 57
                echo "                    <li>
                        <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "pageCount")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getContext($context, "pageCount"), "html", null, true);
                echo "</a>
                    </li>
                ";
            }
            // line 61
            echo "
                ";
            // line 62
            if (array_key_exists("next", $context)) {
                // line 63
                echo "                    <li>
                        <a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "next")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
                echo "&nbsp;&raquo;</a>
                    </li>
                ";
            } else {
                // line 67
                echo "                    <li class=\"disabled\">
                        <span>";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
                echo "&nbsp;&raquo;</span>
                    </li>
                ";
            }
            // line 71
            echo "            </ul>
        </nav>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "JlfaForumBundle:Common/Paginator:twitter_bootstrap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 96,  239 => 93,  213 => 82,  210 => 81,  207 => 80,  205 => 79,  202 => 76,  200 => 75,  186 => 69,  329 => 133,  306 => 124,  303 => 122,  301 => 121,  290 => 117,  287 => 115,  284 => 113,  282 => 112,  279 => 111,  275 => 110,  272 => 109,  267 => 105,  262 => 103,  259 => 102,  250 => 98,  248 => 97,  245 => 96,  232 => 91,  228 => 89,  225 => 87,  167 => 63,  188 => 70,  129 => 64,  518 => 177,  511 => 174,  508 => 173,  502 => 133,  492 => 120,  471 => 118,  467 => 117,  463 => 116,  458 => 115,  454 => 114,  452 => 113,  449 => 112,  441 => 100,  426 => 84,  406 => 71,  399 => 46,  396 => 45,  391 => 42,  383 => 37,  378 => 10,  371 => 176,  369 => 173,  364 => 170,  352 => 167,  348 => 166,  345 => 165,  343 => 164,  340 => 163,  328 => 160,  324 => 159,  321 => 158,  319 => 157,  316 => 156,  307 => 150,  295 => 143,  293 => 142,  280 => 134,  277 => 133,  260 => 129,  256 => 127,  236 => 92,  223 => 109,  212 => 105,  195 => 104,  192 => 73,  180 => 71,  165 => 62,  197 => 74,  194 => 84,  184 => 96,  113 => 42,  65 => 22,  181 => 68,  170 => 64,  155 => 75,  153 => 76,  90 => 33,  174 => 65,  152 => 61,  148 => 56,  127 => 49,  104 => 38,  100 => 33,  137 => 52,  126 => 63,  53 => 17,  23 => 4,  222 => 85,  190 => 72,  185 => 61,  178 => 67,  175 => 71,  124 => 62,  110 => 44,  97 => 52,  84 => 48,  81 => 31,  58 => 19,  34 => 13,  172 => 70,  150 => 60,  146 => 61,  134 => 55,  118 => 40,  114 => 59,  77 => 37,  70 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 101,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 83,  413 => 134,  409 => 72,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 177,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 130,  312 => 98,  309 => 126,  305 => 95,  298 => 120,  294 => 119,  285 => 89,  283 => 135,  278 => 86,  268 => 85,  264 => 104,  258 => 81,  252 => 102,  247 => 98,  241 => 94,  229 => 73,  220 => 84,  214 => 69,  177 => 72,  169 => 85,  140 => 53,  132 => 65,  128 => 47,  107 => 39,  61 => 35,  273 => 132,  269 => 108,  254 => 101,  243 => 88,  240 => 124,  238 => 112,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 108,  217 => 83,  208 => 89,  204 => 72,  179 => 67,  159 => 65,  143 => 57,  135 => 55,  119 => 49,  102 => 39,  71 => 36,  67 => 38,  63 => 21,  59 => 20,  38 => 15,  94 => 45,  89 => 44,  85 => 42,  75 => 28,  68 => 23,  56 => 28,  87 => 43,  21 => 3,  26 => 7,  93 => 34,  88 => 36,  78 => 49,  46 => 21,  27 => 8,  44 => 13,  31 => 10,  28 => 7,  201 => 84,  196 => 90,  183 => 68,  171 => 69,  166 => 63,  163 => 62,  158 => 62,  156 => 63,  151 => 57,  142 => 72,  138 => 56,  136 => 53,  121 => 46,  117 => 46,  105 => 63,  91 => 37,  62 => 24,  49 => 24,  24 => 5,  25 => 6,  19 => 1,  79 => 33,  72 => 41,  69 => 35,  47 => 23,  40 => 17,  37 => 15,  22 => 17,  246 => 90,  157 => 77,  145 => 61,  139 => 56,  131 => 48,  123 => 45,  120 => 44,  115 => 44,  111 => 42,  108 => 52,  101 => 48,  98 => 58,  96 => 35,  83 => 31,  74 => 26,  66 => 26,  55 => 18,  52 => 27,  50 => 16,  43 => 18,  41 => 12,  35 => 14,  32 => 9,  29 => 9,  209 => 82,  203 => 78,  199 => 67,  193 => 82,  189 => 71,  187 => 71,  182 => 85,  176 => 64,  173 => 70,  168 => 80,  164 => 66,  162 => 61,  154 => 58,  149 => 73,  147 => 46,  144 => 58,  141 => 73,  133 => 55,  130 => 54,  125 => 46,  122 => 55,  116 => 48,  112 => 56,  109 => 41,  106 => 51,  103 => 42,  99 => 22,  95 => 38,  92 => 53,  86 => 32,  82 => 39,  80 => 30,  73 => 43,  64 => 25,  60 => 29,  57 => 19,  54 => 28,  51 => 25,  48 => 14,  45 => 21,  42 => 18,  39 => 9,  36 => 14,  33 => 9,  30 => 8,);
    }
}

<?php

/* KnpPaginatorBundle:Pagination:twitter_bootstrap_pagination.html.twig */
class __TwigTemplate_3a8579e0fec17ae686a0f7178a951d72e49b96e4d58ce559b80786adf6fa4ef4 extends Twig_Template
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
        // line 19
        echo "
";
        // line 20
        if (($this->getContext($context, "pageCount") > 1)) {
            // line 21
            echo "<div class=\"pagination\">
    <ul>

    ";
            // line 24
            if (array_key_exists("previous", $context)) {
                // line 25
                echo "        <li>
            <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "previous")))), "html", null, true);
                echo "\">&laquo;&nbsp;";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
                echo "</a>
        </li>
    ";
            } else {
                // line 29
                echo "        <li class=\"disabled\">
            <span>&laquo;&nbsp;";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
                echo "</span>
        </li>
    ";
            }
            // line 33
            echo "
    ";
            // line 34
            if (($this->getContext($context, "startPage") > 1)) {
                // line 35
                echo "        <li>
            <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => 1))), "html", null, true);
                echo "\">1</a>
        </li>
        ";
                // line 38
                if (($this->getContext($context, "startPage") == 3)) {
                    // line 39
                    echo "            <li>
                <a href=\"";
                    // line 40
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => 2))), "html", null, true);
                    echo "\">2</a>
            </li>
        ";
                } elseif (($this->getContext($context, "startPage") != 2)) {
                    // line 43
                    echo "        <li class=\"disabled\">
            <span>&hellip;</span>
        </li>
        ";
                }
                // line 47
                echo "    ";
            }
            // line 48
            echo "
    ";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pagesInRange"));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 50
                echo "        ";
                if (($this->getContext($context, "page") != $this->getContext($context, "current"))) {
                    // line 51
                    echo "            <li>
                <a href=\"";
                    // line 52
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "page")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a>
            </li>
        ";
                } else {
                    // line 55
                    echo "            <li class=\"active\">
                <span>";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</span>
            </li>
        ";
                }
                // line 59
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "
    ";
            // line 62
            if (($this->getContext($context, "pageCount") > $this->getContext($context, "endPage"))) {
                // line 63
                echo "        ";
                if (($this->getContext($context, "pageCount") > ($this->getContext($context, "endPage") + 1))) {
                    // line 64
                    echo "            ";
                    if (($this->getContext($context, "pageCount") > ($this->getContext($context, "endPage") + 2))) {
                        // line 65
                        echo "                <li class=\"disabled\">
                    <span>&hellip;</span>
                </li>
            ";
                    } else {
                        // line 69
                        echo "                <li>
                    <a href=\"";
                        // line 70
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => ($this->getContext($context, "pageCount") - 1)))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ($this->getContext($context, "pageCount") - 1), "html", null, true);
                        echo "</a>
                </li>
            ";
                    }
                    // line 73
                    echo "        ";
                }
                // line 74
                echo "        <li>
            <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "pageCount")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getContext($context, "pageCount"), "html", null, true);
                echo "</a>
        </li>
    ";
            }
            // line 78
            echo "
    ";
            // line 79
            if (array_key_exists("next", $context)) {
                // line 80
                echo "        <li>
            <a href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "next")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
                echo "&nbsp;&raquo;</a>
        </li>
    ";
            } else {
                // line 84
                echo "        <li class=\"disabled\">
            <span>";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
                echo "&nbsp;&raquo;</span>
        </li>
    ";
            }
            // line 88
            echo "    </ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:twitter_bootstrap_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 88,  129 => 64,  518 => 177,  511 => 174,  508 => 173,  502 => 133,  492 => 120,  471 => 118,  467 => 117,  463 => 116,  458 => 115,  454 => 114,  452 => 113,  449 => 112,  441 => 100,  426 => 84,  406 => 71,  399 => 46,  396 => 45,  391 => 42,  383 => 37,  378 => 10,  371 => 176,  369 => 173,  364 => 170,  352 => 167,  348 => 166,  345 => 165,  343 => 164,  340 => 163,  328 => 160,  324 => 159,  321 => 158,  319 => 157,  316 => 156,  307 => 150,  295 => 143,  293 => 142,  280 => 134,  277 => 133,  260 => 129,  256 => 127,  236 => 111,  223 => 109,  212 => 105,  195 => 104,  192 => 103,  180 => 71,  165 => 64,  197 => 85,  194 => 84,  184 => 96,  113 => 52,  65 => 20,  181 => 59,  170 => 56,  155 => 75,  153 => 76,  90 => 28,  174 => 67,  152 => 74,  148 => 59,  127 => 50,  104 => 29,  100 => 33,  137 => 58,  126 => 63,  53 => 10,  23 => 3,  222 => 72,  190 => 100,  185 => 61,  178 => 85,  175 => 84,  124 => 62,  110 => 37,  97 => 52,  84 => 48,  81 => 47,  58 => 14,  34 => 26,  172 => 70,  150 => 60,  146 => 59,  134 => 57,  118 => 40,  114 => 59,  77 => 22,  70 => 29,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 101,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 83,  413 => 134,  409 => 72,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 177,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 144,  294 => 90,  285 => 89,  283 => 135,  278 => 86,  268 => 85,  264 => 130,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 85,  140 => 59,  132 => 65,  128 => 45,  107 => 48,  61 => 15,  273 => 132,  269 => 94,  254 => 92,  243 => 88,  240 => 124,  238 => 112,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 108,  217 => 75,  208 => 68,  204 => 72,  179 => 84,  159 => 64,  143 => 57,  135 => 67,  119 => 62,  102 => 39,  71 => 28,  67 => 23,  63 => 16,  59 => 36,  38 => 10,  94 => 51,  89 => 28,  85 => 31,  75 => 43,  68 => 19,  56 => 35,  87 => 49,  21 => 1,  26 => 3,  93 => 41,  88 => 32,  78 => 37,  46 => 13,  27 => 5,  44 => 8,  31 => 25,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 81,  166 => 79,  163 => 78,  158 => 62,  156 => 66,  151 => 47,  142 => 72,  138 => 69,  136 => 53,  121 => 61,  117 => 56,  105 => 55,  91 => 50,  62 => 19,  49 => 11,  24 => 21,  25 => 3,  19 => 19,  79 => 25,  72 => 26,  69 => 40,  47 => 10,  40 => 8,  37 => 13,  22 => 20,  246 => 90,  157 => 77,  145 => 56,  139 => 71,  131 => 52,  123 => 47,  120 => 46,  115 => 43,  111 => 43,  108 => 56,  101 => 28,  98 => 42,  96 => 31,  83 => 25,  74 => 38,  66 => 39,  55 => 17,  52 => 16,  50 => 16,  43 => 12,  41 => 11,  35 => 4,  32 => 7,  29 => 24,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 85,  182 => 85,  176 => 64,  173 => 65,  168 => 80,  164 => 66,  162 => 63,  154 => 58,  149 => 73,  147 => 46,  144 => 73,  141 => 70,  133 => 55,  130 => 37,  125 => 49,  122 => 63,  116 => 53,  112 => 31,  109 => 42,  106 => 36,  103 => 34,  99 => 40,  95 => 36,  92 => 37,  86 => 27,  82 => 30,  80 => 10,  73 => 23,  64 => 38,  60 => 20,  57 => 19,  54 => 34,  51 => 33,  48 => 7,  45 => 30,  42 => 29,  39 => 7,  36 => 4,  33 => 5,  30 => 1,);
    }
}

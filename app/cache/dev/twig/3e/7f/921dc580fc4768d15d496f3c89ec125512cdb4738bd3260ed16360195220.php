<?php

/* JlfaForumBundle:Admin/Board:delete.html.twig */
class __TwigTemplate_3e7f921dc580fc4768d15d496f3c89ec125512cdb4738bd3260ed16360195220 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CCDNForumForumBundle:Common:Layout/base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
            'body_content' => array($this, 'block_body_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CCDNForumForumBundle:Common:Layout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form"), array(0 => "JlfaForumBundle:Form:forum-theme.html.twig"));
        // line 4
        $context["LayoutTemplate"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "ccdn_forum_forum"), "board"), "admin"), "delete"), "layout_template");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.admin.manage-boards.delete", array("%board_name%" => $this->getAttribute($this->getContext($context, "board"), "name"))), "html", null, true);
    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
        // line 11
        ob_start();
        // line 12
        $this->displayParentBlock("sidebar", $context, $blocks);
        // line 13
        $this->env->loadTemplate("CCDNForumForumBundle:Common:Layout/Sidebar/admin_forum.html.twig")->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 17
    public function block_body_content($context, array $blocks = array())
    {
        // line 18
        ob_start();
        // line 20
        echo "<section class=\"clearfix\">
\t    <form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_delete_process", array("boardId" => $this->getAttribute($this->getContext($context, "board"), "id"), "forum_filter" => $this->getContext($context, "forum_filter"), "category_filter" => $this->getContext($context, "category_filter"))), "html", null, true);
        echo "\"
\t\t method=\"post\" ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"form-horizontal\" novalidate>
\t        <fieldset>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-lg-offset-2 col-lg-10\">
\t\t\t\t\t\t<h4>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.admin.manage-boards.delete", array("%board_name%" => $this->getAttribute($this->getContext($context, "board"), "name"))), "html", null, true);
        // line 29
        echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        // line 37
        echo "<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-lg-offset-2 col-lg-10\">
\t\t                <input type=\"submit\" class=\"btn btn-danger\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.button.confirm-delete"), "html", null, true);
        // line 41
        echo "\" name=\"submit[post]\" id=\"submit[post]\">

\t\t                <a class=\"btn btn-default\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_list", array("forum_filter" => $this->getContext($context, "forum_filter"), "category_filter" => $this->getContext($context, "category_filter"))), "html", null, true);
        echo "\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.button.cancel"), "html", null, true);
        // line 45
        echo "</a>
\t\t\t\t\t</div>
\t            </div>

\t        </fieldset>
\t    </form>
\t</section>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "JlfaForumBundle:Admin/Board:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 76,  188 => 88,  129 => 64,  518 => 177,  511 => 174,  508 => 173,  502 => 133,  492 => 120,  471 => 118,  467 => 117,  463 => 116,  458 => 115,  454 => 114,  452 => 113,  449 => 112,  441 => 100,  426 => 84,  406 => 71,  399 => 46,  396 => 45,  391 => 42,  383 => 37,  378 => 10,  371 => 176,  369 => 173,  364 => 170,  352 => 167,  348 => 166,  345 => 165,  343 => 164,  340 => 163,  328 => 160,  324 => 159,  321 => 158,  319 => 157,  316 => 156,  307 => 150,  295 => 143,  293 => 142,  280 => 134,  277 => 133,  260 => 129,  256 => 127,  236 => 111,  223 => 109,  212 => 105,  195 => 104,  192 => 103,  180 => 71,  165 => 75,  197 => 85,  194 => 84,  184 => 96,  113 => 55,  65 => 22,  181 => 81,  170 => 77,  155 => 75,  153 => 76,  90 => 46,  174 => 67,  152 => 74,  148 => 69,  127 => 58,  104 => 51,  100 => 33,  137 => 68,  126 => 63,  53 => 17,  23 => 3,  222 => 72,  190 => 100,  185 => 61,  178 => 80,  175 => 84,  124 => 62,  110 => 37,  97 => 52,  84 => 48,  81 => 35,  58 => 20,  34 => 6,  172 => 70,  150 => 60,  146 => 70,  134 => 57,  118 => 40,  114 => 59,  77 => 24,  70 => 29,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 101,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 83,  413 => 134,  409 => 72,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 177,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 144,  294 => 90,  285 => 89,  283 => 135,  278 => 86,  268 => 85,  264 => 130,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 85,  140 => 66,  132 => 65,  128 => 60,  107 => 52,  61 => 21,  273 => 132,  269 => 94,  254 => 92,  243 => 88,  240 => 124,  238 => 112,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 108,  217 => 75,  208 => 68,  204 => 72,  179 => 84,  159 => 64,  143 => 57,  135 => 66,  119 => 62,  102 => 39,  71 => 28,  67 => 23,  63 => 34,  59 => 36,  38 => 10,  94 => 42,  89 => 41,  85 => 30,  75 => 29,  68 => 16,  56 => 18,  87 => 40,  21 => 1,  26 => 3,  93 => 43,  88 => 32,  78 => 37,  46 => 12,  27 => 2,  44 => 11,  31 => 25,  28 => 20,  201 => 92,  196 => 90,  183 => 82,  171 => 81,  166 => 79,  163 => 78,  158 => 62,  156 => 76,  151 => 73,  142 => 72,  138 => 69,  136 => 53,  121 => 61,  117 => 39,  105 => 30,  91 => 50,  62 => 15,  49 => 11,  24 => 18,  25 => 3,  19 => 16,  79 => 33,  72 => 21,  69 => 40,  47 => 10,  40 => 8,  37 => 7,  22 => 17,  246 => 90,  157 => 77,  145 => 56,  139 => 70,  131 => 61,  123 => 58,  120 => 57,  115 => 38,  111 => 43,  108 => 31,  101 => 28,  98 => 45,  96 => 44,  83 => 37,  74 => 39,  66 => 39,  55 => 31,  52 => 16,  50 => 8,  43 => 12,  41 => 10,  35 => 4,  32 => 7,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 64,  173 => 65,  168 => 80,  164 => 66,  162 => 74,  154 => 74,  149 => 73,  147 => 46,  144 => 73,  141 => 73,  133 => 55,  130 => 37,  125 => 56,  122 => 55,  116 => 53,  112 => 37,  109 => 42,  106 => 36,  103 => 34,  99 => 40,  95 => 36,  92 => 37,  86 => 45,  82 => 30,  80 => 43,  73 => 28,  64 => 38,  60 => 20,  57 => 14,  54 => 13,  51 => 33,  48 => 13,  45 => 30,  42 => 29,  39 => 6,  36 => 5,  33 => 22,  30 => 21,);
    }
}

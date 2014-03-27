<?php

/* SdzBlogBundle:blog:delete_comment.html.twig */
class __TwigTemplate_f1878350c51b0afb646ea918b84da9d2ab28f64a9f2c7499f9a9a3aca852f8c7 extends Twig_Template
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
        echo "<!-- Modal -->

<div class=\"modal fade\" id=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "modal_id"), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Delete comment</h4>
      </div>
      <div class=\"modal-body\">
        Do you really want to delete the comment ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "commentaire"), "contenu"), "html", null, true);
        echo "
      </div>
      <div class=\"modal-footer\">
        <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_supprimer_commentaire", array("id" => $this->getAttribute($this->getContext($context, "commentaire"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">cancel</button>
            <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
            ";
        // line 17
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SdzBlogBundle:blog:delete_form", array("id" => $this->getAttribute($this->getContext($context, "commentaire"), "id"))));
        echo "
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:blog:delete_comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 41,  126 => 36,  53 => 12,  23 => 3,  222 => 72,  190 => 70,  185 => 64,  178 => 52,  175 => 51,  124 => 73,  110 => 56,  97 => 47,  84 => 39,  81 => 38,  58 => 14,  34 => 11,  172 => 70,  150 => 60,  146 => 59,  134 => 53,  118 => 33,  114 => 45,  77 => 29,  70 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 62,  102 => 39,  71 => 20,  67 => 17,  63 => 15,  59 => 15,  38 => 6,  94 => 46,  89 => 20,  85 => 24,  75 => 36,  68 => 14,  56 => 13,  87 => 25,  21 => 5,  26 => 2,  93 => 36,  88 => 42,  78 => 37,  46 => 17,  27 => 4,  44 => 12,  31 => 4,  28 => 9,  201 => 92,  196 => 90,  183 => 82,  171 => 45,  166 => 67,  163 => 62,  158 => 67,  156 => 66,  151 => 47,  142 => 44,  138 => 54,  136 => 15,  121 => 34,  117 => 44,  105 => 53,  91 => 44,  62 => 16,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 21,  72 => 16,  69 => 25,  47 => 9,  40 => 14,  37 => 6,  22 => 2,  246 => 90,  157 => 50,  145 => 46,  139 => 16,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 29,  101 => 27,  98 => 38,  96 => 31,  83 => 25,  74 => 14,  66 => 17,  55 => 15,  52 => 21,  50 => 6,  43 => 4,  41 => 9,  35 => 10,  32 => 5,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 63,  176 => 64,  173 => 65,  168 => 44,  164 => 22,  162 => 66,  154 => 58,  149 => 51,  147 => 46,  144 => 20,  141 => 57,  133 => 55,  130 => 37,  125 => 50,  122 => 63,  116 => 32,  112 => 31,  109 => 43,  106 => 36,  103 => 51,  99 => 31,  95 => 28,  92 => 24,  86 => 32,  82 => 31,  80 => 19,  73 => 20,  64 => 16,  60 => 14,  57 => 13,  54 => 27,  51 => 11,  48 => 23,  45 => 15,  42 => 7,  39 => 8,  36 => 7,  33 => 4,  30 => 3,);
    }
}
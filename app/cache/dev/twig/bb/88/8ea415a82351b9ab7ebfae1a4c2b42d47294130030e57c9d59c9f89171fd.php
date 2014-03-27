<?php

/* SdzBlogBundle:blog:commentaire.html.twig */
class __TwigTemplate_bb888ea415a82351b9ab7ebfae1a4c2b42d47294130030e57c9d59c9f89171fd extends Twig_Template
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
        // line 4
        $context["userHelpers"] = $this->env->loadTemplate("SdzUserBundle::userHelpers.html.twig");
        // line 5
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form"), array(0 => "::form/jlfa-theme.html.twig"));
        // line 6
        echo "
<h3>Commentaires</h3>

  ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "commentaires"));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 10
            echo "    <div id=\"comment";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "commentaire"), "id"), "html", null, true);
            echo "\" itemscope itemtype=\"http://schema.org/Comment\">
     ";
            // line 11
            if (($this->env->getExtension('security')->isGranted("ROLE_AUTHOR") || $this->env->getExtension('security')->isGranted("EDIT", $this->getContext($context, "commentaire")))) {
                // line 12
                echo "        <div class=\"admin-post\">
            ";
                // line 13
                $context["modal_id"] = ("modal-comment-" . $this->getAttribute($this->getContext($context, "commentaire"), "id"));
                // line 14
                echo "            <a class=\"pull-right\" href=\"#\" data-toggle=\"modal\" data-target=\"#";
                echo twig_escape_filter($this->env, $this->getContext($context, "modal_id"), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-minus\"></span></a>
            <!-- Modal -->
            ";
                // line 16
                $this->env->loadTemplate("SdzBlogBundle:blog:delete_comment.html.twig")->display($context);
                // line 17
                echo "        </div> 
    ";
            }
            // line 19
            echo "    <em>
      Le <time datetime=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "commentaire"), "date"), "c"), "html", null, true);
            echo "\" itemprop=\"datePublished\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "commentaire"), "date"), "d/m/Y à H\\hi"), "html", null, true);
            echo "</time>,
      <span itemprop=\"author\">";
            // line 21
            echo $context["userHelpers"]->getlink($this->getAttribute($this->getContext($context, "commentaire"), "user"), $this->getAttribute($this->getContext($context, "commentaire"), "auteur"));
            echo "</span> a écrit :
    </em>
    <br />
    ";
            // line 24
            echo $this->env->getExtension('markdown')->markdown($this->getAttribute($this->getContext($context, "commentaire"), "contenu"));
            echo "
  </div>
  ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 27
            echo "    <p>Pas encore de commentaire.</p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "  <hr />
  <h3>Poster un nouveau commentaire</h3>
  <form id=\"comments\" method=\"post\" action=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_ajouter_commentaire", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
        echo "\">
        ";
        // line 32
        if ($this->getAttribute($this->getContext($context, "form", true), "auteur", array(), "any", true, true)) {
            // line 33
            echo "            <div class=\"control-group\">
                ";
            // line 34
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "auteur"), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
                <div class=\"controls\">
                    ";
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "auteur"), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                    ";
            // line 37
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "auteur"), 'errors');
            echo "
                </div>
            </div>
        ";
        }
        // line 41
        echo "        
          
        <div class=\"control-group\">
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "contenu"), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "contenu"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "contenu"), 'errors');
        echo "
            </div>
        </div>
        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
        <div class=\"form-actions\">
            <input type=\"submit\" value=\"Ajouter\" class=\"btn btn-primary\" />
        </div> 
  </form>





";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:blog:commentaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 41,  126 => 36,  53 => 12,  23 => 6,  222 => 72,  190 => 70,  185 => 64,  178 => 52,  175 => 51,  124 => 73,  110 => 56,  97 => 47,  84 => 39,  81 => 38,  58 => 14,  34 => 5,  172 => 70,  150 => 60,  146 => 59,  134 => 53,  118 => 33,  114 => 45,  77 => 29,  70 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 62,  102 => 39,  71 => 20,  67 => 17,  63 => 15,  59 => 15,  38 => 6,  94 => 46,  89 => 20,  85 => 24,  75 => 36,  68 => 14,  56 => 13,  87 => 25,  21 => 5,  26 => 2,  93 => 36,  88 => 42,  78 => 37,  46 => 10,  27 => 4,  44 => 12,  31 => 4,  28 => 9,  201 => 92,  196 => 90,  183 => 82,  171 => 45,  166 => 67,  163 => 62,  158 => 67,  156 => 66,  151 => 47,  142 => 44,  138 => 54,  136 => 15,  121 => 34,  117 => 44,  105 => 53,  91 => 44,  62 => 16,  49 => 19,  24 => 1,  25 => 3,  19 => 4,  79 => 21,  72 => 16,  69 => 25,  47 => 9,  40 => 12,  37 => 6,  22 => 2,  246 => 90,  157 => 50,  145 => 46,  139 => 16,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 29,  101 => 27,  98 => 38,  96 => 31,  83 => 25,  74 => 14,  66 => 17,  55 => 15,  52 => 21,  50 => 6,  43 => 4,  41 => 9,  35 => 10,  32 => 5,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 63,  176 => 64,  173 => 65,  168 => 44,  164 => 22,  162 => 66,  154 => 58,  149 => 51,  147 => 46,  144 => 20,  141 => 57,  133 => 55,  130 => 37,  125 => 50,  122 => 63,  116 => 32,  112 => 31,  109 => 43,  106 => 36,  103 => 51,  99 => 31,  95 => 28,  92 => 24,  86 => 32,  82 => 31,  80 => 19,  73 => 20,  64 => 16,  60 => 14,  57 => 13,  54 => 27,  51 => 11,  48 => 23,  45 => 15,  42 => 7,  39 => 8,  36 => 7,  33 => 4,  30 => 3,);
    }
}

<?php

/* SdzBlogBundle:blog:index.html.twig */
class __TwigTemplate_2ad9cb3e42f01b37c9195f856a2006a63eded00d8cfd94a693d6662382ef3f8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SdzBlogBundle::sidebar_layout.html.twig");

        $this->blocks = array(
            'body_content' => array($this, 'block_body_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SdzBlogBundle::sidebar_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["userHelpers"] = $this->env->loadTemplate("SdzUserBundle::userHelpers.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body_content($context, array $blocks = array())
    {
        // line 8
        echo "    
    
            
            <div class=\"row\">
                  <div class=\"col-lg-12\">
                    <h1>News</h1>
                </div>
            </div>
            <!-- Blog posts -->
            ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "articles"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            echo "     
                <div class=\"row post\">
                    <div class=\"col-lg-8\">
                        <!-- admin post -->
                        ";
            // line 21
            if ($this->env->getExtension('security')->isGranted("ROLE_AUTHOR")) {
                // line 22
                echo "                            <div class=\"admin-post\">
                                ";
                // line 23
                $context["modal_id"] = ("modal-article-" . $this->getAttribute($this->getContext($context, "article"), "id"));
                // line 24
                echo "                                <a class=\"pull-right\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_edit_post", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                <a class=\"pull-right\" href=\"#\" data-toggle=\"modal\" data-target=\"#";
                // line 25
                echo twig_escape_filter($this->env, $this->getContext($context, "modal_id"), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-minus\"></span></a>
                                <!-- Modal -->
                                ";
                // line 27
                $this->env->loadTemplate("SdzBlogBundle:blog:delete.html.twig")->display($context);
                // line 28
                echo "                            </div> 
                        ";
            }
            // line 30
            echo "                        <!-- end admin post -->  
                        
                        <h2><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_voir", array("slug" => $this->getAttribute($this->getContext($context, "article"), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titre"), "html", null, true);
            echo "</a></h2>
                        <p>";
            // line 33
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "contenu"), 200, true, "..."), "html", null, true);
            echo "</p>
                    </div>
                    ";
            // line 35
            if ((!(null === $this->getAttribute($this->getContext($context, "article"), "image")))) {
                // line 36
                echo "                        <div class=\"col-lg-4\">
                            <img class=\"featurette-image img-responsive\" src=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($this->getContext($context, "article"), "image"), "webPath")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "image"), "alt"), "html", null, true);
                echo "\">
                        </div>
                    ";
            }
            // line 40
            echo "                </div>
                ";
            // line 42
            echo "                ";
            if (($this->getAttribute($this->getContext($context, "loop"), "index") < $this->getContext($context, "nombre_sur_page"))) {
                // line 43
                echo "                    <hr class=\"featurette-divider\">
                ";
            }
            // line 45
            echo "                
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
            // line 47
            echo "                <p>Pas (encore !) d'articles</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            
            
             ";
        // line 51
        if (($this->getContext($context, "nb_page") > 1)) {
            // line 52
            echo "                <ul class=\"pagination pull-right\">
                  ";
            // line 54
            echo "                  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "nb_page")));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 55
                echo "                    <li";
                if (($this->getContext($context, "p") == $this->getContext($context, "page"))) {
                    echo " class=\"active\"";
                }
                echo ">
                      <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_accueil", array("page" => $this->getContext($context, "p"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getContext($context, "p"), "html", null, true);
                echo "</a>
                    </li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                </ul>
            ";
        }
        // line 61
        echo "

";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 59,  170 => 56,  155 => 52,  153 => 51,  90 => 30,  174 => 70,  152 => 60,  148 => 59,  127 => 50,  104 => 39,  100 => 33,  137 => 41,  126 => 36,  53 => 12,  23 => 3,  222 => 72,  190 => 70,  185 => 61,  178 => 52,  175 => 51,  124 => 43,  110 => 37,  97 => 47,  84 => 27,  81 => 38,  58 => 14,  34 => 11,  172 => 70,  150 => 60,  146 => 59,  134 => 53,  118 => 40,  114 => 45,  77 => 29,  70 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 52,  128 => 45,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 72,  159 => 64,  143 => 57,  135 => 53,  119 => 62,  102 => 39,  71 => 20,  67 => 21,  63 => 22,  59 => 15,  38 => 11,  94 => 32,  89 => 20,  85 => 24,  75 => 36,  68 => 24,  56 => 18,  87 => 25,  21 => 5,  26 => 2,  93 => 36,  88 => 32,  78 => 37,  46 => 17,  27 => 4,  44 => 17,  31 => 4,  28 => 9,  201 => 92,  196 => 90,  183 => 82,  171 => 45,  166 => 67,  163 => 55,  158 => 54,  156 => 66,  151 => 47,  142 => 47,  138 => 54,  136 => 53,  121 => 42,  117 => 44,  105 => 35,  91 => 44,  62 => 16,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 25,  72 => 23,  69 => 22,  47 => 15,  40 => 14,  37 => 6,  22 => 2,  246 => 90,  157 => 50,  145 => 46,  139 => 16,  131 => 52,  123 => 47,  120 => 46,  115 => 43,  111 => 43,  108 => 29,  101 => 27,  98 => 38,  96 => 31,  83 => 25,  74 => 24,  66 => 17,  55 => 15,  52 => 17,  50 => 6,  43 => 4,  41 => 9,  35 => 10,  32 => 5,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 63,  176 => 64,  173 => 65,  168 => 67,  164 => 66,  162 => 66,  154 => 58,  149 => 49,  147 => 46,  144 => 20,  141 => 57,  133 => 55,  130 => 37,  125 => 50,  122 => 63,  116 => 45,  112 => 31,  109 => 43,  106 => 36,  103 => 51,  99 => 31,  95 => 36,  92 => 24,  86 => 28,  82 => 31,  80 => 19,  73 => 20,  64 => 16,  60 => 14,  57 => 13,  54 => 27,  51 => 11,  48 => 23,  45 => 15,  42 => 7,  39 => 8,  36 => 7,  33 => 8,  30 => 7,);
    }
}

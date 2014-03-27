<?php

/* SdzBlogBundle:blog:index.html.twig */
class __TwigTemplate_a3a02b24e2ae3dffc02df99a77776625edeb7ebd35671f26ccd75f3674379cdc extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
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
                $context["modal_id"] = ("modal-article-" . $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"));
                // line 24
                echo "                                <a class=\"pull-right\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_edit_post", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                <a class=\"pull-right\" href=\"#\" data-toggle=\"modal\" data-target=\"#";
                // line 25
                echo twig_escape_filter($this->env, (isset($context["modal_id"]) ? $context["modal_id"] : $this->getContext($context, "modal_id")), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_voir", array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
            echo "</a></h2>
                        <p>";
            // line 33
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu"), 200, true, "..."), "html", null, true);
            echo "</p>
                    </div>
                    ";
            // line 35
            if ((!(null === $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image")))) {
                // line 36
                echo "                        <div class=\"col-lg-4\">
                            <img class=\"featurette-image img-responsive\" src=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "webPath")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "alt"), "html", null, true);
                echo "\">
                        </div>
                    ";
            }
            // line 40
            echo "                </div>
                ";
            // line 42
            echo "                ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") < (isset($context["nombre_sur_page"]) ? $context["nombre_sur_page"] : $this->getContext($context, "nombre_sur_page")))) {
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
        if (((isset($context["nb_page"]) ? $context["nb_page"] : $this->getContext($context, "nb_page")) > 1)) {
            // line 52
            echo "                <ul class=\"pagination pull-right\">
                  ";
            // line 54
            echo "                  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nb_page"]) ? $context["nb_page"] : $this->getContext($context, "nb_page"))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 55
                echo "                    <li";
                if (((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                    echo " class=\"active\"";
                }
                echo ">
                      <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_accueil", array("page" => (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "html", null, true);
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
        return array (  185 => 61,  181 => 59,  170 => 56,  163 => 55,  158 => 54,  155 => 52,  153 => 51,  149 => 49,  142 => 47,  128 => 45,  124 => 43,  121 => 42,  118 => 40,  110 => 37,  107 => 36,  105 => 35,  100 => 33,  94 => 32,  90 => 30,  86 => 28,  84 => 27,  79 => 25,  74 => 24,  72 => 23,  69 => 22,  67 => 21,  44 => 17,  33 => 8,  30 => 7,  25 => 3,);
    }
}

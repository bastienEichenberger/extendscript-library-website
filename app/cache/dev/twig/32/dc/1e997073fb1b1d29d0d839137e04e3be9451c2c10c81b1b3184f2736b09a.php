<?php

/* SdzBlogBundle:blog:commentaire.html.twig */
class __TwigTemplate_32dc1e997073fb1b1d29d0d839137e04e3be9451c2c10c81b1b3184f2736b09a extends Twig_Template
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
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "::form/jlfa-theme.html.twig"));
        // line 6
        echo "
<h3>Commentaires</h3>

  ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) ? $context["commentaires"] : $this->getContext($context, "commentaires")));
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "id"), "html", null, true);
            echo "\" itemscope itemtype=\"http://schema.org/Comment\">
     ";
            // line 11
            if (($this->env->getExtension('security')->isGranted("ROLE_AUTHOR") || $this->env->getExtension('security')->isGranted("EDIT", (isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire"))))) {
                // line 12
                echo "        <div class=\"admin-post\">
            ";
                // line 13
                $context["modal_id"] = ("modal-comment-" . $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "id"));
                // line 14
                echo "            <a class=\"pull-right\" href=\"#\" data-toggle=\"modal\" data-target=\"#";
                echo twig_escape_filter($this->env, (isset($context["modal_id"]) ? $context["modal_id"] : $this->getContext($context, "modal_id")), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "date"), "c"), "html", null, true);
            echo "\" itemprop=\"datePublished\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "date"), "d/m/Y à H\\hi"), "html", null, true);
            echo "</time>,
      <span itemprop=\"author\">";
            // line 21
            echo $context["userHelpers"]->getlink($this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "user"), $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "auteur"));
            echo "</span> a écrit :
    </em>
    <br />
    ";
            // line 24
            echo $this->env->getExtension('markdown')->markdown($this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "contenu"));
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_ajouter_commentaire", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
        echo "\">
        ";
        // line 32
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "auteur", array(), "any", true, true)) {
            // line 33
            echo "            <div class=\"control-group\">
                ";
            // line 34
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auteur"), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
                <div class=\"controls\">
                    ";
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auteur"), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                    ";
            // line 37
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auteur"), 'errors');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu"), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu"), 'errors');
        echo "
            </div>
        </div>
        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
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
        return array (  157 => 50,  151 => 47,  147 => 46,  142 => 44,  137 => 41,  130 => 37,  126 => 36,  118 => 33,  112 => 31,  108 => 29,  85 => 24,  70 => 19,  66 => 17,  64 => 16,  58 => 14,  56 => 13,  53 => 12,  51 => 11,  46 => 10,  28 => 9,  23 => 6,  21 => 5,  19 => 4,  57 => 9,  54 => 8,  50 => 6,  48 => 5,  36 => 7,  33 => 4,  30 => 3,  121 => 34,  116 => 32,  114 => 41,  105 => 35,  101 => 27,  97 => 32,  92 => 29,  90 => 28,  79 => 21,  73 => 20,  69 => 18,  65 => 16,  62 => 15,  59 => 14,  43 => 4,  39 => 8,  34 => 6,  31 => 5,  26 => 2,);
    }
}

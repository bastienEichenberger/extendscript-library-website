<?php

/* SdzBlogBundle:blog:post.html.twig */
class __TwigTemplate_a6ca3d8a1dcbec07fafe038d0cf0c08262a7183c9bc218fb9adf8f13e2ba2f07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SdzBlogBundle::full_layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_content' => array($this, 'block_body_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SdzBlogBundle::full_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["userHelpers"] = $this->env->loadTemplate("SdzUserBundle::userHelpers.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " 
  ";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a5833f9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a5833f9_0") : $this->env->getExtension('assets')->getAssetUrl("css/main_form_1.css");
            // line 10
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
  ";
        } else {
            // asset "a5833f9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a5833f9") : $this->env->getExtension('assets')->getAssetUrl("css/main.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
  ";
        }
        unset($context["asset_url"]);
    }

    // line 14
    public function block_body_content($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if ((!(null === $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image")))) {
            // line 16
            echo "        <div class=\"row\">
            <div class=\"col-lg-8\">
                <h2>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
            echo "</h2>
                <p>";
            // line 19
            echo $this->env->getExtension('markdown')->markdown($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu"));
            echo "</p>
            </div>
            <div class=\"col-lg-4\">
                <img class=\"featurette-image img-responsive\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "webPath")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "alt"), "html", null, true);
            echo "\">
            </div>
        </div>
        <hr />
        <div class=\"row\">
            <div class=\"col-lg-8\">
                ";
            // line 28
            $this->env->loadTemplate("SdzBlogBundle:blog:commentaire.html.twig")->display($context);
            // line 29
            echo "            </div>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h2>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
            echo "</h2>
                <p>";
            // line 35
            echo $this->env->getExtension('markdown')->markdown($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu"));
            echo "</p>
            </div>
        </div>
        <hr />
        <div class=\"row\">
            <div class=\"col-lg-12\">
                ";
            // line 41
            $this->env->loadTemplate("SdzBlogBundle:blog:commentaire.html.twig")->display($context);
            // line 42
            echo "            </div>
        </div>
    ";
        }
        // line 45
        echo "    

";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:blog:post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 45,  116 => 42,  114 => 41,  105 => 35,  101 => 34,  97 => 32,  92 => 29,  90 => 28,  79 => 22,  73 => 19,  69 => 18,  65 => 16,  62 => 15,  59 => 14,  43 => 10,  39 => 7,  34 => 6,  31 => 5,  26 => 2,);
    }
}

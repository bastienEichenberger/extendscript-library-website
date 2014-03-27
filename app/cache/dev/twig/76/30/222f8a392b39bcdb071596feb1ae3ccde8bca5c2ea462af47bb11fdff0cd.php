<?php

/* CCDNForumForumBundle:User:Category/index.html.twig */
class __TwigTemplate_7630222f8a392b39bcdb071596feb1ae3ccde8bca5c2ea462af47bb11fdff0cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CCDNForumForumBundle:Common:Layout/base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
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
        $context["LayoutTemplate"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "category"), "user"), "index"), "layout_template");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.category.index"), "html", null, true);
        echo "
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
 <div class=\"row\">
    
    
         
    ";
        // line 15
        $this->displayBlock('sidebar', $context, $blocks);
        // line 19
        echo "<div class=\"col-lg-9 col-lg\">";
        // line 23
        $this->displayBlock('body_content', $context, $blocks);
        // line 40
        echo "</div>
     </div>

";
    }

    // line 15
    public function block_sidebar($context, array $blocks = array())
    {
        // line 16
        $this->env->loadTemplate("CCDNForumForumBundle:Common:Layout/Sidebar/user_forum.html.twig")->display($context);
    }

    // line 23
    public function block_body_content($context, array $blocks = array())
    {
        // line 24
        ob_start();
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 27
            $this->env->loadTemplate("CCDNForumForumBundle:User:Category/Partial/item_category.html.twig")->display($context);
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
            // line 29
            echo "<section class=\"row clearfix\">
\t\t\t<div class=\"well text-center\">
\t\t\t\t<span class=\"lead\">";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.none"), "html", null, true);
            // line 33
            echo "</span>
\t\t\t</div>
\t\t</section>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User:Category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 33,  113 => 32,  109 => 29,  96 => 27,  78 => 26,  76 => 24,  73 => 23,  69 => 16,  66 => 15,  59 => 40,  57 => 23,  55 => 19,  53 => 15,  46 => 10,  43 => 9,  36 => 6,  33 => 5,  28 => 2,);
    }
}

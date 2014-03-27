<?php

/* CCDNForumForumBundle:User:Post/edit.html.twig */
class __TwigTemplate_d50d608ac7eec70881854dbfa8fe071667f2102450efe9b2c0ea9ce7932e5f62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JlfaForumBundle:Common:Layout/base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
            'body_content' => array($this, 'block_body_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JlfaForumBundle:Common:Layout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "JlfaForumBundle:Form:forum-theme.html.twig"));
        // line 4
        $context["LayoutTemplate"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "post"), "user"), "edit"), "layout_template");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.post.edit", array("%post_id%" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId"), "%topic_title%" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getTopic"), "getTitle"))), "html", null, true);
    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
        // line 11
        ob_start();
        // line 12
        $this->displayParentBlock("sidebar", $context, $blocks);
        // line 13
        $this->env->loadTemplate("CCDNForumForumBundle:Common:Layout/Sidebar/user_forum.html.twig")->display($context);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_post_edit_process", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id"))), "html", null, true);
        echo "\"
\t\t method=\"post\" ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\" novalidate>
\t        <fieldset>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-lg-offset-2 col-lg-10\">
\t\t\t\t\t\t<h4>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.post.edit", array("%post_id%" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId"), "%topic_title%" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getTopic"), "getTitle"))), "html", null, true);
        // line 29
        echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 35
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Topic", array(), "any", true, true)) {
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Topic"), "title"), 'row');
        }
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 41
        echo "<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-lg-offset-2 col-lg-10\">
\t\t                <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.button.save-changes"), "html", null, true);
        // line 45
        echo "\" name=\"submit[post]\" id=\"submit[post]\">


\t\t                <a class=\"btn btn-default\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getTopic"), "getId"))), "html", null, true);
        echo "\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.button.cancel"), "html", null, true);
        // line 50
        echo "</a>
\t\t\t\t\t</div>
\t            </div>

\t        </fieldset>
\t    </form>
\t</section>";
        // line 58
        if (array_key_exists("preview", $context)) {
            // line 59
            if ((!twig_test_empty((isset($context["preview"]) ? $context["preview"] : $this->getContext($context, "preview"))))) {
                // line 60
                $this->env->loadTemplate("CCDNForumForumBundle:User:Post/Partial/post_preview.html.twig")->display(array_merge($context, array("post" => (isset($context["preview"]) ? $context["preview"] : $this->getContext($context, "preview")))));
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User:Post/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 60,  114 => 59,  112 => 58,  104 => 50,  102 => 49,  99 => 48,  94 => 45,  92 => 44,  88 => 41,  86 => 39,  83 => 36,  81 => 35,  79 => 33,  75 => 29,  73 => 28,  65 => 22,  61 => 21,  58 => 20,  56 => 18,  53 => 17,  48 => 13,  46 => 12,  44 => 11,  41 => 10,  37 => 7,  34 => 6,  29 => 4,  27 => 2,);
    }
}

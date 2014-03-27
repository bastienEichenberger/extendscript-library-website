<?php

/* SdzBlogBundle:blog:delete_form.html.twig */
class __TwigTemplate_3e5bd2a3cb56269bf789e173861b629c0cb6a2610ff88b76184c8d13b9db82f5 extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:blog:delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  40 => 14,  34 => 11,  23 => 3,  19 => 1,);
    }
}

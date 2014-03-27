<?php

/* SdzBlogBundle:blog:delete_form.html.twig */
class __TwigTemplate_07ae11a05ba20962b7ea133f050c2a16a1455e5875de4c9d890420f02d7fc4ec extends Twig_Template
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

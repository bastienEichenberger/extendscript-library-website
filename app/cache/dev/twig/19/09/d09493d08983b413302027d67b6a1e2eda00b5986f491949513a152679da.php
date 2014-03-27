<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_1909d09493d08983b413302027d67b6a1e2eda00b5986f491949513a152679da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::backbone.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::backbone.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
  
  
  ";
        // line 9
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 11
        echo "
";
    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 10
        echo "  ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  44 => 9,  39 => 11,  37 => 9,  32 => 6,  29 => 5,  79 => 24,  74 => 21,  69 => 20,  66 => 19,  61 => 15,  58 => 14,  42 => 9,  38 => 6,  33 => 5,  30 => 4,);
    }
}

<?php

/* SdzBlogBundle::form_layout.html.twig */
class __TwigTemplate_da972c3915ff30b900467b7af46da34e73c61754bf34500a20dfe3eeba57b886 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SdzBlogBundle::full_layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SdzBlogBundle::full_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "::form/jlfa-theme.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " 
  ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a5833f9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a5833f9_0") : $this->env->getExtension('assets')->getAssetUrl("css/main_form_1.css");
            // line 9
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

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        ";
        // line 17
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "28985a3_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_28985a3_0") : $this->env->getExtension('assets')->getAssetUrl("js/main_translator.min_1.js");
            // line 20
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "28985a3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_28985a3") : $this->env->getExtension('assets')->getAssetUrl("js/main.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 22
        echo "        
    <script type=\"text/javascript\" src=\"";
        // line 23
        echo $this->env->getExtension('routing')->getUrl("bazinga_exposetranslation_js", array("domain_name" => "validators"));
        echo "\"></script>
    ";
        // line 24
        echo $this->env->getExtension('JsFormValidation')->JsFormValidationFunction((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle::form_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  88 => 23,  85 => 22,  71 => 20,  67 => 17,  62 => 16,  59 => 15,  43 => 9,  39 => 6,  34 => 5,  26 => 2,  172 => 70,  166 => 67,  162 => 66,  157 => 64,  150 => 60,  146 => 59,  141 => 57,  134 => 53,  130 => 52,  125 => 50,  118 => 46,  114 => 45,  109 => 43,  102 => 39,  98 => 38,  93 => 36,  86 => 32,  82 => 31,  77 => 29,  70 => 25,  66 => 24,  61 => 22,  54 => 18,  50 => 17,  45 => 15,  36 => 11,  31 => 4,  28 => 7,);
    }
}

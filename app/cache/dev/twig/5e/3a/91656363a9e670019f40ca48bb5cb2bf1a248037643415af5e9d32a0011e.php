<?php

/* SdzBlogBundle:blog:edit_post.html.twig */
class __TwigTemplate_5e3a91656363a9e670019f40ca48bb5cb2bf1a248037643415af5e9d32a0011e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SdzBlogBundle::form_layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SdzBlogBundle::form_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form"), array(0 => "::form/jlfa-theme.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"well\">
            <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_edit_post", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " method=\"POST\" class=\"form-inline\" novalidate>
                <fieldset>
                    <legend>Edit Article</legend>
                    <div class=\"control-group\">
                        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titre"), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titre"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titre"), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"control-group\">
                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titreEn"), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titreEn"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titreEn"), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"control-group\">
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titreDe"), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titreDe"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titreDe"), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"control-group\">
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "contenu"), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "contenu"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "contenu"), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"control-group\">
                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "contenuEn"), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "contenuEn"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "contenuEn"), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"control-group\">
                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "contenuDe"), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "contenuDe"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "contenuDe"), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"control-group\">
                        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "image"), "file"), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "image"), "file"), 'widget');
        echo "
                            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "image"), "file"), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"control-group\">
                        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "author"), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "author"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "author"), 'errors');
        echo "
                        </div>
                    </div>
                    ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
                    <div>
                        <a class=\"btn btn-default\" href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("sdzblog_accueil");
        echo "\">Cancel</a>
                        <button id=\"sdz_blogbundle_articleedittype\" type=\"submit\" class=\"btn btn-primary btn-large\">Edit</button>
                    </div>
                </fieldset>
            </form>
        </div>
   </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:blog:edit_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 70,  152 => 60,  148 => 59,  127 => 50,  104 => 39,  100 => 38,  137 => 41,  126 => 36,  53 => 12,  23 => 3,  222 => 72,  190 => 70,  185 => 64,  178 => 52,  175 => 51,  124 => 73,  110 => 56,  97 => 47,  84 => 31,  81 => 38,  58 => 14,  34 => 11,  172 => 70,  150 => 60,  146 => 59,  134 => 53,  118 => 33,  114 => 45,  77 => 29,  70 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 52,  128 => 49,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 72,  159 => 64,  143 => 57,  135 => 53,  119 => 62,  102 => 39,  71 => 20,  67 => 17,  63 => 22,  59 => 15,  38 => 11,  94 => 46,  89 => 20,  85 => 24,  75 => 36,  68 => 24,  56 => 18,  87 => 25,  21 => 5,  26 => 2,  93 => 36,  88 => 32,  78 => 37,  46 => 17,  27 => 4,  44 => 12,  31 => 4,  28 => 9,  201 => 92,  196 => 90,  183 => 82,  171 => 45,  166 => 67,  163 => 62,  158 => 67,  156 => 66,  151 => 47,  142 => 44,  138 => 54,  136 => 53,  121 => 34,  117 => 44,  105 => 53,  91 => 44,  62 => 16,  49 => 19,  24 => 1,  25 => 4,  19 => 1,  79 => 29,  72 => 25,  69 => 25,  47 => 15,  40 => 14,  37 => 6,  22 => 2,  246 => 90,  157 => 50,  145 => 46,  139 => 16,  131 => 52,  123 => 47,  120 => 46,  115 => 43,  111 => 43,  108 => 29,  101 => 27,  98 => 38,  96 => 31,  83 => 25,  74 => 14,  66 => 17,  55 => 15,  52 => 17,  50 => 6,  43 => 4,  41 => 9,  35 => 10,  32 => 5,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 63,  176 => 64,  173 => 65,  168 => 67,  164 => 66,  162 => 66,  154 => 58,  149 => 51,  147 => 46,  144 => 20,  141 => 57,  133 => 55,  130 => 37,  125 => 50,  122 => 63,  116 => 45,  112 => 31,  109 => 43,  106 => 36,  103 => 51,  99 => 31,  95 => 36,  92 => 24,  86 => 32,  82 => 31,  80 => 19,  73 => 20,  64 => 16,  60 => 14,  57 => 13,  54 => 27,  51 => 11,  48 => 23,  45 => 15,  42 => 7,  39 => 8,  36 => 7,  33 => 8,  30 => 7,);
    }
}

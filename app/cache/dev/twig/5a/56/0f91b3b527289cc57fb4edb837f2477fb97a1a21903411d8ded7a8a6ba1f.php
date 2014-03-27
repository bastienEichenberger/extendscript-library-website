<?php

/* SdzUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_5a560f91b3b527289cc57fb4edb837f2477fb97a1a21903411d8ded7a8a6ba1f extends Twig_Template
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
        // line 2
        echo "


<!-- add form --> 
<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"well\">            
            <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " method=\"POST\" id=\"contact-form\" class=\"form-inline\" novalidate>
                <fieldset>
                    <legend>Create your account2</legend>
                    <div class=\"control-group\">
                        <label class=\"control-label\" for=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "email"), "vars"), "id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "email"), "vars"), "label"), array(), "FOSUserBundle"), "html", null, true);
        echo "<span title =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.email_no_spam", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"glyphicon glyphicon-exclamation-sign\"></span></label>
                        <div class=\"controls\">
                            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'errors');
        echo "
                        </div>

                        <div class=\"radio-group\">
                            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "displayMail"), 'widget');
        echo "
                            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "displayMail"), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"control-group\">
                        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"control-group\">
                        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "plainPassword"), "first"), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "plainPassword"), "first"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "plainPassword"), "first"), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"control-group\">
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "plainPassword"), "second"), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "plainPassword"), "second"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "plainPassword"), "second"), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"control-group\">
                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "aboutMe"), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                        <div class=\"controls\">
                            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "aboutMe"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "aboutMe"), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label class=\"control-label\" for=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "adresse"), "vars"), "id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "adresse"), "vars"), "label"), array(), "FOSUserBundle"), "html", null, true);
        echo "<span title =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.adresse_using", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"glyphicon glyphicon-exclamation-sign\"></span></label>
                        <div class=\"input-group controls\">
                            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "adresse"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "adresse"), 'errors');
        echo "
                            <span class=\"input-group-btn\">
                                <button id=\"go\" class=\"btn btn-default\" type=\"button\">Go</button>
                            </span>
                        </div>
                            
                        <div class=\"radio-group\">
                            ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "displayAdresse"), 'widget');
        echo "
                            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "displayAdresse"), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"control-group\">
                        <div id=\"map-canvas\"></div>
                    </div>
                    ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
                    <div class=\"form-actions\">
                        <a type=\"reset\" class=\"btn btn-default\" href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" >Cancel</a>
                        <button id=\"fos_user_registration_form\" type=\"submit\" class=\"btn btn-primary btn-large\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">Submit</button>
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
        return "SdzUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 16,  181 => 59,  170 => 56,  155 => 63,  153 => 51,  90 => 28,  174 => 73,  152 => 60,  148 => 59,  127 => 50,  104 => 39,  100 => 39,  137 => 41,  126 => 36,  53 => 12,  23 => 3,  222 => 72,  190 => 70,  185 => 61,  178 => 74,  175 => 51,  124 => 43,  110 => 37,  97 => 32,  84 => 32,  81 => 38,  58 => 14,  34 => 6,  172 => 70,  150 => 60,  146 => 59,  134 => 53,  118 => 40,  114 => 41,  77 => 28,  70 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 71,  140 => 55,  132 => 53,  128 => 45,  107 => 36,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 72,  159 => 64,  143 => 57,  135 => 53,  119 => 62,  102 => 39,  71 => 25,  67 => 21,  63 => 20,  59 => 14,  38 => 11,  94 => 32,  89 => 34,  85 => 24,  75 => 36,  68 => 25,  56 => 15,  87 => 25,  21 => 5,  26 => 2,  93 => 35,  88 => 32,  78 => 37,  46 => 15,  27 => 4,  44 => 9,  31 => 5,  28 => 9,  201 => 92,  196 => 90,  183 => 82,  171 => 45,  166 => 67,  163 => 55,  158 => 54,  156 => 66,  151 => 47,  142 => 47,  138 => 54,  136 => 53,  121 => 48,  117 => 44,  105 => 41,  91 => 44,  62 => 15,  49 => 19,  24 => 1,  25 => 5,  19 => 2,  79 => 22,  72 => 23,  69 => 18,  47 => 10,  40 => 14,  37 => 13,  22 => 2,  246 => 90,  157 => 50,  145 => 56,  139 => 16,  131 => 52,  123 => 47,  120 => 46,  115 => 43,  111 => 43,  108 => 29,  101 => 34,  98 => 38,  96 => 31,  83 => 25,  74 => 24,  66 => 13,  55 => 9,  52 => 17,  50 => 16,  43 => 10,  41 => 9,  35 => 10,  32 => 6,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 63,  176 => 64,  173 => 65,  168 => 67,  164 => 66,  162 => 66,  154 => 58,  149 => 49,  147 => 46,  144 => 20,  141 => 55,  133 => 55,  130 => 37,  125 => 49,  122 => 63,  116 => 46,  112 => 31,  109 => 42,  106 => 36,  103 => 51,  99 => 31,  95 => 36,  92 => 29,  86 => 28,  82 => 31,  80 => 19,  73 => 27,  64 => 16,  60 => 10,  57 => 20,  54 => 14,  51 => 11,  48 => 13,  45 => 12,  42 => 7,  39 => 11,  36 => 7,  33 => 7,  30 => 6,);
    }
}

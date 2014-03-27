<?php

/* SdzUserBundle::userHelpers.html.twig */
class __TwigTemplate_6c07b3590a937441fccd4775045363a69090668aa9c205753dfda00ab17559f7 extends Twig_Template
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
    }

    // line 1
    public function getlink($_user = null, $_username = null)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $_user,
            "username" => $_username,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "  ";
            ob_start();
            // line 3
            echo "
  ";
            // line 4
            if ((!(null === (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))))) {
                // line 5
                echo "    ";
                // line 6
                echo "    ";
                // line 7
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
                echo "
    ";
                // line 9
                echo "  ";
            } else {
                // line 10
                echo "    ";
                echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
                echo "
  ";
            }
            // line 12
            echo "
  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SdzUserBundle::userHelpers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  53 => 10,  36 => 3,  21 => 1,  222 => 72,  190 => 70,  182 => 63,  178 => 52,  175 => 51,  171 => 45,  168 => 44,  164 => 22,  144 => 20,  139 => 16,  136 => 15,  130 => 12,  122 => 63,  119 => 62,  112 => 57,  103 => 51,  97 => 47,  91 => 44,  88 => 42,  81 => 38,  78 => 37,  75 => 36,  58 => 28,  54 => 27,  46 => 15,  40 => 12,  35 => 10,  24 => 1,  57 => 13,  41 => 5,  32 => 5,  29 => 4,  66 => 34,  62 => 11,  60 => 14,  55 => 9,  50 => 9,  48 => 23,  45 => 7,  43 => 6,  39 => 4,  37 => 6,  185 => 64,  181 => 59,  170 => 56,  163 => 55,  158 => 54,  155 => 52,  153 => 51,  149 => 49,  142 => 47,  128 => 45,  124 => 73,  121 => 42,  118 => 40,  110 => 56,  107 => 36,  105 => 53,  100 => 33,  94 => 46,  90 => 30,  86 => 28,  84 => 39,  79 => 25,  74 => 24,  72 => 23,  69 => 14,  67 => 21,  44 => 17,  33 => 2,  30 => 3,  25 => 3,);
    }
}

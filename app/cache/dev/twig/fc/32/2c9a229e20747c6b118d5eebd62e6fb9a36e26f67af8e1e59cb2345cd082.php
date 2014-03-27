<?php

/* SdzUserBundle::userHelpers.html.twig */
class __TwigTemplate_fc322c9a229e20747c6b118d5eebd62e6fb9a36e26f67af8e1e59cb2345cd082 extends Twig_Template
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
        return array (  59 => 12,  53 => 10,  36 => 3,  21 => 1,  57 => 13,  41 => 5,  32 => 5,  29 => 4,  66 => 13,  62 => 11,  60 => 14,  55 => 9,  50 => 9,  48 => 13,  45 => 7,  43 => 6,  39 => 4,  37 => 6,  185 => 61,  181 => 59,  170 => 56,  163 => 55,  158 => 54,  155 => 52,  153 => 51,  149 => 49,  142 => 47,  128 => 45,  124 => 43,  121 => 42,  118 => 40,  110 => 37,  107 => 36,  105 => 35,  100 => 33,  94 => 32,  90 => 30,  86 => 28,  84 => 27,  79 => 25,  74 => 24,  72 => 23,  69 => 14,  67 => 21,  44 => 17,  33 => 2,  30 => 3,  25 => 3,);
    }
}

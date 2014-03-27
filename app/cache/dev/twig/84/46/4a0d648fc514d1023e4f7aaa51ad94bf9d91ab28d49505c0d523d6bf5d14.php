<?php

/* messages.html.twig */
class __TwigTemplate_84464a0d648fc514d1023e4f7aaa51ad94bf9d91ab28d49505c0d523d6bf5d14 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "info", 1 => "success", 2 => "warning", 3 => "danger"));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 3
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 4
                echo "        <div class=\"alert-messages\">
            <div class=\"alert alert-";
                // line 5
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo " alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                <strong>
                    ";
                // line 8
                $context["messageType"] = ("messages." . (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")));
                // line 9
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["messageType"]) ? $context["messageType"] : $this->getContext($context, "messageType")), array(), "messages"), "html", null, true);
                echo "
                </strong>
                ";
                // line 11
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,  23 => 3,  71 => 25,  56 => 15,  186 => 100,  184 => 95,  179 => 92,  177 => 87,  172 => 84,  161 => 76,  152 => 73,  146 => 71,  137 => 65,  131 => 62,  125 => 60,  93 => 44,  89 => 43,  82 => 39,  76 => 36,  63 => 20,  19 => 2,  59 => 12,  53 => 10,  36 => 13,  21 => 1,  222 => 72,  190 => 70,  182 => 63,  178 => 52,  175 => 51,  171 => 45,  168 => 44,  164 => 77,  144 => 70,  139 => 16,  136 => 15,  130 => 12,  122 => 63,  119 => 62,  112 => 54,  103 => 50,  97 => 47,  91 => 44,  88 => 42,  81 => 38,  78 => 37,  75 => 36,  58 => 28,  54 => 14,  46 => 15,  40 => 12,  35 => 10,  24 => 1,  57 => 26,  41 => 5,  32 => 12,  29 => 4,  66 => 34,  62 => 11,  60 => 14,  55 => 9,  50 => 12,  48 => 23,  45 => 11,  43 => 10,  39 => 9,  37 => 8,  185 => 64,  181 => 59,  170 => 79,  163 => 55,  158 => 75,  155 => 74,  153 => 51,  149 => 72,  142 => 47,  128 => 61,  124 => 73,  121 => 42,  118 => 55,  110 => 56,  107 => 52,  105 => 53,  100 => 49,  94 => 46,  90 => 30,  86 => 28,  84 => 39,  79 => 25,  74 => 24,  72 => 35,  69 => 14,  67 => 21,  44 => 17,  33 => 7,  30 => 6,  25 => 5,);
    }
}

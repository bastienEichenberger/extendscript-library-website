<?php

/* messages.html.twig */
class __TwigTemplate_63747332f52ffebb94f3daae3c97a0991e164a6f30957c7ac7f7caf75f95f45f extends Twig_Template
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
        return array (  31 => 5,  28 => 4,  23 => 3,  71 => 25,  63 => 20,  56 => 15,  54 => 14,  19 => 2,  59 => 12,  53 => 10,  36 => 3,  21 => 1,  57 => 13,  41 => 5,  32 => 5,  29 => 4,  66 => 13,  62 => 11,  60 => 14,  55 => 9,  50 => 12,  48 => 13,  45 => 11,  43 => 10,  39 => 9,  37 => 8,  185 => 61,  181 => 59,  170 => 56,  163 => 55,  158 => 54,  155 => 52,  153 => 51,  149 => 49,  142 => 47,  128 => 45,  124 => 43,  121 => 42,  118 => 40,  110 => 37,  107 => 36,  105 => 35,  100 => 33,  94 => 32,  90 => 30,  86 => 28,  84 => 27,  79 => 25,  74 => 24,  72 => 23,  69 => 14,  67 => 21,  44 => 17,  33 => 7,  30 => 6,  25 => 5,);
    }
}

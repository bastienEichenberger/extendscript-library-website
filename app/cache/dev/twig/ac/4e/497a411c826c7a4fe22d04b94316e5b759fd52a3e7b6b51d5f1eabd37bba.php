<?php

/* BazingaExposeTranslationBundle::exposeTranslation.js.twig */
class __TwigTemplate_ac4e497a411c826c7a4fe22d04b94316e5b759fd52a3e7b6b51d5f1eabd37bba extends Twig_Template
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
        echo "Translator.locale = '";
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "js", null, true);
        echo "';
Translator.defaultDomains = [";
        // line 2
        if ((isset($context["defaultDomains"]) ? $context["defaultDomains"] : $this->getContext($context, "defaultDomains"))) {
            echo "\"";
            echo twig_join_filter((isset($context["defaultDomains"]) ? $context["defaultDomains"] : $this->getContext($context, "defaultDomains")), "\", \"");
            echo "\"";
        }
        echo "];
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["domain"] => $context["translations"]) {
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["translations"]) ? $context["translations"] : $this->getContext($context, "translations")));
            foreach ($context['_seq'] as $context["key"] => $context["message"]) {
                // line 5
                echo "Translator.add(";
                echo twig_jsonencode_filter((((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")) . ":") . (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))));
                echo ", ";
                echo twig_jsonencode_filter((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")));
                echo ");
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['domain'], $context['translations'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "BazingaExposeTranslationBundle::exposeTranslation.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  36 => 4,  32 => 3,  24 => 2,  19 => 1,);
    }
}

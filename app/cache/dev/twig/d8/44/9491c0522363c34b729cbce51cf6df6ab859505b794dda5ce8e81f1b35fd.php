<?php

/* ::form/jlfa-theme.html.twig */
class __TwigTemplate_d8449491c0522363c34b729cbce51cf6df6ab859505b794dda5ce8e81f1b35fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_errors', $context, $blocks);
        // line 10
        echo "        
";
        // line 11
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('radio_label', $context, $blocks);
        // line 34
        echo "


";
        // line 37
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 47
        echo "


";
    }

    // line 1
    public function block_form_errors($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 3
            echo "            <ul>
                ";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 5
                echo "                    <li class=\"error\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message")), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "            </ul>
    ";
        }
    }

    // line 11
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 12
        echo "        ";
        ob_start();
        // line 13
        echo "            ";
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 14
            echo "                ";
            $context["type"] = "radio";
            // line 15
            echo "                ";
            $context["index"] = 0;
            // line 16
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 17
                echo "                    <div class=\"radio ";
                if (((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) != 0)) {
                    echo " right ";
                }
                echo "\">
                        <label>
                            ";
                // line 19
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget');
                echo "
                            ";
                // line 20
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'label');
                echo "
                        </label>
                    </div>
                    ";
                // line 23
                $context["index"] = ((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) + 1);
                // line 24
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "            ";
        } else {
            // line 26
            echo "                ";
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
            echo "
            ";
        }
        // line 28
        echo "        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 31
    public function block_radio_label($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
        echo "
";
    }

    // line 37
    public function block_checkbox_label($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
        echo "
";
    }

    // line 41
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 42
        ob_start();
        // line 43
        echo "    test
    <input type=\"checkbox\" ";
        // line 44
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "::form/jlfa-theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  171 => 44,  166 => 42,  163 => 41,  156 => 38,  153 => 37,  146 => 32,  138 => 28,  129 => 25,  123 => 24,  121 => 23,  115 => 20,  103 => 17,  98 => 16,  89 => 13,  86 => 12,  83 => 11,  77 => 7,  64 => 4,  61 => 3,  58 => 2,  55 => 1,  46 => 41,  41 => 37,  29 => 11,  24 => 1,  57 => 9,  54 => 8,  50 => 6,  48 => 47,  36 => 34,  92 => 14,  85 => 22,  71 => 20,  67 => 17,  62 => 16,  59 => 15,  43 => 40,  39 => 8,  34 => 31,  31 => 30,  26 => 10,  179 => 72,  174 => 70,  168 => 43,  164 => 66,  159 => 64,  152 => 60,  148 => 59,  143 => 31,  136 => 53,  132 => 26,  127 => 50,  120 => 46,  116 => 45,  111 => 19,  104 => 39,  100 => 38,  95 => 15,  88 => 23,  84 => 31,  79 => 29,  72 => 25,  68 => 5,  63 => 22,  56 => 18,  52 => 17,  47 => 15,  38 => 11,  33 => 4,  30 => 3,  25 => 4,);
    }
}

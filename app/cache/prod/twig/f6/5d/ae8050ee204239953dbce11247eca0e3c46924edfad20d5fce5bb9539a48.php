<?php

/* ::form/jlfa-theme.html.twig */
class __TwigTemplate_f65dae8050ee204239953dbce11247eca0e3c46924edfad20d5fce5bb9539a48 extends Twig_Template
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
        return array (  171 => 44,  168 => 43,  166 => 42,  163 => 41,  156 => 38,  153 => 37,  146 => 32,  143 => 31,  138 => 28,  132 => 26,  129 => 25,  123 => 24,  115 => 20,  111 => 19,  103 => 17,  98 => 16,  95 => 15,  89 => 13,  86 => 12,  83 => 11,  77 => 7,  68 => 5,  61 => 3,  55 => 1,  41 => 37,  29 => 11,  24 => 1,  157 => 50,  151 => 47,  147 => 46,  142 => 44,  137 => 41,  130 => 37,  126 => 36,  118 => 33,  112 => 31,  108 => 29,  85 => 24,  70 => 19,  66 => 17,  64 => 4,  58 => 2,  56 => 13,  53 => 12,  51 => 11,  46 => 41,  28 => 9,  23 => 6,  21 => 5,  19 => 4,  57 => 9,  54 => 8,  50 => 6,  48 => 47,  36 => 34,  33 => 4,  30 => 3,  121 => 23,  116 => 32,  114 => 41,  105 => 35,  101 => 27,  97 => 32,  92 => 14,  90 => 28,  79 => 21,  73 => 20,  69 => 18,  65 => 16,  62 => 15,  59 => 14,  43 => 40,  39 => 8,  34 => 31,  31 => 30,  26 => 10,);
    }
}

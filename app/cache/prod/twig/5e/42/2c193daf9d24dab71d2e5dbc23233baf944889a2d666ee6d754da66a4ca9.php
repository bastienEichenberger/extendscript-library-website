<?php

/* APYJsFormValidationBundle::JsFormValidation.js.twig */
class __TwigTemplate_5e422c193daf9d24dab71d2e5dbc23233baf944889a2d666ee6d754da66a4ca9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'before' => array($this, 'block_before'),
            'removeErrors' => array($this, 'block_removeErrors'),
            'getVal' => array($this, 'block_getVal'),
            'addError' => array($this, 'block_addError'),
            'removeErrors_method' => array($this, 'block_removeErrors_method'),
            'addError_method' => array($this, 'block_addError_method'),
            'onEvent' => array($this, 'block_onEvent'),
            'getters_constraints_field' => array($this, 'block_getters_constraints_field'),
            'getters_constraints_submit' => array($this, 'block_getters_constraints_submit'),
            'onReady' => array($this, 'block_onReady'),
            'after' => array($this, 'block_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "/**
 * This file is part of the JsFormValidationBundle.
 *
 * (c) Abhoryo <abhoryo@free.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

";
        // line 10
        $this->displayBlock('before', $context, $blocks);
        // line 11
        echo "
if (jsfv == undefined) {
    var jsfv = [];
}

jsfv['";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["formName"]) ? $context["formName"] : $this->getContext($context, "formName")), "js", null, true);
        echo "'] = new function () {
    var self = this;
    function getComputeMessage(key, placeholders, number) {
        Translator.placeHolderPrefix = '";
        // line 19
        echo "{{";
        echo " ';
        Translator.placeHolderSuffix = ' ";
        // line 20
        echo "}}";
        echo "';
        // Default translations
        if (!Translator.has('";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["translation_group"]) ? $context["translation_group"] : $this->getContext($context, "translation_group")), "js", null, true);
        echo ":'+key)) {
            Translator.add('";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["translation_group"]) ? $context["translation_group"] : $this->getContext($context, "translation_group")), "js", null, true);
        echo ":'+key, key);
        }

        return Translator.get('";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["translation_group"]) ? $context["translation_group"] : $this->getContext($context, "translation_group")), "js", null, true);
        echo ":'+key, placeholders, number) ||
               Translator.get('";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["translation_group"]) ? $context["translation_group"] : $this->getContext($context, "translation_group")), "js", null, true);
        echo ":'+key, placeholders);
    }

    function isNotDefined(value) {
        return (typeof(value) == 'undefined' || null === value || '' === value);
    }

    function checkError(field, checkFunction, parameters, value) {
        field = self.id(field);
        // Remove old errors of the field
        ";
        // line 37
        $this->displayBlock('removeErrors', $context, $blocks);
        // line 38
        echo "        // Check the value
        errorMessage = checkFunction((value === undefined ? field : value), parameters);
        ";
        // line 42
        echo "/*// ";
        $this->displayBlock('getVal', $context, $blocks);
        echo " */

        if (errorMessage != true) {
";
        // line 45
        $this->displayBlock('addError', $context, $blocks);
        // line 48
        echo "
            return false;
        }

        return true;
    }


";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["librairyCalls"]) ? $context["librairyCalls"] : $this->getContext($context, "librairyCalls")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["librairyCall"]) {
            // line 57
            echo "
";
            // line 58
            $template = $this->env->resolveTemplate((isset($context["librairyCall"]) ? $context["librairyCall"] : $this->getContext($context, "librairyCall")));
            $template->display($context);
            // line 59
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['librairyCall'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["getterHandlers"]) ? $context["getterHandlers"] : $this->getContext($context, "getterHandlers")));
        foreach ($context['_seq'] as $context["_key"] => $context["handler"]) {
            // line 63
            echo "
";
            // line 64
            echo (isset($context["handler"]) ? $context["handler"] : $this->getContext($context, "handler"));
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['handler'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
    this.id = function (id) {
        return document.getElementById(id);
    };
";
        // line 71
        $this->displayBlock('removeErrors_method', $context, $blocks);
        // line 83
        $this->displayBlock('addError_method', $context, $blocks);
        // line 96
        echo "    this.onEvent = function (field, eventType, handler) {
        if (typeof(field) == 'string') {
            field = self.id(field);
        }
";
        // line 100
        $this->displayBlock('onEvent', $context, $blocks);
        // line 103
        echo "    };
";
        // line 104
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fieldConstraints"]) ? $context["fieldConstraints"] : $this->getContext($context, "fieldConstraints")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["fieldName"] => $context["constraints"]) {
            // line 105
            echo "    this.check_";
            echo twig_escape_filter($this->env, (isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName")), "js", null, true);
            echo " = function() {
        var gv;
        result = true;
";
            // line 108
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["constraints"]) ? $context["constraints"] : $this->getContext($context, "constraints")));
            foreach ($context['_seq'] as $context["_key"] => $context["constraint"]) {
                // line 109
                echo "        result = result && checkError('";
                echo twig_escape_filter($this->env, (isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName")), "js", null, true);
                echo "', ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["constraint"]) ? $context["constraint"] : $this->getContext($context, "constraint")), "name"), "js", null, true);
                echo ", ";
                echo $this->getAttribute((isset($context["constraint"]) ? $context["constraint"] : $this->getContext($context, "constraint")), "parameters");
                echo " );
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['constraint'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            $context["resultvar"] = "result";
            // line 112
            $this->displayBlock('getters_constraints_field', $context, $blocks);
            // line 124
            echo "        return result;
    };
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['fieldName'], $context['constraints'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "    this.submit = function() {
        var gv, submitForm = true;
";
        // line 129
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fieldConstraints"]) ? $context["fieldConstraints"] : $this->getContext($context, "fieldConstraints")));
        foreach ($context['_seq'] as $context["fieldName"] => $context["constraints"]) {
            // line 130
            echo "        submitForm = self.check_";
            echo twig_escape_filter($this->env, (isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName")), "js", null, true);
            echo "() && submitForm;
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['fieldName'], $context['constraints'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "        ";
        $context["resultvar"] = "submitForm";
        $context["fieldName"] = ".";
        // line 133
        echo "        ";
        $this->displayBlock('getters_constraints_submit', $context, $blocks);
        // line 134
        echo "        if(!submitForm){
            var form = self.id('";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["formName"]) ? $context["formName"] : $this->getContext($context, "formName")), "js", null, true);
        echo "');
            alert('il y a une erreur');
            \$(form).removeClass('btn-primary').addClass('btn-danger')
        }
        return submitForm;
    };
    this.onReady = function() {
";
        // line 142
        if ($this->getAttribute((isset($context["check_modes"]) ? $context["check_modes"] : $this->getContext($context, "check_modes")), "submit")) {
            // line 143
            echo "        // On submit checks
        var form = self.id('";
            // line 144
            echo twig_escape_filter($this->env, (isset($context["formName"]) ? $context["formName"] : $this->getContext($context, "formName")), "js", null, true);
            echo "');

        // Form exists ?
        if (form) {
            // Get the form
            if ( form.nodeName.toLowerCase() != 'form') {
                form = self.id('";
            // line 150
            echo twig_escape_filter($this->env, (isset($context["formName"]) ? $context["formName"] : $this->getContext($context, "formName")), "js", null, true);
            echo "__token').form;
            }

            self.onEvent(form, 'submit', self.submit);
        }
";
        }
        // line 156
        echo "
";
        // line 157
        if ($this->getAttribute((isset($context["check_modes"]) ? $context["check_modes"] : $this->getContext($context, "check_modes")), "blur")) {
            // line 158
            echo "        // On blur checks
";
            // line 159
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fieldConstraints"]) ? $context["fieldConstraints"] : $this->getContext($context, "fieldConstraints")));
            foreach ($context['_seq'] as $context["fieldName"] => $context["constraints"]) {
                // line 160
                echo "        self.onEvent('";
                echo twig_escape_filter($this->env, (isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName")), "js", null, true);
                echo "', 'blur', self.check_";
                echo twig_escape_filter($this->env, (isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName")), "js", null, true);
                echo ");
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['fieldName'], $context['constraints'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 163
        echo "
";
        // line 164
        if ($this->getAttribute((isset($context["check_modes"]) ? $context["check_modes"] : $this->getContext($context, "check_modes")), "change")) {
            // line 165
            echo "        // On change checks
";
            // line 166
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fieldConstraints"]) ? $context["fieldConstraints"] : $this->getContext($context, "fieldConstraints")));
            foreach ($context['_seq'] as $context["fieldName"] => $context["constraints"]) {
                // line 167
                echo "        self.onEvent('";
                echo twig_escape_filter($this->env, (isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName")), "js", null, true);
                echo "', 'change', self.check_";
                echo twig_escape_filter($this->env, (isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName")), "js", null, true);
                echo ");
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['fieldName'], $context['constraints'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 170
        echo "    };
}

";
        // line 173
        $this->displayBlock('onReady', $context, $blocks);
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('after', $context, $blocks);
    }

    // line 10
    public function block_before($context, array $blocks = array())
    {
    }

    // line 37
    public function block_removeErrors($context, array $blocks = array())
    {
        ob_start();
        echo "self.removeErrors(field);";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 42
    public function block_getVal($context, array $blocks = array())
    {
    }

    // line 45
    public function block_addError($context, array $blocks = array())
    {
        // line 46
        echo "        ";
        ob_start();
        echo "self.addError(field, errorMessage);";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 71
    public function block_removeErrors_method($context, array $blocks = array())
    {
        // line 72
        echo "    this.removeErrors = function (field) {
        // override rules
        \$(field).closest('.control-group').removeClass('has-error').addClass('has-success');
        
        if (\$(field).next().is('.input-group-btn')) {
            \$(field).parent().siblings('label.error').remove();
        } else {
            \$(field).siblings('label.error').remove();
        }
    };
";
    }

    // line 83
    public function block_addError_method($context, array $blocks = array())
    {
        // line 84
        echo "    this.addError = function (field, errorMessage) {
        // override rules
        var error_label = \$('<label generated=\"true\" class=\"error\">'+ errorMessage +'</label>');
        // button with span after input
        if (\$(field).next().is('.input-group-btn')) {
            error_label.insertAfter(\$(field).parent());
        } else {
            error_label.insertAfter(\$(field));
        }
        \$(field).closest('.control-group').removeClass('has-success').addClass('has-error');
    };
";
    }

    // line 100
    public function block_onEvent($context, array $blocks = array())
    {
        // line 101
        echo "        \$(field).bind(eventType, handler);
";
    }

    // line 112
    public function block_getters_constraints_field($context, array $blocks = array())
    {
        // line 113
        if ($this->getAttribute((isset($context["gettersConstraints"]) ? $context["gettersConstraints"] : null), (isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName")), array(), "array", true, true)) {
            // line 114
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["gettersConstraints"]) ? $context["gettersConstraints"] : $this->getContext($context, "gettersConstraints")), (isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName")), array(), "array"));
            foreach ($context['_seq'] as $context["getterHandler"] => $context["getterConstraints"]) {
                // line 115
                echo "            if (";
                echo twig_escape_filter($this->env, (isset($context["resultvar"]) ? $context["resultvar"] : $this->getContext($context, "resultvar")), "js", null, true);
                echo ") {
                gv = ";
                // line 116
                echo (isset($context["getterHandler"]) ? $context["getterHandler"] : $this->getContext($context, "getterHandler"));
                echo "();
";
                // line 117
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["getterConstraints"]) ? $context["getterConstraints"] : $this->getContext($context, "getterConstraints")));
                foreach ($context['_seq'] as $context["_key"] => $context["constraint"]) {
                    // line 118
                    echo "                ";
                    echo twig_escape_filter($this->env, (isset($context["resultvar"]) ? $context["resultvar"] : $this->getContext($context, "resultvar")), "js", null, true);
                    echo " = checkError(";
                    if (((isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName")) == ".")) {
                        echo "form.id";
                    } else {
                        echo "'";
                        echo twig_escape_filter($this->env, (isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName")), "js", null, true);
                        echo "'";
                    }
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["constraint"]) ? $context["constraint"] : $this->getContext($context, "constraint")), "name"), "js", null, true);
                    echo ", ";
                    echo $this->getAttribute((isset($context["constraint"]) ? $context["constraint"] : $this->getContext($context, "constraint")), "parameters");
                    echo ", gv);
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['constraint'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 120
                echo "            }
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['getterHandler'], $context['getterConstraints'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    // line 133
    public function block_getters_constraints_submit($context, array $blocks = array())
    {
        $this->displayBlock("getters_constraints_field", $context, $blocks);
    }

    // line 173
    public function block_onReady($context, array $blocks = array())
    {
        // line 174
        echo "\$(jsfv['";
        echo twig_escape_filter($this->env, (isset($context["formName"]) ? $context["formName"] : $this->getContext($context, "formName")), "js", null, true);
        echo "'].onReady);
";
    }

    // line 177
    public function block_after($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle::JsFormValidation.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  518 => 177,  511 => 174,  508 => 173,  502 => 133,  492 => 120,  471 => 118,  467 => 117,  463 => 116,  458 => 115,  454 => 114,  452 => 113,  449 => 112,  444 => 101,  441 => 100,  426 => 84,  423 => 83,  409 => 72,  406 => 71,  399 => 46,  396 => 45,  391 => 42,  383 => 37,  378 => 10,  374 => 177,  371 => 176,  369 => 173,  364 => 170,  352 => 167,  348 => 166,  345 => 165,  343 => 164,  340 => 163,  328 => 160,  324 => 159,  321 => 158,  319 => 157,  316 => 156,  307 => 150,  298 => 144,  295 => 143,  293 => 142,  283 => 135,  280 => 134,  277 => 133,  273 => 132,  264 => 130,  260 => 129,  256 => 127,  240 => 124,  238 => 112,  236 => 111,  223 => 109,  219 => 108,  212 => 105,  195 => 104,  192 => 103,  190 => 100,  184 => 96,  182 => 83,  180 => 71,  165 => 64,  162 => 63,  158 => 62,  140 => 59,  137 => 58,  134 => 57,  117 => 56,  107 => 48,  98 => 42,  94 => 38,  92 => 37,  79 => 27,  75 => 26,  69 => 23,  65 => 22,  56 => 19,  43 => 11,  41 => 10,  30 => 1,  178 => 74,  174 => 67,  169 => 71,  159 => 64,  155 => 61,  145 => 56,  141 => 55,  132 => 53,  125 => 49,  121 => 48,  116 => 46,  109 => 42,  105 => 45,  100 => 39,  93 => 35,  89 => 34,  84 => 32,  73 => 27,  61 => 21,  57 => 20,  50 => 16,  46 => 15,  37 => 13,  28 => 9,  19 => 2,  113 => 32,  108 => 30,  104 => 29,  101 => 28,  81 => 26,  77 => 28,  71 => 20,  68 => 25,  63 => 15,  60 => 20,  44 => 10,  40 => 7,  35 => 6,  32 => 5,  27 => 2,);
    }
}

<?php

/* APYJsFormValidationBundle::JsFormValidation.js.twig */
class __TwigTemplate_644e42bb275ddf20b516995f4fdfa0cb4473beb1778099c09b94477bb24646dd extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getContext($context, "formName"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getContext($context, "translation_group"), "html", null, true);
        echo ":'+key)) {
            Translator.add('";
        // line 23
        echo twig_escape_filter($this->env, $this->getContext($context, "translation_group"), "html", null, true);
        echo ":'+key, key);
        }

        return Translator.get('";
        // line 26
        echo twig_escape_filter($this->env, $this->getContext($context, "translation_group"), "html", null, true);
        echo ":'+key, placeholders, number) ||
               Translator.get('";
        // line 27
        echo twig_escape_filter($this->env, $this->getContext($context, "translation_group"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "librairyCalls"));
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
            $template = $this->env->resolveTemplate($this->getContext($context, "librairyCall"));
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
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "getterHandlers"));
        foreach ($context['_seq'] as $context["_key"] => $context["handler"]) {
            // line 63
            echo "
";
            // line 64
            echo $this->getContext($context, "handler");
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
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "fieldConstraints"));
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
            echo twig_escape_filter($this->env, $this->getContext($context, "fieldName"), "html", null, true);
            echo " = function() {
        var gv;
        result = true;
";
            // line 108
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "constraints"));
            foreach ($context['_seq'] as $context["_key"] => $context["constraint"]) {
                // line 109
                echo "        result = result && checkError('";
                echo twig_escape_filter($this->env, $this->getContext($context, "fieldName"), "html", null, true);
                echo "', ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "constraint"), "name"), "html", null, true);
                echo ", ";
                echo $this->getAttribute($this->getContext($context, "constraint"), "parameters");
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
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "fieldConstraints"));
        foreach ($context['_seq'] as $context["fieldName"] => $context["constraints"]) {
            // line 130
            echo "        submitForm = self.check_";
            echo twig_escape_filter($this->env, $this->getContext($context, "fieldName"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getContext($context, "formName"), "html", null, true);
        echo "');
            alert('il y a une erreur');
            \$(form).removeClass('btn-primary').addClass('btn-danger')
        }
        return submitForm;
    };
    this.onReady = function() {
";
        // line 142
        if ($this->getAttribute($this->getContext($context, "check_modes"), "submit")) {
            // line 143
            echo "        // On submit checks
        var form = self.id('";
            // line 144
            echo twig_escape_filter($this->env, $this->getContext($context, "formName"), "html", null, true);
            echo "');

        // Form exists ?
        if (form) {
            // Get the form
            if ( form.nodeName.toLowerCase() != 'form') {
                form = self.id('";
            // line 150
            echo twig_escape_filter($this->env, $this->getContext($context, "formName"), "html", null, true);
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
        if ($this->getAttribute($this->getContext($context, "check_modes"), "blur")) {
            // line 158
            echo "        // On blur checks
";
            // line 159
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "fieldConstraints"));
            foreach ($context['_seq'] as $context["fieldName"] => $context["constraints"]) {
                // line 160
                echo "        self.onEvent('";
                echo twig_escape_filter($this->env, $this->getContext($context, "fieldName"), "html", null, true);
                echo "', 'blur', self.check_";
                echo twig_escape_filter($this->env, $this->getContext($context, "fieldName"), "html", null, true);
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
        if ($this->getAttribute($this->getContext($context, "check_modes"), "change")) {
            // line 165
            echo "        // On change checks
";
            // line 166
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "fieldConstraints"));
            foreach ($context['_seq'] as $context["fieldName"] => $context["constraints"]) {
                // line 167
                echo "        self.onEvent('";
                echo twig_escape_filter($this->env, $this->getContext($context, "fieldName"), "html", null, true);
                echo "', 'change', self.check_";
                echo twig_escape_filter($this->env, $this->getContext($context, "fieldName"), "html", null, true);
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
        if ($this->getAttribute($this->getContext($context, "gettersConstraints", true), $this->getContext($context, "fieldName"), array(), "array", true, true)) {
            // line 114
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "gettersConstraints"), $this->getContext($context, "fieldName"), array(), "array"));
            foreach ($context['_seq'] as $context["getterHandler"] => $context["getterConstraints"]) {
                // line 115
                echo "            if (";
                echo twig_escape_filter($this->env, $this->getContext($context, "resultvar"), "html", null, true);
                echo ") {
                gv = ";
                // line 116
                echo $this->getContext($context, "getterHandler");
                echo "();
";
                // line 117
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "getterConstraints"));
                foreach ($context['_seq'] as $context["_key"] => $context["constraint"]) {
                    // line 118
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "resultvar"), "html", null, true);
                    echo " = checkError(";
                    if (($this->getContext($context, "fieldName") == ".")) {
                        echo "form.id";
                    } else {
                        echo "'";
                        echo twig_escape_filter($this->env, $this->getContext($context, "fieldName"), "html", null, true);
                        echo "'";
                    }
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "constraint"), "name"), "html", null, true);
                    echo ", ";
                    echo $this->getAttribute($this->getContext($context, "constraint"), "parameters");
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
        echo twig_escape_filter($this->env, $this->getContext($context, "formName"), "html", null, true);
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
        return array (  518 => 177,  511 => 174,  508 => 173,  502 => 133,  492 => 120,  471 => 118,  467 => 117,  463 => 116,  458 => 115,  454 => 114,  452 => 113,  449 => 112,  441 => 100,  426 => 84,  406 => 71,  399 => 46,  396 => 45,  391 => 42,  383 => 37,  378 => 10,  371 => 176,  369 => 173,  364 => 170,  352 => 167,  348 => 166,  345 => 165,  343 => 164,  340 => 163,  328 => 160,  324 => 159,  321 => 158,  319 => 157,  316 => 156,  307 => 150,  295 => 143,  293 => 142,  280 => 134,  277 => 133,  260 => 129,  256 => 127,  236 => 111,  223 => 109,  212 => 105,  195 => 104,  192 => 103,  180 => 71,  165 => 64,  197 => 85,  194 => 84,  184 => 96,  113 => 52,  65 => 22,  181 => 59,  170 => 56,  155 => 61,  153 => 76,  90 => 28,  174 => 67,  152 => 60,  148 => 59,  127 => 50,  104 => 29,  100 => 39,  137 => 58,  126 => 61,  53 => 10,  23 => 3,  222 => 72,  190 => 100,  185 => 61,  178 => 85,  175 => 84,  124 => 43,  110 => 37,  97 => 44,  84 => 30,  81 => 29,  58 => 14,  34 => 11,  172 => 70,  150 => 60,  146 => 59,  134 => 57,  118 => 40,  114 => 41,  77 => 22,  70 => 29,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 101,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 83,  413 => 134,  409 => 72,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 177,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 144,  294 => 90,  285 => 89,  283 => 135,  278 => 86,  268 => 85,  264 => 130,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 85,  140 => 59,  132 => 53,  128 => 45,  107 => 48,  61 => 15,  273 => 132,  269 => 94,  254 => 92,  243 => 88,  240 => 124,  238 => 112,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 108,  217 => 75,  208 => 68,  204 => 72,  179 => 72,  159 => 64,  143 => 57,  135 => 67,  119 => 62,  102 => 39,  71 => 28,  67 => 24,  63 => 16,  59 => 21,  38 => 5,  94 => 38,  89 => 40,  85 => 33,  75 => 26,  68 => 19,  56 => 19,  87 => 25,  21 => 1,  26 => 3,  93 => 41,  88 => 32,  78 => 37,  46 => 15,  27 => 2,  44 => 9,  31 => 4,  28 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 45,  166 => 84,  163 => 55,  158 => 62,  156 => 66,  151 => 47,  142 => 72,  138 => 54,  136 => 53,  121 => 48,  117 => 56,  105 => 45,  91 => 44,  62 => 24,  49 => 12,  24 => 2,  25 => 3,  19 => 1,  79 => 27,  72 => 27,  69 => 23,  47 => 10,  40 => 5,  37 => 13,  22 => 2,  246 => 90,  157 => 77,  145 => 56,  139 => 71,  131 => 52,  123 => 47,  120 => 46,  115 => 43,  111 => 43,  108 => 30,  101 => 28,  98 => 42,  96 => 31,  83 => 25,  74 => 38,  66 => 26,  55 => 19,  52 => 13,  50 => 16,  43 => 11,  41 => 10,  35 => 4,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 85,  182 => 83,  176 => 64,  173 => 65,  168 => 67,  164 => 66,  162 => 63,  154 => 58,  149 => 75,  147 => 46,  144 => 73,  141 => 55,  133 => 55,  130 => 37,  125 => 49,  122 => 63,  116 => 53,  112 => 31,  109 => 42,  106 => 36,  103 => 51,  99 => 40,  95 => 36,  92 => 37,  86 => 39,  82 => 30,  80 => 10,  73 => 52,  64 => 23,  60 => 20,  57 => 20,  54 => 14,  51 => 16,  48 => 23,  45 => 42,  42 => 13,  39 => 6,  36 => 15,  33 => 4,  30 => 1,);
    }
}

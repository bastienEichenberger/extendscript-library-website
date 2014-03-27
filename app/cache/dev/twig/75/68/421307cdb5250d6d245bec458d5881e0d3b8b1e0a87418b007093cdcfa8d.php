<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_7568421307cdb5250d6d245bec458d5881e0d3b8b1e0a87418b007093cdcfa8d extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  70 => 26,  42 => 12,  26 => 3,  31 => 5,  28 => 4,  23 => 3,  71 => 25,  56 => 15,  186 => 100,  184 => 95,  179 => 92,  177 => 87,  172 => 84,  161 => 76,  152 => 73,  146 => 71,  137 => 65,  131 => 62,  125 => 60,  93 => 44,  89 => 43,  82 => 39,  76 => 36,  63 => 20,  19 => 1,  59 => 12,  53 => 10,  36 => 13,  21 => 1,  222 => 72,  190 => 70,  182 => 63,  178 => 52,  175 => 51,  171 => 45,  168 => 44,  164 => 77,  144 => 70,  139 => 16,  136 => 15,  130 => 12,  122 => 63,  119 => 62,  112 => 54,  103 => 50,  97 => 47,  91 => 35,  88 => 42,  81 => 38,  78 => 37,  75 => 28,  58 => 28,  54 => 14,  46 => 14,  40 => 12,  35 => 10,  24 => 2,  57 => 26,  41 => 5,  32 => 6,  29 => 4,  66 => 25,  62 => 24,  60 => 14,  55 => 9,  50 => 15,  48 => 23,  45 => 11,  43 => 10,  39 => 9,  37 => 8,  185 => 64,  181 => 59,  170 => 79,  163 => 55,  158 => 75,  155 => 74,  153 => 51,  149 => 72,  142 => 47,  128 => 61,  124 => 73,  121 => 42,  118 => 55,  110 => 56,  107 => 52,  105 => 53,  100 => 49,  94 => 46,  90 => 30,  86 => 28,  84 => 39,  79 => 29,  74 => 24,  72 => 35,  69 => 14,  67 => 21,  44 => 17,  33 => 7,  30 => 5,  25 => 5,);
    }
}

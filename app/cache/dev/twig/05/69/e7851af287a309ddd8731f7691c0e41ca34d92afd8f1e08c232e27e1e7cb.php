<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_0569e7851af287a309ddd8731f7691c0e41ca34d92afd8f1e08c232e27e1e7cb extends Twig_Template
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
        return array (  83 => 30,  70 => 26,  62 => 24,  42 => 12,  30 => 5,  26 => 3,  186 => 100,  184 => 95,  179 => 92,  177 => 87,  172 => 84,  170 => 79,  161 => 76,  158 => 75,  155 => 74,  152 => 73,  149 => 72,  146 => 71,  137 => 65,  131 => 62,  128 => 61,  125 => 60,  118 => 55,  107 => 52,  100 => 49,  93 => 44,  82 => 39,  76 => 36,  72 => 35,  57 => 26,  50 => 15,  36 => 13,  19 => 1,  222 => 72,  190 => 70,  185 => 64,  182 => 63,  178 => 52,  175 => 51,  171 => 45,  168 => 44,  164 => 77,  139 => 16,  136 => 15,  130 => 12,  124 => 73,  122 => 63,  119 => 62,  112 => 54,  110 => 56,  105 => 53,  103 => 50,  97 => 47,  94 => 46,  91 => 35,  88 => 42,  84 => 39,  81 => 38,  78 => 37,  66 => 25,  58 => 28,  54 => 27,  48 => 23,  46 => 14,  40 => 12,  35 => 10,  24 => 2,  144 => 70,  135 => 67,  126 => 61,  116 => 53,  113 => 52,  99 => 40,  89 => 43,  79 => 29,  75 => 28,  71 => 28,  63 => 29,  55 => 20,  45 => 15,  32 => 6,  29 => 3,);
    }
}

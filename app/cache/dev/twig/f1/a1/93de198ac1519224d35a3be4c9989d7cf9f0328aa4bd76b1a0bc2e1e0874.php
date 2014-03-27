<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_f1a193de198ac1519224d35a3be4c9989d7cf9f0328aa4bd76b1a0bc2e1e0874 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  70 => 26,  42 => 12,  26 => 3,  31 => 5,  28 => 4,  23 => 3,  71 => 25,  56 => 15,  186 => 100,  184 => 95,  179 => 92,  177 => 87,  172 => 84,  161 => 76,  152 => 73,  146 => 71,  137 => 65,  131 => 62,  125 => 60,  93 => 44,  89 => 43,  82 => 39,  76 => 36,  63 => 20,  19 => 1,  59 => 12,  53 => 10,  36 => 13,  21 => 1,  222 => 72,  190 => 70,  182 => 63,  178 => 52,  175 => 51,  171 => 45,  168 => 44,  164 => 77,  144 => 70,  139 => 16,  136 => 15,  130 => 12,  122 => 63,  119 => 62,  112 => 54,  103 => 50,  97 => 47,  91 => 35,  88 => 42,  81 => 38,  78 => 37,  75 => 28,  58 => 28,  54 => 14,  46 => 14,  40 => 12,  35 => 10,  24 => 2,  57 => 26,  41 => 5,  32 => 6,  29 => 4,  66 => 25,  62 => 24,  60 => 14,  55 => 9,  50 => 15,  48 => 23,  45 => 11,  43 => 10,  39 => 9,  37 => 8,  185 => 64,  181 => 59,  170 => 79,  163 => 55,  158 => 75,  155 => 74,  153 => 51,  149 => 72,  142 => 47,  128 => 61,  124 => 73,  121 => 42,  118 => 55,  110 => 56,  107 => 52,  105 => 53,  100 => 49,  94 => 46,  90 => 30,  86 => 28,  84 => 39,  79 => 29,  74 => 24,  72 => 35,  69 => 14,  67 => 21,  44 => 17,  33 => 7,  30 => 5,  25 => 5,);
    }
}

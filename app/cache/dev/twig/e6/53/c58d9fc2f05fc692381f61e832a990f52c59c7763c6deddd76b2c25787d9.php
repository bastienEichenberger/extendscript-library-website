<?php

/* nav.html.twig */
class __TwigTemplate_e653c58d9fc2f05fc692381f61e832a990f52c59c7763c6deddd76b2c25787d9 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"col-lg-10\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
            <div class=\"logo\">
                <a class=\"navbar-brand\" href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("jlfa_web_site_homepage");
        echo "\">
                    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo_extlib.svg"), "html", null, true);
        echo "\" onerror=\"this.onerror=null; this.src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo_extlib.svg"), "html", null, true);
        echo "'\">
                    <h1>ExtendScript library</h1>
                </a>
            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
            <ul class=\"nav navbar-nav navbar-left\">
                <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("jlfa_web_site_homepage");
        echo "\">Home</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Get started<b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("jlfa_web_site_startpage");
        echo "\">Start</a></li>
                        <li class=\"divider\"></li>
                        <li class=\"dropdown-header\">Documentation</li>
                        <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("jlfa_jsdoc");
        echo "\" target=\"_blank\">View html doc</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Get involved<b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("jlfa_web_site_participatepage");
        echo "\">Participate</a></li>
                        <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("forum_jlfa_homepage");
        echo "\">Forum</a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("sdzblog_accueil");
        echo "\">News</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">About<b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("jlfa_web_site_contributorspage");
        echo "\">Contributors</a></li>
                        <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("jlfa_web_site_licencespage");
        echo "\">Licences</a></li>
                    </ul>
                </li>
            </ul>
            ";
        // line 49
        echo "            ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 50
            echo "            <ul class=\"nav navbar-nav navbar-right\">
              <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
                    <li><a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Profile</a></li>
                </ul>
              </li>
            </ul>
            ";
            // line 60
            echo "            ";
        } else {
            // line 61
            echo "              <ul class=\"nav navbar-nav navbar-right\">
                  <li><a href=\"";
            // line 62
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connection</a></li>
              </ul>
            ";
        }
        // line 65
        echo "        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
      <div class=\"col-lg-1 navbar-collapse pull-right\">
        <ul id=\"language-screen\" class=\"language nav navbar-nav\">
              <li class=\"dropdown\">
                  ";
        // line 70
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale") == "fr")) {
            // line 71
            echo "                      ";
            $context["flag_class"] = "flag-fr";
            // line 72
            echo "                  ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale") == "en")) {
            // line 73
            echo "                      ";
            $context["flag_class"] = "flag-en";
            // line 74
            echo "                  ";
        } else {
            // line 75
            echo "                      ";
            $context["flag_class"] = "flag-de";
            // line 76
            echo "                  ";
        }
        // line 77
        echo "                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"glyphicon ";
        echo twig_escape_filter($this->env, (isset($context["flag_class"]) ? $context["flag_class"] : $this->getContext($context, "flag_class")), "html", null, true);
        echo "\"></span><b class=\"caret\"></b></a>
                  <ul class=\"dropdown-menu\">
                      <li><a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method"), twig_array_merge(twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route_params"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "query"), "all")), array("_locale" => "fr"))), "html", null, true);
        // line 84
        echo "\">
                          <span class=\"glyphicon flag-fr\"></span></a>
                      </li>
                      <li><a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method"), twig_array_merge(twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route_params"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "query"), "all")), array("_locale" => "de"))), "html", null, true);
        // line 92
        echo "\">
                          <span class=\"glyphicon flag-de\"></span></a>
                      </li>
                      <li><a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method"), twig_array_merge(twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route_params"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "query"), "all")), array("_locale" => "en"))), "html", null, true);
        // line 100
        echo "\">
                          <span class=\"glyphicon flag-en\"></span></a>
                      </li>
                  </ul>
              </li>
          </ul>
      </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 100,  184 => 95,  179 => 92,  177 => 87,  172 => 84,  161 => 76,  152 => 73,  146 => 71,  137 => 65,  131 => 62,  125 => 60,  93 => 44,  89 => 43,  82 => 39,  76 => 36,  63 => 29,  19 => 1,  59 => 12,  53 => 10,  36 => 13,  21 => 1,  222 => 72,  190 => 70,  182 => 63,  178 => 52,  175 => 51,  171 => 45,  168 => 44,  164 => 77,  144 => 70,  139 => 16,  136 => 15,  130 => 12,  122 => 63,  119 => 62,  112 => 54,  103 => 50,  97 => 47,  91 => 44,  88 => 42,  81 => 38,  78 => 37,  75 => 36,  58 => 28,  54 => 27,  46 => 15,  40 => 12,  35 => 10,  24 => 1,  57 => 26,  41 => 5,  32 => 12,  29 => 4,  66 => 34,  62 => 11,  60 => 14,  55 => 9,  50 => 22,  48 => 23,  45 => 7,  43 => 6,  39 => 4,  37 => 6,  185 => 64,  181 => 59,  170 => 79,  163 => 55,  158 => 75,  155 => 74,  153 => 51,  149 => 72,  142 => 47,  128 => 61,  124 => 73,  121 => 42,  118 => 55,  110 => 56,  107 => 52,  105 => 53,  100 => 49,  94 => 46,  90 => 30,  86 => 28,  84 => 39,  79 => 25,  74 => 24,  72 => 35,  69 => 14,  67 => 21,  44 => 17,  33 => 2,  30 => 3,  25 => 3,);
    }
}
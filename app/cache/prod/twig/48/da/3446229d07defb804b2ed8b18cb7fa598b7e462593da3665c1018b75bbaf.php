<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_48da3446229d07defb804b2ed8b18cb7fa598b7e462593da3665c1018b75bbaf extends Twig_Template
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
        echo "
<div class=\"row\">
    ";
        // line 4
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "            
    <form class=\"form-signin\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">

        <div class=\"control-group\">
            <label for=\"username\" class=\"control-label\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username_or_email", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
        </div>

        <div class=\"control-group\">
            <label for=\"password\" class=\"control-label\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
        </div>

        <div class=\"control-group\">
            <div class=\"controls\">
                <label for=\"remember_me\" class=\"checkbox\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
            ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                </label>

                <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-lg btn-primary btn-block\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
            </div>
        </div>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
        <hr class=\"featurette-divider\">
        <p class=\"pull-left\"><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</a></p>
        <p class=\"pull-right\"><a class=\"btn btn-large btn-success\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
        echo "</a></p>
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 33,  68 => 27,  62 => 24,  51 => 16,  40 => 11,  34 => 8,  31 => 7,  25 => 5,  23 => 4,  19 => 2,  47 => 10,  44 => 12,  39 => 11,  37 => 9,  32 => 6,  29 => 5,  79 => 32,  74 => 30,  69 => 20,  66 => 19,  61 => 15,  58 => 14,  42 => 9,  38 => 6,  33 => 5,  30 => 4,);
    }
}

<?php

/* CCDNForumForumBundle:User:Post/Partial/item_post.html.twig */
class __TwigTemplate_b674c399ec4d0a213dc2b09e4e26d2c00bd42db0712a2892ab6042070f4017b6 extends Twig_Template
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
        ob_start();
        // line 25
        $context["post_panel"] = $this;
        // line 26
        $context["panel"] = $context["post_panel"]->getclass((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "topic"));
        // line 28
        echo "<div class=\"col-md-12\">
\t\t<article class=\"row panel ";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["panel"]) ? $context["panel"] : $this->getContext($context, "panel")), "html", null, true);
        echo " clearfix\"";
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id")) {
            echo " id=\"";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getBody"), 0, 24), "html", null, true);
            echo "\"";
        }
        echo ">

\t\t    <header class=\"panel-heading\">";
        // line 32
        $this->env->loadTemplate("CCDNForumForumBundle:User:Post/Partial/item_post_head.html.twig")->display(array_merge($context, array("post" => (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")))));
        // line 33
        echo "</header>

\t\t\t<div class=\"panel-body\">";
        // line 36
        $this->env->loadTemplate("CCDNForumForumBundle:User:Post/Partial/item_post_body.html.twig")->display(array_merge($context, array("post" => (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")))));
        // line 37
        echo "</div>

\t\t</article>
\t</div>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 3
    public function getclass($_post = null, $_topic = null)
    {
        $context = $this->env->mergeGlobals(array(
            "post" => $_post,
            "topic" => $_topic,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 5
            if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "isDeleted") == true)) {
                // line 6
                echo "panel-danger";
            } else {
                // line 8
                if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id") && $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "topic"))) {
                    // line 9
                    if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "topic"), "firstPost")) {
                        // line 10
                        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "topic"), "firstPost"), "id") == $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id"))) {
                            // line 11
                            echo "panel-primary";
                        } else {
                            // line 13
                            echo "panel-default";
                        }
                    } else {
                        // line 16
                        echo "panel-default";
                    }
                } else {
                    // line 19
                    echo "panel-default";
                }
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User:Post/Partial/item_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 19,  85 => 16,  81 => 13,  76 => 10,  72 => 8,  67 => 5,  41 => 33,  65 => 25,  55 => 3,  53 => 20,  47 => 37,  38 => 11,  36 => 10,  34 => 9,  31 => 8,  195 => 112,  191 => 108,  189 => 107,  185 => 105,  182 => 104,  180 => 103,  176 => 99,  174 => 98,  170 => 96,  167 => 95,  165 => 94,  161 => 90,  159 => 89,  155 => 87,  152 => 86,  150 => 85,  146 => 81,  144 => 80,  140 => 78,  137 => 77,  135 => 76,  131 => 72,  129 => 71,  125 => 69,  122 => 68,  120 => 67,  116 => 63,  114 => 62,  110 => 60,  107 => 59,  101 => 54,  99 => 53,  95 => 51,  92 => 50,  90 => 49,  86 => 45,  84 => 44,  80 => 41,  78 => 11,  75 => 36,  73 => 35,  68 => 27,  63 => 24,  61 => 23,  49 => 17,  45 => 36,  37 => 14,  33 => 12,  30 => 11,  28 => 29,  25 => 28,  23 => 26,  21 => 25,  19 => 1,  108 => 39,  105 => 58,  91 => 34,  74 => 9,  71 => 31,  69 => 6,  66 => 32,  64 => 25,  62 => 23,  60 => 21,  58 => 22,  56 => 26,  54 => 25,  51 => 18,  46 => 12,  44 => 15,  42 => 17,  39 => 32,  35 => 6,  32 => 5,  27 => 3,);
    }
}

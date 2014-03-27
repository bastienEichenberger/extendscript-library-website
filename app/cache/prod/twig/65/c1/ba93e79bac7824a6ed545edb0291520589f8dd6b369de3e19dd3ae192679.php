<?php

/* SdzBlogBundle:blog:delete_comment.html.twig */
class __TwigTemplate_65c1ba93e79bac7824a6ed545edb0291520589f8dd6b369de3e19dd3ae192679 extends Twig_Template
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
        echo "<!-- Modal -->

<div class=\"modal fade\" id=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["modal_id"]) ? $context["modal_id"] : $this->getContext($context, "modal_id")), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Delete comment</h4>
      </div>
      <div class=\"modal-body\">
        Do you really want to delete the comment ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "contenu"), "html", null, true);
        echo "
      </div>
      <div class=\"modal-footer\">
        <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_supprimer_commentaire", array("id" => $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "id"))), "html", null, true);
        echo "\" method=\"post\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">cancel</button>
            <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
            ";
        // line 17
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SdzBlogBundle:blog:delete_form", array("id" => $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "id"))));
        echo "
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:blog:delete_comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  40 => 14,  34 => 11,  23 => 3,  19 => 1,);
    }
}

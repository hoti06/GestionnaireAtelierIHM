<?php

/* AtelierCategoryBundle:Category:supprimer.html.twig */
class __TwigTemplate_6d10486b96c7db9a450cb13e5b5c6b29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AtelierCategoryBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'category_body' => array($this, 'block_category_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AtelierCategoryBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Supprimer une Catégorie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_category_body($context, array $blocks = array())
    {
        // line 8
        echo " 
  <h2>Supprimer une catégorie</h2>
 
  <p>
    Etes-vous certain de vouloir supprimer la catégorie \"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
        echo "\" ?
  </p>
 
  <form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_category_delete", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_category_disp", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-chevron-left\"></i>
      Retour à la catégorie
    </a>
    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  </form>
 
";
    }

    public function getTemplateName()
    {
        return "AtelierCategoryBundle:Category:supprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 21,  58 => 16,  54 => 15,  48 => 12,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}

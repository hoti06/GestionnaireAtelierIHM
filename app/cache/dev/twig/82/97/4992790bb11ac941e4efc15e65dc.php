<?php

/* AtelierCategoryBundle:Category:modifier.html.twig */
class __TwigTemplate_82974992790bb11ac941e4efc15e65dc extends Twig_Template
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
        echo "  Modifier une catégorie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_category_body($context, array $blocks = array())
    {
        // line 8
        echo " 
  <h2>Modifier une catégorie</h2>
 
  ";
        // line 11
        $this->env->loadTemplate("AtelierCategoryBundle:Category:formulaire.html.twig")->display($context);
        // line 12
        echo " 
  <p>
   <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_category_disp", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-chevron-left\"></i>
      Retour à la catégorie
    </a>
  </p>
 
";
    }

    public function getTemplateName()
    {
        return "AtelierCategoryBundle:Category:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  49 => 12,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}

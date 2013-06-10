<?php

/* AtelierCategoryBundle:Category:voir.html.twig */
class __TwigTemplate_4e30cf8586eb3e5f500b1409482d352e extends Twig_Template
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
        echo "  Lecture d'une Catégorie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_category_body($context, array $blocks = array())
    {
        // line 8
        echo "
<h2>Afficher une catégorie</h2>

<p>
      ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "        <i>";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</i>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</p>

<h3>Catégorie ";
        // line 17
        $this->env->loadTemplate("AtelierCategoryBundle:Category:category.html.twig")->display($context);
        echo " </h3>
<p>
\tId =  ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"), "html", null, true);
        echo " 
</p>
<p>
    <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("atelier_category_dispAll");
        echo "\" class=\"btn\">
      <i class=\"icon-chevron-left\"></i>
      Retour à la liste
    </a>
    
    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_category_edit", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-edit\"></i>
      Modifier la catégorie
    </a>
    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_category_delete", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-trash\"></i>
      Supprimer la catégorie
    </a>
  </p>



";
    }

    public function getTemplateName()
    {
        return "AtelierCategoryBundle:Category:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 31,  84 => 27,  76 => 22,  70 => 19,  65 => 17,  61 => 15,  52 => 13,  48 => 12,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}

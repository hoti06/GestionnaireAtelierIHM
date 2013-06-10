<?php

/* AtelierProductBundle:Product:delete.html.twig */
class __TwigTemplate_570cb2b385930038c62aaa17cd91cc0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AtelierProductBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'product_body' => array($this, 'block_product_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AtelierProductBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Delete a product - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_product_body($context, array $blocks = array())
    {
        // line 8
        echo " 
  <h2>Delete a product</h2>
 
  <p>
    Are you sure you want to delete the product \"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
        echo "\" ?
  </p>
 
  <form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_product_delete", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_product_disp", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-chevron-left\"></i>
      Go back to the product
    </a>
    <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\" />
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  </form>
 
";
    }

    public function getTemplateName()
    {
        return "AtelierProductBundle:Product:delete.html.twig";
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

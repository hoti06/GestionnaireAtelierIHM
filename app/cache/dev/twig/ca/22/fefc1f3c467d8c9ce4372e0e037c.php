<?php

/* AtelierProductBundle:Product:add.html.twig */
class __TwigTemplate_ca22fefc1f3c467d8c9ce4372e0e037c extends Twig_Template
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
        echo "  Add a product - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_product_body($context, array $blocks = array())
    {
        // line 8
        echo " 
  <h2>Add a product</h2>
 
  ";
        // line 11
        $this->env->loadTemplate("AtelierProductBundle:Product:form.html.twig")->display($context);
        // line 12
        echo " 
  <p>
   <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("atelier_product_dispAll");
        echo "\" class=\"btn\">
      <i class=\"icon-chevron-left\"></i>
      Go back to the list of products
    </a>
  </p>
 
";
    }

    public function getTemplateName()
    {
        return "AtelierProductBundle:Product:add.html.twig";
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

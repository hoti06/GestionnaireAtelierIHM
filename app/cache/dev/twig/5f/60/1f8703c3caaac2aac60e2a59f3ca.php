<?php

/* AtelierProductBundle:Product:disp.html.twig */
class __TwigTemplate_5f601f8703c3caaac2aac60e2a59f3ca extends Twig_Template
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
        echo "  Display a Product - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_product_body($context, array $blocks = array())
    {
        // line 8
        echo "
<h2>Display a Product</h2>

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

<h3>Product ";
        // line 17
        $this->env->loadTemplate("AtelierProductBundle:Product:product.html.twig")->display($context);
        echo " </h3>
<p>
\tId =  ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"), "html", null, true);
        echo " 
</p>
<p>
\tDescription =  ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description"), "html", null, true);
        echo " 
</p>
<p>
\tCategory =  <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_category_disp", array("id" => $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "category"), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "category"), "name"), "html", null, true);
        echo " </a>
</p>

<p>
    <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("atelier_product_dispAll");
        echo "\" class=\"btn\">
      <i class=\"icon-chevron-left\"></i>
      Go back to the list of products
    </a>
    
    <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_product_edit", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-edit\"></i>
      Edit the product
    </a>
    <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_product_delete", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-trash\"></i>
      Delete the product
    </a>
  </p>



";
    }

    public function getTemplateName()
    {
        return "AtelierProductBundle:Product:disp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 38,  99 => 34,  91 => 29,  82 => 25,  76 => 22,  70 => 19,  65 => 17,  61 => 15,  52 => 13,  48 => 12,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}

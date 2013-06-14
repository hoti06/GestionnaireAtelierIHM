<?php

/* AtelierMaterialBundle:Material:disp.html.twig */
class __TwigTemplate_d9fe072b562095a4527a302cd6db7156 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AtelierMaterialBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'material_body' => array($this, 'block_material_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AtelierMaterialBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Display a Material - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_material_body($context, array $blocks = array())
    {
        // line 8
        echo "
<h2>Display a Material</h2>

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

<h3>Material ";
        // line 17
        $this->env->loadTemplate("AtelierMaterialBundle:Material:material.html.twig")->display($context);
        echo " </h3>
<p>
\tUUID =  ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["material"]) ? $context["material"] : $this->getContext($context, "material")), "uuid"), "html", null, true);
        echo " 
</p>
<p>
\tDescription =  ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["material"]) ? $context["material"] : $this->getContext($context, "material")), "description"), "html", null, true);
        echo " 
</p>
<p>
\tProduct =  <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_product_disp", array("id" => $this->getAttribute($this->getAttribute((isset($context["material"]) ? $context["material"] : $this->getContext($context, "material")), "product"), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["material"]) ? $context["material"] : $this->getContext($context, "material")), "product"), "name"), "html", null, true);
        echo " </a>
</p>



<p>
    <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("atelier_material_dispAll");
        echo "\" class=\"btn\">
      <i class=\"icon-chevron-left\"></i>
      Go back to the list of materials
    </a>
    
    <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_material_edit", array("id" => $this->getAttribute((isset($context["material"]) ? $context["material"] : $this->getContext($context, "material")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-edit\"></i>
      Edit the material
    </a>
    <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_material_delete", array("id" => $this->getAttribute((isset($context["material"]) ? $context["material"] : $this->getContext($context, "material")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-trash\"></i>
      Delete the material
    </a>
  </p>



";
    }

    public function getTemplateName()
    {
        return "AtelierMaterialBundle:Material:disp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 36,  93 => 31,  82 => 25,  76 => 22,  70 => 19,  65 => 17,  61 => 15,  52 => 13,  48 => 12,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}

<?php

/* AtelierMaterialBundle:Material:edit.html.twig */
class __TwigTemplate_53ec42fb8c3c7a48151a58caf872eff1 extends Twig_Template
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
        echo "  Edit a material - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_material_body($context, array $blocks = array())
    {
        // line 8
        echo " 
  <h2>Edit a material</h2>
 
  ";
        // line 11
        $this->env->loadTemplate("AtelierMaterialBundle:Material:form.html.twig")->display($context);
        // line 12
        echo " 
  <p>
   <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_material_disp", array("id" => $this->getAttribute((isset($context["material"]) ? $context["material"] : $this->getContext($context, "material")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-chevron-left\"></i>
      Go back to the material
    </a>
  </p>
 
";
    }

    public function getTemplateName()
    {
        return "AtelierMaterialBundle:Material:edit.html.twig";
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

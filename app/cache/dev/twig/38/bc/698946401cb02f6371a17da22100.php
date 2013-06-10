<?php

/* AtelierMaterialBundle:Material:material.html.twig */
class __TwigTemplate_38bc698946401cb02f6371a17da22100 extends Twig_Template
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_material_disp", array("id" => $this->getAttribute((isset($context["material"]) ? $context["material"] : $this->getContext($context, "material")), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["material"]) ? $context["material"] : $this->getContext($context, "material")), "id"), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "AtelierMaterialBundle:Material:material.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  102 => 37,  95 => 33,  87 => 28,  76 => 22,  70 => 19,  65 => 17,  61 => 15,  52 => 13,  48 => 12,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}

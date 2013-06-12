<?php

/* AtelierProductBundle:Product:product.html.twig */
class __TwigTemplate_67cf470789cc0f2c3b4bff7add366880 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_product_disp", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "AtelierProductBundle:Product:product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  59 => 13,  56 => 12,  51 => 14,  49 => 12,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  153 => 42,  142 => 39,  135 => 38,  131 => 37,  126 => 34,  119 => 32,  98 => 28,  95 => 27,  77 => 26,  71 => 22,  62 => 20,  58 => 19,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}

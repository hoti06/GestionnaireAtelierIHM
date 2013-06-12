<?php

/* AtelierMaterialBundle::layout.html.twig */
class __TwigTemplate_0a1e1bccd753817ea52eb9ef7307f996 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'material_body' => array($this, 'block_material_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Material - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo " 
  <h1>Materials Management</h1>
  <hr>

  ";
        // line 12
        $this->displayBlock('material_body', $context, $blocks);
        // line 14
        echo " 
";
    }

    // line 12
    public function block_material_body($context, array $blocks = array())
    {
        // line 13
        echo "  ";
    }

    public function getTemplateName()
    {
        return "AtelierMaterialBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  56 => 12,  51 => 14,  49 => 12,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  153 => 42,  142 => 39,  135 => 38,  131 => 37,  126 => 34,  119 => 32,  98 => 28,  95 => 27,  77 => 26,  71 => 22,  62 => 20,  58 => 19,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}

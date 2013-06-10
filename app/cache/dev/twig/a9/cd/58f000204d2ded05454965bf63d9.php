<?php

/* AtelierProductBundle::layout.html.twig */
class __TwigTemplate_a9cd58f000204d2ded05454965bf63d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'product_body' => array($this, 'block_product_body'),
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
        echo "  Product - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo " 
  <h1>Products Management</h1>
  <hr>

  ";
        // line 12
        $this->displayBlock('product_body', $context, $blocks);
        // line 14
        echo " 
";
    }

    // line 12
    public function block_product_body($context, array $blocks = array())
    {
        // line 13
        echo "  ";
    }

    public function getTemplateName()
    {
        return "AtelierProductBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  56 => 12,  51 => 14,  49 => 12,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  149 => 42,  138 => 39,  131 => 38,  127 => 37,  122 => 34,  115 => 32,  100 => 29,  98 => 28,  95 => 27,  77 => 26,  71 => 22,  62 => 20,  58 => 19,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}

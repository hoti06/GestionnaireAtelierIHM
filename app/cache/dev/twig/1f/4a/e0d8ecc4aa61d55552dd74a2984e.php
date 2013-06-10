<?php

/* AtelierIndexBundle:Index:index.html.twig */
class __TwigTemplate_1f4ae0d8ecc4aa61d55552dd74a2984e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AtelierIndexBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'index_body' => array($this, 'block_index_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AtelierIndexBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Index - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_index_body($context, array $blocks = array())
    {
        // line 8
        echo " 
  <p>
\tWelcome
  </p>
 
";
    }

    public function getTemplateName()
    {
        return "AtelierIndexBundle:Index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}

<?php

/* AtelierUserBundle::layout.html.twig */
class __TwigTemplate_289298ff37cecdc01ebc50a4b966b630 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'user_body' => array($this, 'block_user_body'),
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
        echo "  User - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo " 
  <h1>User</h1>
  <hr>

  ";
        // line 12
        $this->displayBlock('user_body', $context, $blocks);
        // line 14
        echo " 
";
    }

    // line 12
    public function block_user_body($context, array $blocks = array())
    {
        // line 13
        echo "  ";
    }

    public function getTemplateName()
    {
        return "AtelierUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  49 => 12,  33 => 4,  30 => 3,  65 => 17,  59 => 13,  56 => 12,  50 => 11,  48 => 10,  43 => 8,  40 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}

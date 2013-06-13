<?php

/* AtelierReservationBundle::layout.html.twig */
class __TwigTemplate_53b20048c64f54fb1343e4383d95f7da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'booking_body' => array($this, 'block_booking_body'),
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
  <h1>booking Management</h1>
  <hr>

  ";
        // line 12
        $this->displayBlock('booking_body', $context, $blocks);
        // line 14
        echo " 
";
    }

    // line 12
    public function block_booking_body($context, array $blocks = array())
    {
        // line 13
        echo "  ";
    }

    public function getTemplateName()
    {
        return "AtelierReservationBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  49 => 12,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  59 => 13,  54 => 12,  51 => 14,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}

<?php

/* AtelierReservationBundle:Reservation:appointement.html.twig */
class __TwigTemplate_4c5c06b37902463de692d54961f90b6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AtelierReservationBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'booking_body' => array($this, 'block_booking_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AtelierReservationBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Booking - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_booking_body($context, array $blocks = array())
    {
        // line 8
        echo " 
  <h2>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "html", null, true);
        echo "</h2>
  
  <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("atelier_reservation_list");
        echo "\" class=\"btn\">return</a>
";
    }

    public function getTemplateName()
    {
        return "AtelierReservationBundle:Reservation:appointement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}

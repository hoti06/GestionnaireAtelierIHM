<?php

/* AtelierReservationBundle:Reservation:booking.html.twig */
class __TwigTemplate_15890388d515391afb30924241293161 extends Twig_Template
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
        echo "  booking - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_booking_body($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 9
            echo "  ";
            $this->env->loadTemplate("AtelierReservationBundle:Reservation:form.html.twig")->display($context);
            // line 10
            echo "  ";
        } else {
            // line 11
            echo "      <h2>please login</h2>
      <a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" class=\"btn\">login</a>
  ";
        }
        // line 14
        echo " 
";
    }

    public function getTemplateName()
    {
        return "AtelierReservationBundle:Reservation:booking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  54 => 12,  51 => 11,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}

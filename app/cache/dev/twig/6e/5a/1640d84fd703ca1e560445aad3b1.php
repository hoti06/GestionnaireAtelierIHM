<?php

/* AtelierReservationBundle:Reservation:disp.html.twig */
class __TwigTemplate_6e5a1640d84fd703ca1e560445aad3b1 extends Twig_Template
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
        echo "  List of reservation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_booking_body($context, array $blocks = array())
    {
        // line 8
        echo "
<h3>List of Reservation</h3>
 
<ul>
  ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list_reservations"]) ? $context["list_reservations"] : $this->getContext($context, "list_reservations")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
            // line 13
            echo "\t<p>
\t
\t\t<h4>Materials id : ";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "getMaterials", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["material"]) ? $context["material"] : $this->getContext($context, "material")), "getId", array(), "method"), "html", null, true);
                echo ", ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['material'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</h4>
                 
                 
                 <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_reservation_disp_barcode", array("id" => $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "getId", array(), "method"))), "html", null, true);
            echo "\">Afficher les codes barres asssociées</a>
\t 
                <ul>
                <li>Begin : ";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "getDateBegin", array(), "method"), "Y-m-d"), "html", null, true);
            echo "</li>
                <li>End : ";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "getDateEnd", array(), "method"), "Y-m-d"), "html", null, true);
            echo "</li>
\t\t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_reservation_delete", array("id" => $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "getId", array(), "method"))), "html", null, true);
            echo "\">delete</a>
\t\t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_reservation_change", array("id" => $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "getId", array(), "method"))), "html", null, true);
            echo "\">change</a>
                </ul>
\t</p>
    <hr />
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "    <p>There aren't any reservation for the moment</p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</ul>
  <div class=\"pagination\">
    <ul>
      ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 35
            echo "        <li";
            if (((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
          <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_reservation_list", array("page" => (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "html", null, true);
            echo "</a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </ul>
  </div>

";
    }

    public function getTemplateName()
    {
        return "AtelierReservationBundle:Reservation:disp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 39,  123 => 36,  116 => 35,  112 => 34,  107 => 31,  100 => 29,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  72 => 18,  57 => 15,  53 => 13,  48 => 12,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}

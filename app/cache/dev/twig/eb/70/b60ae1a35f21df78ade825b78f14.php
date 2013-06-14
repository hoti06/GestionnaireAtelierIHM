<?php

/* ::layout.html.twig */
class __TwigTemplate_eb70b60ae1a35f21df78ade825b78f14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
 
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
 
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "  </head>
 
  <body>
    <div class=\"container\">
      <div id=\"header\" class=\"hero-unit\">
        <h1>Atelier IHM</h1>
      </div>
 
      <div class=\"row\">
        <div id=\"menu\" class=\"span3\">
          <h3>Account Admnistration</h3>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("atelier_user_index");
        echo "\">Index</a></li>
          </ul>
          
          <h3>Booking Admnistration</h3>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("atelier_reservation_booking");
        echo "\">Add a booking</a></li>
            <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("atelier_reservation_alllist");
        echo "\">List all bookings</a></li>
          </ul>
          
          <h3>Categories Admnistration</h3>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("atelier_category_new");
        echo "\">Create a new category</a></li>
            <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("atelier_category_index");
        echo "\">List all categories</a></li>
          </ul>
              
          <h3>Products Admnistration</h3>
          <ul class=\"nav nav-pills nav-stacked\">
            ";
        // line 41
        echo "            <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("atelier_product_index");
        echo "\">List all products</a></li>
          </ul>      
                     
          <h3>Materials Admnistration</h3>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("atelier_material_new");
        echo "\">Create a new material</a></li>
            <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("atelier_material_index");
        echo "\">List all materials</a></li>
          </ul>           
        </div>
        
        <div id=\"content\" class=\"span9\">
          ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "        </div>
      </div>
 
      <hr>
 
      <footer>
        <p>By CESCHEL, YAO, GUO</p>
      </footer>
    </div>
 
  ";
        // line 64
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo " 
  </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Atelier IHM";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        // line 53
        echo "          ";
    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        // line 65
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 66,  153 => 65,  150 => 64,  146 => 53,  143 => 52,  136 => 9,  133 => 8,  127 => 6,  120 => 68,  118 => 64,  106 => 54,  104 => 52,  96 => 47,  92 => 46,  83 => 41,  75 => 35,  71 => 34,  63 => 29,  37 => 11,  35 => 8,  23 => 1,  56 => 12,  49 => 12,  43 => 8,  40 => 7,  33 => 4,  30 => 6,  59 => 28,  54 => 12,  51 => 23,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}

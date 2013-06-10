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
        echo $this->env->getExtension('routing')->getPath("atelier_user_login");
        echo "\">Login</a></li>
            <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("atelier_user_logout");
        echo "\">Logout</a></li>
            <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("atelier_user_signup");
        echo "\">Sign up</a></li>
          </ul>
          
          <h3>Gategories Admnistration</h3>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("atelier_category_new");
        echo "\">Create a new category</a></li>
            <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("atelier_category_index");
        echo "\">List all categories</a></li>
          </ul>
              
          <h3>Products Admnistration</h3>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("atelier_product_new");
        echo "\">Create a new product</a></li>
            <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("atelier_product_index");
        echo "\">List all products</a></li>
          </ul>      
                     
          <h3>Materials Admnistration</h3>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("atelier_material_new");
        echo "\">Create a new material</a></li>
            <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("atelier_material_index");
        echo "\">List all materials</a></li>
          </ul>           
        </div>
        
        <div id=\"content\" class=\"span9\">
          ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "        </div>
      </div>
 
      <hr>
 
      <footer>
        <p>By CESCHEL, YAO, GUO</p>
      </footer>
    </div>
 
  ";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
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

    // line 48
    public function block_body($context, array $blocks = array())
    {
        // line 49
        echo "          ";
    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        // line 61
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 62
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
        return array (  155 => 62,  152 => 61,  149 => 60,  145 => 49,  142 => 48,  135 => 9,  132 => 8,  126 => 6,  119 => 64,  117 => 60,  105 => 50,  103 => 48,  95 => 43,  91 => 42,  83 => 37,  79 => 36,  71 => 31,  67 => 30,  59 => 25,  55 => 24,  51 => 23,  37 => 11,  35 => 8,  30 => 6,  23 => 1,);
    }
}

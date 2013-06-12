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
           <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("atelier_user_index");
        echo "\">Account Admnistration</a>
          
          <h3>Categories Admnistration</h3>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("atelier_category_new");
        echo "\">Create a new category</a></li>
            <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("atelier_category_index");
        echo "\">List all categories</a></li>
          </ul>
              
          <h3>Products Admnistration</h3>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("atelier_product_new");
        echo "\">Create a new product</a></li>
            <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("atelier_product_index");
        echo "\">List all products</a></li>
          </ul>      
                     
          <h3>Materials Admnistration</h3>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("atelier_material_new");
        echo "\">Create a new material</a></li>
            <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("atelier_material_index");
        echo "\">List all materials</a></li>
          </ul>           
        </div>
        
        <div id=\"content\" class=\"span9\">
          ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "        </div>
      </div>
 
      <hr>
 
      <footer>
        <p>By CESCHEL, YAO, GUO</p>
      </footer>
    </div>
 
  ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 59
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

    // line 43
    public function block_body($context, array $blocks = array())
    {
        // line 44
        echo "          ";
    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        // line 56
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 57
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
        return array (  144 => 57,  141 => 56,  138 => 55,  134 => 44,  131 => 43,  124 => 9,  121 => 8,  115 => 6,  108 => 59,  106 => 55,  94 => 45,  92 => 43,  84 => 38,  80 => 37,  72 => 32,  68 => 31,  60 => 26,  56 => 25,  49 => 21,  37 => 11,  35 => 8,  30 => 6,  23 => 1,);
    }
}

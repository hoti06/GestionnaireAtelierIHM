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
        
        <div id=\"content\" class=\"span9\">
          ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "        </div>
      </div>
 
      <hr>
 
      <footer>
        <p>By CESCHEL, YAO, GUO</p>
      </footer>
    </div>
 
  ";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
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

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "          ";
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        // line 35
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  102 => 36,  99 => 35,  96 => 34,  92 => 23,  89 => 22,  82 => 9,  79 => 8,  73 => 6,  66 => 38,  64 => 34,  52 => 24,  50 => 22,  37 => 11,  35 => 8,  23 => 1,  59 => 13,  56 => 12,  49 => 12,  43 => 8,  40 => 7,  33 => 4,  30 => 6,  51 => 14,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}

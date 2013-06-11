<?php

/* AtelierUserBundle:User:edit.html.twig */
class __TwigTemplate_bb731408718a54425490d8ba1c72dc5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>login</title>
  </head>
  <body>
     <h3>Formulaire d'edit</h3>
 
\t<div class=\"well\">
  \t  <form method=\"post\" ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
;
        echo ">
  \t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    \t  \t<input type=\"submit\" class=\"btn btn-primary\" />
   \t  </form>
\t</div>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "AtelierUserBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 12,  31 => 11,  19 => 1,);
    }
}

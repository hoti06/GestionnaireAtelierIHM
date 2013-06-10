<?php

/* AtelierUserBundle:User:login.html.twig */
class __TwigTemplate_ea6a11a4a8eeebd3d238c9e5abbaed9f extends Twig_Template
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
     ";
        // line 8
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "    \t<div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
     ";
        }
        // line 11
        echo "
    <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("atelier_user_loginCheck");
        echo "\" method=\"post\">
    \t<label for=\"username\">Username:</label>
    \t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    \t<label for=\"password\">Password:</label>
    \t<input type=\"password\" id=\"password\" name=\"_password\" />

    \t";
        // line 23
        echo "
    \t<button type=\"submit\">login</button>
\t</form>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "AtelierUserBundle:User:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 23,  44 => 14,  39 => 12,  36 => 11,  30 => 9,  28 => 8,  19 => 1,);
    }
}

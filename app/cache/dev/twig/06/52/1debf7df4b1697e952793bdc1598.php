<?php

/* AtelierUserBundle:User:editAdmin.html.twig */
class __TwigTemplate_06521debf7df4b1697e952793bdc1598 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AtelierUserBundle::layout.html.twig");

        $this->blocks = array(
            'user_body' => array($this, 'block_user_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AtelierUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_user_body($context, array $blocks = array())
    {
        // line 4
        echo "     <h3>edit form</h3>
 
\t<div class=\"well\">
  \t   ";
        // line 7
        $this->env->loadTemplate("AtelierUserBundle:User:form.html.twig")->display($context);
        // line 8
        echo "\t</div>
        <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" class=\"btn\">logout</a>
";
    }

    public function getTemplateName()
    {
        return "AtelierUserBundle:User:editAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  38 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}

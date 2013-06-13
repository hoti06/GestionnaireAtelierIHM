<?php

/* AtelierUserBundle:User:index.html.twig */
class __TwigTemplate_8a4035aedd2e3e187841875724966d35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AtelierUserBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Index- ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_user_body($context, array $blocks = array())
    {
        // line 8
        echo "
<p>
  <h2>Index</h2>
  <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" class=\"btn\">login</a><br/>
  <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"btn\">sign up</a><br/>
</p>
";
    }

    public function getTemplateName()
    {
        return "AtelierUserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}

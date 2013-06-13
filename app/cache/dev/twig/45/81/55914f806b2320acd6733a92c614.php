<?php

/* AtelierUserBundle:User:removeAdmin.html.twig */
class __TwigTemplate_458155914f806b2320acd6733a92c614 extends Twig_Template
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
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "html", null, true);
        echo "
    <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("atelier_user_list");
        echo "\", class=\"btn\">return</a>
    <br/>
";
    }

    public function getTemplateName()
    {
        return "AtelierUserBundle:User:removeAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  31 => 4,  28 => 3,);
    }
}

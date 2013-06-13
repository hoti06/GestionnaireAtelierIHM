<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_78a12e6dffcb9b1e2c1fa2c43ba019f0 extends Twig_Template
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
        $this->env->loadTemplate("FOSUserBundle:Registration:register_content.html.twig")->display($context);
        // line 5
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  31 => 4,  28 => 3,);
    }
}

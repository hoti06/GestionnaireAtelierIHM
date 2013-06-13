<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_54bd0e27162579f269baebad2490d251 extends Twig_Template
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
        $this->env->loadTemplate("FOSUserBundle:Profile:show_content.html.twig")->display($context);
        // line 5
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\", class=\"btn\">edit</a><br/>
<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_delete");
        echo "\", class=\"btn\">delete</a>
";
        // line 7
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 8
            echo "   <h2>Hi Admin</h2>
   <a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getPath("atelier_user_list");
            echo "\", class=\"btn\">list</a></p>
";
        }
        // line 11
        echo "
<a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" class=\"btn\">logout</a>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 12,  52 => 11,  47 => 9,  44 => 8,  42 => 7,  38 => 6,  33 => 5,  31 => 4,  28 => 3,);
    }
}

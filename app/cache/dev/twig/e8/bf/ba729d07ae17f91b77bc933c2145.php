<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_e8bfba729d07ae17f91b77bc933c2145 extends Twig_Template
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
        echo "<div class=\"fos_user_user_show\">
    <h3>Username: ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getUsername", array(), "method"), "html", null, true);
        echo "</h3>
    <h3>Email: ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getEmail", array(), "method"), "html", null, true);
        echo "</h3>
    <h3>Role: </h3>
    ";
        // line 5
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "hasRole", array(0 => "ROLE_SUPER_ADMIN"), "method")) {
            // line 6
            echo "       <h4>Role super admin<h4>
    ";
        } elseif ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "hasRole", array(0 => "ROLE_ADMIN"), "method")) {
            // line 8
            echo "       <h4>Role admin<h4>
    ";
        } else {
            // line 10
            echo "       <h4>Role user<h4>
    ";
        }
        // line 12
        echo "    
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  41 => 10,  37 => 8,  26 => 3,  22 => 2,  19 => 1,  55 => 12,  52 => 11,  47 => 9,  44 => 8,  42 => 7,  38 => 6,  33 => 6,  31 => 5,  28 => 3,);
    }
}

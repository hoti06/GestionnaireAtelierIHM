<?php

/* AtelierUserBundle:User:show.html.twig */
class __TwigTemplate_d987332156525323fc3f87e85840c4d2 extends Twig_Template
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
        if (((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")) != null)) {
            // line 5
            echo "        ";
            $this->env->loadTemplate("FOSUserBundle:Profile:show_content.html.twig")->display($context);
            // line 6
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_user_editAdmin", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getId", array(), "method"))), "html", null, true);
            echo "\" class=\"btn\">edit</a><br/>
        <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_user_delete", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getId", array(), "method"))), "html", null, true);
            echo "\" class=\"btn\">delete</a><br/>
\t
        ";
            // line 9
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "hasRole", array(0 => "ROLE_ADMIN"), "method")) {
                // line 10
                echo "           <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_user_removeAdmin", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getId", array(), "method"))), "html", null, true);
                echo "\", class=\"btn\">removeadmin</a></p>
    \t";
            } else {
                // line 12
                echo "      \t   <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_user_addAdmin", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getId", array(), "method"))), "html", null, true);
                echo "\", class=\"btn\">addadmin</a></p>
    \t";
            }
            // line 13
            echo " 
       
    ";
        }
        // line 16
        echo "\t<a href=\"";
        echo $this->env->getExtension('routing')->getPath("atelier_user_list");
        echo "\" class=\"btn\">return</a>
    
    <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" class=\"btn\">logout</a>
";
    }

    public function getTemplateName()
    {
        return "AtelierUserBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  66 => 16,  61 => 13,  55 => 12,  49 => 10,  47 => 9,  42 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}

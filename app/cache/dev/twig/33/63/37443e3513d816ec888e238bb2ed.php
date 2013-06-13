<?php

/* AtelierUserBundle:User:list.html.twig */
class __TwigTemplate_336337443e3513d816ec888e238bb2ed extends Twig_Template
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
        echo "     ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 5
            echo "         ";
            if (($this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "hasRole", array(0 => "ROLE_SUPER_ADMIN"), "method") == false)) {
                // line 6
                echo "         \t<h2>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "getUsername", array(), "method"), "html", null, true);
                echo "</h2>
         \t<a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_user_show", array("id" => $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "getId", array(), "method"))), "html", null, true);
                echo "\" class=\"btn\"s>show</a>
     \t ";
            }
            // line 9
            echo "     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "     <a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" class=\"btn\">logout</a>
";
    }

    public function getTemplateName()
    {
        return "AtelierUserBundle:User:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 10,  49 => 9,  44 => 7,  39 => 6,  36 => 5,  31 => 4,  28 => 3,);
    }
}

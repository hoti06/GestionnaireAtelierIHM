<?php

/* SdzBlogBundle:Blog:menu.html.twig */
class __TwigTemplate_62b766e416918eaaeafcbd08b4b440fd extends Twig_Template
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
        // line 2
        echo " 
";
        // line 4
        echo " 
<ul>
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_articles"]) ? $context["liste_articles"] : $this->getContext($context, "liste_articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 8
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>
</ul>
";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  27 => 7,  22 => 4,  19 => 2,  180 => 67,  177 => 66,  175 => 65,  172 => 64,  168 => 53,  165 => 52,  158 => 9,  155 => 8,  149 => 6,  143 => 69,  141 => 64,  129 => 54,  127 => 52,  121 => 49,  115 => 46,  111 => 45,  95 => 31,  89 => 30,  80 => 27,  75 => 26,  70 => 25,  66 => 24,  62 => 22,  56 => 20,  49 => 16,  44 => 15,  42 => 10,  37 => 11,  35 => 8,  30 => 6,  23 => 1,);
    }
}

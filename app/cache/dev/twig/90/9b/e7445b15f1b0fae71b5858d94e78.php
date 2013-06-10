<?php

/* AtelierCategoryBundle:Category:formulaire.html.twig */
class __TwigTemplate_909be7445b15f1b0fae71b5858d94e78 extends Twig_Template
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
        echo "<div class=\"well\">
  <form method=\"post\" ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
;
        echo ">
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" class=\"btn btn-primary\" />
  </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "AtelierCategoryBundle:Category:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  22 => 2,  19 => 1,  104 => 37,  101 => 36,  99 => 35,  96 => 34,  92 => 23,  89 => 22,  82 => 9,  79 => 8,  73 => 6,  66 => 39,  64 => 34,  37 => 11,  35 => 8,  23 => 1,  60 => 14,  57 => 13,  52 => 24,  50 => 22,  43 => 8,  40 => 7,  33 => 4,  30 => 6,  49 => 12,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}

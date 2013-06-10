<?php

/* AtelierMaterialBundle:Material:dispAll.html.twig */
class __TwigTemplate_1faf1b9301b9807b2d208f986c41b56e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AtelierMaterialBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'material_body' => array($this, 'block_material_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AtelierMaterialBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  List of Materials - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_material_body($context, array $blocks = array())
    {
        // line 8
        echo "<p>
\t<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("atelier_material_new");
        echo "\" class=\"btn\">
\t\t  Create a new material
\t\t  <i class=\"icon-chevron-right\"></i>
\t</a>
</p>


<h3>List of Materials</h3>
 
<p>
      ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            echo "        <i>";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</i>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</p>


<ul>
  ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list_materials"]) ? $context["list_materials"] : $this->getContext($context, "list_materials")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
            // line 27
            echo "\t<p>
\t\t";
            // line 28
            $this->env->loadTemplate("AtelierMaterialBundle:Material:material.html.twig")->display($context);
            echo " (Product <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_product_disp", array("id" => $this->getAttribute($this->getAttribute((isset($context["material"]) ? $context["material"] : $this->getContext($context, "material")), "product"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["material"]) ? $context["material"] : $this->getContext($context, "material")), "product"), "name"), "html", null, true);
            echo " </a>)
\t</p>
    <hr />
  ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 32
            echo "    <p>There aren't any materials for the moment</p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['material'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</ul>
  <div class=\"pagination\">
    <ul>
      ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 38
            echo "        <li";
            if (((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
          <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atelier_material_dispAll", array("page" => (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "html", null, true);
            echo "</a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </ul>
  </div>

";
    }

    public function getTemplateName()
    {
        return "AtelierMaterialBundle:Material:dispAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 42,  142 => 39,  135 => 38,  131 => 37,  126 => 34,  119 => 32,  98 => 28,  95 => 27,  77 => 26,  71 => 22,  62 => 20,  58 => 19,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}

<?php

/* AtelierMaterialBundle:Material:form.html.twig */
class __TwigTemplate_8bc2e2cdd25e2bd46264bb1b471e630d extends Twig_Template
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
 
<script src=\"http://code.jquery.com/jquery-1.8.2.min.js\"></script>

<script type=\"text/javascript\">
\$(document).ready(function() {
  var content = \$('div#atelier_materialbundle_materialaddtype');
  
  var container = \$('div#atelier_materialbundle_materialaddtype_productAdd');
  var container2 = \$('select#atelier_materialbundle_materialaddtype_product').parent();
 
  var lienAjout = \$('<a href=\"#\" id=\"product\" class=\"btn\">Use an existing product</a><br/><br/>');
  container.append(lienAjout);
  
   var lienAjout2 = \$('<br/><a href=\"#\" id=\"add_product\" class=\"btn\">Add a new product</a><br/><br/>');
  container2.append(lienAjout2);
 
 
 var p=container.detach();
 var p2=container2.detach();
 
  p2.prependTo(content);
  p2 = null;
 
  lienAjout2.click(function(e) {
\tif ( p ) {
\t\t p.prependTo(content);
\t\t p = null;
\t}
\tif(!p2) {
\t\tp2 = container2.detach();
\t}
    
    e.preventDefault(); // évite qu'un # apparaisse dans l'URL
    return false;
  });
  
    lienAjout.click(function(f) {
    if ( p2 ) {
\t\tp2.prependTo(content);
\t\tp2 = null;
\t}
\tif(!p) {
\t\tp = container.detach();
\t}
    
    f.preventDefault(); // évite qu'un # apparaisse dans l'URL
    return false;
  });
  
  });

</script>
";
    }

    public function getTemplateName()
    {
        return "AtelierMaterialBundle:Material:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  22 => 2,  19 => 1,  53 => 14,  49 => 12,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}

<?php

/* SensioDistributionBundle:Configurator/Step:doctrine.html.twig */
class __TwigTemplate_c6217fce4192701d01e9c65be0996097 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure database";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))));
        // line 10
        echo "
        <h1>Configure your Database</h1>
        <p>If your website needs a database connection, please configure it here.</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
        echo "\" method=\"POST\">
            <div class=\"symfony-form-column\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "driver"), 'row');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "host"), 'row');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row');
        echo "
            </div>
            <div class=\"symfony-form-column\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'row');
        echo "
            </div>

            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:doctrine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  356 => 328,  339 => 316,  295 => 275,  20 => 1,  65 => 17,  389 => 160,  386 => 159,  378 => 157,  371 => 156,  367 => 155,  358 => 151,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  307 => 128,  302 => 125,  296 => 121,  293 => 120,  290 => 119,  281 => 114,  276 => 111,  269 => 107,  259 => 103,  253 => 100,  232 => 88,  227 => 86,  222 => 83,  210 => 77,  184 => 63,  155 => 47,  152 => 46,  175 => 58,  118 => 49,  100 => 36,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 158,  373 => 156,  361 => 152,  348 => 140,  342 => 317,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 97,  233 => 87,  226 => 84,  216 => 79,  213 => 78,  207 => 75,  200 => 72,  197 => 69,  194 => 68,  191 => 67,  181 => 65,  178 => 59,  172 => 57,  150 => 55,  134 => 39,  113 => 40,  81 => 29,  34 => 4,  363 => 153,  357 => 123,  353 => 149,  351 => 141,  344 => 318,  332 => 116,  327 => 114,  324 => 113,  321 => 135,  318 => 111,  315 => 131,  306 => 107,  303 => 122,  300 => 121,  297 => 276,  291 => 102,  288 => 118,  274 => 110,  265 => 105,  263 => 95,  255 => 101,  243 => 92,  231 => 83,  212 => 78,  202 => 77,  190 => 76,  185 => 66,  174 => 65,  161 => 63,  806 => 488,  803 => 487,  792 => 485,  788 => 484,  784 => 482,  771 => 481,  745 => 476,  742 => 475,  723 => 473,  706 => 472,  702 => 470,  698 => 469,  694 => 468,  690 => 467,  686 => 466,  682 => 465,  678 => 464,  675 => 463,  673 => 462,  656 => 461,  645 => 460,  630 => 455,  625 => 453,  621 => 452,  618 => 451,  616 => 450,  602 => 449,  565 => 414,  547 => 411,  530 => 410,  527 => 409,  525 => 408,  520 => 406,  515 => 404,  244 => 136,  188 => 90,  170 => 56,  153 => 56,  97 => 41,  63 => 21,  127 => 35,  110 => 38,  102 => 43,  90 => 20,  76 => 27,  53 => 11,  58 => 15,  104 => 37,  23 => 1,  59 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 150,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 115,  278 => 106,  268 => 85,  264 => 84,  258 => 94,  252 => 80,  247 => 78,  241 => 93,  235 => 89,  229 => 87,  224 => 81,  220 => 81,  214 => 69,  208 => 76,  169 => 60,  143 => 51,  140 => 58,  132 => 51,  128 => 49,  119 => 40,  107 => 37,  71 => 23,  177 => 65,  165 => 60,  160 => 61,  135 => 62,  126 => 45,  114 => 42,  84 => 35,  70 => 19,  67 => 18,  61 => 12,  28 => 3,  201 => 92,  196 => 92,  183 => 70,  171 => 61,  166 => 54,  163 => 53,  158 => 62,  156 => 58,  151 => 59,  142 => 59,  138 => 57,  136 => 48,  121 => 50,  117 => 39,  105 => 25,  91 => 29,  62 => 16,  49 => 12,  94 => 38,  89 => 30,  85 => 26,  75 => 22,  68 => 20,  56 => 14,  93 => 28,  88 => 28,  78 => 24,  27 => 4,  87 => 33,  46 => 13,  44 => 8,  31 => 3,  25 => 35,  21 => 2,  38 => 6,  26 => 6,  24 => 3,  19 => 1,  79 => 29,  72 => 21,  69 => 17,  47 => 10,  40 => 11,  37 => 7,  22 => 2,  246 => 96,  157 => 56,  145 => 52,  139 => 49,  131 => 45,  123 => 42,  120 => 31,  115 => 40,  111 => 47,  108 => 19,  101 => 33,  98 => 34,  96 => 35,  83 => 31,  74 => 22,  66 => 25,  55 => 12,  52 => 12,  50 => 10,  43 => 11,  41 => 7,  35 => 5,  32 => 6,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 75,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 43,  144 => 42,  141 => 51,  133 => 55,  130 => 46,  125 => 51,  122 => 41,  116 => 39,  112 => 39,  109 => 47,  106 => 51,  103 => 37,  99 => 23,  95 => 34,  92 => 31,  86 => 28,  82 => 25,  80 => 24,  73 => 23,  64 => 19,  60 => 20,  57 => 19,  54 => 15,  51 => 37,  48 => 10,  45 => 9,  42 => 7,  39 => 10,  36 => 9,  33 => 6,  30 => 7,);
    }
}

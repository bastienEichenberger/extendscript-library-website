<?php

/* JlfaWebSiteBundle:webpage:licences.html.twig */
class __TwigTemplate_6a97ef8850bec31deb584f55e72f3bd76960c3263b9049d1bfef8d2646fdc1a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::backbone.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::backbone.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Licences</h1>
    <div class=\"row\">
        <div class=\"col-lg-7\">
            <h2>Open source project</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
        </div>
        <div class=\"col-md-3\">
            <img class=\"featurette-image img-responsive\" src=\"data:image/png;base64,\" data-src=\"holder.js/500x500/auto\" alt=\"Generic placeholder image\">
        </div>
    </div>
    <hr class=\"featurette-divider\">
    <div class=\"row green\">
        <div class=\"col-lg-12\">
            <h2>What can you do</h2>
            <div class=\"col-lg-6\">
              <img class=\"img-circle\" src=\"data:image/png;base64,\" data-src=\"holder.js/140x140\" alt=\"Generic placeholder image\">
              <h3 class=\"logo\">Use</h3>
              <p>The principal goal of JLFA is to  in JavaSce</p>
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-6\">
              <img class=\"img-circle\" src=\"data:image/png;base64,\" data-src=\"holder.js/140x140\" alt=\"Generic placeholder image\">
              <h3 class=\"logo\">Sell personnal scripts</h3>
              <p>Work together to improve the developpement. The graphic industrie has to improve their process to become stronger.</p>
            </div><!-- /.col-lg-4 -->
        </div>
    </div><!-- /.row -->
    <hr class=\"featurette-divider\">
    <div class=\"row red\">
        <div class=\"col-lg-12\">
            <h2>What cannot  do</h2>
            <div class=\"col-lg-6\">
              <img class=\"img-circle\" src=\"data:image/png;base64,\" data-src=\"holder.js/140x140\" alt=\"Generic placeholder image\">
              <h3 class=\"logo\">Use</h3>
              <p>The principal goal of JLFA is to  in JavaSce</p>
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-6\">
              <img class=\"img-circle\" src=\"data:image/png;base64,\" data-src=\"holder.js/140x140\" alt=\"Generic placeholder image\">
              <h3 class=\"logo\">Sell personnal scripts</h3>
              <p>Work together to improve the developpement. The graphic industrie has to improve their process to become stronger.</p>
            </div><!-- /.col-lg-4 -->
        </div>
    </div><!-- /.row -->
";
    }

    public function getTemplateName()
    {
        return "JlfaWebSiteBundle:webpage:licences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 85,  194 => 84,  184 => 84,  113 => 52,  65 => 16,  181 => 59,  170 => 56,  155 => 63,  153 => 76,  90 => 28,  174 => 73,  152 => 60,  148 => 59,  127 => 50,  104 => 29,  100 => 39,  137 => 41,  126 => 61,  53 => 10,  23 => 4,  222 => 72,  190 => 70,  185 => 61,  178 => 85,  175 => 84,  124 => 43,  110 => 37,  97 => 32,  84 => 17,  81 => 16,  58 => 14,  34 => 7,  172 => 70,  150 => 60,  146 => 59,  134 => 53,  118 => 40,  114 => 41,  77 => 22,  70 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 85,  140 => 55,  132 => 53,  128 => 45,  107 => 36,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 72,  159 => 64,  143 => 57,  135 => 67,  119 => 62,  102 => 39,  71 => 28,  67 => 21,  63 => 25,  59 => 12,  38 => 5,  94 => 32,  89 => 35,  85 => 33,  75 => 29,  68 => 19,  56 => 15,  87 => 25,  21 => 1,  26 => 12,  93 => 35,  88 => 32,  78 => 37,  46 => 15,  27 => 5,  44 => 10,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 45,  166 => 84,  163 => 55,  158 => 54,  156 => 66,  151 => 47,  142 => 72,  138 => 54,  136 => 53,  121 => 48,  117 => 44,  105 => 41,  91 => 44,  62 => 24,  49 => 19,  24 => 7,  25 => 5,  19 => 2,  79 => 30,  72 => 23,  69 => 20,  47 => 10,  40 => 7,  37 => 13,  22 => 3,  246 => 90,  157 => 77,  145 => 56,  139 => 71,  131 => 52,  123 => 47,  120 => 46,  115 => 43,  111 => 43,  108 => 30,  101 => 28,  98 => 38,  96 => 31,  83 => 25,  74 => 13,  66 => 19,  55 => 20,  52 => 17,  50 => 10,  43 => 12,  41 => 9,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 85,  182 => 63,  176 => 64,  173 => 65,  168 => 67,  164 => 66,  162 => 79,  154 => 58,  149 => 75,  147 => 46,  144 => 73,  141 => 55,  133 => 55,  130 => 37,  125 => 49,  122 => 63,  116 => 53,  112 => 31,  109 => 42,  106 => 36,  103 => 51,  99 => 40,  95 => 36,  92 => 29,  86 => 28,  82 => 31,  80 => 19,  73 => 27,  64 => 16,  60 => 14,  57 => 20,  54 => 14,  51 => 16,  48 => 12,  45 => 15,  42 => 11,  39 => 7,  36 => 7,  33 => 4,  30 => 3,);
    }
}

<?php

/* AcmeDemoBundle:Halloween:index.html.twig */
class __TwigTemplate_4d8b9cafbe0c53594683b3eed7c98f857de9fbde2859f61872fb28b37695f3ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<body>
 <div id=\"wrapper\">
  <nav class=\"navbar navbar-default navbar-cls-top \" role=\"navigation\"
   style=\"margin-bottom: 0\">
   <div class=\"navbar-header\">
    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
     data-target=\".sidebar-collapse\">
     <span class=\"sr-only\">Toggle navigation</span> <span
      class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span
      class=\"icon-bar\"></span>
    </button>
    <a class=\"navbar-brand\" href=\"\">BTS SIO</a>
   </div>
   <div
    style=\"color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;\">
    Une production SIO du lycée Léonard de Vinci - Melun (77) &nbsp;
    <!-- a href=\"#\" class=\"btn btn-danger square-btn-adjust\">Login</a -->
   </div>
  </nav>
  <!-- /. NAV TOP  -->
  <nav class=\"navbar-default navbar-side\" role=\"navigation\">
   <div class=\"sidebar-collapse\">
    <ul class=\"nav\" id=\"main-menu\">
     <li class=\"text-center\"><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/logo-ldv.png"), "html", null, true);
        echo "\"
      class=\"logo-image img-responsive\" /></li>
     <li><a class=\"active-menu\" href=\"#\"
      onclick=\"insertContentPage('intro');return false;\"><i
       class=\"fa fa-dashboard fa-3x\"></i> Index</a></li>
     <li><a href=\"#\"
      onclick=\"insertContentPage('partionneur');return false;\"><i
       class=\"fa fa-group fa-3x\"></i> Générateur de groupes</a></li>
     <li><a href=\"#\" onclick=\"insertContentPage('vide');return false;\"><i
       class=\"fa fa-edit fa-3x\"></i> [...] </a></li>
    </ul>
   </div>
  </nav>
  <!-- /. NAV SIDE  -->
  <div id=\"page-wrapper\">
    <div id=\"page-inner\">
      <div class=\"row\">
        <div class=\"col-md-12\">
           <h2>Une production interne de la section BTS SIO du lycée
           Léonard de Vinci de Melun</h2>
        </div> <!-- col -->
      </div> <!-- row -->
    </div> <!-- /. PAGE INNER  -->
  </div> <!-- /. PAGE WRAPPER  -->
</div> <!-- /. WRAPPER  -->
</body>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Halloween:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 27,  31 => 4,  28 => 3,);
    }
}

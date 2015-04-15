<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_9bcc5198db1ac97e701040e29582f103162d8c52758af357fc70a10e39db9e44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<head>
    <title>Halloween Project</title>
    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/style.css"), "html", null, true);
        echo "\" />
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/bootstrap.css"), "html", null, true);
        echo "\"href=\"assets/css/bootstrap.css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/font-awesome.css"), "html", null, true);
        echo "\"href=\"assets/css/font-awesome.css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/custom.css"), "html", null, true);
        echo "\"href=\"assets/css/custom.css\" rel=\"stylesheet\" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 14
        echo "
<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/custom.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
\tfunction insertContentPage(\$page) {
\t\t\$.ajax({
\t\t\turl : \$page,
\t\t\ttype : 'GET',
\t\t\tcache : false,
\t\t\tdataType : 'html',
\t\t\tsuccess : function(code_html, statut) { 
\t\t\t\t\$(\"#page-inner\").html(code_html);
\t\t\t}
\t\t});
\t}
    
    \$(document).ready(function() {
    \tinsertContentPage(\"intro\");
    });
   
 </script>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 13,  66 => 18,  62 => 17,  58 => 16,  54 => 15,  51 => 14,  49 => 13,  42 => 9,  38 => 8,  34 => 7,  28 => 4,  24 => 3,  20 => 1,);
    }
}

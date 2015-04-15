<?php

/* AcmeDemoBundle:Halloween:partionneur.html.twig */
class __TwigTemplate_8c5e316f23af3a21aeccc3c50a561b257fb68f09cadf579c7a588b632e5633d7 extends Twig_Template
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
        echo "<div id=\"content\">
    <script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/generateurGroupe.js"), "html", null, true);
        echo "\"></script>  

    <div class=\"panel panel-default\">
       <div class=\"panel-heading\">Générateur de groupes</div>
       <div class=\"panel-body\">
        <div class=\"row\">
          <div style=\"padding-left:1em;padding-right:1em;\">
       Cette application vous permet de générer aléatoirement des groupes de
       travail (pour des devoirs par exemple)<br />
       Veuillez vous connecter pour pouvoir sélectionner la classe à partitionner.
          </div>
        </div>
       </div>
    </div>

<div id=\"content2\">
    <div class=\"panel panel-default\">
       <div class=\"panel-heading\">Connexion</div>
       <div class=\"panel-body\">
        <div class=\"row\">
            <center>
                <div id=\"error\"></div>
                <table style=\"margin:auto;width:75%;\">
                    <tr>
                        <td style=\"margin:auto;width:50%;\">Nom d'utilisateur :<td>
                        <td style=\"margin:auto;\"><input class=\"form-control\" type=\"text\" name=\"user\" id=\"user\"><td>
                    </tr>
                    <tr>
                        <td style=\"margin:auto;\"> Mot de passe :<td>
                        <td style=\"margin:auto;\"><input class=\"form-control\" type=\"password\" name=\"pass\" id=\"pass\"><td>
                    </tr>
                    <tr>
                        <td style=\"margin:auto;\" colspan=\"3\"><button type=\"submit\" class=\"btn btn-default\" style=\"width:100%;\" onClick=\"loginPage();\">Se connecter</button></td>
                    </tr>
                </table>
            </center>
        </div>
       </div>
    </div>
</div>
    
    <script type=\"text/javascript\">
    function jsoncallback(objetJS) {
    
            textHTML = '<div class=\"panel panel-default\">'
        + '<div class=\"panel-heading\">Classe partitionnée</div>'
        + '<div class=\"panel-body\">'
        + '<div class=\"row\">';
            var nbGroupe = objetJS.length;
            for(i = 0; i < objetJS.length; i++)
            {
                    textHTML = textHTML+\"<ul>\";
                            for(u = 0; u < objetJS[i].length; u++)
                            {
                                    textHTML = textHTML+\"<li>\"+objetJS[i][u].nom+\" \"+objetJS[i][u].prenom+\"</li>\";
                            }
                    textHTML = textHTML+\"</ul>\";
            }
            textHTML = textHTML+\"</div></div></div>\";
      \$(\"#divpartitionneur\").html(textHTML);

    }

    function loginPage() {
        \$.ajax({
\t\turl : \"login\",
\t\ttype : 'POST',
\t\tcache : false,
\t\tdataType : 'html',
\t\tdata: { user: document.getElementById('user').value, pass: document.getElementById('pass').value },
\t\tsuccess : function(html, statut) {
                        if(html == \"false\")
                        {
                            document.getElementById('error').innerHTML = \"Combinaison nom de compte/mot de passe inconnue !<br><br>\";
                        }
                        else if(html == \"noclasse\")
                        {
                            document.getElementById('error').innerHTML = \"Vous n'avez aucune classe pour pouvoir faire un partitionnemment !<br><br>\";
                        }
                        else
                        {
                            document.getElementById('content2').innerHTML = html;
                        }
\t\t}
\t});
    }

    function postPage(\$page) {
            \$.ajax({
                    url : \$page,
                    type : 'POST',
                    cache : false,
                    dataType : 'json',
                    data: { maxCardGroupe: document.getElementById('maxCardGroupe').value, liste: document.getElementById('liste').value },
                    success : function(json, statut) {
                            document.getElementById('panel').style = \"visibility:visible;\";
                            jsoncallback(json);\t\t\t\t
                    }
            })
                     .done(function( msg )
                    {
                            document.getElementById('panel').style = \"visibility:visible;\";
                    });
    }
    
    function getPartitionneur(\$idClasse) {
        \$.ajax({
\t\turl : \"getPartitionneur\",
\t\ttype : 'POST',
\t\tcache : false,
\t\tdataType : 'html',
\t\tdata: { classe: \$idClasse },
\t\tsuccess : function(html, statut) {
                    if(html == \"false\")
                    {
                        document.getElementById('error').innerHTML = \"<center>Il n'y a pas d'élèves dans cette classe !</center><br>\";
                        document.getElementById('content3').innerHTML = \"\";
                    }
                    else
                    {
                        document.getElementById('content3').innerHTML = html;
                        document.getElementById('error').innerHTML = \"\";
                    }
\t\t}
\t});
    }
    
    function Partitionneur(\$idClasse) {
        if(document.getElementById('cardinal').value != \"\")
        {
            \$.ajax({
\t\turl : \"partitionneur\",
\t\ttype : 'POST',
\t\tcache : false,
\t\tdataType : 'json',
\t\tdata: { classe: \$idClasse, maxCardGroupe: document.getElementById('cardinal').value },
\t\tsuccess : function(json, statut) {
\t\t\tjsoncallback(json);\t\t\t\t
\t\t}
            });
        }
        else
        {
            alert('Vous devez renseigner le cardinal !');
        }
    }
    </script>
</div>";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Halloween:partionneur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}

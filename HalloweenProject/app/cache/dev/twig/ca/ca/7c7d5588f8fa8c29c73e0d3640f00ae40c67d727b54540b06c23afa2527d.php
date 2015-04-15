<?php

/* AcmeDemoBundle:Halloween:getPartitionneur.html.twig */
class __TwigTemplate_caca7c7d5588f8fa8c29c73e0d3640f00ae40c67d727b54540b06c23afa2527d extends Twig_Template
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
        if (((isset($context["hasEleves"]) ? $context["hasEleves"] : $this->getContext($context, "hasEleves")) == "true")) {
            // line 2
            echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Options de partitionnement</div>
        <div class=\"panel-body\">
            <div class=\"row\">
                <div class=\"divpadder\">
                    <div id=\"error\"></div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">Remplir les champs suivants</div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"divpadder\">
                                        <table style=\"width:100%;\">
                                            <tr>
                                                <td style=\"width:50%;\"><label for=\"cardinal\">Cardinal :</label></td>
                                                <td style=\"width:50%;\"><input type=\"text\" class=\"form-control\" id=\"cardinal\" placeholder=\"Entrez le cardinal (clé de répartition)\"></td>
                                            </tr>
                                            <tr>
                                                <td colspan=\"2\"><button type=\"submit\" class=\"btn btn-default\" style=\"width:100%;\" onclick=\"Partitionneur('";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["idClasse"]) ? $context["idClasse"] : $this->getContext($context, "idClasse")), "html", null, true);
            echo "');\">Partitionner la classe</button></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">Eleves dans la classe</div>
                                <div class=\"panel-body\">
                                    <div class=\"row\">
                                        <div class=\"divpadder\"><center><strong>
                                            ";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["elevesClasse"]) ? $context["elevesClasse"] : $this->getContext($context, "elevesClasse")));
            foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
                // line 32
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "nom"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "prenom"), "html", null, true);
                echo "<br>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                                        </strong></center></div>
                                    </div>
                                </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
                                            
<div id=\"divpartitionneur\"></div>
";
        }
        // line 45
        if (((isset($context["hasEleves"]) ? $context["hasEleves"] : $this->getContext($context, "hasEleves")) == "false")) {
            echo "false";
        }
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Halloween:getPartitionneur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 45,  70 => 34,  59 => 32,  55 => 31,  40 => 19,  21 => 2,  19 => 1,);
    }
}

<?php

/* AcmeDemoBundle:Halloween:login.html.twig */
class __TwigTemplate_5847cddeb2e49360d23951d957f2514589986745562b58fad6fce81cf7d6d697 extends Twig_Template
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
        if (((isset($context["isLogged"]) ? $context["isLogged"] : $this->getContext($context, "isLogged")) == "true")) {
            // line 2
            echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Liste des classes</div>
        <div class=\"panel-body\">
            <div class=\"row\">
                <div class=\"divpadder\">
                    <div id=\"error\"></div>
                    
           ";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")));
            foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
                // line 10
                echo "               
               ";
                // line 11
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "eleves")) == 0)) {
                    // line 12
                    echo "                    <div class=\"panel-heading\">Classe : <strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "label"), "html", null, true);
                    echo " (vide)</strong></div>
              
            ";
                } else {
                    // line 15
                    echo "            <div class=\"panel-heading\">Classe : <strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "label"), "html", null, true);
                    echo " (Nombre d'élèves : ";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "eleves")), "html", null, true);
                    echo ")</strong></div>
            ";
                }
                // line 16
                echo " 
               
                <div class=\"row\">
                    <div class=\"divpadder\"><button type=\"submit\" class=\"btn btn-default\" style=\"width:100%;\" onClick=\"getPartitionneur('";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "id"), "html", null, true);
                echo "');\">Sélectionner cette classe</button></div>
                </div>
            </div>
        </div>
            
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "            
        
                </div>
            </div>
        </div>
    </div>
        
<div id=\"content3\"></div>
";
        }
        // line 34
        if ((!(isset($context["isLogged"]) ? $context["isLogged"] : $this->getContext($context, "isLogged")))) {
            echo "false";
        }
        // line 35
        if (array_key_exists("hasClasse", $context)) {
            echo "noclasse";
        }
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Halloween:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 35,  82 => 34,  71 => 25,  59 => 19,  54 => 16,  46 => 15,  39 => 12,  37 => 11,  34 => 10,  30 => 9,  21 => 2,  19 => 1,);
    }
}

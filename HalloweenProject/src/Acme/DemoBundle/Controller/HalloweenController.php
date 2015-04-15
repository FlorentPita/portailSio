<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Acme\DemoBundle\Form\ContactType;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Session\Session;

class HalloweenController extends Controller
{
    /**
     * @Route("/", name="_index")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
    
    /**
     * @Route("/intro", name="_intro")
     * @Template()
     */
    public function introAction()
    {
        return array();
    }
    
    /**
     * @Route("/vide", name="_vide")
     * @Template()
     */
    public function videAction()
    {
        return array();
    }
    
    /**
     * @Route("/partionneur", name="_partionneur")
     * @Template()
     */
    public function partionneurAction()
    {
        return array();
    }
    
    /**
     * @Route("/login", name="_login")
     * @Template()
     */
    public function loginAction(Request $request)
    {
        $session = $request->getSession();
        $user = $request->get("user");
        $pass = $request->get("pass");
        
        if($user && $pass)
        {
            // On peux regarder si l'utilisateur existe.
            $professeurQuery = $this->getDoctrine()->getRepository('AcmeDemoBundle:Professeur')
                    ->findOneBy(array('login' => $user, 'password' => $pass));
            
            if($professeurQuery)
            {
                // Si on arrive ici, c'est que le professeur est connecté. Gestion des sessions.
                $session->set('professeur', $professeurQuery);
                if(count($professeurQuery->getClasses()) == 0)
                {
                    return array('hasClasse' => false); // Pas de classe.
                }
                else
                {
                    // On revoit les classes. On gère le reste coté TWIG.
                    return array('classes' => $professeurQuery->getClasses(), 'isLogged' => true);
                    
                }
            }
            else
            {
                // Gérer l'exception.
                return array('isLogged' => false); // Pas d'utilisateur.
            }
        }
        else
        {
            // Gérer l'exception.
            return array('isLogged' => false); // Mauvaise combinaisons.
        }
    }
    
    /**
     * @Route("/getPartitionneur", name="_get_partitionneur")
     * @Template()
     */
    public function getPartitionneurAction(Request $request)
    {
        $id = $request->get("classe");
        
        // On récupère les élèves de la classe.
        $classeQuery = $this->getDoctrine()->getRepository('AcmeDemoBundle:Classe')
                    ->findOneBy(array('id' => $id));
        
        $elevesClasse = $classeQuery->getEleves();
        $countEleves = count($elevesClasse);
        
        if($countEleves == 0)
        {
            return array('hasEleves' => "false");
        }
        else
        {
            return array('hasEleves' => "true", 'idClasse' => $id, 'countEleves' => $countEleves, 'elevesClasse' => $elevesClasse);
        }
    }
    
    /**
     * @Route("/partitionneur", name="_partitionneur")
     * @Template()
     */
    public function partitionneurAction(Request $request)
    {
        $idClasse = $request->get('classe');
        $maxCardGroupe = $request->get('maxCardGroupe');
        
        // On récupère les élèves de la classe.
        $classeQuery = $this->getDoctrine()->getRepository('AcmeDemoBundle:Classe')
                    ->findOneBy(array('id' => $idClasse));
        $elevesClasse = $classeQuery->getEleves();
        
        $liste = array();
        foreach($elevesClasse as $eleve)
        {
            $liste[] = $eleve->getPrenom().";".$eleve->getNom();
        }
        
        // Partie affichage optionnel.
        shuffle($liste);
        $i = count($liste);

        // Fonction de partitionnement.
        function partitionneurProsJerome($tab, $i, $cardinal)
        {
                // On va tout d'abord répartir les groupes.
                $nbGroupe = ceil($i / $cardinal);
                $u = 0;
                // On sais maintenant qu'il y a $nbGroupe groupes et qu'il y a $i membres à répartir.
                for($v = 0; $v < $i; $v++) // Pour chaque personne
                {
                        $groupe[$u][] = $tab[$v];
                        $u++;
                        if($u == $nbGroupe)
                        {
                                $u = 0;
                        }
                }

                for($u = 0; $u < $nbGroupe; $u++)
                {
                        $count = count($groupe[$u]);
                        for($w = 0; $w < $count; $w++)
                        {
                                $personne = explode(';',$groupe[$u][$w]);
                                $groupe[$u][$w] = array("prenom" => $personne[0], "nom" => $personne[1]);
                        }
                }

                // $json_groupe = json_encode($groupe, JSON_PRETTY_PRINT);
                return $groupe;

        }

        // Partie affichage du traitement.
        $json = partitionneurProsJerome($liste, $i, $maxCardGroupe);
        
        return new Response(json_encode($json, JSON_PRETTY_PRINT));
    }
}

<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \Acme\DemoBundle\Entity\Professeur as Professeur;

/**
 * @ORM\Entity
 * @ORM\Table()
 */
class Classe
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $label;
    
    /**
     * @ORM\ManyToMany(targetEntity="Professeur", mappedBy="classes")
     */
    private $professeurs;
    
    /**
     * @ORM\OneToMany(targetEntity="Eleve", mappedBy="classe")
     */
    private $eleves;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->professeurs = new \Doctrine\Common\Collections\ArrayCollection();
        $this->eleves = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return Classe
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Add professeurs
     *
     * @param \Acme\DemoBundle\Entity\Professeur $professeurs
     * @return Classe
     */
    public function addProfesseur(Professeur $professeurs)
    {
        $this->professeurs[] = $professeurs;

        return $this;
    }

    /**
     * Remove professeurs
     *
     * @param \Acme\DemoBundle\Entity\Professeur $professeurs
     */
    public function removeProfesseur(\Acme\DemoBundle\Entity\Professeur $professeurs)
    {
        $this->professeurs->removeElement($professeurs);
    }

    /**
     * Get professeurs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProfesseurs()
    {
        return $this->professeurs;
    }

    /**
     * Add eleves
     *
     * @param \Acme\DemoBundle\Entity\Eleve $eleves
     * @return Classe
     */
    public function addEleve(\Acme\DemoBundle\Entity\Eleve $eleves)
    {
        $this->eleves[] = $eleves;

        return $this;
    }

    /**
     * Remove eleves
     *
     * @param \Acme\DemoBundle\Entity\Eleve $eleves
     */
    public function removeElefe(\Acme\DemoBundle\Entity\Eleve $eleves)
    {
        $this->eleves->removeElement($eleves);
    }

    /**
     * Get eleves
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEleves()
    {
        return $this->eleves;
    }
}

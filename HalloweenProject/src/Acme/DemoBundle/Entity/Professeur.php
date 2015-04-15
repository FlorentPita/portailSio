<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table()
 */
class Professeur
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
    private $login;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $password;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nom;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $prenom;
    
    /**
     * @ORM\ManyToMany(targetEntity="Classe", inversedBy="professeurs")
     */
    private $classes;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->classes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Professeur
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Professeur
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Professeur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Professeur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Add classes
     *
     * @param \Acme\DemoBundle\Entity\Classe $classes
     * @return Professeur
     */
    public function addClass(\Acme\DemoBundle\Entity\Classe $classes)
    {
        $this->classes[] = $classes;

        return $this;
    }

    /**
     * Remove classes
     *
     * @param \Acme\DemoBundle\Entity\Classe $classes
     */
    public function removeClass(\Acme\DemoBundle\Entity\Classe $classes)
    {
        $this->classes->removeElement($classes);
    }

    /**
     * Get classes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClasses()
    {
        return $this->classes;
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
}

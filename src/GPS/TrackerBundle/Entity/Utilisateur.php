<?php

namespace GPS\TrackerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Commom\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Utilisateur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GPS\TrackerBundle\Entity\UtilisateurRepository")
 */
class Utilisateur
{
    /**
    * @ORM\OneToMany(targetEntity="Appareil", mappedBy="utilisateur", cascade={"remove", "persist"})
    */
    private $appareils;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=255, unique=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;


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
     * Set nom
     *
     * @param string $nom
     * @return Utilisateur
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
     * @return Utilisateur
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
     * Set login
     *
     * @param string $login
     * @return Utilisateur
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
     * @return Utilisateur
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

    /*
        Construction et initialisation de notre objet ArrayCollection appareils
    */

    public function __construct(){
        $this->appareils = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add appareils
     *
     * @param \GPS\TrackerBundle\Entity\Appareil $appareils
     * @return Utilisateur
     */
    public function addAppareil(\GPS\TrackerBundle\Entity\Appareil $appareils)
    {
        $this->appareils[] = $appareils;

        return $this;
    }

    /**
     * Remove appareils
     *
     * @param \GPS\TrackerBundle\Entity\Appareil $appareils
     */
    public function removeAppareil(\GPS\TrackerBundle\Entity\Appareil $appareils)
    {
        $this->appareils->removeElement($appareils);
    }

    /**
     * Get appareils
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAppareils()
    {
        return $this->appareils;
    }
}
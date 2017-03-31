<?php

namespace GPS\TrackerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Commom\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Appareil
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GPS\TrackerBundle\Entity\AppareilRepository")
 */
class Appareil
{

    /**
    * @ORM\ManyToOne(targetEntity="Utilisateur", inversedBy="appareils")
    * @ORM\JoinColumn(name="utilisateur_id", referencedColumnName="id")
    */
    private $utilisateur;

    /**
    * @ORM\OneToMany(targetEntity="Credential", mappedBy="appareil", cascade={"persist"})
    */
    private $credentials;

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
     * @ORM\Column(name="codeAppareil", type="string", length=255, unique=true)
     */
    private $codeAppareil;

    /**
     * @var string
     *
     * @ORM\Column(name="nomAppareil", type="string", length=255)
     */
    private $nomAppareil;

    /**
     * @var string
     *
     * @ORM\Column(name="typeAppareil", type="string", length=255, nullable=true)
     */
    private $typeAppareil;

    /**
     * @var string
     *
     * @ORM\Column(name="descAppareil", type="string", length=255)
     */
    private $descAppareil;


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
     * Set codeAppareil
     *
     * @param string $codeAppareil
     * @return Appareil
     */
    public function setCodeAppareil($codeAppareil)
    {
        $this->codeAppareil = $codeAppareil;

        return $this;
    }

    /**
     * Get codeAppareil
     *
     * @return string
     */
    public function getCodeAppareil()
    {
        return $this->codeAppareil;
    }

    //Constructeur
    public function __construct(){
        $credentials = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set utilisateur
     *
     * @param \GPS\TrackerBundle\Entity\Utilisateur $utilisateur
     * @return Appareil
     */
    public function setUtilisateur(\GPS\TrackerBundle\Entity\Utilisateur $utilisateur = null)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \GPS\TrackerBundle\Entity\Utilisateur
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Add credentials
     *
     * @param \GPS\TrackerBundle\Entity\Credential $credentials
     * @return Appareil
     */
    public function addCredential(\GPS\TrackerBundle\Entity\Credential $credentials)
    {
        $this->credentials[] = $credentials;

        return $this;
    }

    /**
     * Remove credentials
     *
     * @param \GPS\TrackerBundle\Entity\Credential $credentials
     */
    public function removeCredential(\GPS\TrackerBundle\Entity\Credential $credentials)
    {
        $this->credentials->removeElement($credentials);
    }

    /**
     * Get credentials
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * Set typeAppareil
     *
     * @param string $typeAppareil
     * @return Appareil
     */
    public function setTypeAppareil($typeAppareil)
    {
        $this->typeAppareil = $typeAppareil;

        return $this;
    }

    /**
     * Get typeAppareil
     *
     * @return string
     */
    public function getTypeAppareil()
    {
        return $this->typeAppareil;
    }

    /**
     * Set nomAppareil
     *
     * @param string $nomAppareil
     * @return Appareil
     */
    public function setNomAppareil($nomAppareil)
    {
        $this->nomAppareil = $nomAppareil;

        return $this;
    }

    /**
     * Get nomAppareil
     *
     * @return string
     */
    public function getNomAppareil()
    {
        return $this->nomAppareil;
    }

    /**
     * Set descAppareil
     *
     * @param string $descAppareil
     * @return Appareil
     */
    public function setDescAppareil($descAppareil)
    {
        $this->descAppareil = $descAppareil;

        return $this;
    }

    /**
     * Get descAppareil
     *
     * @return string
     */
    public function getDescAppareil()
    {
        return $this->descAppareil;
    }
}

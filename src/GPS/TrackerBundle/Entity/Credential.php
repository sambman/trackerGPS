<?php

namespace GPS\TrackerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Credential
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GPS\TrackerBundle\Entity\CredentialRepository")
 */
class Credential
{
    /**
    * @ORM\ManyToOne(targetEntity="Appareil", inversedBy="credentials")
    * @ORM\JoinColumn(name="appareil_id", referencedColumnName="id")
    */
    private $appareil;

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
     * @ORM\Column(name="lat", type="string", length=255)
     */
    private $lat;

    /**
     * @var string
     *
     * @ORM\Column(name="lng", type="string", length=255)
     */
    private $lng;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="instant", type="datetime")
     */
    private $instant;

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="text")
     */
    private $info;


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
     * Set lat
     *
     * @param string $lat
     * @return Credential
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return string
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lng
     *
     * @param string $lng
     * @return Credential
     */
    public function setLng($lng)
    {
        $this->lng = $lng;

        return $this;
    }

    /**
     * Get lng
     *
     * @return string
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * Set instant
     *
     * @param \DateTime $instant
     * @return Credential
     */
    public function setInstant($instant)
    {
        $this->instant = $instant;

        return $this;
    }

    /**
     * Get instant
     *
     * @return \DateTime
     */
    public function getInstant()
    {
        return $this->instant;
    }

    /**
     * Set info
     *
     * @param string $info
     * @return Credential
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set appareil
     *
     * @param \GPS\TrackerBundle\Entity\Appareil $appareil
     * @return Credential
     */
    public function setAppareil(\GPS\TrackerBundle\Entity\Appareil $appareil = null)
    {
        $this->appareil = $appareil;

        return $this;
    }

    /**
     * Get appareil
     *
     * @return \GPS\TrackerBundle\Entity\Appareil
     */
    public function getAppareil()
    {
        return $this->appareil;
    }
}
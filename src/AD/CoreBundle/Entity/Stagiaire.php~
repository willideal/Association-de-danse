<?php

namespace AD\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stagiaire
 *
 * @ORM\Table(name="stagiaire")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AD\CoreBundle\Repository\StagiaireRepository")
 */
class Stagiaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idStagiaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idstagiaire;

    /**
     * @var string
     *
     * @ORM\Column(name="nomStagiaire", type="string", length=32, nullable=true)
     */
    private $nomstagiaire;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomStagiaire", type="string", length=32, nullable=true)
     */
    private $prenomstagiaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="telStagiaire", type="integer", nullable=true)
     */
    private $telstagiaire;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Stage", mappedBy="idstagiaire")
     */
    private $idstage;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idstage = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idstagiaire
     *
     * @return integer 
     */
    public function getIdstagiaire()
    {
        return $this->idstagiaire;
    }

    /**
     * Set nomstagiaire
     *
     * @param string $nomstagiaire
     * @return Stagiaire
     */
    public function setNomstagiaire($nomstagiaire)
    {
        $this->nomstagiaire = $nomstagiaire;

        return $this;
    }

    /**
     * Get nomstagiaire
     *
     * @return string 
     */
    public function getNomstagiaire()
    {
        return $this->nomstagiaire;
    }

    /**
     * Set prenomstagiaire
     *
     * @param string $prenomstagiaire
     * @return Stagiaire
     */
    public function setPrenomstagiaire($prenomstagiaire)
    {
        $this->prenomstagiaire = $prenomstagiaire;

        return $this;
    }

    /**
     * Get prenomstagiaire
     *
     * @return string 
     */
    public function getPrenomstagiaire()
    {
        return $this->prenomstagiaire;
    }

    /**
     * Set telstagiaire
     *
     * @param integer $telstagiaire
     * @return Stagiaire
     */
    public function setTelstagiaire($telstagiaire)
    {
        $this->telstagiaire = $telstagiaire;

        return $this;
    }

    /**
     * Get telstagiaire
     *
     * @return integer 
     */
    public function getTelstagiaire()
    {
        return $this->telstagiaire;
    }

    /**
     * Add idstage
     *
     * @param \AD\CoreBundle\Entity\Stage $idstage
     * @return Stagiaire
     */
    public function addIdstage(\AD\CoreBundle\Entity\Stage $idstage)
    {
        $this->idstage[] = $idstage;

        return $this;
    }

    /**
     * Remove idstage
     *
     * @param \AD\CoreBundle\Entity\Stage $idstage
     */
    public function removeIdstage(\AD\CoreBundle\Entity\Stage $idstage)
    {
        $this->idstage->removeElement($idstage);
    }

    /**
     * Get idstage
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdstage()
    {
        return $this->idstage;
    }
}

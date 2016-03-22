<?php

namespace AD\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adherent
 *
 * @ORM\Table(name="adherent", indexes={@ORM\Index(name="I_FK_adherent_reduction", columns={"idReduction"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AD\CoreBundle\Repository\AdherentRepository")
 */
class Adherent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idAdherent", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idadherent;

    /**
     * @var string
     *
     * @ORM\Column(name="nomAdherent", type="string", length=32, nullable=true)
     */
    private $nomadherent;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomAdherent", type="string", length=32, nullable=true)
     */
    private $prenomadherent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissAdherent", type="date", nullable=true)
     */
    private $datenaissadherent;

    /**
     * @var integer
     *
     * @ORM\Column(name="telAdherent", type="integer", nullable=true)
     */
    private $teladherent;

    /**
     * @var string
     *
     * @ORM\Column(name="eMailAdherent", type="string", length=32, nullable=true)
     */
    private $emailadherent;

    /**
     * @var \Reduction
     *
     * @ORM\ManyToOne(targetEntity="Reduction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idReduction", referencedColumnName="idReduction")
     * })
     */
    private $idreduction;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Saison", inversedBy="idadherent")
     * @ORM\JoinTable(name="adherer",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idAdherent", referencedColumnName="idAdherent")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idSaison", referencedColumnName="idSaison")
     *   }
     * )
     */
    private $idsaison;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idsaison = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idadherent
     *
     * @return integer 
     */
    public function getIdadherent()
    {
        return $this->idadherent;
    }

    /**
     * Set nomadherent
     *
     * @param string $nomadherent
     * @return Adherent
     */
    public function setNomadherent($nomadherent)
    {
        $this->nomadherent = $nomadherent;

        return $this;
    }

    /**
     * Get nomadherent
     *
     * @return string 
     */
    public function getNomadherent()
    {
        return $this->nomadherent;
    }

    /**
     * Set prenomadherent
     *
     * @param string $prenomadherent
     * @return Adherent
     */
    public function setPrenomadherent($prenomadherent)
    {
        $this->prenomadherent = $prenomadherent;

        return $this;
    }

    /**
     * Get prenomadherent
     *
     * @return string 
     */
    public function getPrenomadherent()
    {
        return $this->prenomadherent;
    }

    /**
     * Set datenaissadherent
     *
     * @param \DateTime $datenaissadherent
     * @return Adherent
     */
    public function setDatenaissadherent($datenaissadherent)
    {
        $this->datenaissadherent = $datenaissadherent;

        return $this;
    }

    /**
     * Get datenaissadherent
     *
     * @return \DateTime 
     */
    public function getDatenaissadherent()
    {
        return $this->datenaissadherent;
    }

    /**
     * Set teladherent
     *
     * @param integer $teladherent
     * @return Adherent
     */
    public function setTeladherent($teladherent)
    {
        $this->teladherent = $teladherent;

        return $this;
    }

    /**
     * Get teladherent
     *
     * @return integer 
     */
    public function getTeladherent()
    {
        return $this->teladherent;
    }

    /**
     * Set emailadherent
     *
     * @param string $emailadherent
     * @return Adherent
     */
    public function setEmailadherent($emailadherent)
    {
        $this->emailadherent = $emailadherent;

        return $this;
    }

    /**
     * Get emailadherent
     *
     * @return string 
     */
    public function getEmailadherent()
    {
        return $this->emailadherent;
    }

    /**
     * Set idreduction
     *
     * @param \AD\CoreBundle\Entity\Reduction $idreduction
     * @return Adherent
     */
    public function setIdreduction(\AD\CoreBundle\Entity\Reduction $idreduction = null)
    {
        $this->idreduction = $idreduction;

        return $this;
    }

    /**
     * Get idreduction
     *
     * @return \AD\CoreBundle\Entity\Reduction 
     */
    public function getIdreduction()
    {
        return $this->idreduction;
    }

    /**
     * Add idsaison
     *
     * @param \AD\CoreBundle\Entity\Saison $idsaison
     * @return Adherent
     */
    public function addIdsaison(\AD\CoreBundle\Entity\Saison $idsaison)
    {
        $this->idsaison[] = $idsaison;

        return $this;
    }

    /**
     * Remove idsaison
     *
     * @param \AD\CoreBundle\Entity\Saison $idsaison
     */
    public function removeIdsaison(\AD\CoreBundle\Entity\Saison $idsaison)
    {
        $this->idsaison->removeElement($idsaison);
    }

    /**
     * Get idsaison
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdsaison()
    {
        return $this->idsaison;
    }
}

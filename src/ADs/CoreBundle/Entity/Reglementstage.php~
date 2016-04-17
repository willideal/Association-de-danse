<?php

namespace AD\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reglementstage
 *
 * @ORM\Table(name="reglementstage", indexes={@ORM\Index(name="I_FK_reglementStage_stage", columns={"idStage"}), @ORM\Index(name="I_FK_reglementStage_stagiaire", columns={"idStagiaire"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AD\CoreBundle\Repository\ReglementstageRepository")
 */
class Reglementstage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idReglementStage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idreglementstage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateReglement", type="date", nullable=true)
     */
    private $datereglement;

    /**
     * @var integer
     *
     * @ORM\Column(name="montantReglement", type="integer", nullable=true)
     */
    private $montantreglement;

    /**
     * @var string
     *
     * @ORM\Column(name="etatReglement", type="string", length=32, nullable=true)
     */
    private $etatreglement;

    /**
     * @var \Stage
     *
     * @ORM\ManyToOne(targetEntity="Stage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idStage", referencedColumnName="idStage")
     * })
     */
    private $idstage;

    /**
     * @var \Stagiaire
     *
     * @ORM\ManyToOne(targetEntity="Stagiaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idStagiaire", referencedColumnName="idStagiaire")
     * })
     */
    private $idstagiaire;



    /**
     * Get idreglementstage
     *
     * @return integer 
     */
    public function getIdreglementstage()
    {
        return $this->idreglementstage;
    }

    /**
     * Set datereglement
     *
     * @param \DateTime $datereglement
     * @return Reglementstage
     */
    public function setDatereglement($datereglement)
    {
        $this->datereglement = $datereglement;

        return $this;
    }

    /**
     * Get datereglement
     *
     * @return \DateTime 
     */
    public function getDatereglement()
    {
        return $this->datereglement;
    }

    /**
     * Set montantreglement
     *
     * @param integer $montantreglement
     * @return Reglementstage
     */
    public function setMontantreglement($montantreglement)
    {
        $this->montantreglement = $montantreglement;

        return $this;
    }

    /**
     * Get montantreglement
     *
     * @return integer 
     */
    public function getMontantreglement()
    {
        return $this->montantreglement;
    }

    /**
     * Set etatreglement
     *
     * @param string $etatreglement
     * @return Reglementstage
     */
    public function setEtatreglement($etatreglement)
    {
        $this->etatreglement = $etatreglement;

        return $this;
    }

    /**
     * Get etatreglement
     *
     * @return string 
     */
    public function getEtatreglement()
    {
        return $this->etatreglement;
    }

    /**
     * Set idstage
     *
     * @param \AD\CoreBundle\Entity\Stage $idstage
     * @return Reglementstage
     */
    public function setIdstage(\AD\CoreBundle\Entity\Stage $idstage = null)
    {
        $this->idstage = $idstage;

        return $this;
    }

    /**
     * Get idstage
     *
     * @return \AD\CoreBundle\Entity\Stage 
     */
    public function getIdstage()
    {
        return $this->idstage;
    }

    /**
     * Set idstagiaire
     *
     * @param \AD\CoreBundle\Entity\Stagiaire $idstagiaire
     * @return Reglementstage
     */
    public function setIdstagiaire(\AD\CoreBundle\Entity\Stagiaire $idstagiaire = null)
    {
        $this->idstagiaire = $idstagiaire;

        return $this;
    }

    /**
     * Get idstagiaire
     *
     * @return \AD\CoreBundle\Entity\Stagiaire 
     */
    public function getIdstagiaire()
    {
        return $this->idstagiaire;
    }
}

<?php

namespace AD\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stage
 *
 * @ORM\Table(name="stage", indexes={@ORM\Index(name="I_FK_stage_salle", columns={"idSalle"}), @ORM\Index(name="I_FK_stage_danse", columns={"idDanse"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AD\CoreBundle\Repository\StageRepository")
 */
class Stage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idStage", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idstage;

    /**
     * @var string
     *
     * @ORM\Column(name="intituleStage", type="string", length=32, nullable=true)
     */
    private $intitulestage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateStage", type="date", nullable=true)
     */
    private $datestage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heureDebutStage", type="time", nullable=true)
     */
    private $heuredebutstage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heureFinStage", type="time", nullable=true)
     */
    private $heurefinstage;

    /**
     * @var integer
     *
     * @ORM\Column(name="tarifStage", type="integer", nullable=true)
     */
    private $tarifstage;

    /**
     * @var integer
     *
     * @ORM\Column(name="plafond", type="integer", nullable=true)
     */
    private $plafond;

    /**
     * @var integer
     *
     * @ORM\Column(name="seuilViabilite", type="integer", nullable=true)
     */
    private $seuilviabilite;

    /**
     * @var integer
     *
     * @ORM\Column(name="delaiPreinscription", type="integer", nullable=true)
     */
    private $delaipreinscription;

    /**
     * @var integer
     *
     * @ORM\Column(name="montantPreinscription", type="integer", nullable=true)
     */
    private $montantpreinscription;

    /**
     * @var \Salle
     *
     * @ORM\ManyToOne(targetEntity="Salle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSalle", referencedColumnName="idSalle")
     * })
     */
    private $idsalle;

    /**
     * @var \Danse
     *
     * @ORM\ManyToOne(targetEntity="Danse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDanse", referencedColumnName="idDanse")
     * })
     */
    private $iddanse;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Professeur", mappedBy="idstage")
     */
    private $idprof;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Stagiaire", inversedBy="idstage")
     * @ORM\JoinTable(name="inscriptionstage",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idStage", referencedColumnName="idStage")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idStagiaire", referencedColumnName="idStagiaire")
     *   }
     * )
     */
    private $idstagiaire;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Niveau", mappedBy="idstage")
     */
    private $idniveau;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idprof = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idstagiaire = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idniveau = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idstage
     *
     * @return integer 
     */
    public function getIdstage()
    {
        return $this->idstage;
    }

    /**
     * Set intitulestage
     *
     * @param string $intitulestage
     * @return Stage
     */
    public function setIntitulestage($intitulestage)
    {
        $this->intitulestage = $intitulestage;

        return $this;
    }

    /**
     * Get intitulestage
     *
     * @return string 
     */
    public function getIntitulestage()
    {
        return $this->intitulestage;
    }

    /**
     * Set datestage
     *
     * @param \DateTime $datestage
     * @return Stage
     */
    public function setDatestage($datestage)
    {
        $this->datestage = $datestage;

        return $this;
    }

    /**
     * Get datestage
     *
     * @return \DateTime 
     */
    public function getDatestage()
    {
        return $this->datestage;
    }

    /**
     * Set heuredebutstage
     *
     * @param \DateTime $heuredebutstage
     * @return Stage
     */
    public function setHeuredebutstage($heuredebutstage)
    {
        $this->heuredebutstage = $heuredebutstage;

        return $this;
    }

    /**
     * Get heuredebutstage
     *
     * @return \DateTime 
     */
    public function getHeuredebutstage()
    {
        return $this->heuredebutstage;
    }

    /**
     * Set heurefinstage
     *
     * @param \DateTime $heurefinstage
     * @return Stage
     */
    public function setHeurefinstage($heurefinstage)
    {
        $this->heurefinstage = $heurefinstage;

        return $this;
    }

    /**
     * Get heurefinstage
     *
     * @return \DateTime 
     */
    public function getHeurefinstage()
    {
        return $this->heurefinstage;
    }

    /**
     * Set tarifstage
     *
     * @param integer $tarifstage
     * @return Stage
     */
    public function setTarifstage($tarifstage)
    {
        $this->tarifstage = $tarifstage;

        return $this;
    }

    /**
     * Get tarifstage
     *
     * @return integer 
     */
    public function getTarifstage()
    {
        return $this->tarifstage;
    }

    /**
     * Set plafond
     *
     * @param integer $plafond
     * @return Stage
     */
    public function setPlafond($plafond)
    {
        $this->plafond = $plafond;

        return $this;
    }

    /**
     * Get plafond
     *
     * @return integer 
     */
    public function getPlafond()
    {
        return $this->plafond;
    }

    /**
     * Set seuilviabilite
     *
     * @param integer $seuilviabilite
     * @return Stage
     */
    public function setSeuilviabilite($seuilviabilite)
    {
        $this->seuilviabilite = $seuilviabilite;

        return $this;
    }

    /**
     * Get seuilviabilite
     *
     * @return integer 
     */
    public function getSeuilviabilite()
    {
        return $this->seuilviabilite;
    }

    /**
     * Set delaipreinscription
     *
     * @param integer $delaipreinscription
     * @return Stage
     */
    public function setDelaipreinscription($delaipreinscription)
    {
        $this->delaipreinscription = $delaipreinscription;

        return $this;
    }

    /**
     * Get delaipreinscription
     *
     * @return integer 
     */
    public function getDelaipreinscription()
    {
        return $this->delaipreinscription;
    }

    /**
     * Set montantpreinscription
     *
     * @param integer $montantpreinscription
     * @return Stage
     */
    public function setMontantpreinscription($montantpreinscription)
    {
        $this->montantpreinscription = $montantpreinscription;

        return $this;
    }

    /**
     * Get montantpreinscription
     *
     * @return integer 
     */
    public function getMontantpreinscription()
    {
        return $this->montantpreinscription;
    }

    /**
     * Set idsalle
     *
     * @param \AD\CoreBundle\Entity\Salle $idsalle
     * @return Stage
     */
    public function setIdsalle(\AD\CoreBundle\Entity\Salle $idsalle = null)
    {
        $this->idsalle = $idsalle;

        return $this;
    }

    /**
     * Get idsalle
     *
     * @return \AD\CoreBundle\Entity\Salle 
     */
    public function getIdsalle()
    {
        return $this->idsalle;
    }

    /**
     * Set iddanse
     *
     * @param \AD\CoreBundle\Entity\Danse $iddanse
     * @return Stage
     */
    public function setIddanse(\AD\CoreBundle\Entity\Danse $iddanse = null)
    {
        $this->iddanse = $iddanse;

        return $this;
    }

    /**
     * Get iddanse
     *
     * @return \AD\CoreBundle\Entity\Danse 
     */
    public function getIddanse()
    {
        return $this->iddanse;
    }

    /**
     * Add idprof
     *
     * @param \AD\CoreBundle\Entity\Professeur $idprof
     * @return Stage
     */
    public function addIdprof(\AD\CoreBundle\Entity\Professeur $idprof)
    {
        $this->idprof[] = $idprof;

        return $this;
    }

    /**
     * Remove idprof
     *
     * @param \AD\CoreBundle\Entity\Professeur $idprof
     */
    public function removeIdprof(\AD\CoreBundle\Entity\Professeur $idprof)
    {
        $this->idprof->removeElement($idprof);
    }

    /**
     * Get idprof
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdprof()
    {
        return $this->idprof;
    }

    /**
     * Add idstagiaire
     *
     * @param \AD\CoreBundle\Entity\Stagiaire $idstagiaire
     * @return Stage
     */
    public function addIdstagiaire(\AD\CoreBundle\Entity\Stagiaire $idstagiaire)
    {
        $this->idstagiaire[] = $idstagiaire;

        return $this;
    }

    /**
     * Remove idstagiaire
     *
     * @param \AD\CoreBundle\Entity\Stagiaire $idstagiaire
     */
    public function removeIdstagiaire(\AD\CoreBundle\Entity\Stagiaire $idstagiaire)
    {
        $this->idstagiaire->removeElement($idstagiaire);
    }

    /**
     * Get idstagiaire
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdstagiaire()
    {
        return $this->idstagiaire;
    }

    /**
     * Add idniveau
     *
     * @param \AD\CoreBundle\Entity\Niveau $idniveau
     * @return Stage
     */
    public function addIdniveau(\AD\CoreBundle\Entity\Niveau $idniveau)
    {
        $this->idniveau[] = $idniveau;

        return $this;
    }

    /**
     * Remove idniveau
     *
     * @param \AD\CoreBundle\Entity\Niveau $idniveau
     */
    public function removeIdniveau(\AD\CoreBundle\Entity\Niveau $idniveau)
    {
        $this->idniveau->removeElement($idniveau);
    }

    /**
     * Get idniveau
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdniveau()
    {
        return $this->idniveau;
    }
}

<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stage
 *
 * @ORM\Table(name="stage", indexes={@ORM\Index(name="I_FK_stage_salle", columns={"idSalle"}), @ORM\Index(name="I_FK_stage_danse", columns={"idDanse"})})
 * @ORM\Entity
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
     * @var \Danse
     *
     * @ORM\ManyToOne(targetEntity="AD\PresaisonBundle\Entity\Danse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDanse", referencedColumnName="idDanse")
     * })
     */
    private $iddanse;

    /**
     * @var \Salle
     *
     * @ORM\ManyToOne(targetEntity="AD\PresaisonBundle\Entity\Salle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSalle", referencedColumnName="idSalle")
     * })
     */
    private $idsalle;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AD\PresaisonBundle\Entity\Professeur", mappedBy="idstage")
     */
    private $idprof;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AD\StageBundle\Entity\Stagiaire", inversedBy="idstage")
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
     * @ORM\ManyToMany(targetEntity="AD\PresaisonBundle\Entity\Niveau", mappedBy="idstage")
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

}

<?php

namespace AD\StageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reglementstage
 *
 * @ORM\Table(name="reglementstage", indexes={@ORM\Index(name="I_FK_reglementStage_stage", columns={"idStage"}), @ORM\Index(name="I_FK_reglementStage_stagiaire", columns={"idStagiaire"})})
 * @ORM\Entity
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
     * @var \Stagiaire
     *
     * @ORM\ManyToOne(targetEntity="AD\StageBundle\Entity\Stagiaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idStagiaire", referencedColumnName="idStagiaire")
     * })
     */
    private $idstagiaire;

    /**
     * @var \Stage
     *
     * @ORM\ManyToOne(targetEntity="AD\StageBundle\Entity\Stage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idStage", referencedColumnName="idStage")
     * })
     */
    private $idstage;


}

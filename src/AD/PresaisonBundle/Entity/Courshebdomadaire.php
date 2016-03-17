<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Courshebdomadaire
 *
 * @ORM\Table(name="courshebdomadaire", indexes={@ORM\Index(name="I_FK_coursHebdomadaire_salle", columns={"idSalle"}), @ORM\Index(name="I_FK_coursHebdomadaire_danse", columns={"idDanse"}), @ORM\Index(name="I_FK_coursHebdomadaire_niveau", columns={"idNiveau"}), @ORM\Index(name="I_FK_coursHebdomadaire_professeur", columns={"idProf"})})
 * @ORM\Entity
 */
class Courshebdomadaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCoursHebdo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcourshebdo;

    /**
     * @var string
     *
     * @ORM\Column(name="jourCoursHebdo", type="string", length=32, nullable=true)
     */
    private $jourcourshebdo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heureDebutCoursHebdo", type="time", nullable=true)
     */
    private $heuredebutcourshebdo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heureFinCoursHebdo", type="time", nullable=true)
     */
    private $heurefincourshebdo;

    /**
     * @var \AD\PresaisonBundle\Entity\Professeur
     *
     * @ORM\ManyToOne(targetEntity="AD\PresaisonBundle\Entity\Professeur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProf", referencedColumnName="idProf")
     * })
     */
    private $idprof;

    /**
     * @var \AD\PresaisonBundle\Entity\Salle
     *
     * @ORM\ManyToOne(targetEntity="AD\PresaisonBundle\Entity\Salle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSalle", referencedColumnName="idSalle")
     * })
     */
    private $idsalle;

    /**
     * @var \AD\PresaisonBundle\Entity\Danse
     *
     * @ORM\ManyToOne(targetEntity="AD\PresaisonBundle\Entity\Danse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDanse", referencedColumnName="idDanse")
     * })
     */
    private $iddanse;

    /**
     * @var \AD\PresaisonBundle\Entity\Niveau
     *
     * @ORM\ManyToOne(targetEntity="AD\PresaisonBundle\Entity\Niveau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idNiveau", referencedColumnName="idNiveau")
     * })
     */
    private $idniveau;


}

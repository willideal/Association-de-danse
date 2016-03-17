<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Professeur
 *
 * @ORM\Table(name="professeur")
 * @ORM\Entity
 */
class Professeur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idProf", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprof;

    /**
     * @var string
     *
     * @ORM\Column(name="nomProf", type="string", length=32, nullable=true)
     */
    private $nomprof;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomProf", type="string", length=32, nullable=true)
     */
    private $prenomprof;

    /**
     * @var integer
     *
     * @ORM\Column(name="telProf", type="integer", nullable=true)
     */
    private $telprof;

    /**
     * @var string
     *
     * @ORM\Column(name="eMailProf", type="string", length=32, nullable=true)
     */
    private $emailprof;

    /**
     * @var integer
     *
     * @ORM\Column(name="tarifHoraireCours", type="integer", nullable=true)
     */
    private $tarifhorairecours;

    /**
     * @var integer
     *
     * @ORM\Column(name="forfaitHoraireStage", type="integer", nullable=true)
     */
    private $forfaithorairestage;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AD\PresaisonBundle\Entity\Stage", inversedBy="idprof")
     * @ORM\JoinTable(name="assure",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idProf", referencedColumnName="idProf")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idStage", referencedColumnName="idStage")
     *   }
     * )
     */
    private $idstage;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idstage = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

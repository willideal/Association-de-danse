<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Niveau
 *
 * @ORM\Table(name="niveau")
 * @ORM\Entity
 */
class Niveau
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idNiveau", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idniveau;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleNiveau", type="string", length=32, nullable=true)
     */
    private $libelleniveau;

    /**
     * @var string
     *
     * @ORM\Column(name="descNiveau", type="string", length=255, nullable=true)
     */
    private $descniveau;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AD\PresaisonBundle\Entity\Danse", inversedBy="idniveau")
     * @ORM\JoinTable(name="niveaudanse",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idNiveau", referencedColumnName="idNiveau")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idDanse", referencedColumnName="idDanse")
     *   }
     * )
     */
    private $iddanse;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AD\StageBundle\Entity\Stage", inversedBy="idniveau")
     * @ORM\JoinTable(name="niveaudansestage",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idNiveau", referencedColumnName="idNiveau")
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
        $this->iddanse = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idstage = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

<?php

namespace AD\SoireeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Soiree
 *
 * @ORM\Table(name="soiree", indexes={@ORM\Index(name="I_FK_soiree_lieu", columns={"idLieu"})})
 * @ORM\Entity
 */
class Soiree
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idSoiree", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idsoiree;

    /**
     * @var string
     *
     * @ORM\Column(name="intitule", type="string", length=32, nullable=true)
     */
    private $intitule;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateSoiree", type="date", nullable=true)
     */
    private $datesoiree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heureDebutSoiree", type="time", nullable=true)
     */
    private $heuredebutsoiree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heureFinSoiree", type="time", nullable=true)
     */
    private $heurefinsoiree;

    /**
     * @var string
     *
     * @ORM\Column(name="dresseCode", type="string", length=32, nullable=true)
     */
    private $dressecode;

    /**
     * @var integer
     *
     * @ORM\Column(name="tarifSoiree", type="integer", nullable=true)
     */
    private $tarifsoiree;

    /**
     * @var \Lieu
     *
     * @ORM\ManyToOne(targetEntity="AD\PresaisonBundle\Entity\Lieu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idLieu", referencedColumnName="idLieu")
     * })
     */
    private $idlieu;


}

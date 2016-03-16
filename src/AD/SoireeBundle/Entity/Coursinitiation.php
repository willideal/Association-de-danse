<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coursinitiation
 *
 * @ORM\Table(name="coursinitiation", indexes={@ORM\Index(name="I_FK_coursInitiation_soiree", columns={"idSoiree"}), @ORM\Index(name="I_FK_coursInitiation_danse", columns={"idDanse"}), @ORM\Index(name="I_FK_coursInitiation_salle", columns={"idSalle"})})
 * @ORM\Entity
 */
class Coursinitiation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idInitiation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idinitiation;

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
     * @var \Soiree
     *
     * @ORM\ManyToOne(targetEntity="AD\SoireeBundle\Entity\Soiree")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSoiree", referencedColumnName="idSoiree")
     * })
     */
    private $idsoiree;

    /**
     * @var \Danse
     *
     * @ORM\ManyToOne(targetEntity="AD\PresaisonBundle\Entity\Danse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDanse", referencedColumnName="idDanse")
     * })
     */
    private $iddanse;


}

<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pratiquer
 *
 * @ORM\Table(name="pratiquer", indexes={@ORM\Index(name="I_FK_pratiquer_salle", columns={"idSalle"}), @ORM\Index(name="I_FK_pratiquer_soiree", columns={"idSoiree"}), @ORM\Index(name="I_FK_pratiquer_danse", columns={"idDanse"})})
 * @ORM\Entity
 */
class Pratiquer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idPratiquer", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idpratiquer;

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
     * @var \Soiree
     *
     * @ORM\ManyToOne(targetEntity="AD\SoireeBundle\Entity\Soiree")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSoiree", referencedColumnName="idSoiree")
     * })
     */
    private $idsoiree;


}

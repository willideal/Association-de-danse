<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 *
 * @ORM\Table(name="salle", indexes={@ORM\Index(name="I_FK_salle_lieu", columns={"idLieu"})})
 * @ORM\Entity
 */
class Salle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idSalle", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idsalle;

    /**
     * @var string
     *
     * @ORM\Column(name="nomSalle", type="string", length=32, nullable=true)
     */
    private $nomsalle;

    /**
     * @var integer
     *
     * @ORM\Column(name="capacite", type="integer", nullable=true)
     */
    private $capacite;

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

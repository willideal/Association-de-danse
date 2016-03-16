<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscriptionforfait
 *
 * @ORM\Table(name="inscriptionforfait", uniqueConstraints={@ORM\UniqueConstraint(name="I_FK_inscriptionForfait_adherent", columns={"idAdherent"})}, indexes={@ORM\Index(name="I_FK_inscriptionForfait_typeForfait", columns={"idTypeForfait"})})
 * @ORM\Entity
 */
class Inscriptionforfait
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idInscriptionForfait", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idinscriptionforfait;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateInscriptionForfait", type="date", nullable=true)
     */
    private $dateinscriptionforfait;

    /**
     * @var string
     *
     * @ORM\Column(name="etatInscriptionForfait", type="string", length=32, nullable=true)
     */
    private $etatinscriptionforfait;

    /**
     * @var \Adherent
     *
     * @ORM\ManyToOne(targetEntity="AD\InscriptionBundle\Entity\Adherent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAdherent", referencedColumnName="idAdherent")
     * })
     */
    private $idadherent;

    /**
     * @var \Typeforfait
     *
     * @ORM\ManyToOne(targetEntity="AD\PresaisonBundle\Entity\Typeforfait")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTypeForfait", referencedColumnName="idTypeForfait")
     * })
     */
    private $idtypeforfait;


}

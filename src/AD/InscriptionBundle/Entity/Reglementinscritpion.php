<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reglementinscritpion
 *
 * @ORM\Table(name="reglementinscritpion", indexes={@ORM\Index(name="I_FK_reglementInscritpion_typeReglement", columns={"idTypeReglement"}), @ORM\Index(name="I_FK_reglementInscritpion_inscriptionForfait", columns={"idInscriptionForfait"})})
 * @ORM\Entity
 */
class Reglementinscritpion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idReglementInscritpion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idreglementinscritpion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateReglement", type="date", nullable=true)
     */
    private $datereglement;

    /**
     * @var \Inscriptionforfait
     *
     * @ORM\ManyToOne(targetEntity="AD\InscriptionBundle\Entity\Inscriptionforfait")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idInscriptionForfait", referencedColumnName="idInscriptionForfait")
     * })
     */
    private $idinscriptionforfait;

    /**
     * @var \Typereglement
     *
     * @ORM\ManyToOne(targetEntity="AD\InscriptionBundle\Entity\Typereglement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTypeReglement", referencedColumnName="idTypeReglement")
     * })
     */
    private $idtypereglement;


}

<?php

namespace AD\InscriptionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adherent
 *
 * @ORM\Table(name="adherent", indexes={@ORM\Index(name="I_FK_adherent_reduction", columns={"idReduction"})})
 * @ORM\Entity
 */
class Adherent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idAdherent", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idadherent;

    /**
     * @var string
     *
     * @ORM\Column(name="nomAdherent", type="string", length=32, nullable=true)
     */
    private $nomadherent;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomAdherent", type="string", length=32, nullable=true)
     */
    private $prenomadherent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissAdherent", type="date", nullable=true)
     */
    private $datenaissadherent;

    /**
     * @var integer
     *
     * @ORM\Column(name="telAdherent", type="integer", nullable=true)
     */
    private $teladherent;

    /**
     * @var string
     *
     * @ORM\Column(name="eMailAdherent", type="string", length=32, nullable=true)
     */
    private $emailadherent;

    /**
     * @var \Reduction
     *
     * @ORM\ManyToOne(targetEntity="AD\InscriptionBundle\Entity\Reduction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idReduction", referencedColumnName="idReduction")
     * })
     */
    private $idreduction;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AD\InscriptionBundle\Entity\Saison", inversedBy="idadherent")
     * @ORM\JoinTable(name="adherer",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idAdherent", referencedColumnName="idAdherent")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idSaison", referencedColumnName="idSaison")
     *   }
     * )
     */
    private $idsaison;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idsaison = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

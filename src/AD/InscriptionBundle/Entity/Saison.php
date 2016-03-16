<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saison
 *
 * @ORM\Table(name="saison")
 * @ORM\Entity
 */
class Saison
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idSaison", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idsaison;

    /**
     * @var integer
     *
     * @ORM\Column(name="annee", type="integer", nullable=true)
     */
    private $annee;

    /**
     * @var integer
     *
     * @ORM\Column(name="tarifAdhesion", type="integer", nullable=true)
     */
    private $tarifadhesion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AD\InscriptionBundle\Entity\Adherent", mappedBy="idsaison")
     */
    private $idadherent;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idadherent = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

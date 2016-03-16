<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stagiaire
 *
 * @ORM\Table(name="stagiaire")
 * @ORM\Entity
 */
class Stagiaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idStagiaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idstagiaire;

    /**
     * @var string
     *
     * @ORM\Column(name="nomStagiaire", type="string", length=32, nullable=true)
     */
    private $nomstagiaire;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomStagiaire", type="string", length=32, nullable=true)
     */
    private $prenomstagiaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="telStagiaire", type="integer", nullable=true)
     */
    private $telstagiaire;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AD\StageBundle\Entity\Stage", mappedBy="idstagiaire")
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

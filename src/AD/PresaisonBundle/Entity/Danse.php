<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Danse
 *
 * @ORM\Table(name="danse")
 * @ORM\Entity
 */
class Danse
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idDanse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $iddanse;

    /**
     * @var string
     *
     * @ORM\Column(name="nomDanse", type="string", length=32, nullable=true)
     */
    private $nomdanse;

    /**
     * @var string
     *
     * @ORM\Column(name="descrDanse", type="string", length=255, nullable=true)
     */
    private $descrdanse;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AD\PresaisonBundle\Entity\Typeforfait", inversedBy="iddanse")
     * @ORM\JoinTable(name="danseciblee",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idDanse", referencedColumnName="idDanse")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idTypeForfait", referencedColumnName="idTypeForfait")
     *   }
     * )
     */
    private $idtypeforfait;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AD\PresaisonBundle\Entity\Niveau", mappedBy="iddanse")
     */
    private $idniveau;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idtypeforfait = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idniveau = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

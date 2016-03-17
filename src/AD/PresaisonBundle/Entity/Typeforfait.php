<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typeforfait
 *
 * @ORM\Table(name="typeforfait")
 * @ORM\Entity
 */
class Typeforfait
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idTypeForfait", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeforfait;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleTypeForfait", type="string", length=32, nullable=true)
     */
    private $libelletypeforfait;

    /**
     * @var integer
     *
     * @ORM\Column(name="tarifTypeForfait", type="integer", nullable=true)
     */
    private $tariftypeforfait;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AD\PresaisonBundle\Entity\Danse", mappedBy="idtypeforfait")
     */
    private $iddanse;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->iddanse = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

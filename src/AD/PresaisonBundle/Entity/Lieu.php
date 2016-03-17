<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lieu
 *
 * @ORM\Table(name="lieu")
 * @ORM\Entity
 */
class Lieu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idLieu", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlieu;

    /**
     * @var string
     *
     * @ORM\Column(name="nomLieu", type="string", length=32, nullable=true)
     */
    private $nomlieu;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseLieu", type="string", length=32, nullable=true)
     */
    private $adresselieu;


}

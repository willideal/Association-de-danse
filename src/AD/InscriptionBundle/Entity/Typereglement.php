<?php

namespace AD\InscriptionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typereglement
 *
 * @ORM\Table(name="typereglement")
 * @ORM\Entity
 */
class Typereglement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idTypeReglement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idtypereglement;

    /**
     * @var string
     *
     * @ORM\Column(name="typeReglement", type="string", length=32, nullable=true)
     */
    private $typereglement;


}

<?php

namespace AD\InscriptionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reduction
 *
 * @ORM\Table(name="reduction")
 * @ORM\Entity
 */
class Reduction
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idReduction", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idreduction;

    /**
     * @var string
     *
     * @ORM\Column(name="typeReduction", type="string", length=32, nullable=true)
     */
    private $typereduction;

    /**
     * @var integer
     *
     * @ORM\Column(name="montantReduction", type="integer", nullable=true)
     */
    private $montantreduction;


}

<?php

namespace AD\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typereglement
 *
 * @ORM\Table(name="typereglement")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AD\CoreBundle\Repository\TypereglementRepository")
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



    /**
     * Get idtypereglement
     *
     * @return integer 
     */
    public function getIdtypereglement()
    {
        return $this->idtypereglement;
    }

    /**
     * Set typereglement
     *
     * @param string $typereglement
     * @return Typereglement
     */
    public function setTypereglement($typereglement)
    {
        $this->typereglement = $typereglement;

        return $this;
    }

    /**
     * Get typereglement
     *
     * @return string 
     */
    public function getTypereglement()
    {
        return $this->typereglement;
    }
}

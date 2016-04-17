<?php

namespace AD\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reduction
 *
 * @ORM\Table(name="reduction")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AD\CoreBundle\Repository\ReductionRepository")
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



    /**
     * Get idreduction
     *
     * @return integer 
     */
    public function getIdreduction()
    {
        return $this->idreduction;
    }

    /**
     * Set typereduction
     *
     * @param string $typereduction
     * @return Reduction
     */
    public function setTypereduction($typereduction)
    {
        $this->typereduction = $typereduction;

        return $this;
    }

    /**
     * Get typereduction
     *
     * @return string 
     */
    public function getTypereduction()
    {
        return $this->typereduction;
    }

    /**
     * Set montantreduction
     *
     * @param integer $montantreduction
     * @return Reduction
     */
    public function setMontantreduction($montantreduction)
    {
        $this->montantreduction = $montantreduction;

        return $this;
    }

    /**
     * Get montantreduction
     *
     * @return integer 
     */
    public function getMontantreduction()
    {
        return $this->montantreduction;
    }
}

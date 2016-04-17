<?php

namespace AD\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pratiquer
 *
 * @ORM\Table(name="pratiquer", indexes={@ORM\Index(name="I_FK_pratiquer_salle", columns={"idSalle"}), @ORM\Index(name="I_FK_pratiquer_soiree", columns={"idSoiree"}), @ORM\Index(name="I_FK_pratiquer_danse", columns={"idDanse"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AD\CoreBundle\Repository\PratiquerRepository")
 */
class Pratiquer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idPratiquer", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idpratiquer;

    /**
     * @var \Salle
     *
     * @ORM\ManyToOne(targetEntity="Salle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSalle", referencedColumnName="idSalle")
     * })
     */
    private $idsalle;

    /**
     * @var \Soiree
     *
     * @ORM\ManyToOne(targetEntity="Soiree")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSoiree", referencedColumnName="idSoiree")
     * })
     */
    private $idsoiree;

    /**
     * @var \Danse
     *
     * @ORM\ManyToOne(targetEntity="Danse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDanse", referencedColumnName="idDanse")
     * })
     */
    private $iddanse;



    /**
     * Get idpratiquer
     *
     * @return integer 
     */
    public function getIdpratiquer()
    {
        return $this->idpratiquer;
    }

    /**
     * Set idsalle
     *
     * @param \AD\CoreBundle\Entity\Salle $idsalle
     * @return Pratiquer
     */
    public function setIdsalle(\AD\CoreBundle\Entity\Salle $idsalle = null)
    {
        $this->idsalle = $idsalle;

        return $this;
    }

    /**
     * Get idsalle
     *
     * @return \AD\CoreBundle\Entity\Salle 
     */
    public function getIdsalle()
    {
        return $this->idsalle;
    }

    /**
     * Set idsoiree
     *
     * @param \AD\CoreBundle\Entity\Soiree $idsoiree
     * @return Pratiquer
     */
    public function setIdsoiree(\AD\CoreBundle\Entity\Soiree $idsoiree = null)
    {
        $this->idsoiree = $idsoiree;

        return $this;
    }

    /**
     * Get idsoiree
     *
     * @return \AD\CoreBundle\Entity\Soiree 
     */
    public function getIdsoiree()
    {
        return $this->idsoiree;
    }

    /**
     * Set iddanse
     *
     * @param \AD\CoreBundle\Entity\Danse $iddanse
     * @return Pratiquer
     */
    public function setIddanse(\AD\CoreBundle\Entity\Danse $iddanse = null)
    {
        $this->iddanse = $iddanse;

        return $this;
    }

    /**
     * Get iddanse
     *
     * @return \AD\CoreBundle\Entity\Danse 
     */
    public function getIddanse()
    {
        return $this->iddanse;
    }
}

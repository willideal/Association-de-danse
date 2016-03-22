<?php

namespace AD\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coursinitiation
 *
 * @ORM\Table(name="coursinitiation", indexes={@ORM\Index(name="I_FK_coursInitiation_soiree", columns={"idSoiree"}), @ORM\Index(name="I_FK_coursInitiation_danse", columns={"idDanse"}), @ORM\Index(name="I_FK_coursInitiation_salle", columns={"idSalle"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AD\CoreBundle\Repository\CoursinitiationRepository")
 */
class Coursinitiation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idInitiation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idinitiation;

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
     * @var \Salle
     *
     * @ORM\ManyToOne(targetEntity="Salle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSalle", referencedColumnName="idSalle")
     * })
     */
    private $idsalle;



    /**
     * Get idinitiation
     *
     * @return integer 
     */
    public function getIdinitiation()
    {
        return $this->idinitiation;
    }

    /**
     * Set idsoiree
     *
     * @param \AD\CoreBundle\Entity\Soiree $idsoiree
     * @return Coursinitiation
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
     * @return Coursinitiation
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

    /**
     * Set idsalle
     *
     * @param \AD\CoreBundle\Entity\Salle $idsalle
     * @return Coursinitiation
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
}

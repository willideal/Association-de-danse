<?php

namespace AD\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Soiree
 *
 * @ORM\Table(name="soiree", indexes={@ORM\Index(name="I_FK_soiree_lieu", columns={"idLieu"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AD\CoreBundle\Repository\SoireeRepository")
 */
class Soiree
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idSoiree", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idsoiree;

    /**
     * @var string
     *
     * @ORM\Column(name="intitule", type="string", length=32, nullable=true)
     */
    private $intitule;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateSoiree", type="date", nullable=true)
     */
    private $datesoiree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heureDebutSoiree", type="time", nullable=true)
     */
    private $heuredebutsoiree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heureFinSoiree", type="time", nullable=true)
     */
    private $heurefinsoiree;

    /**
     * @var string
     *
     * @ORM\Column(name="dresseCode", type="string", length=32, nullable=true)
     */
    private $dressecode;

    /**
     * @var integer
     *
     * @ORM\Column(name="tarifSoiree", type="integer", nullable=true)
     */
    private $tarifsoiree;

    /**
     * @var \Lieu
     *
     * @ORM\ManyToOne(targetEntity="Lieu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idLieu", referencedColumnName="idLieu")
     * })
     */
    private $idlieu;



    /**
     * Get idsoiree
     *
     * @return integer 
     */
    public function getIdsoiree()
    {
        return $this->idsoiree;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     * @return Soiree
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string 
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set datesoiree
     *
     * @param \DateTime $datesoiree
     * @return Soiree
     */
    public function setDatesoiree($datesoiree)
    {
        $this->datesoiree = $datesoiree;

        return $this;
    }

    /**
     * Get datesoiree
     *
     * @return \DateTime 
     */
    public function getDatesoiree()
    {
        return $this->datesoiree;
    }

    /**
     * Set heuredebutsoiree
     *
     * @param \DateTime $heuredebutsoiree
     * @return Soiree
     */
    public function setHeuredebutsoiree($heuredebutsoiree)
    {
        $this->heuredebutsoiree = $heuredebutsoiree;

        return $this;
    }

    /**
     * Get heuredebutsoiree
     *
     * @return \DateTime 
     */
    public function getHeuredebutsoiree()
    {
        return $this->heuredebutsoiree;
    }

    /**
     * Set heurefinsoiree
     *
     * @param \DateTime $heurefinsoiree
     * @return Soiree
     */
    public function setHeurefinsoiree($heurefinsoiree)
    {
        $this->heurefinsoiree = $heurefinsoiree;

        return $this;
    }

    /**
     * Get heurefinsoiree
     *
     * @return \DateTime 
     */
    public function getHeurefinsoiree()
    {
        return $this->heurefinsoiree;
    }

    /**
     * Set dressecode
     *
     * @param string $dressecode
     * @return Soiree
     */
    public function setDressecode($dressecode)
    {
        $this->dressecode = $dressecode;

        return $this;
    }

    /**
     * Get dressecode
     *
     * @return string 
     */
    public function getDressecode()
    {
        return $this->dressecode;
    }

    /**
     * Set tarifsoiree
     *
     * @param integer $tarifsoiree
     * @return Soiree
     */
    public function setTarifsoiree($tarifsoiree)
    {
        $this->tarifsoiree = $tarifsoiree;

        return $this;
    }

    /**
     * Get tarifsoiree
     *
     * @return integer 
     */
    public function getTarifsoiree()
    {
        return $this->tarifsoiree;
    }

    /**
     * Set idlieu
     *
     * @param \AD\CoreBundle\Entity\Lieu $idlieu
     * @return Soiree
     */
    public function setIdlieu(\AD\CoreBundle\Entity\Lieu $idlieu = null)
    {
        $this->idlieu = $idlieu;

        return $this;
    }

    /**
     * Get idlieu
     *
     * @return \AD\CoreBundle\Entity\Lieu 
     */
    public function getIdlieu()
    {
        return $this->idlieu;
    }
	public function __toString()
    {
        return $this->intitule;
    }
}

<?php

namespace AD\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscriptionforfait
 *
 * @ORM\Table(name="inscriptionforfait", uniqueConstraints={@ORM\UniqueConstraint(name="I_FK_inscriptionForfait_adherent", columns={"idAdherent"})}, indexes={@ORM\Index(name="I_FK_inscriptionForfait_typeForfait", columns={"idTypeForfait"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AD\CoreBundle\Repository\InscriptionforfaitRepository")
 */
class Inscriptionforfait
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idInscriptionForfait", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idinscriptionforfait;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateInscriptionForfait", type="date", nullable=true)
     */
    private $dateinscriptionforfait;

    /**
     * @var string
     *
     * @ORM\Column(name="etatInscriptionForfait", type="string", length=32, nullable=true)
     */
    private $etatinscriptionforfait;

    /**
     * @var \Typeforfait
     *
     * @ORM\ManyToOne(targetEntity="Typeforfait", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTypeForfait", referencedColumnName="idTypeForfait")
     * })
     */
    private $idtypeforfait;

    /**
     * @var \Adherent
     *
     * @ORM\ManyToOne(targetEntity="Adherent", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAdherent", referencedColumnName="idAdherent")
     * })
     */
    private $idadherent;

	
	/**
     * @var \Danse
     *
     * @ORM\ManyToOne(targetEntity="Danse", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="danse", referencedColumnName="idDanse")
     * })
     */
    private $danse;

	
	/**
     * Constructor
     */
	public function __construct(){
		
		$this->dateinscriptionforfait = new \Datetime();
		$this->etatinscriptionforfait = "Non payé";
		
	}

    /**
     * Get idinscriptionforfait
     *
     * @return integer 
     */
    public function getIdinscriptionforfait()
    {
        return $this->idinscriptionforfait;
    }

    /**
     * Set dateinscriptionforfait
     *
     * @param \DateTime $dateinscriptionforfait
     * @return Inscriptionforfait
     */
    public function setDateinscriptionforfait($dateinscriptionforfait)
    {
        $this->dateinscriptionforfait = $dateinscriptionforfait;

        return $this;
    }

    /**
     * Get dateinscriptionforfait
     *
     * @return \DateTime 
     */
    public function getDateinscriptionforfait()
    {
        return $this->dateinscriptionforfait;
    }

    /**
     * Set etatinscriptionforfait
     *
     * @param string $etatinscriptionforfait
     * @return Inscriptionforfait
     */
    public function setEtatinscriptionforfait($etatinscriptionforfait)
    {
        $this->etatinscriptionforfait = $etatinscriptionforfait;

        return $this;
    }

    /**
     * Get etatinscriptionforfait
     *
     * @return string 
     */
    public function getEtatinscriptionforfait()
    {
        return $this->etatinscriptionforfait;
    }

    /**
     * Set idtypeforfait
     *
     * @param \AD\CoreBundle\Entity\Typeforfait $idtypeforfait
     * @return Inscriptionforfait
     */
    public function setIdtypeforfait(\AD\CoreBundle\Entity\Typeforfait $idtypeforfait = null)
    {
        $this->idtypeforfait = $idtypeforfait;

        return $this;
    }

    /**
     * Get idtypeforfait
     *
     * @return \AD\CoreBundle\Entity\Typeforfait 
     */
    public function getIdtypeforfait()
    {
        return $this->idtypeforfait;
    }

    /**
     * Set idadherent
     *
     * @param \AD\CoreBundle\Entity\Adherent $idadherent
     * @return Inscriptionforfait
     */
    public function setIdadherent(\AD\CoreBundle\Entity\Adherent $idadherent = null)
    {
        $this->idadherent = $idadherent;

        return $this;
    }

    /**
     * Get idadherent
     *
     * @return \AD\CoreBundle\Entity\Adherent 
     */
    public function getIdadherent()
    {
        return $this->idadherent;
    }

    /**
     * Set danse
     *
     * @param \AD\CoreBundle\Entity\Danse $danse
     * @return Inscriptionforfait
     */
    public function setDanse(\AD\CoreBundle\Entity\Danse $danse = null)
    {
        $this->danse = $danse;

        return $this;
    }

    /**
     * Get danse
     *
     * @return \AD\CoreBundle\Entity\Danse 
     */
    public function getDanse()
    {
        return $this->danse;
    }

}

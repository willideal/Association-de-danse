<?php

namespace AD\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Professeur
 *
 * @ORM\Table(name="professeur")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AD\CoreBundle\Repository\ProfesseurRepository")
 */
class Professeur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idProf", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idprof;

    /**
     * @var string
     *
     * @ORM\Column(name="nomProf", type="string", length=32, nullable=true)
     */
    private $nomprof;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomProf", type="string", length=32, nullable=true)
     */
    private $prenomprof;

    /**
     * @var integer
     *
     * @ORM\Column(name="telProf", type="integer", nullable=true)
     */
    private $telprof;

    /**
     * @var string
     *
     * @ORM\Column(name="eMailProf", type="string", length=32, nullable=true)
     */
    private $emailprof;

    /**
     * @var integer
     *
     * @ORM\Column(name="tarifHoraireCours", type="integer", nullable=true)
     */
    private $tarifhorairecours;

    /**
     * @var integer
     *
     * @ORM\Column(name="forfaitHoraireStage", type="integer", nullable=true)
     */
    private $forfaithorairestage;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Stage", inversedBy="idprof")
     * @ORM\JoinTable(name="assure",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idProf", referencedColumnName="idProf")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idStage", referencedColumnName="idStage")
     *   }
     * )
     */
    private $idstage;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idstage = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idprof
     *
     * @return integer 
     */
    public function getIdprof()
    {
        return $this->idprof;
    }

    /**
     * Set nomprof
     *
     * @param string $nomprof
     * @return Professeur
     */
    public function setNomprof($nomprof)
    {
        $this->nomprof = $nomprof;

        return $this;
    }

    /**
     * Get nomprof
     *
     * @return string 
     */
    public function getNomprof()
    {
        return $this->nomprof;
    }

    /**
     * Set prenomprof
     *
     * @param string $prenomprof
     * @return Professeur
     */
    public function setPrenomprof($prenomprof)
    {
        $this->prenomprof = $prenomprof;

        return $this;
    }

    /**
     * Get prenomprof
     *
     * @return string 
     */
    public function getPrenomprof()
    {
        return $this->prenomprof;
    }

    /**
     * Set telprof
     *
     * @param integer $telprof
     * @return Professeur
     */
    public function setTelprof($telprof)
    {
        $this->telprof = $telprof;

        return $this;
    }

    /**
     * Get telprof
     *
     * @return integer 
     */
    public function getTelprof()
    {
        return $this->telprof;
    }

    /**
     * Set emailprof
     *
     * @param string $emailprof
     * @return Professeur
     */
    public function setEmailprof($emailprof)
    {
        $this->emailprof = $emailprof;

        return $this;
    }

    /**
     * Get emailprof
     *
     * @return string 
     */
    public function getEmailprof()
    {
        return $this->emailprof;
    }

    /**
     * Set tarifhorairecours
     *
     * @param integer $tarifhorairecours
     * @return Professeur
     */
    public function setTarifhorairecours($tarifhorairecours)
    {
        $this->tarifhorairecours = $tarifhorairecours;

        return $this;
    }

    /**
     * Get tarifhorairecours
     *
     * @return integer 
     */
    public function getTarifhorairecours()
    {
        return $this->tarifhorairecours;
    }

    /**
     * Set forfaithorairestage
     *
     * @param integer $forfaithorairestage
     * @return Professeur
     */
    public function setForfaithorairestage($forfaithorairestage)
    {
        $this->forfaithorairestage = $forfaithorairestage;

        return $this;
    }

    /**
     * Get forfaithorairestage
     *
     * @return integer 
     */
    public function getForfaithorairestage()
    {
        return $this->forfaithorairestage;
    }

    /**
     * Add idstage
     *
     * @param \AD\CoreBundle\Entity\Stage $idstage
     * @return Professeur
     */
    public function addIdstage(\AD\CoreBundle\Entity\Stage $idstage)
    {
        $this->idstage[] = $idstage;

        return $this;
    }

    /**
     * Remove idstage
     *
     * @param \AD\CoreBundle\Entity\Stage $idstage
     */
    public function removeIdstage(\AD\CoreBundle\Entity\Stage $idstage)
    {
        $this->idstage->removeElement($idstage);
    }

    /**
     * Get idstage
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdstage()
    {
        return $this->idstage;
    }
	
	public function getPrenomNom()
	{
		return $this->prenomprof.' '.$this->nomprof;
	}
	
	 public function __toString()
    {
        return $this->prenomprof.' '.$this->nomprof;
    }
}

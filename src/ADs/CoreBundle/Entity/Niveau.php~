<?php

namespace AD\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Niveau
 *
 * @ORM\Table(name="niveau")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AD\CoreBundle\Repository\NiveauRepository")
 */
class Niveau
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idNiveau", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idniveau;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleNiveau", type="string", length=32, nullable=true)
     */
    private $libelleniveau;

    /**
     * @var string
     *
     * @ORM\Column(name="descNiveau", type="string", length=255, nullable=true)
     */
    private $descniveau;

	   /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Danse", mappedBy="idniveau")
     */
	 
    private $iddanse;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Stage", inversedBy="idniveau")
     * @ORM\JoinTable(name="niveaudansestage",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idNiveau", referencedColumnName="idNiveau")
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
        $this->iddanse = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idstage = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idniveau
     *
     * @return integer 
     */
    public function getIdniveau()
    {
        return $this->idniveau;
    }

    /**
     * Set libelleniveau
     *
     * @param string $libelleniveau
     * @return Niveau
     */
    public function setLibelleniveau($libelleniveau)
    {
        $this->libelleniveau = $libelleniveau;

        return $this;
    }

    /**
     * Get libelleniveau
     *
     * @return string 
     */
    public function getLibelleniveau()
    {
        return $this->libelleniveau;
    }

    /**
     * Set descniveau
     *
     * @param string $descniveau
     * @return Niveau
     */
    public function setDescniveau($descniveau)
    {
        $this->descniveau = $descniveau;

        return $this;
    }

    /**
     * Get descniveau
     *
     * @return string 
     */
    public function getDescniveau()
    {
        return $this->descniveau;
    }

    /**
     * Add iddanse
     *
     * @param \AD\CoreBundle\Entity\Danse $iddanse
     * @return Niveau
     */
    public function addIddanse(\AD\CoreBundle\Entity\Danse $iddanse)
    {
        $this->iddanse[] = $iddanse;

        return $this;
    }

    /**
     * Remove iddanse
     *
     * @param \AD\CoreBundle\Entity\Danse $iddanse
     */
    public function removeIddanse(\AD\CoreBundle\Entity\Danse $iddanse)
    {
        $this->iddanse->removeElement($iddanse);
    }

    /**
     * Get iddanse
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIddanse()
    {
        return $this->iddanse;
    }

    /**
     * Add idstage
     *
     * @param \AD\CoreBundle\Entity\Stage $idstage
     * @return Niveau
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
	
	 public function __toString()
    {
        return $this->libelleniveau;
    }
}

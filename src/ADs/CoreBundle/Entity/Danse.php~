<?php

namespace AD\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Danse
 *
 * @ORM\Table(name="danse")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AD\CoreBundle\Repository\DanseRepository")
 */
class Danse
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idDanse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $iddanse;

    /**
     * @var string
     *
     * @ORM\Column(name="nomDanse", type="string", length=32, nullable=true)
     */
    private $nomdanse;

    /**
     * @var string
     *
     * @ORM\Column(name="descrDanse", type="string", length=255, nullable=true)
     */
    private $descrdanse;
	 
	 /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Typeforfait", mappedBy="iddanse")
     */
    private $idtypeforfait;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Niveau", inversedBy="iddanse")
     * @ORM\JoinTable(name="niveaudanse",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idDanse", referencedColumnName="idDanse")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idNiveau", referencedColumnName="idNiveau")
     *   }
     * )
     */
    private $idniveau;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idtypeforfait = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idniveau = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get iddanse
     *
     * @return integer 
     */
    public function getIddanse()
    {
        return $this->iddanse;
    }

    /**
     * Set nomdanse
     *
     * @param string $nomdanse
     * @return Danse
     */
    public function setNomdanse($nomdanse)
    {
        $this->nomdanse = $nomdanse;

        return $this;
    }

    /**
     * Get nomdanse
     *
     * @return string 
     */
    public function getNomdanse()
    {
        return $this->nomdanse;
    }

    /**
     * Set descrdanse
     *
     * @param string $descrdanse
     * @return Danse
     */
    public function setDescrdanse($descrdanse)
    {
        $this->descrdanse = $descrdanse;

        return $this;
    }

    /**
     * Get descrdanse
     *
     * @return string 
     */
    public function getDescrdanse()
    {
        return $this->descrdanse;
    }

    /**
     * Add idtypeforfait
     *
     * @param \AD\CoreBundle\Entity\Typeforfait $idtypeforfait
     * @return Danse
     */
    public function addIdtypeforfait(\AD\CoreBundle\Entity\Typeforfait $idtypeforfait)
    {
        $this->idtypeforfait[] = $idtypeforfait;

        return $this;
    }

    /**
     * Remove idtypeforfait
     *
     * @param \AD\CoreBundle\Entity\Typeforfait $idtypeforfait
     */
    public function removeIdtypeforfait(\AD\CoreBundle\Entity\Typeforfait $idtypeforfait)
    {
        $this->idtypeforfait->removeElement($idtypeforfait);
    }

    /**
     * Get idtypeforfait
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdtypeforfait()
    {
        return $this->idtypeforfait;
    }

    /**
     * Add idniveau
     *
     * @param \AD\CoreBundle\Entity\Niveau $idniveau
     * @return Danse
     */
    public function addIdniveau(\AD\CoreBundle\Entity\Niveau $idniveau)
    {
        $this->idniveau[] = $idniveau;

        return $this;
    }

    /**
     * Remove idniveau
     *
     * @param \AD\CoreBundle\Entity\Niveau $idniveau
     */
    public function removeIdniveau(\AD\CoreBundle\Entity\Niveau $idniveau)
    {
        $this->idniveau->removeElement($idniveau);
    }

    /**
     * Get idniveau
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdniveau()
    {
        return $this->idniveau;
    }
	
	 public function __toString()
    {
        return $this->nomdanse;
    }
}

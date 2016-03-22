<?php

namespace AD\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typeforfait
 *
 * @ORM\Table(name="typeforfait")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AD\CoreBundle\Repository\TypeforfaitRepository")
 */
class Typeforfait
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idTypeForfait", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idtypeforfait;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleTypeForfait", type="string", length=32, nullable=true)
     */
    private $libelletypeforfait;

    /**
     * @var integer
     *
     * @ORM\Column(name="tarifTypeForfait", type="integer", nullable=true)
     */
    private $tariftypeforfait;
 /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Danse", inversedBy="idtypeforfait")
     * @ORM\JoinTable(name="danseciblee",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idTypeForfait", referencedColumnName="idTypeForfait")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idDanse", referencedColumnName="idDanse")
     *   }
     * )
     */
    private $iddanse;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->iddanse = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idtypeforfait
     *
     * @return integer 
     */
    public function getIdtypeforfait()
    {
        return $this->idtypeforfait;
    }

    /**
     * Set libelletypeforfait
     *
     * @param string $libelletypeforfait
     * @return Typeforfait
     */
    public function setLibelletypeforfait($libelletypeforfait)
    {
        $this->libelletypeforfait = $libelletypeforfait;

        return $this;
    }

    /**
     * Get libelletypeforfait
     *
     * @return string 
     */
    public function getLibelletypeforfait()
    {
        return $this->libelletypeforfait;
    }

    /**
     * Set tariftypeforfait
     *
     * @param integer $tariftypeforfait
     * @return Typeforfait
     */
    public function setTariftypeforfait($tariftypeforfait)
    {
        $this->tariftypeforfait = $tariftypeforfait;

        return $this;
    }

    /**
     * Get tariftypeforfait
     *
     * @return integer 
     */
    public function getTariftypeforfait()
    {
        return $this->tariftypeforfait;
    }

    /**
     * Add iddanse
     *
     * @param \AD\CoreBundle\Entity\Danse $iddanse
     * @return Typeforfait
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
}

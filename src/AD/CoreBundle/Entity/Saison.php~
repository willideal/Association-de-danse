<?php

namespace AD\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saison
 *
 * @ORM\Table(name="saison")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AD\CoreBundle\Repository\SaisonRepository")
 */
class Saison
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idSaison", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idsaison;

    /**
     * @var integer
     *
     * @ORM\Column(name="annee", type="integer", nullable=true)
     */
    private $annee;

    /**
     * @var integer
     *
     * @ORM\Column(name="tarifAdhesion", type="integer", nullable=true)
     */
    private $tarifadhesion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Adherent", mappedBy="idsaison")
     */
    private $idadherent;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idadherent = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idsaison
     *
     * @return integer 
     */
    public function getIdsaison()
    {
        return $this->idsaison;
    }

    /**
     * Set annee
     *
     * @param integer $annee
     * @return Saison
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return integer 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set tarifadhesion
     *
     * @param integer $tarifadhesion
     * @return Saison
     */
    public function setTarifadhesion($tarifadhesion)
    {
        $this->tarifadhesion = $tarifadhesion;

        return $this;
    }

    /**
     * Get tarifadhesion
     *
     * @return integer 
     */
    public function getTarifadhesion()
    {
        return $this->tarifadhesion;
    }

    /**
     * Add idadherent
     *
     * @param \AD\CoreBundle\Entity\Adherent $idadherent
     * @return Saison
     */
    public function addIdadherent(\AD\CoreBundle\Entity\Adherent $idadherent)
    {
        $this->idadherent[] = $idadherent;

        return $this;
    }

    /**
     * Remove idadherent
     *
     * @param \AD\CoreBundle\Entity\Adherent $idadherent
     */
    public function removeIdadherent(\AD\CoreBundle\Entity\Adherent $idadherent)
    {
        $this->idadherent->removeElement($idadherent);
    }

    /**
     * Get idadherent
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdadherent()
    {
        return $this->idadherent;
    }
}

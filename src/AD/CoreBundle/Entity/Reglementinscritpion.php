<?php

namespace AD\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reglementinscritpion
 *
 * @ORM\Table(name="reglementinscritpion", indexes={@ORM\Index(name="I_FK_reglementInscritpion_typeReglement", columns={"idTypeReglement"}), @ORM\Index(name="I_FK_reglementInscritpion_inscriptionForfait", columns={"idInscriptionForfait"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AD\CoreBundle\Repository\ReglementinscritpionRepository")
 */
class Reglementinscritpion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idReglementInscritpion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idreglementinscritpion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateReglement", type="date", nullable=true)
     */
    private $datereglement;

    /**
     * @var \Typereglement
     *
     * @ORM\ManyToOne(targetEntity="Typereglement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTypeReglement", referencedColumnName="idTypeReglement")
     * })
     */
    private $idtypereglement;

    /**
     * @var \Inscriptionforfait
     *
     * @ORM\ManyToOne(targetEntity="Inscriptionforfait")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idInscriptionForfait", referencedColumnName="idInscriptionForfait")
     * })
     */
    private $idinscriptionforfait;



    /**
     * Get idreglementinscritpion
     *
     * @return integer 
     */
    public function getIdreglementinscritpion()
    {
        return $this->idreglementinscritpion;
    }

    /**
     * Set datereglement
     *
     * @param \DateTime $datereglement
     * @return Reglementinscritpion
     */
    public function setDatereglement($datereglement)
    {
        $this->datereglement = $datereglement;

        return $this;
    }

    /**
     * Get datereglement
     *
     * @return \DateTime 
     */
    public function getDatereglement()
    {
        return $this->datereglement;
    }

    /**
     * Set idtypereglement
     *
     * @param \AD\CoreBundle\Entity\Typereglement $idtypereglement
     * @return Reglementinscritpion
     */
    public function setIdtypereglement(\AD\CoreBundle\Entity\Typereglement $idtypereglement = null)
    {
        $this->idtypereglement = $idtypereglement;

        return $this;
    }

    /**
     * Get idtypereglement
     *
     * @return \AD\CoreBundle\Entity\Typereglement 
     */
    public function getIdtypereglement()
    {
        return $this->idtypereglement;
    }

    /**
     * Set idinscriptionforfait
     *
     * @param \AD\CoreBundle\Entity\Inscriptionforfait $idinscriptionforfait
     * @return Reglementinscritpion
     */
    public function setIdinscriptionforfait(\AD\CoreBundle\Entity\Inscriptionforfait $idinscriptionforfait = null)
    {
        $this->idinscriptionforfait = $idinscriptionforfait;

        return $this;
    }

    /**
     * Get idinscriptionforfait
     *
     * @return \AD\CoreBundle\Entity\Inscriptionforfait 
     */
    public function getIdinscriptionforfait()
    {
        return $this->idinscriptionforfait;
    }
}

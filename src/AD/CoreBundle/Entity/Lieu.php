<?php

namespace AD\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lieu
 *
 * @ORM\Table(name="lieu")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AD\CoreBundle\Repository\LieuRepository")
 */
class Lieu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idLieu", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idlieu;

    /**
     * @var string
     *
     * @ORM\Column(name="nomLieu", type="string", length=32, nullable=true)
     */
    private $nomlieu;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseLieu", type="string", length=32, nullable=true)
     */
    private $adresselieu;



    /**
     * Get idlieu
     *
     * @return integer 
     */
    public function getIdlieu()
    {
        return $this->idlieu;
    }

    /**
     * Set nomlieu
     *
     * @param string $nomlieu
     * @return Lieu
     */
    public function setNomlieu($nomlieu)
    {
        $this->nomlieu = $nomlieu;

        return $this;
    }

    /**
     * Get nomlieu
     *
     * @return string 
     */
    public function getNomlieu()
    {
        return $this->nomlieu;
    }

    /**
     * Set adresselieu
     *
     * @param string $adresselieu
     * @return Lieu
     */
    public function setAdresselieu($adresselieu)
    {
        $this->adresselieu = $adresselieu;

        return $this;
    }

    /**
     * Get adresselieu
     *
     * @return string 
     */
    public function getAdresselieu()
    {
        return $this->adresselieu;
    }
	
	 public function __toString()
    {
        return $this->nomlieu;
    }
}

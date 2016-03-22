<?php

namespace AD\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Qualifier
 *
 * @ORM\Table(name="qualifier", indexes={@ORM\Index(name="I_FK_qualifier_niveau", columns={"idNiveau"}), @ORM\Index(name="I_FK_qualifier_professeur", columns={"idProf"}), @ORM\Index(name="I_FK_qualifier_danse", columns={"idDanse"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AD\CoreBundle\Repository\QualifierRepository")
 */
class Qualifier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idQualif", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idqualif;

    /**
     * @var \Niveau
     *
     * @ORM\ManyToOne(targetEntity="Niveau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idNiveau", referencedColumnName="idNiveau")
     * })
     */
    private $idniveau;

    /**
     * @var \Professeur
     *
     * @ORM\ManyToOne(targetEntity="Professeur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProf", referencedColumnName="idProf")
     * })
     */
    private $idprof;

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
     * Get idqualif
     *
     * @return integer 
     */
    public function getIdqualif()
    {
        return $this->idqualif;
    }

    /**
     * Set idniveau
     *
     * @param \AD\CoreBundle\Entity\Niveau $idniveau
     * @return Qualifier
     */
    public function setIdniveau(\AD\CoreBundle\Entity\Niveau $idniveau = null)
    {
        $this->idniveau = $idniveau;

        return $this;
    }

    /**
     * Get idniveau
     *
     * @return \AD\CoreBundle\Entity\Niveau 
     */
    public function getIdniveau()
    {
        return $this->idniveau;
    }

    /**
     * Set idprof
     *
     * @param \AD\CoreBundle\Entity\Professeur $idprof
     * @return Qualifier
     */
    public function setIdprof(\AD\CoreBundle\Entity\Professeur $idprof = null)
    {
        $this->idprof = $idprof;

        return $this;
    }

    /**
     * Get idprof
     *
     * @return \AD\CoreBundle\Entity\Professeur 
     */
    public function getIdprof()
    {
        return $this->idprof;
    }

    /**
     * Set iddanse
     *
     * @param \AD\CoreBundle\Entity\Danse $iddanse
     * @return Qualifier
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
}

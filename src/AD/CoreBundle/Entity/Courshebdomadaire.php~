<?php

namespace AD\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Courshebdomadaire
 *
 * @ORM\Table(name="courshebdomadaire", indexes={@ORM\Index(name="I_FK_coursHebdomadaire_salle", columns={"idSalle"}), @ORM\Index(name="I_FK_coursHebdomadaire_danse", columns={"idDanse"}), @ORM\Index(name="I_FK_coursHebdomadaire_niveau", columns={"idNiveau"}), @ORM\Index(name="I_FK_coursHebdomadaire_professeur", columns={"idProf"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AD\CoreBundle\Repository\CourshebdomadaireRepository")
 */
class Courshebdomadaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCoursHebdo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idcourshebdo;

    /**
     * @var string
     *
     * @ORM\Column(name="jourCoursHebdo", type="string", length=32, nullable=true)
     */
    private $jourcourshebdo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heureDebutCoursHebdo", type="time", nullable=true)
     */
    private $heuredebutcourshebdo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heureFinCoursHebdo", type="time", nullable=true)
     */
    private $heurefincourshebdo;

    /**
     * @var \Salle
     *
     * @ORM\ManyToOne(targetEntity="Salle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSalle", referencedColumnName="idSalle")
     * })
     */
    private $idsalle;

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
     * Get idcourshebdo
     *
     * @return integer 
     */
    public function getIdcourshebdo()
    {
        return $this->idcourshebdo;
    }

    /**
     * Set jourcourshebdo
     *
     * @param string $jourcourshebdo
     * @return Courshebdomadaire
     */
    public function setJourcourshebdo($jourcourshebdo)
    {
        $this->jourcourshebdo = $jourcourshebdo;

        return $this;
    }

    /**
     * Get jourcourshebdo
     *
     * @return string 
     */
    public function getJourcourshebdo()
    {
        return $this->jourcourshebdo;
    }

    /**
     * Set heuredebutcourshebdo
     *
     * @param \DateTime $heuredebutcourshebdo
     * @return Courshebdomadaire
     */
    public function setHeuredebutcourshebdo($heuredebutcourshebdo)
    {
        $this->heuredebutcourshebdo = $heuredebutcourshebdo;

        return $this;
    }

    /**
     * Get heuredebutcourshebdo
     *
     * @return \DateTime 
     */
    public function getHeuredebutcourshebdo()
    {
        return $this->heuredebutcourshebdo;
    }

    /**
     * Set heurefincourshebdo
     *
     * @param \DateTime $heurefincourshebdo
     * @return Courshebdomadaire
     */
    public function setHeurefincourshebdo($heurefincourshebdo)
    {
        $this->heurefincourshebdo = $heurefincourshebdo;

        return $this;
    }

    /**
     * Get heurefincourshebdo
     *
     * @return \DateTime 
     */
    public function getHeurefincourshebdo()
    {
        return $this->heurefincourshebdo;
    }

    /**
     * Set idsalle
     *
     * @param \AD\CoreBundle\Entity\Salle $idsalle
     * @return Courshebdomadaire
     */
    public function setIdsalle(\AD\CoreBundle\Entity\Salle $idsalle = null)
    {
        $this->idsalle = $idsalle;

        return $this;
    }

    /**
     * Get idsalle
     *
     * @return \AD\CoreBundle\Entity\Salle 
     */
    public function getIdsalle()
    {
        return $this->idsalle;
    }

    /**
     * Set iddanse
     *
     * @param \AD\CoreBundle\Entity\Danse $iddanse
     * @return Courshebdomadaire
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

    /**
     * Set idniveau
     *
     * @param \AD\CoreBundle\Entity\Niveau $idniveau
     * @return Courshebdomadaire
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
     * @return Courshebdomadaire
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
}

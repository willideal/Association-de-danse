<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Qualifier
 *
 * @ORM\Table(name="qualifier", indexes={@ORM\Index(name="I_FK_qualifier_niveau", columns={"idNiveau"}), @ORM\Index(name="I_FK_qualifier_professeur", columns={"idProf"}), @ORM\Index(name="I_FK_qualifier_danse", columns={"idDanse"})})
 * @ORM\Entity
 */
class Qualifier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idQualif", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idqualif;

    /**
     * @var \AD\PresaisonBundle\Entity\Danse
     *
     * @ORM\ManyToOne(targetEntity="AD\PresaisonBundle\Entity\Danse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDanse", referencedColumnName="idDanse")
     * })
     */
    private $iddanse;

    /**
     * @var \AD\PresaisonBundle\Entity\Niveau
     *
     * @ORM\ManyToOne(targetEntity="AD\PresaisonBundle\Entity\Niveau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idNiveau", referencedColumnName="idNiveau")
     * })
     */
    private $idniveau;

    /**
     * @var \AD\PresaisonBundle\Entity\Professeur
     *
     * @ORM\ManyToOne(targetEntity="AD\PresaisonBundle\Entity\Professeur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProf", referencedColumnName="idProf")
     * })
     */
    private $idprof;


}

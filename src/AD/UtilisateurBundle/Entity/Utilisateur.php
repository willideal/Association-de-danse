<?php
namespace AD\UtilisateurBundle\Entity;
//use FOS\UserBundle\Entity\User as BaseUser;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Utilisateur extends BaseUser
{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\generatedValue(strategy="AUTO")
    */
    protected $id;

    public function __construct()
    {
        parent::__construct();
    }
}

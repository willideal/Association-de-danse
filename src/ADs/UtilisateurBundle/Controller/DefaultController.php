<?php

namespace AD\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ADUtilisateurBundle:Default:index.html.twig');
    }
}

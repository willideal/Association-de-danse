<?php

namespace AD\InscriptionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ADInscriptionBundle:Default:index.html.twig');
    }
}

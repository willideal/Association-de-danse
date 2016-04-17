<?php

namespace AD\SoireeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ADSoireeBundle:Default:index.html.twig');
    }
}

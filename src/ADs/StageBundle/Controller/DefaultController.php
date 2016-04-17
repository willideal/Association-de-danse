<?php

namespace AD\StageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ADStageBundle:Default:index.html.twig');
    }
}

<?php

namespace AD\PresaisonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;

use AD\CoreBundle\Entity\Professeur;
use AD\CoreBundle\Entity\Danse;
use AD\CoreBundle\Entity\Typeforfait;

class AssociationController extends Controller
{
    public function indexAction()
    {
        return $this->render('ADPresaisonBundle:Association:index.html.twig');
    }
	
	public function listerProfsAction()
    {
	   $em = $this->container->get('doctrine')->getEntityManager();

    $professeurs= $em->getRepository('ADCoreBundle:Professeur')->findAll();
	
	return $this->container->get('templating')->renderResponse('ADPresaisonBundle:Association:listeprof.html.twig', 
    array(
    'professeurs' => $professeurs,
	));
    }
	
	public function listerDanseAction()
    {
	   $em = $this->container->get('doctrine')->getEntityManager();

    $danses= $em->getRepository('ADCoreBundle:Danse')->findAll();
	
	return $this->container->get('templating')->renderResponse('ADPresaisonBundle:Association:listedanse.html.twig', 
    array(
    'danses' => $danses,
	));
    }
	
	public function listerTypeForfaitAction()
    {
	   $em = $this->container->get('doctrine')->getEntityManager();

    $typeforfaits= $em->getRepository('ADCoreBundle:Typeforfait')->findAll();

    return $this->container->get('templating')->renderResponse('ADPresaisonBundle:Association:listertypeforfait.html.twig', 
    array(
    'typeforfaits' => $typeforfaits
    ));
    }
	
}
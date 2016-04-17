<?php

namespace AD\SoireeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AD\CoreBundle\Entity\Soiree;
use AD\SoireeBundle\Form\SoireeType;
use Symfony\Component\HttpFoundation\Request;


class SoireeController extends Controller
{
    public function listerAction()
    {
	   $em = $this->container->get('doctrine')->getEntityManager();

    $soirees= $em->getRepository('ADCoreBundle:Soiree')->findAll();
	

    return $this->container->get('templating')->renderResponse('ADSoireeBundle:Soiree:lister.html.twig', 
    array(
    'soirees' => $soirees
    ));
    }
	
	public function listeAction()
    {
	   $em = $this->container->get('doctrine')->getEntityManager();

		$soirees= $em->getRepository('ADCoreBundle:Soiree')->findAll();
	
	    $stages= $em->getRepository('ADCoreBundle:Stage')->findAll();

    return $this->container->get('templating')->renderResponse('ADSoireeBundle:Soiree:listerEvenement.html.twig', 
    array(
    'soirees' => $soirees,
	'stages' => $stages
    ));
    }
    
    public function modifierAction($id = null)
    {

        $message='';
    $em = $this->container->get('doctrine')->getEntityManager();

    if (isset($id)) 
    {
        // modification d'une soiree existant : on recherche ses données
        $soiree = $em->find('ADCoreBundle:Soiree', $id);

        if (!$soiree)
        {
            $message='Aucune soirée trouvé';
        }
    }
    else 
    {
        // ajout d'une nouvelle soiree
       $soiree = new Soiree();
    }


      $form = $this->container->get('form.factory')->create(new SoireeType(), $soiree);
      $request = $this->container->get('request');

      if ($request->getMethod() == 'POST') 
      {
        //$form->bindRequest($request);

        if ($form->handleRequest($request)->isValid()) 
        {
          $em = $this->container->get('doctrine')->getEntityManager();
          $em->persist($soiree);
          $em->flush();
          if (isset($id)) 
        {
            $message='soiree modifiée avec succès !';
            return $this->redirect($this->generateUrl('ad_soiree_lister'));
        }
        else 
        {
            $message='soiree ajoutée avec succès !';
            return $this->redirect($this->generateUrl('ad_soiree_lister'));
        }
          
        
        }

      }
    
       return $this->render('ADSoireeBundle:Soiree:modifier.html.twig', array(
      'form' => $form->createView(),
       'message' => $message,
    )); 
    }

    public function supprimerAction($id)
    {

      $em = $this->container->get('doctrine')->getEntityManager();
      $soiree = $em->find('ADCoreBundle:Soiree', $id);
            
      if (!$soiree) 
      {
        throw new NotFoundHttpException("Soiree non trouvé");
      }
            
      $em->remove($soiree);
      $em->flush();        
      return new RedirectResponse($this->container->get('router')->generate('ad_soiree_lister'));
    }
}
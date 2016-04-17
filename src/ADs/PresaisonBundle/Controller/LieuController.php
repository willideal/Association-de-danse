<?php

namespace AD\PresaisonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AD\CoreBundle\Entity\Lieu;
use AD\PresaisonBundle\Form\LieuType;
use Symfony\Component\HttpFoundation\Request;


class LieuController extends Controller
{
    public function listerAction()
    {
	   $em = $this->container->get('doctrine')->getEntityManager();

    $lieus= $em->getRepository('ADCoreBundle:Lieu')->findAll();

    return $this->container->get('templating')->renderResponse('ADPresaisonBundle:Lieu:lister.html.twig', 
    array(
    'lieus' => $lieus
    ));
    }
    
    public function modifierAction($id = null)
    {

        $message='';
    $em = $this->container->get('doctrine')->getEntityManager();

    if (isset($id)) 
    {
        // modification d'un lieu existant : on recherche ses données
        $lieu = $em->find('ADCoreBundle:Lieu', $id);

        if (!$lieu)
        {
            $message='Aucun lieu trouvé';
        }
    }
    else 
    {
        // ajout d'une nouveau lieu
       $lieu = new Lieu();
    }


      $form = $this->container->get('form.factory')->create(new LieuType(), $lieu);
      $request = $this->container->get('request');

      if ($request->getMethod() == 'POST') 
      {
        //$form->bindRequest($request);

        if ($form->handleRequest($request)->isValid()) 
        {
          $em = $this->container->get('doctrine')->getEntityManager();
          $em->persist($lieu);
          $em->flush();
          if (isset($id)) 
        {
            $message='lieu modifiée avec succès !';
            return $this->redirect($this->generateUrl('ad_lieu_lister'));
        }
        else 
        {
            $message='lieu ajoutée avec succès !';
            return $this->redirect($this->generateUrl('ad_lieu_lister'));
        }
          
        
        }

      }
    
       return $this->render('ADPresaisonBundle:Lieu:modifier.html.twig', array(
      'form' => $form->createView(),
       'message' => $message,
    )); 
    }

    public function supprimerAction($id)
    {

      $em = $this->container->get('doctrine')->getEntityManager();
      $lieu = $em->find('ADCoreBundle:Lieu', $id);
            
      if (!$lieu) 
      {
        throw new NotFoundHttpException("Lieu non trouvé");
      }
            
      $em->remove($lieu);
      $em->flush();        
      return new RedirectResponse($this->container->get('router')->generate('ad_lieu_lister'));
    }
}
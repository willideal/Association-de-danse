<?php

namespace AD\PresaisonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AD\CoreBundle\Entity\Salle;
use AD\PresaisonBundle\Form\SalleType;
use Symfony\Component\HttpFoundation\Request;


class SalleController extends Controller
{
    public function listerAction()
    {
	   $em = $this->container->get('doctrine')->getEntityManager();

    $salles= $em->getRepository('ADCoreBundle:Salle')->findAll();

    return $this->container->get('templating')->renderResponse('ADPresaisonBundle:Salle:lister.html.twig', 
    array(
    'salles' => $salles
    ));
    }
    
    public function modifierAction($id = null)
    {

        $message='';
    $em = $this->container->get('doctrine')->getEntityManager();

    if (isset($id)) 
    {
        // modification d'une salle existant : on recherche ses données
        $salle = $em->find('ADCoreBundle:Salle', $id);

        if (!$salle)
        {
            $message='Aucune salle trouvé';
        }
    }
    else 
    {
        // ajout d'une nouvelle salle
       $salle = new Salle();
    }


      $form = $this->container->get('form.factory')->create(new SalleType(), $salle);
      $request = $this->container->get('request');

      if ($request->getMethod() == 'POST') 
      {
        //$form->bindRequest($request);

        if ($form->handleRequest($request)->isValid()) 
        {
          $em = $this->container->get('doctrine')->getEntityManager();
          $em->persist($salle);
          $em->flush();
          if (isset($id)) 
        {
            $message='salle modifiée avec succès !';
            return $this->redirect($this->generateUrl('ad_salle_lister'));
        }
        else 
        {
            $message='salle ajoutée avec succès !';
            return $this->redirect($this->generateUrl('ad_salle_lister'));
        }
          
        
        }

      }
    
       return $this->render('ADPresaisonBundle:Salle:modifier.html.twig', array(
      'form' => $form->createView(),
       'message' => $message,
    )); 
    }

    public function supprimerAction($id)
    {

      $em = $this->container->get('doctrine')->getEntityManager();
      $salle = $em->find('ADCoreBundle:Salle', $id);
            
      if (!$salle) 
      {
        throw new NotFoundHttpException("Salle non trouvé");
      }
            
      $em->remove($salle);
      $em->flush();        
      return new RedirectResponse($this->container->get('router')->generate('ad_salle_lister'));
    }
}
<?php

namespace AD\InscriptionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AD\CoreBundle\Entity\Adherent;
use AD\InscriptionBundle\Form\AdherentType;
use Symfony\Component\HttpFoundation\Request;


class AdherentController extends Controller
{
    public function listerAction()
    {
	   $em = $this->container->get('doctrine')->getEntityManager();

    $adherents= $em->getRepository('ADCoreBundle:Adherent')->findAll();

    return $this->container->get('templating')->renderResponse('ADInscriptionBundle:Adherent:lister.html.twig', 
    array(
    'adherents' => $adherents
    ));
    }
    
    public function modifierAction($id = null)
    {

        $message='';
    $em = $this->container->get('doctrine')->getEntityManager();

    if (isset($id)) 
    {
        // modification d'un adherent existant : on recherche ses données
        $adherent = $em->find('ADCoreBundle:Adherent', $id);

        if (!$adherent)
        {
            $message='Aucun adherent trouvé';
        }
    }
    else 
    {
        // ajout d'un nouvel adherent
       $adherent = new Adherent();
    }


      $form = $this->container->get('form.factory')->create(new AdherentType(), $adherent);
      $request = $this->container->get('request');

      if ($request->getMethod() == 'POST') 
      {
        //$form->bindRequest($request);

        if ($form->handleRequest($request)->isValid()) 
        {
          $em = $this->container->get('doctrine')->getEntityManager();
          $em->persist($adherent);
          $em->flush();
          if (isset($id)) 
        {
            $message='adherent modifiée avec succès !';
            return $this->redirect($this->generateUrl('ad_adherent_lister'));
        }
        else 
        {
            $message='adherent ajoutée avec succès !';
            return $this->redirect($this->generateUrl('ad_adherent_lister'));
        }
          
        
        }

      }
    
       return $this->render('ADInscriptionBundle:Adherent:modifier.html.twig', array(
      'form' => $form->createView(),
       'message' => $message,
    )); 
    }

    public function supprimerAction($id)
    {

      $em = $this->container->get('doctrine')->getEntityManager();
      $adherent = $em->find('ADCoreBundle:Adherent', $id);
            
      if (!$adherent) 
      {
        throw new NotFoundHttpException("Lieu non trouvé");
      }
            
      $em->remove($adherent);
      $em->flush();        
      return new RedirectResponse($this->container->get('router')->generate('ad_adherent_lister'));
    }
}
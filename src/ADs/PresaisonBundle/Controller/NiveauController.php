<?php

namespace AD\PresaisonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AD\CoreBundle\Entity\Niveau;
use AD\PresaisonBundle\Form\NiveauType;
use Symfony\Component\HttpFoundation\Request;


class NiveauController extends Controller
{
    public function listerAction()
    {
	   $em = $this->container->get('doctrine')->getEntityManager();

    $niveaus= $em->getRepository('ADCoreBundle:Niveau')->findAll();

    return $this->container->get('templating')->renderResponse('ADPresaisonBundle:Niveau:lister.html.twig', 
    array(
    'niveaus' => $niveaus
    ));
    }
    
    public function modifierAction($id = null)
    {

        $message='';
    $em = $this->container->get('doctrine')->getEntityManager();

    if (isset($id)) 
    {
        // modification d'un danse existant : on recherche ses données
        $niveau = $em->find('ADCoreBundle:Niveau', $id);

        if (!$niveau)
        {
            $message='Aucun niveau trouvé';
        }
    }
    else 
    {
        // ajout d'une nouveau niveau
       $niveau = new Niveau();
    }


      $form = $this->container->get('form.factory')->create(new NiveauType(), $niveau);
      $request = $this->container->get('request');

      if ($request->getMethod() == 'POST') 
      {
        //$form->bindRequest($request);

        if ($form->handleRequest($request)->isValid()) 
        {
          $em = $this->container->get('doctrine')->getEntityManager();
          $em->persist($niveau);
          $em->flush();
          if (isset($id)) 
        {
            $message='niveau modifiée avec succès !';
            return $this->redirect($this->generateUrl('ad_niveau_lister'));
        }
        else 
        {
            $message='niveau ajoutée avec succès !';
             return $this->redirect($this->generateUrl('ad_niveau_lister'));
        }
          
        
        }

      }
    
       return $this->render('ADPresaisonBundle:Niveau:modifier.html.twig', array(
      'form' => $form->createView(),
       'message' => $message,
    )); 
    }

    public function supprimerAction($id)
    {

      $em = $this->container->get('doctrine')->getEntityManager();
      $niveau = $em->find('ADCoreBundle:Niveau', $id);
            
      if (!$niveau) 
      {
        throw new NotFoundHttpException("Niveau non trouvé");
      }
            
      $em->remove($niveau);
      $em->flush();        
      return new RedirectResponse($this->container->get('router')->generate('ad_niveau_lister'));
    }
}
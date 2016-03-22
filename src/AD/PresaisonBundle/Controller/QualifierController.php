<?php

namespace AD\PresaisonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AD\CoreBundle\Entity\Qualifier;
use AD\PresaisonBundle\Form\QualifierType;
use Symfony\Component\HttpFoundation\Request;


class QualifierController extends Controller
{
    public function listerAction()
    {
	   $em = $this->container->get('doctrine')->getEntityManager();

    $qualifiers= $em->getRepository('ADCoreBundle:Qualifier')->findAll();

    return $this->container->get('templating')->renderResponse('ADPresaisonBundle:Qualifier:lister.html.twig', 
    array(
    'qualifiers' => $qualifiers
    ));
    }
    
    public function modifierAction($id = null)
    {

        $message='';
    $em = $this->container->get('doctrine')->getEntityManager();

    if (isset($id)) 
    {
        // modification d'une qualification existant : on recherche ses données
        $qualifier = $em->find('ADCoreBundle:Qualifier', $id);

        if (!$qualifier)
        {
            $message='Aucune qualification trouvé';
        }
    }
    else 
    {
        // ajout d'une nouvelle qualification
       $qualifier = new Qualifier();
    }


      $form = $this->container->get('form.factory')->create(new QualifierType(), $qualifier);
      $request = $this->container->get('request');

      if ($request->getMethod() == 'POST') 
      {
        //$form->bindRequest($request);

        if ($form->handleRequest($request)->isValid()) 
        {
          $em = $this->container->get('doctrine')->getEntityManager();
          $em->persist($qualifier);
          $em->flush();
          if (isset($id)) 
        {
            $message='qualification modifiée avec succès !';
            return $this->redirect($this->generateUrl('ad_qualifier_lister'));
        }
        else 
        {
            $message='qualification ajoutée avec succès !';
            return $this->redirect($this->generateUrl('ad_qualifier_lister'));
        }
          
        
        }

      }
    
       return $this->render('ADPresaisonBundle:Qualifier:modifier.html.twig', array(
      'form' => $form->createView(),
       'message' => $message,
    )); 
    }

    public function supprimerAction($id)
    {

      $em = $this->container->get('doctrine')->getEntityManager();
      $qualifier = $em->find('ADCoreBundle:Qualifier', $id);
            
      if (!$qualifier) 
      {
        throw new NotFoundHttpException("Qualification non trouvé");
      }
            
      $em->remove($qualifier);
      $em->flush();        
      return new RedirectResponse($this->container->get('router')->generate('ad_qualifier_lister'));
    }
}
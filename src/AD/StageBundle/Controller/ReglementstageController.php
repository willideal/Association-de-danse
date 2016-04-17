<?php

namespace AD\StageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AD\CoreBundle\Entity\Reglementstage;
use AD\StageBundle\Form\ReglementstageType;
use Symfony\Component\HttpFoundation\Request;


class ReglementstageController extends Controller
{
    public function listerAction()
    {
	   $em = $this->container->get('doctrine')->getEntityManager();

    $Reglementstage= $em->getRepository('ADCoreBundle:Reglementstage')->findAll();

    return $this->container->get('templating')->renderResponse('ADStageBundle:Reglementstage:lister.html.twig', 
    array(
    'Reglementstage' => $Reglementstage
    ));
    }
    
    public function modifierAction($id = null)
    {

        $message='';
    $em = $this->container->get('doctrine')->getEntityManager();

    if (isset($id)) 
    {
        // modification d'un lieu existant : on recherche ses données
        $Reglementstage = $em->find('ADCoreBundle:Reglementstage', $id);

        if (!$Reglementstage)
        {
            $message='Aucun Reglement trouvé';
        }
    }
    else 
    {
        // ajout d'une nouveau lieu
       $Reglementstage = new Reglementstage();
    }


      $form = $this->container->get('form.factory')->create(new ReglementstageType(), $Reglementstage);
      $request = $this->container->get('request');

      if ($request->getMethod() == 'POST') 
      {
        //$form->bindRequest($request);

        if ($form->handleRequest($request)->isValid()) 
        {
          $em = $this->container->get('doctrine')->getEntityManager();
          $em->persist($Reglementstage);
          $em->flush();
          if (isset($id)) 
        {
            $message='Reglement modifiée avec succès !';
            return $this->redirect($this->generateUrl('ad_reglementstage_lister'));
        }
        else 
        {
            $message='Reglement ajoutée avec succès !';
            return $this->redirect($this->generateUrl('ad_reglementstage_lister'));
        }
          
        
        }

      }
    
       return $this->render('ADStageBundle:Reglementstage:modifier.html.twig', array(
      'form' => $form->createView(),
       'message' => $message,
    )); 
    }

    public function deleteAction($id)
    {

      $em = $this->container->get('doctrine')->getEntityManager();
      $Reglementstage = $em->find('ADCoreBundle:Reglementstage', $id);
            
      if (!$Reglementstage) 
      {
        throw new NotFoundHttpException("Reglement non trouvé");
      }
            
      $em->remove($Reglementstage);
      $em->flush();        
      return new RedirectResponse($this->container->get('router')->generate('ad_reglementstage_lister'));
    }
}

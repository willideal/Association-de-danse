<?php

namespace AD\StageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AD\CoreBundle\Entity\Stage;
use AD\StageBundle\Form\StageType;
use Symfony\Component\HttpFoundation\Request;

class StageController extends Controller
{
	
     public function listerAction()
    {
	   $em = $this->container->get('doctrine')->getEntityManager();

       $stages= $em->getRepository('ADCoreBundle:Stage')->findAll();

    return $this->container->get('templating')->renderResponse('ADStageBundle:Stage:lister.html.twig', 
    array(
    'stages' => $stages));
    }
	
	public function listerutiAction()
    {
	   $em = $this->container->get('doctrine')->getEntityManager();

    $stages= $em->getRepository('ADCoreBundle:Stage')->findAll();

    return $this->container->get('templating')->renderResponse('ADStageBundle:Stage:listeruti.html.twig', 
    array(
    'stages' => $stages
    ));
    }
    
    public function modifierAction($id = null)
    {

        $message='';
    $em = $this->container->get('doctrine')->getEntityManager();

    if (isset($id)) 
    {
        // modification d'un lieu existant : on recherche ses données
        $stage = $em->find('ADCoreBundle:Stage', $id);

        if (!$stage)
        {
            $message='Aucun Stage trouvé';
        }
    }
    else 
    {
        // ajout d'une nouveau lieu
       $stage = new Stage();
    }


      $form = $this->container->get('form.factory')->create(new StageType(), $stage);
      $request = $this->container->get('request');

      if ($request->getMethod() == 'POST') 
      {
        //$form->bindRequest($request);

        if ($form->handleRequest($request)->isValid()) 
        {
          $em = $this->container->get('doctrine')->getEntityManager();
          $em->persist($stage);
          $em->flush();
          if (isset($id)) 
        {
            $message='Stage modifiée avec succès !';
            return $this->redirect($this->generateUrl('ad_stage_lister'));
        }
        else 
        {
            $message='Stage ajoutée avec succès !';
            return $this->redirect($this->generateUrl('ad_stage_lister'));
        }
          
        
        }

      }
    
       return $this->render('ADStageBundle:Stage:modifier.html.twig', array(
      'form' => $form->createView(),
       'message' => $message,
    )); 
    }

    public function deleteAction($id)
    {

      $em = $this->container->get('doctrine')->getEntityManager();
      $Stage = $em->find('ADCoreBundle:Stage', $id);
            
      if (!$Stage) 
      {
        throw new NotFoundHttpException("Stage non trouvé");
      }
            
      $em->remove($Stage);
      $em->flush();        
      return new RedirectResponse($this->container->get('router')->generate('ad_stage_lister'));
    }
}

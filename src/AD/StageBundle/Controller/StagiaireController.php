<?php

namespace AD\StageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AD\CoreBundle\Entity\Stagiaire;
use AD\StageBundle\Form\StagiaireType;
use Symfony\Component\HttpFoundation\Request;

class StagiaireController extends Controller
{
	
    public function listerAction()
    {
	   $em = $this->container->get('doctrine')->getEntityManager();

    $Stagiaire= $em->getRepository('ADCoreBundle:Stagiaire')->findAll();

    return $this->container->get('templating')->renderResponse('ADStageBundle:Stagiaire:lister.html.twig', 
    array(
    'Stagiaire' => $Stagiaire));
    }
    
    public function modifierAction($id = null)
    {

        $message='';
    $em = $this->container->get('doctrine')->getEntityManager();

    if (isset($id)) 
    {
        // modification d'un lieu existant : on recherche ses données
        $Stagiaire = $em->find('ADCoreBundle:Stagiaire', $id);

        if (!$Stagiaire)
        {
            $message='Aucun Stagiaire trouvé';
        }
    }
    else 
    {
        // ajout d'une nouveau lieu
       $Stagiaire = new Stagiaire();
    }


      $form = $this->container->get('form.factory')->create(new StagiaireType(), $Stagiaire);
      $request = $this->container->get('request');

      if ($request->getMethod() == 'POST') 
      {
        //$form->bindRequest($request);

        if ($form->handleRequest($request)->isValid()) 
        {
          $em = $this->container->get('doctrine')->getEntityManager();
          $em->persist($Stagiaire);
          $em->flush();
          if (isset($id)) 
        {
            $message='Stagiaire modifiée avec succès !';
            return $this->redirect($this->generateUrl('ad_evenement_liste'));
        }
        else 
        {	
		$session = $request->getSession();
			// Et on définit notre message
			$session->getFlashBag()->add('info', 'Inscription au stage effectué avec succès !');
            
            return $this->redirect($this->generateUrl('ad_evenement_liste'));
        }
          
        
        }

      }
    
       return $this->render('ADStageBundle:Stagiaire:modifier.html.twig', array(
      'form' => $form->createView(),
       'message' => $message,
    )); 
    }
	
	

    public function deleteAction($id)
    {

      $em = $this->container->get('doctrine')->getEntityManager();
      $Stagiaire = $em->find('ADCoreBundle:Stagiaire', $id);
            
      if (!$Stagiaire) 
      {
        throw new NotFoundHttpException("Stagiaire non trouvé");
      }
            
      $em->remove($Stagiaire);
      $em->flush();        
      return new RedirectResponse($this->container->get('router')->generate('ad_stagiaire_lister'));
    }
}

<?php

namespace AD\PresaisonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AD\CoreBundle\Entity\Courshebdomadaire;
use AD\PresaisonBundle\Form\CourshebdomadaireType;
use Symfony\Component\HttpFoundation\Request;


class CourshebdomadaireController extends Controller
{
    public function listerAction()
    {
	   $em = $this->container->get('doctrine')->getEntityManager();

    $cours= $em->getRepository('ADCoreBundle:Courshebdomadaire')->findAll();

    return $this->container->get('templating')->renderResponse('ADPresaisonBundle:Courshebdomadaire:lister.html.twig', 
    array(
    'cours' => $cours
    ));
    }
	
	public function listeAction()
    {
	   $em = $this->container->get('doctrine')->getEntityManager();

    $cours= $em->getRepository('ADCoreBundle:Courshebdomadaire')->findAll();

    return $this->container->get('templating')->renderResponse('ADPresaisonBundle:Courshebdomadaire:liste.html.twig', 
    array(
    'cours' => $cours
    ));
    }
    
    public function modifierAction($id = null)
    {

			$message='';
		$em = $this->container->get('doctrine')->getEntityManager();

		if (isset($id)) 
		{
			// modification d'une qualification existant : on recherche ses données
			$cour = $em->find('ADCoreBundle:Courshebdomadaire', $id);

			if (!$cour)
			{
				$message='Aucun cours trouvé';
			}
		}
		else 
		{
			// ajout d'une nouveau cours
		   $cour = new Courshebdomadaire();
		}


      $form = $this->container->get('form.factory')->create(new CourshebdomadaireType(), $cour);
      $request = $this->container->get('request');
	  	

		


      if ($request->getMethod() == 'POST') 
      {
        //$form->bindRequest($request);

        if ($form->handleRequest($request)->isValid()) 
        {
	  $qualif= $em->getRepository('ADCoreBundle:Qualifier')->findByQualifier($cour->getIdniveau(), $cour->getIdprof(), $cour->getIddanse());
			
				//$message=' Le prof nest pas qualifier pour ce cours!';
			
          $em = $this->container->get('doctrine')->getEntityManager();
		 if($qualif != null){
				  $em->persist($cour);
				  
					  $em->flush();
					   
					  if (isset($id)) 
					{
					
						$message='cours modifiée avec succès !';
						return $this->redirect($this->generateUrl('ad_cours_lister'));
					}
					else 
					{
						
						$message='cours ajoutée avec succès !';
						return $this->redirect($this->generateUrl('ad_cours_lister'));
					}
					  
			
		   } else{
				$message='Le professeur '. $cour->getIdprof(). ' n\'est pas  qualifié  pour ce cours! ';
			}
		}
	  
	 }
    
       return $this->render('ADPresaisonBundle:Courshebdomadaire:modifier.html.twig', array(
      'form' => $form->createView(),
       'message' => $message,
	   'cours' => $cour
    )); 
    }

    public function supprimerAction($id)
    {

      $em = $this->container->get('doctrine')->getEntityManager();
      $cour = $em->find('ADCoreBundle:Courshebdomadaire', $id);
            
      if (!$cour) 
      {
        throw new NotFoundHttpException("Cours non trouvé");
      }
            
      $em->remove($cour);
      $em->flush();        
      return new RedirectResponse($this->container->get('router')->generate('ad_cours_lister'));
    }
}
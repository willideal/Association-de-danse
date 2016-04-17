<?php

namespace AD\InscriptionBundle\Controller;

use AD\CoreBundle\Entity\Typereglement;
use AD\InscriptionBundle\Form\TypereglementType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;


class TypeReglementController extends Controller
{
	public function listerAction()
    {
	   $em = $this->container->get('doctrine')->getEntityManager();

		$typereglements= $em->getRepository('ADCoreBundle:Typereglement')->findAll();

		return $this->container->get('templating')->renderResponse('ADInscriptionBundle:TypeReglement:lister.html.twig', 
		array(
		'typereglements' => $typereglements
		));
    }
    
	public function modifierAction($id = null)
    {

        $message='';
		$em = $this->container->get('doctrine')->getEntityManager();

		if (isset($id)) 
		{
			// modification d'un danse existant : on recherche ses données
			$typereglement = $em->find('ADCoreBundle:Typereglement', $id);

			if (!$typereglement)
			{
				$message='Aucun Type de règlement trouvé';
			}
		}
		else 
		{
			// ajout d'une nouveau Typereglement
		   $typereglement = new Typereglement();
		}


		  $form = $this->container->get('form.factory')->create(new TypereglementType(), $typereglement);
		  $request = $this->container->get('request');

		  if ($request->getMethod() == 'POST') 
		  {
			//$form->bindRequest($request);

			if ($form->handleRequest($request)->isValid()) 
			{
			  $em = $this->container->get('doctrine')->getEntityManager();
			  $em->persist($typereglement);
			  $em->flush();
			  if (isset($id)) 
			{
				$message='Type de règlement modifiée avec succès !';
				return $this->redirect($this->generateUrl('ad_typereglement_lister'));
			}
			else 
			{
				$message='Typereglement ajoutée avec succès !';
				 return $this->redirect($this->generateUrl('ad_typereglement_lister'));
			}
			  
			
			}

		  }
		
		   return $this->render('ADInscriptionBundle:TypeReglement:modifier.html.twig', array(
		  'form' => $form->createView(),
		   'message' => $message,
		)); 
    }
	
	public function supprimerAction($id){

      $em = $this->container->get('doctrine')->getEntityManager();
      $typereglement = $em->find('ADCoreBundle:Typereglement', $id);
            
      if (!$typereglement) 
      {
        throw new NotFoundHttpException("Type de règlement non trouvé");
      }
            
      $em->remove($typereglement);
      $em->flush();        
      return new RedirectResponse($this->container->get('router')->generate('ad_typereglement_lister'));
    }
	
	
	
	
}

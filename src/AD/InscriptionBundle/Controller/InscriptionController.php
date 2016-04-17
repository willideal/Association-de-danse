<?php

namespace AD\InscriptionBundle\Controller;

use AD\CoreBundle\Entity\Inscriptionforfait;
use AD\InscriptionBundle\Form\InscriptionforfaitType;
use AD\InscriptionBundle\Form\InscriptionforfaitDeuxDanseType;
use AD\InscriptionBundle\Form\InscriptionforfaitTroisDanseType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;


class InscriptionController extends Controller
{
    public function listerAction()
    {
	   $em = $this->container->get('doctrine')->getEntityManager();

		$adherents= $em->getRepository('ADCoreBundle:Adherent')->findAll();

		return $this->container->get('templating')->renderResponse('ADInscriptionBundle:Inscription:lister.html.twig', 
		array(
		'adherents' => $adherents
		));
    }
	
	public function ajouterAction($id = null){
		
		if (isset($id) and $id==2) {
		$inscription = new Inscriptionforfait();
			
		$form = $this->get('form.factory')->create(new InscriptionforfaitType(), $inscription);
		 $request = $this->container->get('request');
		}else if (isset($id) and $id==3){
			$inscription = new Inscriptionforfait();
			
		$form = $this->get('form.factory')->create(new InscriptionforfaitDeuxDanseType(), $inscription);
		 $request = $this->container->get('request');
		}else if (isset($id) and $id==4){
			
		$inscription = new Inscriptionforfait();
			
		$form = $this->get('form.factory')->create(new InscriptionforfaitTroisDanseType(), $inscription);
		 $request = $this->container->get('request');
		}
		
		
		if ($form->handleRequest($request)->isValid()) {
		  $em = $this->getDoctrine()->getManager();
		  $em->persist($inscription);
		  $em->flush();

		  $request->getSession()->getFlashBag()->add('info', 'Enregistrement effectué.');

		  return $this->redirect($this->generateUrl('ad_core_homepage'));
		}

		return $this->render('ADInscriptionBundle:Inscription:ajouter.html.twig', array(
			  'form' => $form->createView(),
		));
		
		
	}	
	
	public function ajouteAction(){
		
	
		$inscription = new Inscriptionforfait();
			
		$form = $this->get('form.factory')->create(new InscriptionforfaitType(), $inscription);
		 $request = $this->container->get('request');
		
		if ($form->handleRequest($request)->isValid()) {
		  $em = $this->getDoctrine()->getManager();
		  $em->persist($inscription);
		  $em->flush();

		  $request->getSession()->getFlashBag()->add('info', 'Enregistrement effectué.');

		  return $this->redirect($this->generateUrl('ad_core_homepage'));
		}

		return $this->render('ADInscriptionBundle:Inscription:ajouter.html.twig', array(
			  'form' => $form->createView(),
		));
		
		
	}	
	
	public function gererAction(Request $request){
		
		$inscription = new Inscriptionforfait();
			
		$form = $this->get('form.factory')->create(new InscriptionforfaitType(), $inscription);

		if ($form->handleRequest($request)->isValid()) {
		  $em = $this->getDoctrine()->getManager();
		  $em->persist($inscription);
		  $em->flush();

		  $request->getSession()->getFlashBag()->add('info', 'Enregistrement effectué.');

		  return $this->redirect($this->generateUrl('ad_core_homepage'));
		}

		return $this->render('ADInscriptionBundle:Inscription:ajouter.html.twig', array(
			  'form' => $form->createView(),
		));
	}	
	
	
}

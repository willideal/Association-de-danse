<?php

namespace AD\PresaisonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AD\CoreBundle\Entity\Typeforfait;
use AD\PresaisonBundle\Form\TypeForfaitType;
use Symfony\Component\HttpFoundation\Request;


class TypeForfaitController extends Controller
{
    public function listerAction()
    {
	   $em = $this->container->get('doctrine')->getEntityManager();

    $typeforfaits= $em->getRepository('ADCoreBundle:Typeforfait')->findAll();

    return $this->container->get('templating')->renderResponse('ADPresaisonBundle:TypeForfait:lister.html.twig', 
    array(
    'typeforfaits' => $typeforfaits
    ));
    }
    
    public function modifierAction($id = null)
    {

        $message='';
    $em = $this->container->get('doctrine')->getEntityManager();

    if (isset($id)) 
    {
        // modification d'un  forfait existant : on recherche ses données
        $forfait = $em->find('ADCoreBundle:Typeforfait', $id);

        if (!$forfait)
        {
            $message='Aucun forfait trouvé';
        }
    }
    else 
    {
        // ajout d'une nouveau forfait
       $forfait = new Typeforfait();
    }


      $form = $this->container->get('form.factory')->create(new TypeForfaitType(), $forfait);
      $request = $this->container->get('request');

      if ($request->getMethod() == 'POST') 
      {
        //$form->bindRequest($request);

        if ($form->handleRequest($request)->isValid()) 
        {
          $em = $this->container->get('doctrine')->getEntityManager();
          $em->persist($forfait);
          $em->flush();
          if (isset($id)) 
        {
           // $message='forfait modifiée avec succès !';
			
		$request->getSession()->getFlashBag()->add('notice', 'forfait bien enregistrée.');
            return $this->redirect($this->generateUrl('ad_forfait_lister'));
        }
        else 
        {
            $message='forfait ajoutée avec succès !';
           return $this->redirect($this->generateUrl('ad_forfait_lister'));
        }
          
        
        }

      }
    
       return $this->render('ADPresaisonBundle:TypeForfait:modifier.html.twig', array(
      'form' => $form->createView(),
     
    )); 
    }

    public function supprimerAction($id)
    {

      $em = $this->container->get('doctrine')->getEntityManager();
      $danse = $em->find('ADCoreBundle:Typeforfait', $id);
            
      if (!$danse) 
      {
        throw new NotFoundHttpException("Forfait non trouvé");
      }
            
      $em->remove($danse);
      $em->flush();        
      return new RedirectResponse($this->container->get('router')->generate('ad_forfait_lister'));
    }
}
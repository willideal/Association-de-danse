<?php

namespace AD\SoireeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AD\CoreBundle\Entity\Pratiquer;
use AD\SoireeBundle\Form\PratiquerType;
use Symfony\Component\HttpFoundation\Request;


class PratiquerController extends Controller
{
    public function listerAction()
    {
	   $em = $this->container->get('doctrine')->getEntityManager();

    $pratiques= $em->getRepository('ADCoreBundle:Pratiquer')->findAll();

    return $this->container->get('templating')->renderResponse('ADSoireeBundle:Pratiquer:lister.html.twig', 
    array(
    'pratiques' => $pratiques
    ));
    }
    
    public function modifierAction($id = null)
    {

        $message='';
    $em = $this->container->get('doctrine')->getEntityManager();

    if (isset($id)) 
    {
        // modification d'un cours initial existant : on recherche ses données
        $pratique = $em->find('ADCoreBundle:Pratiquer', $id);

        if (!$pratique)
        {
            $message='Aucune danse pratiquée trouvé';
        }
    }
    else 
    {
        // ajout d'une nouvelle danse pratiquer lors d'une soiree
       $pratique = new Pratiquer();
    }


      $form = $this->container->get('form.factory')->create(new PratiquerType(), $pratique);
      $request = $this->container->get('request');

      if ($request->getMethod() == 'POST') 
      {
        //$form->bindRequest($request);

        if ($form->handleRequest($request)->isValid()) 
        {
		
	  $prat= $em->getRepository('ADCoreBundle:Pratiquer')->findByPratiquer($pratique->getIdsalle(), $pratique->getIdsoiree(), $pratique->getIddanse());
          $em = $this->container->get('doctrine')->getEntityManager();
         		 if($prat == null){
				  $em->persist($pratique);
					  $em->flush();
					   
					  if (isset($id)) 
					{
					
						$message='cours modifiée avec succès !';
						return $this->redirect($this->generateUrl('ad_pratiquer_lister'));
					}
					else 
					{
						
						$message='cours ajoutée avec succès !';
						return $this->redirect($this->generateUrl('ad_pratiquer_lister'));
					}
					  
			
		   } else{
				$message='La Danse '. $pratique->getIddanse(). ' est  deja  preatiqué  dans la salle '. $pratique->getIdsalle(). 
					' pour la soirée ' .$pratique->getIdsoiree();
			}
        
        }

      }
    
       return $this->render('ADSoireeBundle:Pratiquer:modifier.html.twig', array(
      'form' => $form->createView(),
       'message' => $message,
    )); 
    }

    public function supprimerAction($id)
    {

      $em = $this->container->get('doctrine')->getEntityManager();
      $pratiquer = $em->find('ADCoreBundle:Pratiquer', $id);
            
      if (!$pratiquer) 
      {
        throw new NotFoundHttpException("Cours initiation non trouvé");
      }
            
      $em->remove($pratiquer);
      $em->flush();        
      return new RedirectResponse($this->container->get('router')->generate('ad_pratiquer_lister'));
    }
}
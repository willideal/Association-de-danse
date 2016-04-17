<?php

namespace AD\SoireeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AD\CoreBundle\Entity\Coursinitiation;
use AD\SoireeBundle\Form\CoursinitiationType;
use Symfony\Component\HttpFoundation\Request;


class CoursinitiationController extends Controller
{
    public function listerAction()
    {
	   $em = $this->container->get('doctrine')->getEntityManager();

    $coursinits= $em->getRepository('ADCoreBundle:Coursinitiation')->findAll();

    return $this->container->get('templating')->renderResponse('ADSoireeBundle:Coursinitiation:lister.html.twig', 
    array(
    'coursinits' => $coursinits
    ));
    }
    
    public function modifierAction($id = null)
    {

        $message='';
    $em = $this->container->get('doctrine')->getEntityManager();

    if (isset($id)) 
    {
        // modification d'un cours initial existant : on recherche ses données
        $coursinit = $em->find('ADCoreBundle:Coursinitiation', $id);

        if (!$coursinit)
        {
            $message='Aucun cours dinitiation trouvé';
        }
    }
    else 
    {
        // ajout d'une nouvelle qualification
       $coursinit = new Coursinitiation();
    }


      $form = $this->container->get('form.factory')->create(new CoursinitiationType(), $coursinit);
      $request = $this->container->get('request');

      if ($request->getMethod() == 'POST') 
      {
        //$form->bindRequest($request);

        if ($form->handleRequest($request)->isValid()) 
        {
          $em = $this->container->get('doctrine')->getEntityManager();
          $em->persist($coursinit);
          $em->flush();
          if (isset($id)) 
        {
            $message='cours initiation modifiée avec succès !';
            return $this->redirect($this->generateUrl('ad_coursinit_lister'));
        }
        else 
        {
            $message='cours initiation ajoutée avec succès !';
            return $this->redirect($this->generateUrl('ad_coursinit_lister'));
        }
          
        
        }

      }
    
       return $this->render('ADSoireeBundle:Coursinitiation:modifier.html.twig', array(
      'form' => $form->createView(),
       'message' => $message,
    )); 
    }

    public function supprimerAction($id)
    {

      $em = $this->container->get('doctrine')->getEntityManager();
      $coursinit = $em->find('ADCoreBundle:Coursinitiation', $id);
            
      if (!$coursinit) 
      {
        throw new NotFoundHttpException("Cours initiation non trouvé");
      }
            
      $em->remove($coursinit);
      $em->flush();        
      return new RedirectResponse($this->container->get('router')->generate('ad_coursinit_lister'));
    }
}
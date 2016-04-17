<?php

namespace AD\PresaisonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AD\CoreBundle\Entity\Danse;
use AD\PresaisonBundle\Form\DanseType;
use AD\DanseBundle\Form\RechercheDanseType;
use Symfony\Component\HttpFoundation\Request;


class DanseController extends Controller
{
    public function listerAction()
    {
	   $em = $this->container->get('doctrine')->getEntityManager();

    $danses= $em->getRepository('ADCoreBundle:Danse')->findAll();

	//$form = $this->container->get('form.factory')->create(new RechercheDanseType());
    return $this->container->get('templating')->renderResponse('ADPresaisonBundle:Danse:lister.html.twig', 
    array(
    'danses' => $danses
    ));
    }
    
    public function modifierAction($id = null)
    {

        $message='';
    $em = $this->container->get('doctrine')->getEntityManager();

    if (isset($id)) 
    {
        // modification d'un danse existant : on recherche ses données
        $danse = $em->find('ADCoreBundle:Danse', $id);

        if (!$danse)
        {
            $message='Aucune Danse trouvé';
        }
    }
    else 
    {
        // ajout d'une nouvelle Danse
       $danse = new Danse();
    }


      $form = $this->container->get('form.factory')->create(new DanseType(), $danse);
      $request = $this->container->get('request');

      if ($request->getMethod() == 'POST') 
      {
        //$form->bindRequest($request);

        if ($form->handleRequest($request)->isValid()) 
        {
          $em = $this->container->get('doctrine')->getEntityManager();
          $em->persist($danse);
          $em->flush();
          if (isset($id)) 
        {
            $message='Danse modifiée avec succès !';
           return $this->redirect($this->generateUrl('ad_danse_lister'));
        }
        else 
        {
            $message='Danse ajoutée avec succès !';
             return $this->redirect($this->generateUrl('ad_danse_lister'));
        }
          
        
        }

      }
    
       return $this->render('ADPresaisonBundle:Danse:modifier.html.twig', array(
      'form' => $form->createView(),
       'message' => $message,
    )); 
    }

    public function supprimerAction($id)
    {

      $em = $this->container->get('doctrine')->getEntityManager();
      $danse = $em->find('ADCoreBundle:Danse', $id);
            
      if (!$danse) 
      {
        throw new NotFoundHttpException("Danse non trouvé");
      }
            
      $em->remove($danse);
      $em->flush();        
      return new RedirectResponse($this->container->get('router')->generate('ad_danse_lister'));
    }
	
	
public function rechercherAction()
{               
    $request = $this->container->get('request');

    if($request->isXmlHttpRequest())
    {
        $motcle = '';
        $motcle = $request->request->get('motcle');

        $em = $this->container->get('doctrine')->getEntityManager();

        if($motcle != '')
        {
               $qb = $em->createQueryBuilder();

               $qb->select('d')
                  ->from('ADDanseBundle:Danse', 'd')
                  ->where("d.nomDanse LIKE :motcle ")
                  ->orderBy('d.nomDanse', 'ASC')
                  ->setParameter('motcle', '%'.$motcle.'%');

               $query = $qb->getQuery();               
               $danses = $query->getResult();
        }
        else {
            $danses = $em->getRepository('ADCoreBundle:Danse')->findAll();
        }

        return $this->container->get('templating')->renderResponse('ADPresaisonBundle:Danse:lister.html.twig', array(
            'danses' => $danses
            ));
    }
    else {
        return $this->listerAction();
    }
}
}
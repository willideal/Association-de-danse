<?php

namespace AD\PresaisonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AD\CoreBundle\Entity\Professeur;
use AD\PresaisonBundle\Form\ProfesseurType;
use Symfony\Component\HttpFoundation\Request;
use AD\PresaisonBundle\Form\ProfesseurRechercheType;


class ProfesseurController extends Controller
{
    public function listerAction()
    {
	   $em = $this->container->get('doctrine')->getEntityManager();

    $professeurs= $em->getRepository('ADCoreBundle:Professeur')->findAll();
	
	$form = $this->container->get('form.factory')->create(new ProfesseurRechercheType());
    return $this->container->get('templating')->renderResponse('ADPresaisonBundle:Professeur:lister.html.twig', 
    array(
    'professeurs' => $professeurs,
	'form' => $form->createView()
    ));
    }
    
    public function modifierAction($id = null)
    {

        $message='';
    $em = $this->container->get('doctrine')->getEntityManager();

    if (isset($id)) 
    {
        // modification d'un professeur existant : on recherche ses données
        $professeur = $em->find('ADCoreBundle:Professeur', $id);

        if (!$professeur)
        {
            $message='Aucun professeur trouvé';
        }
    }
    else 
    {
        // ajout d'une nouveau professeur
       $professeur = new Professeur();
    }


      $form = $this->container->get('form.factory')->create(new ProfesseurType(), $professeur);
      $request = $this->container->get('request');

      if ($request->getMethod() == 'POST') 
      {
        //$form->bindRequest($request);

        if ($form->handleRequest($request)->isValid()) 
        {
          $em = $this->container->get('doctrine')->getEntityManager();
          $em->persist($professeur);
          $em->flush();
          if (isset($id)) 
        {
            $message='professeur modifiée avec succès !';
            return $this->redirect($this->generateUrl('ad_professeur_lister'));
        }
        else 
        {
            $message='professeur ajoutée avec succès !';
            return $this->redirect($this->generateUrl('ad_professeur_lister'));
        }
          
        
        }

      }
    
       return $this->render('ADPresaisonBundle:Professeur:modifier.html.twig', array(
      'form' => $form->createView(),
       'message' => $message,
    )); 
    }

    public function supprimerAction($id)
    {

      $em = $this->container->get('doctrine')->getEntityManager();
      $professeur = $em->find('ADCoreBundle:Professeur', $id);
            
      if (!$professeur) 
      {
        throw new NotFoundHttpException("professeur non trouvé");
      }
            
      $em->remove($professeur);
      $em->flush();        
      return new RedirectResponse($this->container->get('router')->generate('ad_professeur_lister'));
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

               $qb->select('p')
                  ->from('ADCoreBundle:Professeur', 'p')
                  ->where("p.nomprof LIKE :motcle OR p.prenomprof LIKE :motcle")
                  ->orderBy('p.nomprof', 'ASC')
                  ->setParameter('motcle', '%'.$motcle.'%');

               $query = $qb->getQuery();               
               $professeurs = $query->getResult();
        }
        else {
            $professeurs = $em->getRepository('ADCoreBundle:Professeur')->findAll();
        }

        return $this->container->get('templating')->renderResponse('ADPresaisonBundle:Professeur:liste.html.twig', array(
            'professeurs' => $professeurs
            ));
    }
    else {
        return $this->listerAction();
    }
}
}
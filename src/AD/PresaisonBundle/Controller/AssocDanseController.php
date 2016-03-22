<?php
// src/AD/DanseBundle/Controller/AssocDanseController.php

namespace AD\DanseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use  AD\DanseBundle\Entity\Contact;
use  AD\DanseBundle\Form\ContactType;

class AssocDanseController extends Controller
{
    public function indexAction()
    {
        return $this->render('ADDanseBundle:AssocDanse:index.html.twig');
    }

    public function contactAction()
	{
    $contact = new Contact();
    $form = $this->createForm(new ContactType(), $contact);

    $request = $this->getRequest();
    if ($request->getMethod() == 'POST') {
        //$form->bindRequest($request);

        if ($form->handleRequest($request)->isValid()) {
            // Perform some action, such as sending an email

            // Redirect - This is important to prevent users re-posting
            // the form if they refresh the page
            return $this->redirect($this->generateUrl('ad_danse_contact'));
        }
    }

    return $this->render('ADDanseBundle:AssocDanse:contact.html.twig', array(
        'form' => $form->createView()
    ));
	}

}
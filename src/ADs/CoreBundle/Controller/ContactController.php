<?php
// src/AD/DanseBundle/Controller/AssocDanseController.php

namespace AD\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use  AD\CoreBundle\Entity\Contact;
use  AD\CoreBundle\Form\ContactType;

class ContactController extends Controller
{
    public function indexAction()
    {
        return $this->render('ADCoreBundle:Contact:index.html.twig');
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

    return $this->render('ADCoreBundle:Contact:contact.html.twig', array(
        'form' => $form->createView()
    ));
	}

}
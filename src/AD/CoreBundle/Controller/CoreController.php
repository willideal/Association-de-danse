<?php

namespace AD\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class CoreController extends Controller
{
  
  public function indexAction()
  {
        return $this->render('ADCoreBundle:Core:index.html.twig');
   
  }

  // La page de contact
  public function contactAction(Request $request)
  {
    // On récupère la session depuis la requête, en argument du contrôleur
    $session = $request->getSession();
    // Et on définit notre message
    $session->getFlashBag()->add('info', 'La page de contact n’est pas encore disponible, merci de revenir plus tard.');

    // Enfin, on redirige simplement vers la page d'accueil
    return $this->redirect($this->generateUrl('ad_core_homepage'));

    // La méthodes longue new RedirectResponse($this->get('router')->generate('oc_core_homepage')); est parfaitement valable
  }
}

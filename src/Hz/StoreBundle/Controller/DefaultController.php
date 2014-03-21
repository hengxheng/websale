<?php

namespace Hz\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	// $user = $this->get('security.context')->getToken()->getUser();
    	// var_dump($user->getUsername());
        return $this->render('HzStoreBundle:Default:index.html.twig');
    }
}

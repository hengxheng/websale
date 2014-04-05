<?php

namespace Hz\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Hz\StoreBundle\Entity\Message;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	// $user = $this->get('security.context')->getToken()->getUser();
    	// var_dump($user->getUsername());
    	$em = $this->getDoctrine()->getManager();
        $messages = $em->getRepository('HzStoreBundle:Message')->findAll();
       
        return $this->render('HzStoreBundle:Default:index.html.twig',array("messages" => $messages));
    }
}

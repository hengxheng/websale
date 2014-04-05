<?php

namespace Hz\StoreBundle\Controller;

use Hz\StoreBundle\Entity\Message;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MessageController extends Controller
{

     public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $messages = $em->getRepository('HzStoreBundle:Message')->findAll();
       
        return $this->render('HzStoreBundle:Message:index.html.twig',array("messages" => $messages));
    }

    public function createAction(Request $request){
    	$message = new Message();

        $content = $request->request->get('msg');
        $create_date = new \DateTime('now');
        $user = $this->get('security.context')->getToken()->getUser();
        $username = $user->getUsername();
        $id = $user->getId();

        $message->setContent($content);
        $message->setCreateDate($create_date);
        $message->setAuthorName($username);
        $message->setAuthorId($id);
        $message->setAuthorRole("admin");

        $em = $this -> getDoctrine() -> getManager();
        $em -> persist($message);
        $em -> flush();
                        
    	return $this -> redirect($this->generateUrl('_homepage'));
    }

    public function removeAction(Request $request, $id){
        $message =  $this->getDoctrine()->getRepository('HzStoreBundle:Message')->find($id);
        $em = $this -> getDoctrine() -> getManager();
        $em -> remove($message);
        $em -> flush();
        return $this -> redirect($this->generateUrl('_homepage'));
    }

}
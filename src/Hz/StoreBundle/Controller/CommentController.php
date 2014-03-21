<?php

namespace Hz\StoreBundle\Controller;

use Hz\StoreBundle\Entity\Customer;
use Hz\StoreBundle\Entity\Comment;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CommentController extends Controller
{

    public function postAction(Request $request) {
        $ticket_id = $request->request->get('ticket_id');
        $ticket = $this->getDoctrine()->getRepository('HzStoreBundle:Ticket') -> find($ticket_id);

        $content = $request->request->get('content');
        $user = $this->get('security.context')->getToken()->getUser();
        $id = $user->getId();
        $current = new \DateTime('now');

        $comment = new Comment();
        $comment->setContent($content);
        $comment->setCreateDate($current);
        $comment->setAuthorId($id);
        $comment->setAuthorGroup("tech");
        $comment->setTicket($ticket);

        $em = $this -> getDoctrine() -> getManager();
        $em -> persist($comment);
        $em -> flush();

        return $this->redirect($this->generateUrl('_ticket_view', array("code" => $ticket->getCode() )));
    }


}
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
       
        $technicians = $this -> getDoctrine() -> getRepository('HzStoreBundle:Technician') -> findAll();

        $current = new \DateTime('now');
        $new_tickets = $em->getRepository('HzStoreBundle:Ticket')->findTicketsForViewsByStatus("New");
        $_temp= array();
        foreach ($new_tickets as $ticket) {
            $dayleft = date_diff($current, $ticket['dueDate']);
            $t = $ticket;
            if($dayleft->days == 0){
                $t['left'] = 1;
            }
            else{
                $t['left'] = ($dayleft->invert)?0 : ($dayleft->days+1);
            }
           
            $_temp[] = $t;
        }

        $new_tickets = $_temp;


        return $this->render('HzStoreBundle:Default:index.html.twig',array(
        	"messages" => $messages,
        	"tickets" => $new_tickets,
        	"technicians" => $technicians 
        	));
    }
}

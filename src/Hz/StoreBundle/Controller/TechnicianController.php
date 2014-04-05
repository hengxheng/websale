<?php

namespace Hz\StoreBundle\Controller;

use Hz\StoreBundle\Entity\Technician;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TechnicianController extends Controller
{
    public function indexAction()
    {
        $repository = $this -> getDoctrine() -> getRepository('HzStoreBundle:Technician');
        $technicians = $repository -> findAll();

        return $this -> render('HzStoreBundle:Technician:list.html.twig',
            array(
                'technicians' => $technicians,
                'list_name' => 'Technician'));
    }

    public function listForAssignAction($ticket_id){
        $repository = $this -> getDoctrine() -> getRepository('HzStoreBundle:Technician');
        $technicians = $repository -> findAll();
        $html = '<div class="technician-list">';
        $html .= '<ul>';
        foreach ($technicians as $tech){
            $id = $tech -> getId();
            $html .= '<li><a href="'.$this->generateUrl('_assign_ticket',array("ticket_id" => $ticket_id, "tech_id" => $id )).'">'.$tech->getFirstname().' '.$tech->getLastname().'</a></li>';
        }
        $html .= '</ul></div>';
        return new Response($html);
    }

    public function createAction(Request $request){
    	$technician = new Technician();
        $form = $this -> createFormBuilder($technician)
                        ->add('username', 'text')
                        ->add('firstname', 'text')
                        ->add('lastname', 'text')
                        ->add('email', 'text')
                        ->add('phone', 'text')
                        ->add('address1', 'text')
                        ->add('address2', 'text', array('required' => false ))
                        ->add('suburb', 'text')
                        ->add('postcode', 'text')
                        ->add('password', 'password')
                        ->add('confirm_password', 'password', array( "mapped" => false ))
                        ->add('save', 'submit', array('attr' => array('class'=>'buttons')))
                        ->getForm();

    	
        
        $form->handleRequest($request);
        if ($form->isValid()) {
            $password = $form->get('password')->getData();
            $technician -> setSalt(md5(uniqid()));
            $encoder = $this->container->get('security.encoder_factory')->getEncoder($technician); 
            $technician->setPassword($encoder->encodePassword($password, $technician->getSalt()));
            $em = $this -> getDoctrine() -> getManager();
            $em -> persist($technician);
            $em -> flush();

            return $this->redirect($this->generateUrl('_technician'));
        }
                        

    	return $this -> render('HzStoreBundle:Customer:create.html.twig',
    							array('form' => $form -> createView(),
                                    'message' => 'Technician added')
    	);
    }

    public function viewAction(Request $request, $tech_id){
        $technician = $this -> getDoctrine() -> getRepository("HzStoreBundle:Technician") -> find($tech_id);
        $form = $this -> createFormBuilder($technician)
                        ->add('firstname', 'text')
                        ->add('lastname', 'text')
                        ->add('email', 'text')
                        ->add('phone', 'text')
                        ->add('address1', 'text')
                        ->add('address2', 'text', array( 'required' => false))
                        ->add('suburb', 'text')
                        ->add('postcode', 'text')
                        ->add('Save', 'submit', array('attr' => array('class'=>'buttons')))
                        ->add('Cancel', 'submit', array('attr' => array('class'=>'buttons')))
                        ->add('Back and Save', 'submit', array('attr' => array('class'=>'buttons')))
                        // ->add('Remove', 'submit', array('attr' => array('class'=>'r_buttons')))
                        ->getForm();

        $tickets = $this -> getDoctrine() -> getRepository("HzStoreBundle:Ticket") -> findTicketsForTechnician($tech_id);
        // var_dump($tickets);
        $working = array();
        $history = array();
        foreach ($tickets as $ticket){
           if ($ticket['status'] == "Processing") {
                $working[] = $ticket;

            }
            else{
                $history[] = $ticket;
            }
        }

        $form->handleRequest($request);
        if ($form->isValid()) {
    
            $em = $this -> getDoctrine() -> getManager();
            $em -> persist($technician);
            $em -> flush();
            if( $form->get('Back and Save')->isClicked()){
                return $this->redirect($this->generateUrl('_technician'));
            }
        }
                        

        return $this -> render('HzStoreBundle:Technician:view.html.twig',
                                array('form' => $form -> createView(),
                                      'working' => $working,
                                      'history' => $history,
                                    'message' => 'Technician added')
        );
    }

    public function removeAction(Request $request, $tech_id){
        $technician = $this->getDoctrine()->getRepository('HzStoreBundle:Technician')->find($tech_id);

        if (!$technician) {
            throw $this->createNotFoundException('No Technician found for id '.$tech_id);
        }
        $em = $this -> getDoctrine() -> getManager();
        $em->remove($technician);
        $em->flush();               
        return $this->redirect($this->generateUrl('_technician'));
    }

}
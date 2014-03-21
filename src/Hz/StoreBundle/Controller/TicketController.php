<?php

namespace Hz\StoreBundle\Controller;
use Hz\StoreBundle\Entity\Ticket;
use Hz\StoreBundle\Entity\Customer;
use Hz\StoreBundle\Entity\Machine;
use Hz\StoreBundle\Entity\Task;
use Hz\StoreBundle\Entity\Accessory;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TicketController extends Controller
{
    // list all tikets
    public function indexAction(){
        
        $technicians = $this -> getDoctrine() -> getRepository('HzStoreBundle:Technician') -> findAll();

        $em = $this->getDoctrine()->getManager();
        $tickets = $em->getRepository('HzStoreBundle:Ticket')->findTicketsForViews();
        foreach ($tickets as $ticket) {
            $dayleft = date_diff($ticket['dueDate'], $ticket['createDate'])->days;
            $t = $ticket;
            $t['left'] = $dayleft;
            $temp[] = $t;
        }

        $tickets = $temp;

        $new_tickets = $em->getRepository('HzStoreBundle:Ticket')->findTicketsForViewsByStatus("New");
        foreach ($new_tickets as $ticket) {
            $dayleft = date_diff($ticket['dueDate'], $ticket['createDate'])->days;
            $t = $ticket;
            $t['left'] = $dayleft;
            $_temp[] = $t;
        }

        $new_tickets = $_temp;

        return $this -> render('HzStoreBundle:Ticket:list.html.twig', array(
                                                                        'tickets' => $tickets, 
                                                                        'new_tickets' => $new_tickets,
                                                                        'technicians' => $technicians 
                                                                        ));
    }

    public function editAction(Request $request, $code){
        $data  = $this -> getDoctrine() -> getRepository('HzStoreBundle:Ticket')-> findTicketsByCode($code);
        $accessories = $this->getDoctrine()->getRepository('HzStoreBundle:Accessory') -> getByMachineId($data['mid']);
        
        $has_bag = false;
        $has_battery = false;
        $has_charger = false;
        $has_other = "";
        foreach($accessories as $ac){
            if($ac['type'] == "bag"){
                $has_bag = true;
                $bag_id = $ac['id'];
            }
            elseif($ac['type'] == "battery"){
                $has_battery = true;
                $battery_id = $ac['id'];
            }
            elseif($ac['type'] == "charger"){
                $has_charger = true;
                $charger_id = $ac['id'];
            } 
            elseif($ac['type'] == "other") {
                $has_other = $ac['comments'];
                $other_id = $ac['id'];
            } 
        }
        $dueDate = date_format($data['dueDate'],"Y-m-d");
        $form = $this -> createFormBuilder()
                        ->add('serial', 'text', array('label' => 'Serial No.', 'data'=>$data['serial']))
                        ->add('brand', 'text', array('data' => $data['brand']))
                        ->add('model', 'text', array('data' => $data['model']))
                        ->add('password', 'text', array('required' => false, 'data'=> $data['password']))
                        ->add('price', 'text', array(
                                                'mapped' => false,
                                                'data' => $data['price']
                                                ))                                             
                        ->add('due_date', 'date',
                                            array(
                                                'mapped' => false,
                                                'input' => 'string',
                                                'widget' => 'choice',
                                                'format' => 'yyyy-MM-dd',
                                                'data' => $dueDate,
                                                // 'pattern' => '{{ year }}-{{ month }}-{{ dd }}',
                                                // 'years' => range(Date('Y'), 2010),
                                                ))
                        ->add('reference','text', array(
                                                    "mapped" => false,
                                                    "required" => false,
                                                    "data" => $data['reference']
                                                ))
                        ->add('bag','checkbox', array('label'  => 'come with a Carry Bag',
                                                'mapped' => false,
                                                'required'  => false,
                                                'attr' => array('checked' => $has_bag )
                                                ))
                        ->add('battery','checkbox', array('label'  => 'come with a battery',
                                                'mapped' => false,
                                                'required'  => false,
                                                'attr' => array('checked' => $has_battery )
                                                ))
                        ->add('charger','checkbox', array('label'  => 'come with a AC Charger',
                                                'mapped' => false,
                                                'required'  => false,
                                                'attr' => array('checked' => $has_charger )
                                                ))
                        ->add('other','text', array('label' => 'Other Accessory',
                                                    'mapped' => false,
                                                    'required' => false,
                                                    'data' => $has_other,
                                                ))
                        ->add('comments', 'textarea', array('data'=>$data['comments']))
                        ->add('Update', 'submit',array('attr' => array('class'=>'buttons')))
                        ->add('Cancel', 'submit',array('attr' => array('class'=>'buttons')))
                        ->getForm();

        
        $form->handleRequest($request);

        if ($form->isValid()) {
            if( $form -> get('Cancel') -> isClicked()){
                return $this -> redirect($this->generateUrl('_ticket_view', array('code' => $code )));
            }

            $machine = $this->getDoctrine()->getRepository('HzStoreBundle:Machine')->find($data['mid']);
            $ticket = $this->getDoctrine()->getRepository('HzStoreBundle:Ticket')->find($data['id']);
            

            $machine->setSerial($form->get('serial')->getData());
            $machine->setModel($form->get('model')->getData());
            $machine->setBrand($form->get('brand')->getData());
            $machine->setComments($form->get('comments')->getData());
            $machine->setPassword($form->get('password')->getData());

            $duedate = date_create($form->get('due_date')->getData());
            $ticket->setDueDate($duedate);
            $ticket->setPrice($form->get('price')->getData());
            $ticket->setReference($form->get('reference')->getData());         

            $with_bag = $form -> get('bag')->getData();
            $with_charger = $form -> get('charger')->getData();
            $with_battery = $form -> get('battery')->getData();
            $other = $form -> get('other') -> getData();;

            $em = $this->getDoctrine()->getManager();
 

            if($with_bag && !$has_bag){
                $bag = new Accessory();
                $bag -> setMachine($machine);
                $bag -> setType("bag");
                $em -> persist($bag);    
            }
            elseif (!$with_bag && $has_bag) {
                $bag = $this->getDoctrine()->getRepository('HzStoreBundle:Accessory')->find($bag_id);
                $em->remove($bag);
            }

            if($with_battery && !$has_battery){
                $battery = new Accessory();
                $battery -> setMachine($machine);
                $battery -> setType("battery");
                $em->persist($battery);
            }
            elseif (!$with_battery && $has_battery) {
                $battery = $this->getDoctrine()->getRepository('HzStoreBundle:Accessory')->find($battery_id);
                $em -> remove($battery);
            }


            if($with_charger && !$has_charger){
                $charger = new Accessory();
                $charger -> setMachine($machine);
                $charger -> setType("charger");
                $em -> persist($charger);
            }
            elseif (!$with_charger && $has_charger ) {
                $charger = $this->getDoctrine()->getRepository('HzStoreBundle:Accessory')->find($charger_id);
                $em -> remove($charger);
            }

            if(!empty($other) && !$has_other ) {
                $other_accessory = new Accessory();
                $other_accessory -> setMachine($machine);
                $other_accessory -> setType("other");
                $other_accessory->setComments($other);                                 
                $em -> persist($other_accessory);            
            }
            elseif (empty($other) && $has_other) {
                $other_accessory = $this->getDoctrine()->getRepository('HzStoreBundle:Accessory')->find($other_id);
                $em -> remove($other_accessory);
            }

        
            $em -> persist($machine);
            $em -> persist($ticket);
            $em -> flush();

            // return new Response();
            return $this -> redirect($this->generateUrl('_ticket_view', array('code' => $code )));
        }               
        
        return $this -> render('HzStoreBundle:Customer:create.html.twig',
                                array('form' => $form -> createView(),
                                    'message' => 'Edit Ticket'));
    }

    public function viewAction(Request $request, $code){
        $data  = $this -> getDoctrine() -> getRepository('HzStoreBundle:Ticket')-> findTicketsByCode($code);
        $technicians = $this -> getDoctrine() -> getRepository('HzStoreBundle:Technician') -> findAll();

        $machine_id = $data['mid'];
        $accessories = $this->getDoctrine()->getRepository('HzStoreBundle:Accessory') -> getByMachineId($machine_id);
        $comments = $this->getDoctrine()->getRepository('HzStoreBundle:Comment')-> findCommentsByTid($data['id']);

        return $this -> render('HzStoreBundle:Ticket:view.html.twig',
                                array( 
                                    "data" => $data,
                                    "accessories" => $accessories,
                                    'technicians' => $technicians,
                                    'comments' => $comments 
                                 ));
    }

    public function searchAction(Request $request){
        $term = $request->request->get('term');

        $tickets = $this -> getDoctrine() -> getRepository("HzStoreBundle:Ticket")->search($term);
        return $this -> render('HzStoreBundle:Ticket:search-result.html.twig',
            array(
                'tickets' => $tickets,
                'list_name' => 'Tickets'));
    }

    public function assignToAction($ticket_id, $tech_id){
        // get ticket
        $ticket = $this->getDoctrine()->getRepository('HzStoreBundle:Ticket')->find($ticket_id);
        // get technician
        $technician = $this->getDoctrine()->getRepository('HzStoreBundle:Technician')->find($tech_id);
        $t_name = $technician -> getFirstname();

        $task = new task();
        $task -> setTicket($ticket);
        $task -> setTechnician($technician);

        $current_date = new \DateTime('now');
        $task -> setCreateDate($current_date);

        $em = $this -> getDoctrine() -> getManager();
        $em -> persist($task);
        $em -> flush();

        return $this->redirect($this->generateUrl('_ticket'));
    }

    public function changeStatusAction(Request $request){
        $ticket_id = $request->request->get('id');
        $status = $request->request->get('status');
        $ticket = $this->getDoctrine()->getRepository('HzStoreBundle:Ticket')->find($ticket_id);
        $ticket -> setStatus($status);

        $em = $this -> getDoctrine() -> getManager();
        $em -> persist($ticket);
        $em -> flush();

        return new Response('<p>Ticket status change to '.$status.'</p>');
    }

    public function emailAction(Request $request){
        $myemail = "hengxheng@hotmail.com";
        $customer = $this->get('request')->request->get('c_name');
        $email = $this->get('request')->request->get('c_email');
        $ticket = $this->get('request')->request->get('ticket');

        $headers = 'From: websale.com.au\r\n';
        $subject = "Websale (tikcet: ".$ticket.")";
        $content = wordwrap($this->get('request')->request->get('msg'),70);
        $msg = "Hi {$customer},\n";
        $msg .= $content;
        $msg .= "\n Best regards, \n Websale";
        var_dump($customer);
        var_dump($email);
        var_dump($ticket);
        echo $msg;
// send email
        mail($email ,$subject, $msg, $headers);
        return new Response();
    }
}
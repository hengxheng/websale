<?php

namespace Hz\StoreBundle\Controller;

use Hz\StoreBundle\Entity\Machine;
use Hz\StoreBundle\Entity\Customer;
use Hz\StoreBundle\Entity\Accessory;
use Hz\StoreBundle\Entity\Ticket;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MachineController extends Controller
{

    public function createAction(Request $request, $customer_id){
    	$machine = new Machine();
		
        $form = $this -> createFormBuilder($machine)
                        ->add('serial', 'text', array('label'=> 'Serial No.'))
                        ->add('brand', 'text')
                        ->add('model', 'text')
                        ->add('password', 'text', array('required' => false))
                        ->add('price', 'text', array(
                                                "mapped" => false,
                                                ))                                             
                        ->add('due_date', 'date',
                        					array(
							                    "mapped" => false,
							                ),
                        					array(
                                                'input' => 'string',
					                        	'widget' => 'choice',
												'format' => 'yyyy-MM-dd',
												// 'pattern' => '{{ year }}-{{ month }}-{{ dd }}',
												// 'years' => range(Date('Y'), 2010),
												))
                        ->add('reference','text', array(
                                                    "mapped" => false,
                                                    "required" => false,
                                                ))
                        ->add('bag','checkbox', array('label'  => 'come with a Carry Bag',
                                                'mapped' => false,
                                                'required'  => false,
                                                ))
                        ->add('battery','checkbox', array('label'  => 'come with a battery',
                                                'mapped' => false,
                                                'required'  => false,
                                                ))
                        ->add('charger','checkbox', array('label'  => 'come with a AC Charger',
                                                'mapped' => false,
                                                'required'  => false,
                                                ))
                        ->add('other','text', array('label' => 'Other Accessory',
                                                    'mapped' => false,
                                                    'required' => false
                                                ))
                        ->add('comments', 'textarea')
                        ->add('save', 'submit',array('attr' => array('class'=>'buttons')))
                       
                        ->getForm();

        
        $form->handleRequest($request);

        if ($form->isValid()) {
        	
			$customer = $this->getDoctrine()->getRepository('HzStoreBundle:Customer')->find($customer_id);
			$machine -> setCustomer($customer);
 			
            $em = $this -> getDoctrine() -> getManager();
            $em -> persist($machine);
           

            $with_bag = $form -> get('bag');
            $with_charger = $form -> get('charger');
            $with_battery = $form -> get('battery');
            $other = $form -> get('other') -> getData();;

            if($with_bag){
                $bag = new Accessory();
                $bag -> setMachine($machine);
                $bag -> setType("bag");
                $em -> persist($bag);

            }

            if($with_battery){
                $battery = new Accessory();
                $battery -> setMachine($machine);
                $battery -> setType("battery");
                $em -> persist($battery);
            }

            if($with_charger){
                $charger = new Accessory();
                $charger -> setMachine($machine);
                $charger -> setType("charger");
                $em -> persist($charger);
            }

            if($other) {
                $other_accessory = new Accessory();
                $other_accessory -> setMachine($machine);
                $other_accessory -> setType("other");
                $other_accessory -> setComments($other);
                $em -> persist($other_accessory);
            }


            $duedate = $form->get('due_date')->getData();
            $price = $form->get('price')->getData();
            $reference = $form->get('reference')->getData();

            $current = new \DateTime('now');
            $ticket = new Ticket();
            $ticket -> setMachine($machine);
            $ticket -> setCode("WS".date_format($current, 'ymdHis'));
            $ticket -> setStatus("New");
            $ticket -> setCreateDate($current);
            $ticket -> setDueDate($duedate);
            $ticket -> setPrice($price);
            $ticket -> setReference($reference);

            $em -> persist($ticket);
            $em -> flush();

            $accessories = $this->getDoctrine()->getRepository('HzStoreBundle:Accessory') -> getByMachineId($machine->getId());
            return $this -> render('HzStoreBundle:Ticket:create.html.twig',
                                array( "customer" => $customer,
                                        "machine" => $machine,
                                        "accessories" => $accessories,
                                        "ticket" => $ticket,
                                      ));
        }
                        

    	return $this -> render('HzStoreBundle:Customer:create.html.twig',
    							array('form' => $form -> createView(),
                                    'message' => 'Customer added')
    	);
    }
}
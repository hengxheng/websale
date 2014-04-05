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
        $current = new \DateTime('now');
		$today = date_format($current,"Y-m-d");

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
                                                'mapped' => false,
                                                'input' => 'string',
                                                'widget' => 'choice',
                                                'format' => 'yyyy-MM-dd',
                                                'data' => $today,
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
                        ->add('comments', 'textarea', array(
                            "label"=>"Description",
                            "attr"=>array("class"=>"comments-box")))
                        ->add('img','hidden',array(
                                                "mapped" => false,
                                                "attr" => array( "class" => "img_file")
                                            ))
                        ->add('save', 'submit',array('attr' => array('class'=>'buttons')))
                       
                        ->getForm();

        
        $form->handleRequest($request);

        if ($form->isValid()) {
        	
			$customer = $this->getDoctrine()->getRepository('HzStoreBundle:Customer')->find($customer_id);
			$machine -> setCustomer($customer);
 			
            $em = $this -> getDoctrine() -> getManager();
            $em -> persist($machine);
            
                       
            $with_bag = $form -> get('bag')->getData();
            $with_charger = $form -> get('charger')->getData();
            $with_battery = $form -> get('battery')->getData();
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


            $duedate = date_create($form->get('due_date')->getData());
            $price = $form->get('price')->getData();
            $reference = $form->get('reference')->getData();

            $ticket = new Ticket();
            $ticket -> setMachine($machine);
            $ticket -> setCode("WS".date_format($current, 'ymdHis'));
            $ticket -> setStatus("New");
            $ticket -> setCreateDate($current);
            $ticket -> setDueDate($duedate);
            $ticket -> setPrice($price);
            $ticket -> setReference($reference);

            $img_data = $form -> get('img') -> getData();

            if($img_data){
                list($type, $img_data) = explode(';', $img_data);
                list(, $img_data)      = explode(',', $img_data);
                $img_data = base64_decode($img_data);
                $img_name = date_format($current, 'ymdHis').'.png';

                file_put_contents('bundles/hzstore/images/machine/'.$img_name, $img_data);
                $ticket -> setImgUrl($img_name);
            }

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
                        

    	return $this -> render('HzStoreBundle:Machine:create.html.twig',
    							array('form' => $form -> createView(),
                                    'message' => 'Customer added')
    	);
    }
}
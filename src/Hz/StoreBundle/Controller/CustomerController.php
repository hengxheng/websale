<?php

namespace Hz\StoreBundle\Controller;

use Hz\StoreBundle\Entity\Customer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CustomerController extends Controller
{
    public function indexAction(){

        $repository = $this -> getDoctrine() -> getRepository('HzStoreBundle:Customer');
        $customers = $repository -> findAll();

        return $this -> render('HzStoreBundle:Customer:list.html.twig',
            array(
                'customers' => $customers,
                'list_name' => 'Customers'));
    }

    public function createAction(Request $request){
    	$customer = new Customer();


        $form = $this -> createFormBuilder($customer)
                        ->add('firstname', 'text')
                        ->add('lastname', 'text')
                        ->add('email', 'email')
                        ->add('phone', 'text')
                        ->add('company', 'text',array('required'=>false))
                        ->add('address1', 'text')
                        ->add('address2', 'text',array('required'=>false))
                        ->add('suburb', 'text')
                        ->add('city', 'text')
                        ->add('postcode', 'text')
                        ->add('save', 'submit',array('attr' => array('class'=>'buttons')))
                        ->getForm();

    	
        
        $form->handleRequest($request);
        if ($form->isValid()) {

            // $data = $form->getData();
            $em = $this -> getDoctrine() -> getManager();
            $em -> persist($customer);
            $em -> flush();
            $customer_id = $customer -> getId();
            return $this->redirect($this->generateUrl('_machine_add', array('customer_id' => $customer_id)));
        }
                        
    	return $this -> render('HzStoreBundle:Customer:create.html.twig',
    							array('form' => $form -> createView(),
                                    'message' => 'Customer added')
    	);
    }

    public function viewAction(Request $request, $customer_id){
        $customer = $this->getDoctrine()->getRepository('HzStoreBundle:Customer')->find($customer_id);

        $form = $this -> createFormBuilder($customer)
                        ->add('firstname', 'text')
                        ->add('lastname', 'text')
                        ->add('email', 'text')
                        ->add('phone', 'text')
                        ->add('company', 'text')
                        ->add('address1', 'text')
                        ->add('address2', 'text', array('required' => false))
                        ->add('suburb', 'text')
                        ->add('city', 'text')
                        ->add('postcode', 'text')
                        ->add('save', 'submit', array('attr' => array('class'=>'buttons')))
                        ->add('Back', 'submit', array('attr' => array('class'=>'buttons')))
                        ->add('Remove', 'submit', array('attr' => array('class'=>'r_buttons')))
                        ->getForm();

        $form->handleRequest($request);
        if ($form->isValid()) {
            
            if( $form -> get('Remove') -> isClicked()){
                return $this -> forward('HzStoreBundle:Customer:remove', array(
                    'customer_id' => $customer_id,
                ));
            }

            $em = $this -> getDoctrine() -> getManager();
            $em -> persist($customer);
            $em -> flush();

            if( $form->get('Back')->isClicked()){
                return $this->redirect($this->generateUrl('_customer'));
            }
            
        }
                        
        return $this -> render('HzStoreBundle:Customer:create.html.twig',
                                array('form' => $form -> createView(),
                                    'message' => 'Customer added')
        );
    }

    public function removeAction(Request $request, $customer_id){
        $customer = $this->getDoctrine()->getRepository('HzStoreBundle:Customer')->find($customer_id);

        if (!$customer) {
            throw $this->createNotFoundException('No Customer found for id '.$customer_id);
        }
        $em = $this -> getDoctrine() -> getManager();
        $em->remove($customer);
        $em->flush();               
        return $this->redirect($this->generateUrl('_customer'));
    }

    public function searchAction(Request $request){
        $term = $request->request->get('term');

        $customers = $this -> getDoctrine() -> getRepository("HzStoreBundle:Customer")->search($term);
        return $this -> render('HzStoreBundle:Customer:list.html.twig',
            array(
                'customers' => $customers,
                'list_name' => 'Customers'));
    }

}
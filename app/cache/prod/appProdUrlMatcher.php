<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // _homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_homepage');
            }

            return array (  '_controller' => 'Hz\\StoreBundle\\Controller\\DefaultController::indexAction',  '_route' => '_homepage',);
        }

        if (0 === strpos($pathinfo, '/customer')) {
            // _customer
            if ($pathinfo === '/customer') {
                return array (  '_controller' => 'Hz\\StoreBundle\\Controller\\CustomerController::indexAction',  '_route' => '_customer',);
            }

            // _customer_add
            if ($pathinfo === '/customer/add') {
                return array (  '_controller' => 'Hz\\StoreBundle\\Controller\\CustomerController::createAction',  '_route' => '_customer_add',);
            }

            // _customer_view
            if (0 === strpos($pathinfo, '/customer/view') && preg_match('#^/customer/view/(?P<customer_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_customer_view')), array (  '_controller' => 'Hz\\StoreBundle\\Controller\\CustomerController::viewAction',));
            }

            // _customer_remove
            if (0 === strpos($pathinfo, '/customer/remove') && preg_match('#^/customer/remove/(?P<customer_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_customer_remove')), array (  '_controller' => 'Hz\\StoreBundle\\Controller\\CustomerController::removeAction',));
            }

            // _customer_search
            if ($pathinfo === '/customer/search') {
                return array (  '_controller' => 'Hz\\StoreBundle\\Controller\\CustomerController::searchAction',  '_route' => '_customer_search',);
            }

        }

        // _machine_add
        if (0 === strpos($pathinfo, '/machine/add') && preg_match('#^/machine/add/(?P<customer_id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_machine_add')), array (  '_controller' => 'Hz\\StoreBundle\\Controller\\MachineController::createAction',));
        }

        if (0 === strpos($pathinfo, '/t')) {
            if (0 === strpos($pathinfo, '/ticket')) {
                // _ticket
                if ($pathinfo === '/ticket') {
                    return array (  '_controller' => 'Hz\\StoreBundle\\Controller\\TicketController::indexAction',  '_route' => '_ticket',);
                }

                // _ticket_add
                if ($pathinfo === '/ticket/generated') {
                    return array (  '_controller' => 'Hz\\StoreBundle\\Controller\\TicketController::createAction',  '_route' => '_ticket_add',);
                }

                // _ticket_edit
                if (0 === strpos($pathinfo, '/ticket/edit') && preg_match('#^/ticket/edit/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_ticket_edit')), array (  '_controller' => 'Hz\\StoreBundle\\Controller\\TicketController::editAction',));
                }

                // _ticket_view
                if (0 === strpos($pathinfo, '/ticket/view') && preg_match('#^/ticket/view/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_ticket_view')), array (  '_controller' => 'Hz\\StoreBundle\\Controller\\TicketController::viewAction',));
                }

                if (0 === strpos($pathinfo, '/ticket/s')) {
                    // _ticket_search
                    if ($pathinfo === '/ticket/search') {
                        return array (  '_controller' => 'Hz\\StoreBundle\\Controller\\TicketController::searchAction',  '_route' => '_ticket_search',);
                    }

                    // _ticket_status
                    if ($pathinfo === '/ticket/status') {
                        return array (  '_controller' => 'Hz\\StoreBundle\\Controller\\TicketController::changeStatusAction',  '_route' => '_ticket_status',);
                    }

                }

                // _ticket_pfd
                if ($pathinfo === '/ticket/pdf') {
                    return array (  '_controller' => 'Hz\\StoreBundle\\Controller\\TicketController::pdfAction',  '_route' => '_ticket_pfd',);
                }

            }

            if (0 === strpos($pathinfo, '/technician')) {
                // _technician
                if ($pathinfo === '/technician') {
                    return array (  '_controller' => 'Hz\\StoreBundle\\Controller\\TechnicianController::indexAction',  '_route' => '_technician',);
                }

                if (0 === strpos($pathinfo, '/technician/a')) {
                    // _technician_ajax_list
                    if (0 === strpos($pathinfo, '/technician/ajax/list') && preg_match('#^/technician/ajax/list/(?P<ticket_id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_technician_ajax_list')), array (  '_controller' => 'Hz\\StoreBundle\\Controller\\TechnicianController::listForAssignAction',));
                    }

                    // _technician_add
                    if ($pathinfo === '/technician/add') {
                        return array (  '_controller' => 'Hz\\StoreBundle\\Controller\\TechnicianController::createAction',  '_route' => '_technician_add',);
                    }

                }

                // _technician_view
                if (0 === strpos($pathinfo, '/technician/view') && preg_match('#^/technician/view/(?P<tech_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_technician_view')), array (  '_controller' => 'Hz\\StoreBundle\\Controller\\TechnicianController::viewAction',));
                }

                // _technician_remove
                if (0 === strpos($pathinfo, '/technician/remove') && preg_match('#^/technician/remove/(?P<tech_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_technician_remove')), array (  '_controller' => 'Hz\\StoreBundle\\Controller\\TechnicianController::removeAction',));
                }

            }

            // _assign_ticket
            if (0 === strpos($pathinfo, '/ticket/assign') && preg_match('#^/ticket/assign/(?P<ticket_id>[^/]++)/(?P<tech_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_assign_ticket')), array (  '_controller' => 'Hz\\StoreBundle\\Controller\\TicketController::assignToAction',));
            }

        }

        // _assign
        if (0 === strpos($pathinfo, '/assign') && preg_match('#^/assign/(?P<ticket_id>[^/]++)/(?P<tech_id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_assign')), array (  '_controller' => 'Hz\\StoreBundle\\Controller\\TicketController::assignAction',));
        }

        // _comment_post
        if ($pathinfo === '/comment/post') {
            return array (  '_controller' => 'Hz\\StoreBundle\\Controller\\CommentController::postAction',  '_route' => '_comment_post',);
        }

        // _email_customer
        if ($pathinfo === '/email/customer') {
            return array (  '_controller' => 'Hz\\StoreBundle\\Controller\\TicketController::emailAction',  '_route' => '_email_customer',);
        }

        // _image_upload
        if ($pathinfo === '/upload') {
            return array (  '_controller' => 'Hz\\StoreBundle\\Controller\\TicketController::uploadAction',  '_route' => '_image_upload',);
        }

        if (0 === strpos($pathinfo, '/message')) {
            // _message_add
            if ($pathinfo === '/message/add') {
                return array (  '_controller' => 'Hz\\StoreBundle\\Controller\\MessageController::createAction',  '_route' => '_message_add',);
            }

            // _message_remove
            if (0 === strpos($pathinfo, '/message/remove') && preg_match('#^/message/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_message_remove')), array (  '_controller' => 'Hz\\StoreBundle\\Controller\\MessageController::removeAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Hz\\StoreBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

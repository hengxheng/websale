<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hz\\StoreBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        '_customer' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hz\\StoreBundle\\Controller\\CustomerController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/customer',    ),  ),  4 =>   array (  ),),
        '_customer_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hz\\StoreBundle\\Controller\\CustomerController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/customer/add',    ),  ),  4 =>   array (  ),),
        '_customer_view' => array (  0 =>   array (    0 => 'customer_id',  ),  1 =>   array (    '_controller' => 'Hz\\StoreBundle\\Controller\\CustomerController::viewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'customer_id',    ),    1 =>     array (      0 => 'text',      1 => '/customer/view',    ),  ),  4 =>   array (  ),),
        '_customer_remove' => array (  0 =>   array (    0 => 'customer_id',  ),  1 =>   array (    '_controller' => 'Hz\\StoreBundle\\Controller\\CustomerController::removeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'customer_id',    ),    1 =>     array (      0 => 'text',      1 => '/customer/remove',    ),  ),  4 =>   array (  ),),
        '_customer_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hz\\StoreBundle\\Controller\\CustomerController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/customer/search',    ),  ),  4 =>   array (  ),),
        '_machine_add' => array (  0 =>   array (    0 => 'customer_id',  ),  1 =>   array (    '_controller' => 'Hz\\StoreBundle\\Controller\\MachineController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'customer_id',    ),    1 =>     array (      0 => 'text',      1 => '/machine/add',    ),  ),  4 =>   array (  ),),
        '_ticket' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hz\\StoreBundle\\Controller\\TicketController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ticket',    ),  ),  4 =>   array (  ),),
        '_ticket_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hz\\StoreBundle\\Controller\\TicketController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ticket/generated',    ),  ),  4 =>   array (  ),),
        '_ticket_edit' => array (  0 =>   array (    0 => 'code',  ),  1 =>   array (    '_controller' => 'Hz\\StoreBundle\\Controller\\TicketController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'code',    ),    1 =>     array (      0 => 'text',      1 => '/ticket/edit',    ),  ),  4 =>   array (  ),),
        '_ticket_view' => array (  0 =>   array (    0 => 'code',  ),  1 =>   array (    '_controller' => 'Hz\\StoreBundle\\Controller\\TicketController::viewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'code',    ),    1 =>     array (      0 => 'text',      1 => '/ticket/view',    ),  ),  4 =>   array (  ),),
        '_ticket_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hz\\StoreBundle\\Controller\\TicketController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ticket/search',    ),  ),  4 =>   array (  ),),
        '_ticket_status' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hz\\StoreBundle\\Controller\\TicketController::changeStatusAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ticket/status',    ),  ),  4 =>   array (  ),),
        '_ticket_pfd' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hz\\StoreBundle\\Controller\\TicketController::pdfAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ticket/pdf',    ),  ),  4 =>   array (  ),),
        '_technician' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hz\\StoreBundle\\Controller\\TechnicianController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/technician',    ),  ),  4 =>   array (  ),),
        '_technician_ajax_list' => array (  0 =>   array (    0 => 'ticket_id',  ),  1 =>   array (    '_controller' => 'Hz\\StoreBundle\\Controller\\TechnicianController::listForAssignAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'ticket_id',    ),    1 =>     array (      0 => 'text',      1 => '/technician/ajax/list',    ),  ),  4 =>   array (  ),),
        '_technician_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hz\\StoreBundle\\Controller\\TechnicianController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/technician/add',    ),  ),  4 =>   array (  ),),
        '_technician_view' => array (  0 =>   array (    0 => 'tech_id',  ),  1 =>   array (    '_controller' => 'Hz\\StoreBundle\\Controller\\TechnicianController::viewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'tech_id',    ),    1 =>     array (      0 => 'text',      1 => '/technician/view',    ),  ),  4 =>   array (  ),),
        '_technician_remove' => array (  0 =>   array (    0 => 'tech_id',  ),  1 =>   array (    '_controller' => 'Hz\\StoreBundle\\Controller\\TechnicianController::removeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'tech_id',    ),    1 =>     array (      0 => 'text',      1 => '/technician/remove',    ),  ),  4 =>   array (  ),),
        '_assign_ticket' => array (  0 =>   array (    0 => 'ticket_id',    1 => 'tech_id',  ),  1 =>   array (    '_controller' => 'Hz\\StoreBundle\\Controller\\TicketController::assignToAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'tech_id',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'ticket_id',    ),    2 =>     array (      0 => 'text',      1 => '/ticket/assign',    ),  ),  4 =>   array (  ),),
        '_assign' => array (  0 =>   array (    0 => 'ticket_id',    1 => 'tech_id',  ),  1 =>   array (    '_controller' => 'Hz\\StoreBundle\\Controller\\TicketController::assignAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'tech_id',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'ticket_id',    ),    2 =>     array (      0 => 'text',      1 => '/assign',    ),  ),  4 =>   array (  ),),
        '_comment_post' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hz\\StoreBundle\\Controller\\CommentController::postAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/comment/post',    ),  ),  4 =>   array (  ),),
        '_email_customer' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hz\\StoreBundle\\Controller\\TicketController::emailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/email/customer',    ),  ),  4 =>   array (  ),),
        '_image_upload' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hz\\StoreBundle\\Controller\\TicketController::uploadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/upload',    ),  ),  4 =>   array (  ),),
        '_message_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hz\\StoreBundle\\Controller\\MessageController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/message/add',    ),  ),  4 =>   array (  ),),
        '_message_remove' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Hz\\StoreBundle\\Controller\\MessageController::removeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/message/remove',    ),  ),  4 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Hz\\StoreBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}

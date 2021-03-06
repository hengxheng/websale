<?php

namespace Proxies\__CG__\Hz\StoreBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Ticket extends \Hz\StoreBundle\Entity\Ticket implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'id', 'price', 'code', 'reference', 'imgUrl', 'status', 'dueDate', 'createDate', 'machine', 'tasks', 'comments');
        }

        return array('__isInitialized__', 'id', 'price', 'code', 'reference', 'imgUrl', 'status', 'dueDate', 'createDate', 'machine', 'tasks', 'comments');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Ticket $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __contruct()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__contruct', array());

        return parent::__contruct();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCode($code)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCode', array($code));

        return parent::setCode($code);
    }

    /**
     * {@inheritDoc}
     */
    public function getCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCode', array());

        return parent::getCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', array($status));

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', array());

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setDueDate($dueDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDueDate', array($dueDate));

        return parent::setDueDate($dueDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getDueDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDueDate', array());

        return parent::getDueDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreateDate($createDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreateDate', array($createDate));

        return parent::setCreateDate($createDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreateDate', array());

        return parent::getCreateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setMachine(\Hz\StoreBundle\Entity\Machine $machine = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMachine', array($machine));

        return parent::setMachine($machine);
    }

    /**
     * {@inheritDoc}
     */
    public function getMachine()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMachine', array());

        return parent::getMachine();
    }

    /**
     * {@inheritDoc}
     */
    public function addTask(\Hz\StoreBundle\Entity\Task $tasks)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTask', array($tasks));

        return parent::addTask($tasks);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTask(\Hz\StoreBundle\Entity\Task $tasks)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTask', array($tasks));

        return parent::removeTask($tasks);
    }

    /**
     * {@inheritDoc}
     */
    public function getTasks()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTasks', array());

        return parent::getTasks();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice($price)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice', array($price));

        return parent::setPrice($price);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', array());

        return parent::getPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function addComment(\Hz\StoreBundle\Entity\Comment $comments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addComment', array($comments));

        return parent::addComment($comments);
    }

    /**
     * {@inheritDoc}
     */
    public function removeComment(\Hz\StoreBundle\Entity\Comment $comments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeComment', array($comments));

        return parent::removeComment($comments);
    }

    /**
     * {@inheritDoc}
     */
    public function getComments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComments', array());

        return parent::getComments();
    }

    /**
     * {@inheritDoc}
     */
    public function setReference($reference)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReference', array($reference));

        return parent::setReference($reference);
    }

    /**
     * {@inheritDoc}
     */
    public function getReference()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReference', array());

        return parent::getReference();
    }

    /**
     * {@inheritDoc}
     */
    public function setImgUrl($imgUrl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImgUrl', array($imgUrl));

        return parent::setImgUrl($imgUrl);
    }

    /**
     * {@inheritDoc}
     */
    public function getImgUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImgUrl', array());

        return parent::getImgUrl();
    }

}

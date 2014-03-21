<?php

namespace Hz\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Machine
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Hz\StoreBundle\Entity\MachineRepository")
 */
class Machine
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="serial", type="string", length=20)
     */
    private $serial;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=20, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=25)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="brand", type="string", length=20)
     */
    private $brand;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="string", length=100)
     */
    private $comments;

    /**
     * @ORM\ManyToOne(targetEntity="Customer", inversedBy="machines")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     */
    protected $customer;

    /**
     *  @ORM\OneToMany(targetEntity="Accessory", mappedBy="machine")
     */
    protected $accessories;

    /**
     *  @ORM\OneToMany(targetEntity="Ticket", mappedBy="machine")
     */
    protected $tickets;

    public function __contruct(){
        $this -> accessories = new ArrayCollection();
        $this -> tickets = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set serialNo
     *
     * @param string $serialNo
     * @return Machine
     */
    public function setSerial($serial)
    {
        $this->serial = $serial;

        return $this;
    }

    /**
     * Get serial
     *
     * @return string 
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * Set model
     *
     * @param string $model
     * @return Machine
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set brand
     *
     * @param string $brand
     * @return Machine
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return Machine
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->accessories = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add accessories
     *
     * @param \Hz\StoreBundle\Entity\Accessory $accessories
     * @return Machine
     */
    public function addAccessory(\Hz\StoreBundle\Entity\Accessory $accessories)
    {
        $this->accessories[] = $accessories;

        return $this;
    }

    /**
     * Remove accessories
     *
     * @param \Hz\StoreBundle\Entity\Accessory $accessories
     */
    public function removeAccessory(\Hz\StoreBundle\Entity\Accessory $accessories)
    {
        $this->accessories->removeElement($accessories);
    }

    /**
     * Get accessories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAccessories()
    {
        return $this->accessories;
    }

    /**
     * Set customer
     *
     * @param \Hz\StoreBundle\Entity\Customer $customer
     * @return Machine
     */
    public function setCustomer(\Hz\StoreBundle\Entity\Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \Hz\StoreBundle\Entity\Customer 
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Add tickets
     *
     * @param \Hz\StoreBundle\Entity\Ticket $tickets
     * @return Machine
     */
    public function addTicket(\Hz\StoreBundle\Entity\Ticket $tickets)
    {
        $this->tickets[] = $tickets;

        return $this;
    }

    /**
     * Remove tickets
     *
     * @param \Hz\StoreBundle\Entity\Ticket $tickets
     */
    public function removeTicket(\Hz\StoreBundle\Entity\Ticket $tickets)
    {
        $this->tickets->removeElement($tickets);
    }

    /**
     * Get tickets
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTickets()
    {
        return $this->tickets;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Machine
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }
}

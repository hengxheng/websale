<?php

namespace Hz\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Task
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Hz\StoreBundle\Entity\TaskRepository")
 */
class Task
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
     * @var \DateTime
     *
     * @ORM\Column(name="create_date", type="datetime")
     */
    private $createDate;

    /**
     * Get id
     *
     * @return integer 
     */

    /**
     * @ORM\ManyToOne(targetEntity="Ticket", inversedBy="tasks")
     * @ORM\JoinColumn(name="ticket_id", referencedColumnName="id")
     */
    protected $ticket;

    /**
     * @ORM\ManyToOne(targetEntity="Technician", inversedBy="tasks")
     * @ORM\JoinColumn(name="technician_id", referencedColumnName="id")
     */
    protected $technician;




    public function getId()
    {
        return $this->id;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return Task
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return \DateTime 
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set ticket
     *
     * @param \Hz\StoreBundle\Entity\Ticket $ticket
     * @return Task
     */
    public function setTicket(\Hz\StoreBundle\Entity\Ticket $ticket = null)
    {
        $this->ticket = $ticket;

        return $this;
    }

    /**
     * Get ticket
     *
     * @return \Hz\StoreBundle\Entity\Ticket 
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    /**
     * Set technician
     *
     * @param \Hz\StoreBundle\Entity\Technician $technician
     * @return Task
     */
    public function setTechnician(\Hz\StoreBundle\Entity\Technician $technician = null)
    {
        $this->technician = $technician;

        return $this;
    }

    /**
     * Get technician
     *
     * @return \Hz\StoreBundle\Entity\Technician 
     */
    public function getTechnician()
    {
        return $this->technician;
    }
}

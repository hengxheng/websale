<?php

namespace Hz\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accessory
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Hz\StoreBundle\Entity\AccessoryRepository")
 */
class Accessory
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
     * @ORM\Column(name="type", type="string", length=20)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="string", length=255, nullable=true)
     */
    private $comments;

    /**
     * @ORM\ManyToOne(targetEntity="Machine", inversedBy="accessories")
     * @ORM\JoinColumn(name="machine_id", referencedColumnName="id")
     */
    protected $machine;

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
     * Set type
     *
     * @param string $type
     * @return Accessory
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return Accessory
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
     * Set machine
     *
     * @param \Hz\StoreBundle\Entity\Machine $machine
     * @return Accessory
     */
    public function setMachine(\Hz\StoreBundle\Entity\Machine $machine = null)
    {
        $this->machine = $machine;

        return $this;
    }

    /**
     * Get machine
     *
     * @return \Hz\StoreBundle\Entity\Machine 
     */
    public function getMachine()
    {
        return $this->machine;
    }
}

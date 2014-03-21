<?php

namespace Hz\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Hz\StoreBundle\Entity\CommentRepository")
 */
class Comment
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
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_date", type="datetime")
     */
    private $createDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="author_id", type="integer")
     */
    private $authorId;

    /**
     * @var string
     *
     * @ORM\Column(name="author_group", type="string", length=20)
     */
    private $authorGroup;

    /**
     * @ORM\ManyToOne(targetEntity="ticket", inversedBy="comments")
     * @ORM\JoinColumn(name="ticket_id", referencedColumnName="id")
     */
    protected $ticket;

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
     * Set content
     *
     * @param string $content
     * @return Comment
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return Comment
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
     * Set authorId
     *
     * @param integer $authorId
     * @return Comment
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;

        return $this;
    }

    /**
     * Get authorId
     *
     * @return integer 
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * Set authorGroup
     *
     * @param string $authorGroup
     * @return Comment
     */
    public function setAuthorGroup($authorGroup)
    {
        $this->authorGroup = $authorGroup;

        return $this;
    }

    /**
     * Get authorGroup
     *
     * @return string 
     */
    public function getAuthorGroup()
    {
        return $this->authorGroup;
    }

    /**
     * Set ticket
     *
     * @param \Hz\StoreBundle\Entity\ticket $ticket
     * @return Comment
     */
    public function setTicket(\Hz\StoreBundle\Entity\ticket $ticket = null)
    {
        $this->ticket = $ticket;

        return $this;
    }

    /**
     * Get ticket
     *
     * @return \Hz\StoreBundle\Entity\ticket 
     */
    public function getTicket()
    {
        return $this->ticket;
    }
}

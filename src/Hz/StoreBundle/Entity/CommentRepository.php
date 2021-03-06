<?php

namespace Hz\StoreBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CommentRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommentRepository extends EntityRepository{
	public function findCommentsByTid($ticket_id){
		return $this->getEntityManager()
            ->createQuery(
                'SELECT c.content, c.createDate, tech.username
                FROM HzStoreBundle:Comment c
                LEFT JOIN HzStoreBundle:Technician tech WITH c.authorId = tech.id
                WHERE c.ticket = :id ORDER BY c.createDate ASC'
            )
            ->setParameter('id', $ticket_id)
            ->getResult();
	}
}

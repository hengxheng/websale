<?php

namespace Hz\StoreBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * TaskRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TaskRepository extends EntityRepository{
	public function getTaskByTicket($ticket_id){
		return $this->getEntityManager()
            ->createQuery(
                'SELECT t.id FROM HzStoreBundle:Task t
                WHERE t.ticket = :ticket_id'
            )
            ->setParameter('ticket_id', $ticket_id)
            ->getResult();
	}
}

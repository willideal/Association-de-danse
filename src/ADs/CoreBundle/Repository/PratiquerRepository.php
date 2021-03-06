<?php

namespace AD\CoreBundle\Repository;

/**
 * PratiquerRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PratiquerRepository extends \Doctrine\ORM\EntityRepository
{
		public function findByPratiquer($idsalle, $idsoiree, $iddanse)
		{
		  $qb = $this->createQueryBuilder('p');
		  $qb->where('p.idsalle = :idsalle')
			   ->setParameter('idsalle', $idsalle)
			 ->andWhere('p.idsoiree = :idsoiree')
			   ->setParameter('idsoiree', $idsoiree)
			   ->andWhere('p.iddanse = :iddanse')
			   ->setParameter('iddanse', $iddanse)  ;
			  return $qb
				->getQuery()
				->getOneOrNullResult()
			  ;
}
}

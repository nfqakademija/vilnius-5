<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Leader;
/**
 * LeaderRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class LeaderRepository extends \Doctrine\ORM\EntityRepository
{
    public function getBetterCount(int $score, int $timeSpent): int
    {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        // select count
        $query = $qb->select('COUNT(l)')
            ->from('AppBundle:Leader', 'l')
            ->where(
                $qb->expr()->lt('l.score', $score)
            )
            ->andWhere(
                $qb->expr()->gt('l.time', $timeSpent)
            )
            ->getQuery();
        $result = $query->getSingleScalarResult();

        return $result;
    }

    public function save(Leader $leader)
    {
        $em = $this->getEntityManager();

        $em->persist($leader);

        $em->flush();
    }

    public function getAll()
    {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        // select count
        $query = $qb->select('l')
            ->from('AppBundle:Leader', 'l')
            ->getQuery();
        $result = $query->getResult();
        var_dump($result);
        return $result;
    }
}
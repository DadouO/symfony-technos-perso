<?php

namespace App\Repository;

use App\Entity\Meetups;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Meetups|null find($id, $lockMode = null, $lockVersion = null)
 * @method Meetups|null findOneBy(array $criteria, array $orderBy = null)
 * @method Meetups[]    findAll()
 * @method Meetups[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MeetupsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Meetups::class);
    }

    // /**
    //  * @return Meetups[] Returns an array of Meetups objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Meetups
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

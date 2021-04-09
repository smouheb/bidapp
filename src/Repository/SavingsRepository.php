<?php

namespace App\Repository;

use App\Entity\Savings;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Savings|null find($id, $lockMode = null, $lockVersion = null)
 * @method Savings|null findOneBy(array $criteria, array $orderBy = null)
 * @method Savings[]    findAll()
 * @method Savings[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SavingsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Savings::class);
    }

    // /**
    //  * @return Savings[] Returns an array of Savings objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Savings
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

<?php

namespace App\Repository;

use App\Entity\LieuActivite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LieuActivite|null find($id, $lockMode = null, $lockVersion = null)
 * @method LieuActivite|null findOneBy(array $criteria, array $orderBy = null)
 * @method LieuActivite[]    findAll()
 * @method LieuActivite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LieuActiviteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LieuActivite::class);
    }

    // /**
    //  * @return LieuActivite[] Returns an array of LieuActivite objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LieuActivite
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

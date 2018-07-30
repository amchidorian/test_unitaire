<?php

namespace App\Repository;

use App\Entity\Tribune;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Tribune|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tribune|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tribune[]    findAll()
 * @method Tribune[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TribuneRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Tribune::class);
    }

//    /**
//     * @return Tribune[] Returns an array of Tribune objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Tribune
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function getTribunes(){
        return $this->createQueryBuilder('m')
            ->getQuery()
            ->getResult();
    }

    public function getPlaceTribune($tribune){
        return $this->createQueryBuilder('m')
            ->where("m.id = ?1")
            ->setParameter(1, $tribune)
            ->getQuery()
            ->getResult();
    }
}

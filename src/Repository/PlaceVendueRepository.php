<?php

namespace App\Repository;

use App\Entity\PlaceVendue;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PlaceVendue|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlaceVendue|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlaceVendue[]    findAll()
 * @method PlaceVendue[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlaceVendueRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PlaceVendue::class);
    }

//    /**
//     * @return PlaceVendue[] Returns an array of PlaceVendue objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PlaceVendue
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function getPlaceTribune($tribune, $match){
        return $this->createQueryBuilder('m')
            ->where("m.tribune = ?1")
            ->andWhere("m.matchs = ?2")
            ->setParameter(1, $tribune)
            ->setParameter(2, $match)
            ->getQuery()
            ->getResult();
    }
}

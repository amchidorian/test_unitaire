<?php

namespace App\Repository;

use App\Entity\ZoneStade;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ZoneStade|null find($id, $lockMode = null, $lockVersion = null)
 * @method ZoneStade|null findOneBy(array $criteria, array $orderBy = null)
 * @method ZoneStade[]    findAll()
 * @method ZoneStade[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ZoneStadeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ZoneStade::class);
    }

//    /**
//     * @return ZoneStade[] Returns an array of ZoneStade objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('z')
            ->andWhere('z.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('z.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ZoneStade
    {
        return $this->createQueryBuilder('z')
            ->andWhere('z.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

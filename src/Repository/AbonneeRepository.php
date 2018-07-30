<?php

namespace App\Repository;

use App\Entity\Abonnee;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Abonnee|null find($id, $lockMode = null, $lockVersion = null)
 * @method Abonnee|null findOneBy(array $criteria, array $orderBy = null)
 * @method Abonnee[]    findAll()
 * @method Abonnee[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AbonneeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Abonnee::class);
    }

//    /**
//     * @return Abonnee[] Returns an array of Abonnee objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Abonnee
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

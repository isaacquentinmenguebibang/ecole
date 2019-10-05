<?php

namespace App\Repository;

use App\Entity\CahierText;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CahierText|null find($id, $lockMode = null, $lockVersion = null)
 * @method CahierText|null findOneBy(array $criteria, array $orderBy = null)
 * @method CahierText[]    findAll()
 * @method CahierText[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CahierTextRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CahierText::class);
    }

    // /**
    //  * @return CahierText[] Returns an array of CahierText objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CahierText
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

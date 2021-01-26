<?php

namespace App\Repository;

use App\Entity\ChatOption;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ChatOption|null find($id, $lockMode = null, $lockVersion = null)
 * @method ChatOption|null findOneBy(array $criteria, array $orderBy = null)
 * @method ChatOption[]    findAll()
 * @method ChatOption[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChatOptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ChatOption::class);
    }

    // /**
    //  * @return ChatOption[] Returns an array of ChatOption objects
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
    public function findOneBySomeField($value): ?ChatOption
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

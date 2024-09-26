<?php

namespace App\Repository;

use App\Entity\Affectation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Affectation>
 */
class AffectationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Affectation::class);
    }

    public function searchAffectation($search)
    {
        return $this->createQueryBuilder('a')
            ->join('a.collaborateur', 'c')
            ->join('a.restaurant', 'r')
          //->join('f.intitule_post', 'f')
            ->orWhere('UPPER(c.nom) LIKE :search')
            ->orWhere('UPPER(r.nom_resto) LIKE :search')
            //->orWhere('UPPER(f.intitule_poste) LIKE :search')
            ->orWhere('UPPER(a.debut_contrat) LIKE :search')
            ->orWhere('UPPER(a.fin_contrat) LIKE :search')
            ->setParameter('search', '%' . strtoupper($search) . '%')
            ->orderBy('a.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }


    //    /**
    //     * @return Affectation[] Returns an array of Affectation objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('a.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Affectation
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}

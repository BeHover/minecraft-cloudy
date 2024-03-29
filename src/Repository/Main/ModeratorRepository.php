<?php

declare(strict_types=1);

namespace App\Repository\Main;

use App\Entity\Main\Moderator;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Moderator|null find($id, $lockMode = null, $lockVersion = null)
 * @method Moderator|null findOneBy(array $criteria, array $orderBy = null)
 * @method Moderator[]    findAll()
 * @method Moderator[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModeratorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Moderator::class);
    }

    public function save(Moderator $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Moderator $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}

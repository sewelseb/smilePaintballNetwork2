<?php

namespace Smile\PlatformBundle\Repository;
use Smile\UserBundle\Entity\User;

/**
 * PostRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PostRepository extends \Doctrine\ORM\EntityRepository
{
    public function getLastXPosts($numberOfPosts = 10)
    {
        $qb = $this->createQueryBuilder('a');

        $qb->orderBy('a.creationTime', 'DESC')
            ->setMaxResults($numberOfPosts);
        return $qb
            ->getQuery()
            ->getResult()
            ;
    }

    public function getUsersPost(User $user){
        $qb = $this->createQueryBuilder('a');

        $qb->where('a.user = :user')
            ->setParameter('user', $user)
            ->orderBy('a.creationTime', 'DESC')
            ;
        return $qb
            ->getQuery()
            ->getResult()
            ;
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: Pawel
 * Date: 05.06.2019
 * Time: 23:37
 */

namespace App\infrastructure\doctrine\repository;


use App\domain\User;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;


class UsersRepository implements \App\domain\repository\Users
{
    /** @var EntityManager */
    private $entityManager;


    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function add(User $user): void
    {
        $this->entityManager->persist($user);
        $this->entityManager->flush();
    }
}
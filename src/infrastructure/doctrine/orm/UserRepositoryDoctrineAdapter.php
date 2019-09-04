<?php


namespace App\infrastructure\doctrine\orm;


use App\domain\repository\UsersRepositoryInterface;
use App\domain\User;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

class UserRepositoryDoctrineAdapter implements UsersRepositoryInterface
{

    /** @var EntityManagerInterface */
    private $EntityManager;

    /**
     * UserRepositoryDoctrineAdapter constructor.
     * @param EntityManagerInterface $EntityManager
     */
    public function __construct(EntityManagerInterface $EntityManager)
    {
        $this->EntityManager = $EntityManager;
    }

    public function save(User $user): void
    {
        $this->EntityManager->persist($user);
        $this->EntityManager->flush();
    }
}
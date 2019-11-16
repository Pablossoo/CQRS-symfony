<?php

namespace App\application\command;

use App\domain\DTO\CreateUserDTO;
use App\domain\repository\UsersRepositoryInterface;
use App\domain\User;
use App\infrastructure\doctrine\orm\UserRepositoryDoctrineAdapter;

final class CreateNewUserHandler
{
    /** @var UserRepositoryDoctrineAdapter */
    private $userRepositoryDoctrineAdapter;

    public function __construct(UsersRepositoryInterface $userRepositoryDoctrineAdapter)
    {
        $this->userRepositoryDoctrineAdapter = $userRepositoryDoctrineAdapter;
    }

    public function handle(CreateNewUser $createNewUser): void
    {
        $createUserDTO = new CreateUserDTO($createNewUser->getUsername(),
        $createNewUser->getEmail());

        $user = User::CreateFromDto($createUserDTO);
        $this->userRepositoryDoctrineAdapter->save($user);
    }
}

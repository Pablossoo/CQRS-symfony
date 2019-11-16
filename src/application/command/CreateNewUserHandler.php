<?php

namespace App\application\command;

use App\domain\DTO\CreateUserDTO;
use App\domain\repository\UsersRepositoryInterface;
use App\domain\User;
use App\infrastructure\doctrine\orm\UserRepositoryDoctrineAdapter;
use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;

final class CreateNewUserHandler
{
    /** @var UserRepositoryDoctrineAdapter */
    private $userRepositoryDoctrineAdapter;

    /** @var PasswordEncoderInterface */
    private $passwordEncoder;

    public function __construct(UsersRepositoryInterface $userRepositoryDoctrineAdapter, PasswordEncoderInterface $passwordEncoder)
    {
        $this->userRepositoryDoctrineAdapter = $userRepositoryDoctrineAdapter;
        $this->passwordEncoder = $passwordEncoder;
    }

    public function handle(CreateNewUser $createNewUser): void
    {
        $userDto = new CreateUserDTO(
            $createNewUser->getName(),
            $createNewUser->getEmail(),
            $this->passwordEncoder->encodePassword($createNewUser->getPassword(), null),
            $createNewUser->getRoles()
        );

        $user = User::CreateFromDto($userDto);
        $this->userRepositoryDoctrineAdapter->save($user);
    }
}

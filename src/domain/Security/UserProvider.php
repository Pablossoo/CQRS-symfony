<?php


namespace App\domain\Security;

use App\application\query\user\UserQueryInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

final class UserProvider implements UserProviderInterface
{
    /** @var UserQueryInterface */
    private $userQuery;


    public function __construct(UserQueryInterface $userRepository)
    {
        $this->userQuery = $userRepository;
    }


    public function loadUserByUsername($username)
    {
        $this->userQuery->getByUsername($username);
    }

    public function refreshUser(UserInterface $user)
    {

    }

    public function supportsClass($class)
    {
        return $class == UserInterface::class;
    }
}

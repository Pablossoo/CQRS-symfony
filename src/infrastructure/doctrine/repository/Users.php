<?php
/**
 * Created by PhpStorm.
 * User: Pawel
 * Date: 05.06.2019
 * Time: 23:37
 */

namespace App\infrastructure\doctrine\repository;


use App\domain\exception\UserNotFoundException;
use App\domain\User;
use App\domain\VO\Email;
use App\domain\VO\Username;
use Doctrine\ORM\EntityManager;

class Users implements \App\domain\repository\Users
{
    /** @var EntityManager */
    private $connection;


    public function __construct(EntityManager $connection)
    {
        $this->connection = $connection;
    }


    public function add(User $users): void
    {

    }

    public function getByEmail(Email $email): User
    {
        $user = $this->connection->createQueryBuilder()->select('*')
            ->from('user','u')->where('u.email = ?')->setParameter(0,$email);

        $result = $user->getQuery()->getResult();
        if ($result === null)
        {
            throw UserNotFoundException::WithTo($email);
        }

        return new User(new Username($result->usenrame), new Email($result->email));
    }
}
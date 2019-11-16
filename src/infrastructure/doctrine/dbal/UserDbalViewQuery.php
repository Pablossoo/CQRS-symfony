<?php

namespace App\infrastructure\doctrine\dbal;

use App\application\query\user\UserQuery;
use App\application\query\user\UserView;
use App\domain\exception\UserNotFoundException;
use Doctrine\DBAL\Connection;

/**
 * @author Paweł Łukowski <pawell.lukowski@gmail.com>
 */
class UserDbalViewQuery implements UserQuery
{
    /** @var Connection */
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function getByEmail(string $email): UserView
    {
        $queryBuilder = $this->connection->createQueryBuilder()
                ->from('user')
                ->select('username_username', 'email_email')
                ->where('email_email = :email')
                ->setParameter('email', $email);

        if (!$queryBuilder) {
            throw UserNotFoundException::WithTo($email);
        }
        $data = $queryBuilder->execute()->fetch();

        return new UserView($data['username_username'], $data['email_email']);
    }

    public function getByUsername(string $username): UserView
    {
        // TODO: Implement getByUsername() method.
    }

    public function getLastCreatedUser(): UserView
    {
        $select = $this->connection->createQueryBuilder()
                ->from('user')
            ->select('username_username', 'email_email')
                ->orderBy('id', 'desc')
                ->setMaxResults(1);

        $data = $select->execute()->fetch();

        return new UserView($data['username_username'], $data['email_email']);
    }
}

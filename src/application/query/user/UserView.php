<?php

namespace App\application\query\user;

class UserView
{
    /**
     * UserView constructor.
     */
    public function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    /** @var string */
    private $username;

    /** @var string */
    private $email;
}

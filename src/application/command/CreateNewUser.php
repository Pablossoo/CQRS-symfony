<?php
/**
 * Created by PhpStorm.
 * User: Pawel
 * Date: 06.06.2019
 * Time: 00:07
 */

namespace App\application\command;


class CreateNewUser
{
    /** @var string */
    private $username;

    /** @var string */
    private $email;

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

}
<?php

namespace App\domain\DTO;

final class CreateUserDTO
{
    /** @var string */
    public $name;

    /** @var string */
    public $email;

    public $password;

    /** @var array */
    public $role = [];

    public function __construct(string $name, string $email, $password, array $role)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }
}

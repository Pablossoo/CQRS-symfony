<?php

namespace App\application\command;

use App\domain\Role;

final class CreateNewUser
{
    /** @var string */
    private $name;

    /** @var string */
    private $email;

    /** @var string */
    private $password;

    /** @var Role */
    private $roles = [];

    public function __construct(string $name, string $email, string $password, Role $role)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->roles = $role;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getRoles(): array
    {
        return $this->roles->getDefaultRole();
    }
}

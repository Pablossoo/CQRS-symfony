<?php

namespace App\domain;

use App\domain\DTO\CreateUserDTO;
use Ramsey\Uuid\Uuid;

final class User
{
    /** @var int|null */
    private $id;

    /** @var string */
    private $name;

    /** @var string */
    private $email;

    /** @var string */
    private $password;

    /** @var array */
    private $roles = [];

    public function __construct(?int $id, string $name, string $email, string $password, array $roles)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->roles = $roles;
    }

    public static function CreateFromDto(CreateUserDTO $createUserDTO): User
    {
        return new self(
            Uuid::uuid4(),
            $createUserDTO->name,
            $createUserDTO->email,
            $createUserDTO->password,
            $createUserDTO->role
        );
    }
}

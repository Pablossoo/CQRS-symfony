<?php
/**
 * Created by PhpStorm.
 * User: Pawel
 * Date: 05.06.2019
 * Time: 23:27.
 */

namespace App\domain;

use App\domain\DTO\CreateUserDTO;

final class User
{
    /** @var int|null */
    private $id;

    /** @var string */
    private $name;

    /** @var string */
    private $email;

    public function __construct(?int $id, $name, $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    public static function CreateFromDto(CreateUserDTO $createUserDTO): User
    {
        return new self(
            null,
            $createUserDTO->name,
            $createUserDTO->email);
    }

    public function toDto(): CreateUserDTO
    {
        return new CreateUserDTO(
            $this->name,
            $this->email
        );
    }
}

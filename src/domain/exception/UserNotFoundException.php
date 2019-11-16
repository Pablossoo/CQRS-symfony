<?php

namespace App\domain\exception;

final class UserNotFoundException extends \Exception
{
    public static function WithTo(string $email)
    {
        return new self(sprintf('user with email %s not exist', $email));
    }
}

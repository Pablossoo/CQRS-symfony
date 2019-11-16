<?php

namespace App\domain\exception;

use App\domain\Role;

final class BadRoleException extends \Exception
{
    public static function WithTo(string $role)
    {
        return new self(sprintf('bad name role %s available roles %s ', $role, implode(',', Role::AVAILABLE_ROLES)));
    }
}

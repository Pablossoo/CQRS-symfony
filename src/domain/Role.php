<?php

namespace App\domain;

use App\domain\exception\BadRoleException;

final class Role implements RoleInterface
{
    private const AVAILABLE_ROLES = ['user' => 'ROLE_USER', 'admin' => 'ROLE_ADMIN'];

    public function getRole(string $role): string
    {
        if (!$this->isAvailableRole($role)) {
            BadRoleException::WithTo($role);
        }

        return static::AVAILABLE_ROLES[$role];
    }

    public function getDefaultRole(): array
    {
        return [
            self::AVAILABLE_ROLES['user'],
        ];
    }

    private function isAvailableRole(string $key): bool
    {
        return !in_array($key, static::AVAILABLE_ROLES);
    }
}

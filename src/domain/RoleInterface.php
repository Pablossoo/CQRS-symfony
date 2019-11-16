<?php

namespace App\domain;

interface RoleInterface
{
    public function getRole(string $key): string;

    public function getDefaultRole();
}

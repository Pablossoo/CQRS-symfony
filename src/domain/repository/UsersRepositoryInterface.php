<?php

namespace App\domain\repository;

use App\domain\User;

interface UsersRepositoryInterface
{
    public function save(User $user): void;
}

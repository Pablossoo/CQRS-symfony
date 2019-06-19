<?php

namespace App\domain\repository;

use App\domain\User;

interface Users
{
    public function add(User $user): void;
}
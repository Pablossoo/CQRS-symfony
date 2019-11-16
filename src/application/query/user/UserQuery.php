<?php

namespace App\application\query\user;

interface UserQuery
{
    public function getByEmail(string $email): UserView;

    public function getByUsername(string $username): UserView;

    public function getLastCreatedUser(): UserView;
}

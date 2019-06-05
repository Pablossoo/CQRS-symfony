<?php
/**
 * Created by PhpStorm.
 * User: Pawel
 * Date: 05.06.2019
 * Time: 23:36
 */

namespace App\domain\repository;


use App\domain\User;
use App\domain\VO\Email;

interface Users
{

    public function add(User $users): void;

    public function getByEmail(Email $email): User;

}
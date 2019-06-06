<?php
/**
 * Created by PhpStorm.
 * User: Pawel
 * Date: 05.06.2019
 * Time: 23:27
 */

namespace App\domain;


use App\domain\VO\Email;
use App\domain\VO\Username;

final class User
{
    /** @var int */
    private $id;

    /** @var Username */
    private $username;

    /** @var Email */
    private $email;


    public function __construct(int $id, Username $username, Email $email)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
    }

    /**
     * @return Username
     */
    public function getUsername(): Username
    {
        return $this->username;
    }

    /**
     * @return Email
     */
    public function getEmail(): Email
    {
        return $this->email;
    }
}
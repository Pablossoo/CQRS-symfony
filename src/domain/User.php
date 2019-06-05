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

    /** @var Username */
    private $username;

    /** @var Email */
    private $email;


    public function __construct(Username $username, Email $email)
    {
        $this->username = $username;
        $this->email = $email;
    }
}
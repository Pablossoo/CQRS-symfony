<?php
/**
 * Created by PhpStorm.
 * User: Pawel
 * Date: 05.06.2019
 * Time: 23:27
 */

namespace App\domain\VO;


class Email
{
    /** @var string */
   private $email;


    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

}
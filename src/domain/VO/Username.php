<?php
/**
 * Created by PhpStorm.
 * User: Pawel
 * Date: 05.06.2019
 * Time: 23:30
 */

namespace App\domain\VO;


class Username
{
    /** @var string */
    private $username;


    public function __construct(string $username)
    {
        $this->username = $username;
    }

    public function getUsername(): string
    {
        return $this->username;
    }
}
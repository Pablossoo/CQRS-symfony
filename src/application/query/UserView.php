<?php
/**
 * Created by PhpStorm.
 * User: Pawel
 * Date: 06.06.2019
 * Time: 00:29
 */

namespace App\application\query;


class UserView
{
    /** @var string */
  private $username;

  /** @var string */
  private $email;

    /**
     * UserView constructor.
     * @param string $username
     * @param string $email
     */
    public function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }



}
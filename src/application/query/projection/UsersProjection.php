<?php
/**
 * Created by PhpStorm.
 * User: Pawel
 * Date: 06.06.2019
 * Time: 18:39
 */

namespace App\application\query\projection;


use App\application\query\UserView;
use App\domain\repository\Users;
use App\domain\VO\Email;

class UsersProjection
{
    /** @var Users */
    private $users;


    public function __construct(Users $users)
    {
        $this->users = $users;
    }


    public function get(string $email): UserView
    {
        $repository = $this->users->getByEmail(new Email($email));
        return new UserView($repository->getUsername(), $repository->getEmail());
    }


}

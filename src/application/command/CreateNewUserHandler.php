<?php
/**
 * Created by PhpStorm.
 * User: Pawel
 * Date: 06.06.2019
 * Time: 00:09
 */

namespace App\application\command;


use App\domain\repository\Users;
use App\domain\User;
use App\domain\VO\Email;
use App\domain\VO\Username;

class CreateNewUserHandler
{

    /** @var Users */
    private $users;

    public function __construct(Users $users)
    {
        $this->users = $users;
    }

    public function handle(CreateNewUser $createNewUser)
    {

        $user = new User(
            null,
            new Username($createNewUser->getUsername()),
            new Email($createNewUser->getEmail())
        );

        $this->users->add($user);

    }
}
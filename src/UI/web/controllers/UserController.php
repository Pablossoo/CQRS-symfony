<?php

namespace App\UI\web\controllers;

use App\application\query\user\UserQuery;
use Symfony\Component\HttpFoundation\Response;

final class UserController
{
    /** @var UserQuery */
    private $userQuery;

    public function __construct(UserQuery $userQuery)
    {
        $this->userQuery = $userQuery;
    }

    public function create(): Response
    {
        return new Response($this->userQuery->getLastCreatedUser()->getEmail());
    }
}

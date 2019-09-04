<?php

namespace App\UI\web\controllers;


use App\application\command\CreateNewUser;
use App\application\query\user\UserQuery;
use League\Tactician\CommandBus;
use Symfony\Component\HttpFoundation\Response;


class UserController
{
    /** @var UserQuery */
    private $userQuery;

    /** @var CommandBus */
    private $commandBus;


    public function __construct(UserQuery $userQuery, CommandBus $commandBus)
    {
        $this->userQuery = $userQuery;
        $this->commandBus = $commandBus;
    }


    public function create(): Response
    {
        $this->commandBus->handle(new CreateNewUser('Pawel', 'pawe@wp.pl'));
        return new Response($this->userQuery->getLastCreatedUser()->getEmail());
    }
}
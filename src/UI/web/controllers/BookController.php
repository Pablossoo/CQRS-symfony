<?php

namespace App\UI\web\controllers;


use App\application\command\CreateNewUser;
use App\application\query\projection\UsersProjection;
use App\infrastructure\doctrine\repository\UsersRepository;
use League\Tactician\CommandBus;
use Symfony\Component\HttpFoundation\Response;


class BookController
{

    /** @var UsersProjection */
    private $userProjection;

    /** @var UsersRepository */
    private $userRepository;

    /** @var CommandBus  */
    private $commandBus;


    public function __construct(CommandBus $commandBus, UsersProjection $userProjection, UsersRepository $userRepository)
    {
        $this->commandBus = $commandBus;
        $this->userProjection = $userProjection;
        $this->userRepository = $userRepository;
    }

    public function create()
   {

       $this->commandBus->handle(new CreateNewUser('Pawel','Pawel@wp.pl'));
        return new Response('success');
   }
}
<?php

namespace App\UI\web\controllers;


use App\application\query\projection\UsersProjection;
use App\domain\User;
use App\domain\VO\Email;
use App\domain\VO\Username;
use App\infrastructure\doctrine\repository\UsersRepository;
use Symfony\Component\HttpFoundation\Response;


class BookController
{

    /** @var UsersProjection */
    private $userProjection;

    /** @var UsersRepository */
    private $userRepository;

    /**
     * BookController constructor.
     * @param UsersProjection $userProjection
     * @param UsersRepository $userRepository
     */
    public function __construct(UsersProjection $userProjection, UsersRepository $userRepository)
    {
        $this->userProjection = $userProjection;
        $this->userRepository = $userRepository;
    }

    public function create()
   {
        $user = new User(1,new Username('test'),new Email('test2'));

//        $this->userRepository->add($user);

        return new Response($this->userProjection->get('sfsdfs'));
   }
}
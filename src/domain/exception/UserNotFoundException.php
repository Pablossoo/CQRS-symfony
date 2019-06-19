<?php

namespace App\domain\exception;


use App\domain\VO\Email;

class UserNotFoundException extends \Exception
{
   public static function WithTo(Email $email)
   {
       return new self(sprintf("user with email %s not exist", $email->getEmail()));
   }
}
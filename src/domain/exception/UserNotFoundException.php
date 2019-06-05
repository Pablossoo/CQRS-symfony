<?php
/**
 * Created by PhpStorm.
 * User: Pawel
 * Date: 05.06.2019
 * Time: 23:39
 */

namespace App\domain\exception;


use App\domain\VO\Email;

class UserNotFoundException extends \Exception
{
   public static function WithTo(Email $email)
   {
       return new self(sprintf("user with email %s not exist", $email));
   }
}
<?php


namespace src\classes;

use src\classes\Interfaces\IVerifyPasswordStrategy;
use src\lib\PasswordHash;


class oldVerifyPasswordStrategy implements IVerifyPasswordStrategy
{
    const SALT = "ilovecodeofaninjabymikedalisay";

    public function password_validate($formUserPassword, $storedUserPassword)
    {
            $saltedPostedPassword = self::SALT . $formUserPassword;
            $hasher = new PasswordHash(8,false);
            return $hasher->CheckPassword($saltedPostedPassword, $storedUserPassword);
    }

}

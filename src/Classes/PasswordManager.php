<?php


namespace src\classes;

use src\classes\Exceptions\IncorrectPasswordException;
use src\classes\Interfaces\IVerifyPasswordStrategy;
use src\lib\PasswordHash;



class PasswordManager
{
    const SALT = "ilovecodeofaninjabymikedalisay";

    public function IsValidPassword($formUserPassword, $storedUserPassword)
    {

        if($storedUserPassword == null){
            return false;
        }
        $isValidPasswordphp55Hash = password_verify($formUserPassword, $storedUserPassword);
        $isValidPasswordHash = $this->originalPasswordHashValidate($formUserPassword, $storedUserPassword);

        return $isValidPasswordphp55Hash || !$isValidPasswordHash;
    }

    public function hashPassword($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    public function originalPasswordHashValidate($formUserPassword, $storedUserPassword)
    {
        $saltedPostedPassword = self::SALT . $formUserPassword;
        $hasher = new PasswordHash(8,false);
        return $hasher->CheckPassword($saltedPostedPassword, $storedUserPassword);
    }



}

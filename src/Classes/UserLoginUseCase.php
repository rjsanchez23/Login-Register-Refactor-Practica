<?php


namespace src\classes;

use src\classes\storage\UserStorageInterface;
use src\lib\PasswordHash;
use src\lib\password;

class UserLoginUseCase{

    private $userStorageInterface;
    const SALT = "ilovecodeofaninjabymikedalisay";

    public function __construct(UserStorageInterface $userStorageInterface)
    {
        $this->userStorageInterface = $userStorageInterface;
    }

    public function execute($userMail, $userPassword)
    {
        $storedUser = $this->userStorageInterface->find($userMail, $userPassword);

        $this->isValidPassword($userPassword, $storedUser["password"]);

    }

    
    private function IsValidPassword($formUserPassword, $storedUserPassword)
    {

        if($storedUserPassword == null){
            throw new InvalidUserCredentialsException;
        }

        $isValidPasswordphp55Hash = password_verify($formUserPassword, $storedUserPassword);
        $isValidPasswordHash = $this->originalPasswordHashValidate($formUserPassword, $storedUserPassword);

        if(!$isValidPasswordphp55Hash && !$isValidPasswordHash){
            throw new InvalidUserCredentialsException;
        }
    }


    private function originalPasswordHashValidate($formUserPassword, $storedUserPassword)
    {
        $saltedPostedPassword = self::SALT . $formUserPassword;
        $hasher = new PasswordHash(8,false);
        return $hasher->CheckPassword($saltedPostedPassword, $storedUserPassword);
    }



}
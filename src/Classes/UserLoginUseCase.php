<?php


namespace src\classes;

use src\classes\interfaces\UserStorageInterface;


class UserLoginUseCase{

    private $userStorageInterface;

    public function __construct(UserStorageInterface $userStorageInterface)
    {
        $this->userStorageInterface = $userStorageInterface;
    }
    public function execute($userMail, $userPassword)
    {
        $storedUser = $this->userStorageInterface->find($userMail, $userPassword);

        $this->userStorageInterface->IsValidPassword($userPassword, $storedUser["password"]);

    }



}
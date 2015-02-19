<?php


namespace src\classes;

use src\classes\interfaces\UserStorageInterface;


class UserRegisterUseCase{

    private $userStorageInterface;

    public function __construct(UserStorageInterface $userStorageInterface)
    {
        $this->userStorageInterface = $userStorageInterface;
    }
    public function execute($userMail, $userPassword)
    {
        $hashedPassword = $this->userStorageInterface->hashPassword($userPassword);
        $this->userStorageInterface->save($userMail, $hashedPassword);

    }



}
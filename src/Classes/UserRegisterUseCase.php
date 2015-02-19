<?php


namespace src\classes;

use src\classes\storage\UserStorageInterface;
require_once __DIR__.'/../lib/password.php';//libreria compatibilidad php 5.4


class UserRegisterUseCase{

    private $userStorageInterface;

    public function __construct(UserStorageInterface $userStorageInterface)
    {
        $this->userStorageInterface = $userStorageInterface;
    }
    public function execute($userMail, $userPassword)
    {
        $hashedPassword = $this->hashPassword($userPassword);
        $this->userStorageInterface->save($userMail, $hashedPassword);
    }

    private function hashPassword($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

}
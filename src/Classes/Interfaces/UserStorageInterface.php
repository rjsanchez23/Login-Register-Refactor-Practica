<?php

namespace src\classes\Interfaces;


interface UserStorageInterface
{
    public function save($email, $password);
    public function find($userEmail);
    public function IsValidPassword($formUserPassword, $storedUserPassword);
    public function hashPassword($password);
}
<?php

namespace src\classes\Interfaces;


interface IRequestMethod
{
    public function getUserMail();
    public function getUserPassword();
    public function loginResponse($config, $isValidUser);
    public function RegistrationResponse($config);
}
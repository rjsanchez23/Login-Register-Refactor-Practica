<?php

namespace src\classes\Interfaces;


interface IRequestMethod
{
    public function getUserMail();
    public function getUserPassword();
    public function AcceptedLoginAction($config);
    public function AcceptedRegistrationAction($config);
}
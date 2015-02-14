<?php

namespace src\classes\Interfaces;


interface IRequestMethod
{
    public function requestUserMail();
    public function requestUserPassword();
    public function AcceptedLoginAction($config);
    public function AcceptedRegistrationAction($config);
}
<?php

namespace src\classes\Interfaces;

use src\classes\User;
interface RequestMethodInterface
{
    public function getUserMail();
    public function getUserPassword();

}
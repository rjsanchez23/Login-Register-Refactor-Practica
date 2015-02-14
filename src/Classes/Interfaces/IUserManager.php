<?php

namespace src\classes\Interfaces;


interface IUserManager
{
    public function getUser($userMail);
    public function save();
}
<?php

namespace src\classes\Interfaces;

use src\classes\User;
interface UserRepositoryInterface
{
    public function getStoredUser($userMail);
    public function saveUser(User $user);

}
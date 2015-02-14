<?php

namespace src\classes\Interfaces;


interface IVerifyPasswordStrategy
{
    public function password_validate($formUserPassword, $storedUserPassword);

}
<?php


namespace src\classes;

use src\classes\Interfaces\IVerifyPasswordStrategy;

require "../lib/Password.php";

class defaultVerifyPasswordStrategy implements IVerifyPasswordStrategy
{

    public function password_validate($formUserPassword, $storedUserPassword)
    {
        return password_verify($formUserPassword, $storedUserPassword);
    }

}

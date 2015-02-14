<?php

namespace src\classes\Exceptions;

class IncorrectPasswordException extends \RuntimeException{
    protected $message = "Contraseña Incorrecta";
    protected $code = 2002;
}
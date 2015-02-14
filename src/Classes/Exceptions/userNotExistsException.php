<?php

namespace src\classes\Exceptions;

class UserNotExistsException extends \RuntimeException{
    protected $message = "El usuario no Existe";
    protected $code = 2001;
}
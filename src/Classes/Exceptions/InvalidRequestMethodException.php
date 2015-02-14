<?php

namespace src\classes\Exceptions;

class InvalidRequestMethodException extends \RuntimeException{
    protected $message = "El metodo de solicitud no es correcto";
    protected $code = 2003;
}
<?php


namespace src\classes;

use src\classes\Exceptions\InvalidRequestMethodException;



class RequestMethodFactory
{
    const POSTMETHOD = "fpm-fcgi";
    const CONSOLEMETHOD = "cli";

    public function makeRequestMethodFactory()
    {
        $method = php_sapi_name();
        $requestMethod = NULL;
        switch ($method) {
            case self::POSTMETHOD:
                $requestMethod = new PostRequestMethod;
                break;
            case self::CONSOLEMETHOD:
                $requestMethod = new ConsoleRequestMethod;
                break;
            default:
                echo php_sapi_name();
               throw new InvalidRequestMethodException;
                break;
        }
        return $requestMethod;
    }



}

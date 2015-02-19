<?php


namespace src\classes\response;


final class ConsoleResponseMethod implements ResponseMethodInterface{

    public function response($message, $file = null)
    {
        echo $message;
    }

}
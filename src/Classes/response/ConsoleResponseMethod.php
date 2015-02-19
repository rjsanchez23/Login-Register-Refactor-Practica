<?php


namespace src\classes\response;


class ConsoleResponseMethod implements ResponseMethodInterface{

    public function response($message, $file = null)
    {
        echo $message;
    }

}
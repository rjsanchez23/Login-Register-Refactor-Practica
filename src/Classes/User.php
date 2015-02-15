<?php

namespace src\classes;

class User{
    protected $mail;
    protected $password;

    public function __construct($mail, $password){
        $this->mail = $mail;
        $this->password = $password;
    }

    public function getMail(){
        return $this->mail;
    }
    public function getPassword(){
        return $this->password;
    }
}
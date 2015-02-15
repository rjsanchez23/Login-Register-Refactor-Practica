<?php

namespace src\classes;
abstract class User{
    protected $mail;
    protected $password;

    public function getMail(){
        return $this->mail;
    }
    public function getPassword(){
        return $this->password;
    }

    abstract public function setStoredUserIfExists($userMail);
    abstract public function saveUser($mail, $password);

}
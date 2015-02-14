<?php

namespace src\classes;
class User{
    private $userMail;
    private $password;

    public function __construct($userMail = null, $password = null){
        $this->userMail = $userMail;
        $this->password = $password;
    }

    public function getMail(){
        return $this->userMail;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setMail($userName){
        $this->userMail = $userName;
    }
    public function setPassword($userPassword){
        $this->password = $userPassword;
    }

    public static function getInstance()
    {
        if( self::$_instance === NULL ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
}
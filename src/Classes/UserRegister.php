<?php
require 'DbConnect.php';
require 'PasswordHash.php';

    $isPostRequest =  $_SERVER['REQUEST_METHOD'] == 'POST';
    const SAVE_SUCCESS = "<div>Successful registration.</div>";
    const SAVE_FAIL = "<div>Unable to register. <a href='register.php'>Please try again.</a></div>";

    if(!$isPostRequest){
        echo ACCESS_DENIED;
    }
    try{

        $formUserMail = $_POST['email'];
        $formUserPassword = $_POST['password'];

        $encodedPassword = encodePassword($formUserPassword);
        $saveStatus = saveUser($formUserMail,$encodedPassword, $dbConection );
        if($saveStatus){
            echo SAVE_SUCCESS;
        }else{
            echo SAVE_FAIL;
        }

    }catch(PDOException $exception){
        echo "Error: " . $exception->getMessage();
    }

    function encodePassword($formUserPassword){
        $salt = "ilovecodeofaninjabymikedalisay";
        $password = $salt . $formUserPassword;

        $hasher = new PasswordHash(8,false);
        return $hasher->HashPassword($password);
    }

    function saveUser($formUserMail,$encodedPassword, $dbConection ){
        // insert command
        $query = "INSERT INTO users SET email = ?, password = ?";

        $stmt = $dbConection->prepare($query);

        $stmt->bindParam(1, $formUserMail);
        $stmt->bindParam(2, $encodedPassword);

        // execute the query
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
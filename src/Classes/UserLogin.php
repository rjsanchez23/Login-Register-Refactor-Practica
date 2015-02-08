<?php

    require 'DbConnect.php';
    require 'PasswordHash.php';

    $isPostRequest =  $_SERVER['REQUEST_METHOD'] != 'POST';
    $dbConection =  $con;

    if($isPostRequest){
        echo ACCESS_DENIED;
    }
    const ACCESS_GRANTED =   "<div>Access granted.</div>";
    const ACCESS_DENIED =   "<div>Access denied. <a href='login.php'>Back.</a></div>";


    $formUserMail = $_POST['email'];
    $formUserPassword = $_POST['password'];

    if(!userExists($formUserMail, $dbConection )){
         echo ACCESS_DENIED;
         exit();
    }

    $user = getUserFromDatabase($formUserMail, $dbConection );
    $userPasswordStored = $user["password"];
    $isValidUser = checkLogin($formUserPassword, $userPasswordStored);


    if(!$isValidUser){
        echo ACCESS_DENIED;
        exit();
    }

    echo ACCESS_GRANTED;



     function userExists($userMail, $dbConection )
     {

        $stmt = findUser($userMail, $dbConection );
        return $stmt->rowCount();

    }

     function findUser($formUserMail, $con)
     {

        $query = "select email, password from users where email = ? limit 0,1";
        $stmt = $con->prepare( $query );

        // this will represent the first question mark
        $stmt->bindParam(1, $formUserMail);
        $stmt->execute();

        return $stmt;

    }

    function getUserFromDatabase($formUserMail, $dbConection )
    {
        $stmt = findUser($formUserMail, $dbConection );
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function checkLogin($formUserPassword, $userPasswordStored)
    {

        // salt and entered password by the user
        $salt = "ilovecodeofaninjabymikedalisay";

        $saltedPostedPassword = $salt . $formUserPassword;

        // instantiate PasswordHash to check if it is a valid password
        $hasher = new PasswordHash(8,false);
        $check = $hasher->CheckPassword($saltedPostedPassword, $userPasswordStored);

        return $check;

    }


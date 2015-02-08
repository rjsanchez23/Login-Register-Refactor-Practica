<?php

    require_once __DIR__.'/../../vendor/autoload.php';

    use src\classes\PdoProvider;
    require 'PasswordHash.php';

    $isPostRequest = $_SERVER['REQUEST_METHOD'] == 'POST';


    const ACCESS_GRANTED = "<div>Access granted.</div>";
    const ACCESS_DENIED = "<div>Access denied. <a href='login.php'>Back.</a></div>";

    if (!$isPostRequest) {
        echo ACCESS_DENIED;
        exit();
    }

    try {

        $dbConection = new PdoProvider();
        $formUserMail = $_POST['email'];
        $formUserPassword = $_POST['password'];

        if (isValidUser($formUserMail, $formUserPassword, $dbConection)) {
            echo ACCESS_GRANTED;
        } else {
            echo ACCESS_DENIED;
        }

    }catch(PDOException $exception){
        echo "Error: " . $exception->getMessage();
    }

     function userExists($userMail, $dbConection )
     {

        $stmt = findUser($userMail, $dbConection );
        return $stmt->rowCount();
     }

     function findUser($formUserMail, $dbConection)
     {
        $query = "select email, password from users where email = ? limit 0,1";
        $stmt = $dbConection->prepare( $query );
        $stmt->bindParam(1, $formUserMail);
        $stmt->execute();

        return $stmt;

    }

    function getUserFromDatabase($formUserMail, $dbConection )
    {
        $stmt = findUser($formUserMail, $dbConection );
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function checkPassword($formUserPassword, $userPasswordStored)
    {
        $salt = "ilovecodeofaninjabymikedalisay";
        $saltedPostedPassword = $salt . $formUserPassword;
        $hasher = new PasswordHash(8,false);
        $check = $hasher->CheckPassword($saltedPostedPassword, $userPasswordStored);
        return $check;
    }

    function isValidUser($formUserMail, $formUserPassword, $dbConection )
    {
        if(!userExists($formUserMail, $dbConection )){
            return false;
        }
        $user = getUserFromDatabase($formUserMail, $dbConection );
        $userPasswordStored = $user["password"];
        $isValidPassword = checkPassword($formUserPassword, $userPasswordStored);

        return $isValidPassword;
    }


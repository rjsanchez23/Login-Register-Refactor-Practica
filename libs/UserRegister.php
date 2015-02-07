<?php
// save the username and password
if($_POST){

    try{
        // load database connection and password hasher library
        require 'libs/DbConnect.php';
        require 'libs/PasswordHash.php';

        /*
         * -prepare password to be saved
         * -concatinate the salt and entered password
         */
        $salt = "ilovecodeofaninjabymikedalisay";
        $password = $salt . $_POST['password'];

        /*
         * '8' - base-2 logarithm of the iteration count used for password stretching
         * 'false' - do we require the hashes to be portable to older systems (less secure)?
         */
        $hasher = new PasswordHash(8,false);
        $password = $hasher->HashPassword($password);

        // insert command
        $query = "INSERT INTO users SET email = ?, password = ?";

        $stmt = $con->prepare($query);

        $stmt->bindParam(1, $_POST['email']);
        $stmt->bindParam(2, $password);

        // execute the query
        if($stmt->execute()){
            echo "<div>Successful registration.</div>";
        }else{
            echo "<div>Unable to register. <a href='register.php'>Please try again.</a></div>";
        }

    }

        //to handle error
    catch(PDOException $exception){
        echo "Error: " . $exception->getMessage();
    }
}

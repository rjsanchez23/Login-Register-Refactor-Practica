<?php
// form is submitted, check if acess will be granted
if($_POST){

    try{
        // load database connection and password hasher library
        require 'libs/DbConnect.php';
        require 'libs/PasswordHash.php';

        // prepare query
        $query = "select email, password from users where email = ? limit 0,1";
        $stmt = $con->prepare( $query );

        // this will represent the first question mark
        $stmt->bindParam(1, $_POST['email']);

        // execute our query
        $stmt->execute();

        // count the rows returned
        $num = $stmt->rowCount();

        if($num==1){

            //store retrieved row to a 'row' variable
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            // hashed password saved in the database
            $storedPassword = $row['password'];

            // salt and entered password by the user
            $salt = "ilovecodeofaninjabymikedalisay";
            $postedPassword = $_POST['password'];
            $saltedPostedPassword = $salt . $postedPassword;

            // instantiate PasswordHash to check if it is a valid password
            $hasher = new PasswordHash(8,false);
            $check = $hasher->CheckPassword($saltedPostedPassword, $storedPassword);

            /*
             * access granted, for the next steps,
             * you may use my php login script with php sessions tutorial :)
             */
            if($check){
                echo "<div>Access granted.</div>";
            }

            // $check variable is false, access denied.
            else{
                echo "<div>Access denied. <a href='login.php'>Back.</a></div>";
            }

        }

        // no rows returned, access denied
        else{
            echo "<div>Access denied. <a href='login.php'>Back.</a></div>";
        }

    }
        //to handle error
    catch(PDOException $exception){
        echo "Error: " . $exception->getMessage();
    }


}

<?php



require_once __DIR__.'/../../vendor/autoload.php';
$sql_config = include(__DIR__ . '/../../config/db_params.php');

use src\classes\PdoProvider;
use src\classes\User;
use src\classes\DatabaseUserManager;
use src\classes\Exceptions\UserNotExistsException;

try{

    $formUserMail = "rjsanchezestevez@gmail.com";
    $formUserPassword = "123456";

    $dbConection = new PdoProvider($sql_config);
    $databaseUser = new DatabaseUserManager(new User(), $dbConection);
    $user = $databaseUser->getUser($formUserMail);

    var_dump($user);


}catch(PDOException $exception){
    echo "Error: " . $exception->getMessage();
}catch(UserNotExistsException $exception){
    echo "Error: " . $exception->getMessage();
}

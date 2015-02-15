<?php
require_once __DIR__.'/../../vendor/autoload.php';
$sql_config = include(__DIR__ . '/../../config/db_params.php');
$login_config = include(__DIR__ . '/../../config/login_params.php');
require_once __DIR__.'/../lib/password.php';//libreria compatibilidad php 5.4

use src\classes\PdoAdapter;
use src\classes\DatabaseUserManager;
use src\classes\Exceptions\InvalidRequestMethodException;
use src\classes\RequestMethodFactory;
use src\classes\DBUserRepository;
use src\classes\User;


try {



    $requestMethodFactory = new RequestMethodFactory();
    $requestMethod = $requestMethodFactory->getRequestMethod();

    $formUserMail = $requestMethod->getUserMail();
    $formUserPassword = $requestMethod->getUserPassword();

    $dbConection = new PdoAdapter($sql_config);

    $hashedPassword = password_hash($formUserPassword, PASSWORD_BCRYPT);

    $newUser = new User($formUserMail, $hashedPassword);
    $databaseUser = new DBUserRepository($dbConection);
    $databaseUser->saveUser($newUser);

    $requestMethod->RegistrationResponse($login_config);


}catch(PDOException $exception){
    echo "Error: " . $exception->getMessage();
}catch(InvalidRequestMethodException $exception){
    echo "Error: " . $exception->getMessage()."\n\n";
    header("Location: ".$login_config['redirectErrorRegister']);
}



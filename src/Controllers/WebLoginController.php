<?php
require_once __DIR__.'/../../vendor/autoload.php';
$sql_config = include(__DIR__ . '/../../config/db_params.php');
$login_config = include(__DIR__ . '/../../config/login_params.php');

use src\classes\MysqlUserStorage;
use src\classes\UserLoginUseCase;
use src\classes\PostRequestMethod;
use src\classes\Exceptions\InvalidUserCredentialsException;


try {


    $requestMethod = new PostRequestMethod();
    $formUserMail = $requestMethod->getUserMail();
    $formUserPassword = $requestMethod->getUserPassword();


    $mysqlUserStorage = new MysqlUserStorage($sql_config["host"], $sql_config["database"], $sql_config["user"], $sql_config["password"]);
    $userLoginUseCase = new UserLoginUseCase($mysqlUserStorage);
    $userLoginUseCase->execute($formUserMail, $formUserPassword);


    header("Location: ".$login_config['redirectAfterLogin']);


}catch(InvalidUserCredentialsException $exception)
{
    header("Location: ".$login_config['redirectErrorLogin']);
   // echo "Error: " . $exception->getMessage()."\n\n";
}


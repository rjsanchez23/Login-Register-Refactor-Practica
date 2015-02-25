<?php
require_once __DIR__.'/../vendor/autoload.php';
$sql_config = include(__DIR__ . '/../config/db_params.php');
$login_config = include(__DIR__ . '/../config/login_params.php');



use src\classes\exceptions\InvalidRequestMethodException;
use src\classes\request\PostRequestMethod;
use src\classes\response\PostResponseMethod;
use src\classes\storage\MysqlUserStorage;
use src\classes\UserRegisterUseCase;

try {

    $requestMethod = new PostRequestMethod();
    $formUserMail = $requestMethod->getUserMail();
    $formUserPassword = $requestMethod->getUserPassword();

    $mysqlUserStorage = new MysqlUserStorage($sql_config["host"], $sql_config["database"], $sql_config["user"], $sql_config["password"]);
    $userLoginUseCase = new UserRegisterUseCase($mysqlUserStorage);
    $userLoginUseCase->execute($formUserMail, $formUserPassword);

    $responseHandler = new PostResponseMethod();
    $responseHandler->response("Successful registration.","home.twig.php");

}catch(InvalidRequestMethodException $exception){
    echo "Error: " . $exception->getMessage()."\n\n";
    header("Location: ".$login_config['redirectErrorRegister']);
}



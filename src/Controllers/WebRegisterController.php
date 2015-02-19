<?php
require_once __DIR__.'/../../vendor/autoload.php';
$sql_config = include(__DIR__ . '/../../config/db_params.php');
$login_config = include(__DIR__ . '/../../config/login_params.php');
require_once __DIR__.'/../lib/password.php';//libreria compatibilidad php 5.4


use src\classes\Exceptions\InvalidRequestMethodException;
use src\classes\PostRequestMethod;
use src\classes\MysqlUserStorage;
use src\classes\UserRegisterUseCase;

try {

    $requestMethod = new PostRequestMethod();
    $formUserMail = $requestMethod->getUserMail();
    $formUserPassword = $requestMethod->getUserPassword();

    $mysqlUserStorage = new MysqlUserStorage($sql_config["host"], $sql_config["database"], $sql_config["user"], $sql_config["password"]);
    $userLoginUseCase = new UserRegisterUseCase($mysqlUserStorage);
    $userLoginUseCase->execute($formUserMail, $formUserPassword);

    header("Location: ".$login_config['redirectAfterRegister']);

}catch(InvalidRequestMethodException $exception){
    echo "Error: " . $exception->getMessage()."\n\n";
    header("Location: ".$login_config['redirectErrorRegister']);
}



<?php
require_once __DIR__.'/../../vendor/autoload.php';
$sql_config = include(__DIR__ . '/../../config/db_params.php');
$login_config = include(__DIR__ . '/../../config/login_params.php');


use src\classes\Exceptions\InvalidRequestMethodException;
use src\classes\Exceptions\InvalidUserCredentialsException;
use src\classes\MysqlUserStorage;
use src\classes\UserLoginUseCase;
use src\classes\ConsoleRequestMethod;


try {

    $requestMethod = new ConsoleRequestMethod();

    $formUserMail = $requestMethod->getUserMail();
    $formUserPassword = $requestMethod->getUserPassword();


    $mysqlUserStorage = new MysqlUserStorage($sql_config["host"], $sql_config["database"], $sql_config["user"], $sql_config["password"]);
    $userLoginUseCase = new UserLoginUseCase($mysqlUserStorage);
    $userLoginUseCase->execute($formUserMail, $formUserPassword);

    echo "Access granted.";
}
catch(InvalidRequestMethodException $exception)
{
    echo "Error: " . $exception->getMessage()."\n\n";
}
catch(InvalidUserCredentialsException $exception)
{
    echo "Error: " . $exception->getMessage()."\n\n";
}


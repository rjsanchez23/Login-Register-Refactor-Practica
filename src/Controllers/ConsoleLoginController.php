<?php
require_once __DIR__.'/../../vendor/autoload.php';
$sql_config = include(__DIR__ . '/../../config/db_params.php');
$login_config = include(__DIR__ . '/../../config/login_params.php');


use src\classes\exceptions\InvalidRequestMethodException;
use src\classes\exceptions\InvalidUserCredentialsException;
use src\classes\storage\MysqlUserStorage;
use src\classes\UserLoginUseCase;
use src\classes\request\ConsoleRequestMethod;
use src\classes\response\ConsoleResponseMethod;


try {

    $requestMethod = new ConsoleRequestMethod();

    $formUserMail       = $requestMethod->getUserMail();
    $formUserPassword   = $requestMethod->getUserPassword();


    $mysqlUserStorage = new MysqlUserStorage($sql_config["host"], $sql_config["database"], $sql_config["user"], $sql_config["password"]);
    $userLoginUseCase = new UserLoginUseCase($mysqlUserStorage);
    $userLoginUseCase->execute($formUserMail, $formUserPassword);

    $responseHandler = new ConsoleResponseMethod();
    $responseHandler->response("Access granted.");
}
catch(InvalidRequestMethodException $exception)
{
    echo "Error: " . $exception->getMessage()."\n\n";
}
catch(InvalidUserCredentialsException $exception)
{
    echo "Error: " . $exception->getMessage()."\n\n";
}


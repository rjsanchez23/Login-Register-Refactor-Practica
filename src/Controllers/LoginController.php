<?php
require_once __DIR__.'/../../vendor/autoload.php';
$sql_config = include(__DIR__ . '/../../config/db_params.php');
$login_config = include(__DIR__ . '/../../config/login_params.php');

use src\classes\PdoAdapter;
use src\classes\DBUserRepository;
use src\classes\PasswordManager;
use src\classes\defaultVerifyPasswordStrategy;
use src\classes\oldVerifyPasswordStrategy;
use src\classes\Exceptions\InvalidRequestMethodException;
use src\classes\RequestMethodFactory;


try {


    $requestMethodFactory = new RequestMethodFactory();
    $requestMethod = $requestMethodFactory->getRequestMethod();

    $formUserMail = $requestMethod->getUserMail();
    $formUserPassword = $requestMethod->getUserPassword();

    $dbConection = new PdoAdapter($sql_config);
    $dbUserRepository = new DBUserRepository($dbConection);
    $dbUser = $dbUserRepository->getStoredUser($formUserMail);


    $passwordManager = new PasswordManager();
    $isValidUser = $passwordManager->isValidPassword($formUserPassword, $dbUser->getPassword());

    $requestMethod->LoginResponse($login_config, $isValidUser);


}
catch(PDOException $exception)
{
    echo "Error: " . $exception->getMessage()."\n\n";
}
catch(InvalidRequestMethodException $exception)
{
    echo "Error: " . $exception->getMessage()."\n\n";
}


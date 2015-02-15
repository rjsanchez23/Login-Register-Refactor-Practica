<?php
require_once __DIR__.'/../../vendor/autoload.php';
$sql_config = include(__DIR__ . '/../../config/db_params.php');
$login_config = include(__DIR__ . '/../../config/login_params.php');

use src\classes\PdoProvider;
use src\classes\UserDatabase;
use src\classes\PasswordValidation;
use src\classes\defaultVerifyPasswordStrategy;
use src\classes\oldVerifyPasswordStrategy;
use src\classes\Exceptions\UserNotExistsException;
use src\classes\Exceptions\IncorrectPasswordException;
use src\classes\Exceptions\InvalidRequestMethodException;
use src\classes\RequestMethodFactory;


try {


    $requestMethodFactory = new RequestMethodFactory();
    $requestMethod = $requestMethodFactory->getRequestMethod();

    $formUserMail = $requestMethod->getUserMail();
    $formUserPassword = $requestMethod->getUserPassword();

    $dbConection = new PdoProvider($sql_config);
    $databaseUser = new UserDatabase($dbConection);
    $databaseUser->setStoredUserIfExists($formUserMail);

    $php55validatePasswordStrategy = new DefaultVerifyPasswordStrategy();
    $oldvalidatePasswordStrategy = new OldVerifyPasswordStrategy();

    $passwordValidator = new PasswordValidation($php55validatePasswordStrategy, $oldvalidatePasswordStrategy);
    $passwordValidator->validatePassword($formUserPassword, $databaseUser->getPassword());

    $requestMethod->AcceptedLoginAction($login_config);


}catch(PDOException $exception)
{
    echo "Error: " . $exception->getMessage()."\n\n";
}catch(UserNotExistsException $exception)
{
    echo "Error: " . $exception->getMessage()."\n\n";
    header("Location: ".$login_config['redirectErrorLogin']);
}catch(IncorrectPasswordException $exception)
{
    echo "Error: " . $exception->getMessage()."\n\n";
    header("Location: ".$config['redirectErrorLogin']);
}catch(InvalidRequestMethodException $exception)
{
    echo "Error: " . $exception->getMessage()."\n\n";
    header("Location: ".$login_config['redirectErrorLogin']);
}


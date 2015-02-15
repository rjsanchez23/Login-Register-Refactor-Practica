<?php

require_once __DIR__.'/../../vendor/autoload.php';


use src\classes\PasswordManager;
use src\classes\Exceptions\IncorrectPasswordException;
use src\classes\defaultVerifyPasswordStrategy;
use src\classes\oldVerifyPasswordStrategy;


try{

    $formUserPassword = "123456";
    $databaseUserPassword = '$2a$08$I7S86uu2S55SalarTmMp2uG.beeaAiE8t4c137.FyRR1.IRla9.cK';

    $php55validatePasswordStrategy = new DefaultVerifyPasswordStrategy();
    $oldvalidatePasswordStrategy = new OldVerifyPasswordStrategy();

    $passwordValidator = new PasswordManager($php55validatePasswordStrategy, $oldvalidatePasswordStrategy);
    $passwordValidator->validatePassword($formUserPassword, $databaseUserPassword);
    echo "Correct Password";




}catch(IncorrectPasswordException $exception){
    echo "Error: " . $exception->getMessage();
}

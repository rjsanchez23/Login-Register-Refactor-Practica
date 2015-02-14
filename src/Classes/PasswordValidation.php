<?php


namespace src\classes;

use src\classes\Exceptions\IncorrectPasswordException;
use src\classes\Interfaces\IVerifyPasswordStrategy;



class PasswordValidation
{

    private $defaultVerityPasswordStrategy;
    private $oldVerifyPasswordStrategy;

    public function __construct(IVerifyPasswordStrategy $defaultVerityPasswordStrategy, IVerifyPasswordStrategy $oldVerifyPasswordStrategy){
        $this->defaultVerityPasswordStrategy = $defaultVerityPasswordStrategy;
        $this->oldVerifyPasswordStrategy = $oldVerifyPasswordStrategy;
    }
    public function validatePassword($formUserPassword, $storedUserPassword)
    {

        $passwordValidateCommon = $this->defaultVerityPasswordStrategy->password_validate($formUserPassword, $storedUserPassword);
        $passwordValidateOld = $this->oldVerifyPasswordStrategy->password_validate($formUserPassword, $storedUserPassword);

        if (!$passwordValidateCommon && ! $passwordValidateOld) {
            throw new IncorrectPasswordException();
        }
    }

    public function hashPassword($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }



}

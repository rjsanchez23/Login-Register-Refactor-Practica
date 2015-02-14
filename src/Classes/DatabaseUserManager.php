<?php


namespace src\classes;

use src\classes\Exceptions\UserNotExistsException;
use src\classes\Interfaces\IUserManager;

class DatabaseUserManager implements IUserManager{

    private $dbConection;
    private $user;


    public function __construct($user, $dbConection)
    {
        $this->user = $user;
        $this->dbConection = $dbConection;

    }
    public function getUser($userMail)
    {

        $this->user->setMail($userMail);

        if(!$this->userExists()){
            throw new UserNotExistsException();
        }

        $userRow = $this->getUserFromDatabase();
        $this->user->setPassword($userRow["password"]);
        return $this->user;

    }

    public function userExists()
    {
        return $this->findUser()->rowCount() > 0;
    }

    private function findUser()
    {
        $params = [
            1 => $this->user->getMail()
        ];

        $query = "select email, password from users where email = ? limit 0,1";
        $stmt = $this->dbConection->runQuery($query, $params);
        return $stmt;

    }

    private function getUserFromDatabase()
    {
        $stmt = $this->findUser();
        return $this->dbConection->nextRow($stmt);
    }

    public function save()
    {
        $params = [
            1 => $this->user->getMail(),
            2 => $this->user->getPassword(),
        ];

        $query = "INSERT INTO users SET email = ?, password = ?";
        $stmt = $this->dbConection->runQuery($query, $params);
        return $stmt;

    }

}
<?php


namespace src\classes;


use src\classes\Interfaces\UserRepositoryInterface;


class DBUserRepository implements UserRepositoryInterface{

    private $dbConection;



    public function __construct($dbConection)
    {

        $this->dbConection = $dbConection;
    }
    public function getStoredUser($userMail)
    {

        if(!$this->userExists($userMail)){
            return new User($userMail,null);
        }

        $userRow = $this->getUserFromDatabase($userMail);
        return new User($userMail,$userRow["password"]);

    }

    private function userExists($userMail)
    {
        return $this->findUser($userMail)->rowCount() > 0;
    }

    private function findUser($userMail)
    {
        $params = [
            1 => $userMail
        ];

        $query = "select email, password from users where email = ? limit 0,1";
        $stmt = $this->dbConection->runQuery($query, $params);
        return $stmt;

    }

    private function getUserFromDatabase($userMail)
    {
        $stmt = $this->findUser($userMail);
        return $this->dbConection->nextRow($stmt);
    }

    public function saveUser(User $user)
    {
        $params = [
            1 => $user->getMail(),
            2 => $user->getPassword(),
        ];

        $query = "INSERT INTO users SET email = ?, password = ?";
        $stmt = $this->dbConection->runQuery($query, $params);
        return $stmt;

    }

}
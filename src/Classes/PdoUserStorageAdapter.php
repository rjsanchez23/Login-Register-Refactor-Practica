<?php

namespace src\classes;

use src\classes\Exceptions\InvalidUserCredentialsException;
use src\classes\Interfaces\UserStorageInterface;
use src\lib\PasswordHash;

Abstract class PdoUserStorageAdapter implements UserStorageInterface
{
	protected $host;
	protected $database;
	protected $user;
	protected $password;
	protected $db;

	const SALT = "ilovecodeofaninjabymikedalisay";

	public function __construct($host = null, $database = null, $user = '', $password = '')
	{
		$this->host = $host;
		$this->database = $database;
		$this->user = $user;
		$this->password = $password;
	}

	public function find($userEmail){

		$this->initDB();
		$query = "select email, password from users where email = :userEmail limit 0,1";
		$stmt = $this->db->prepare( $query );

		$stmt->bindParam(":userEmail", $userEmail);

		$stmt->execute();
		$userRow = $stmt->fetch(\PDO::FETCH_ASSOC);
		if(!$userRow){
			echo "error2";
			exit();
			throw new InvalidUserCredentialsException;
		}
		return $userRow;
	}

	public function save($userEmail, $password){
		$this->initDB();
		$query = "INSERT INTO users SET email = :userEmail, password = :password";
		$stmt = $this->db->prepare( $query );

		$stmt->bindParam(":userEmail", $userEmail);
		$stmt->bindParam(":password", $password);

		return $stmt->execute();
	}

	public function IsValidPassword($formUserPassword, $storedUserPassword)
	{

		if($storedUserPassword == null){
			return false;
		}


		$isValidPasswordphp55Hash = password_verify($formUserPassword, $storedUserPassword);
		$isValidPasswordHash = $this->originalPasswordHashValidate($formUserPassword, $storedUserPassword);

		if(!$isValidPasswordphp55Hash && !$isValidPasswordHash){
			throw new InvalidUserCredentialsException;
		}
	}

	public function hashPassword($password)
	{
		return password_hash($password, PASSWORD_BCRYPT);
	}

	public function originalPasswordHashValidate($formUserPassword, $storedUserPassword)
	{
		$saltedPostedPassword = self::SALT . $formUserPassword;
		$hasher = new PasswordHash(8,false);
		return $hasher->CheckPassword($saltedPostedPassword, $storedUserPassword);
	}

	abstract protected function initDB();

}
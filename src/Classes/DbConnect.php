<?php

use src\classes\PDO_Provider;

class PdoConector
{

	private $hostname = 'localhost';
	private $username = 'root';
	private $password = 'root';
	private $dbName = 'lomas';

	public $dbh = NULL;

	public function __construct(PDO $pdo){ // Default Constructor
		try{
			$this->dbh = new PDO("mysql:host=$this->hostname;dbname=$this->dbName;charset=utf8", $this->username, $this->password);
			$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			/*** echo a message saying we have connected ***/
			//echo 'Connected to database'; // Test with this string
		}catch(PDOException $e){
			//echo __LINE__.$e->getMessage();
		}
	}

	public function __destruct(){
		$this->dbh = NULL; // Setting the handler to NULL closes the connection propperly
	}



}
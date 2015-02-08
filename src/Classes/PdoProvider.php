<?php

namespace src\classes;

final class PdoProvider extends \PDO
{
	private $host = 'localhost';
	private $user = 'root';
	private $password = 'root';
	private $database = 'practica';

	public function __construct()
	{
		try {
			parent::__construct(sprintf('mysql: host=%s; dbname=%s', $this->host, $this->database), $this->user, $this->password);

			$this->setAttribute(parent::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES UTF8');
			$this->setAttribute(parent::ATTR_ERRMODE, parent::ERRMODE_EXCEPTION);
			$this->setAttribute(parent::ATTR_EMULATE_PREPARES, false);
			$this->setAttribute(parent::ATTR_DEFAULT_FETCH_MODE, parent::FETCH_ASSOC);

		} catch(PDOException $e) {

			die($e->getMessage());
		}
	}
}
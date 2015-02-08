<?php


final class PDO_Provider extends PDO
{
	/**
	 * Constructor. Inits PDO
	 *
	 * @param array $params
	 * @return void
	 */
	public function __construct(array $params)
	{
		try {

			extract($params);

			parent::__construct(sprintf('mysql: host=%s; dbname=%s', $host, $database), $user, $password);

			$this->setAttribute(parent::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES UTF8');
			$this->setAttribute(parent::ATTR_ERRMODE, parent::ERRMODE_EXCEPTION);
			$this->setAttribute(parent::ATTR_EMULATE_PREPARES, false);
			$this->setAttribute(parent::ATTR_DEFAULT_FETCH_MODE, parent::FETCH_ASSOC);

		} catch(PDOException $e) {

			die($e->getMessage());
		}
	}
}
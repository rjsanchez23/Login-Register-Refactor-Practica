<?php

namespace src\classes;

final class PdoAdapter extends \PDO
{

	public function __construct(Array $sql_config)
	{
		try {
			parent::__construct(sprintf('mysql: host=%s; dbname=%s', $sql_config["host"], $sql_config["database"]), $sql_config["user"], $sql_config["password"]);

			$this->setAttribute(parent::ATTR_ERRMODE, parent::ERRMODE_EXCEPTION);
			$this->setAttribute(parent::ATTR_DEFAULT_FETCH_MODE, parent::FETCH_ASSOC);

		} catch (PDOException $e) {

			die($e->getMessage());
			echo "error";
		}
	}

	public function runQuery($query, $params){
		$stmt = $this->prepare( $query );
		foreach ($params as $key => &$value) {
			$stmt->bindParam( $key, $value);
		}
		$stmt->execute();
		return $stmt;
	}

	public function nextRow($stmt){
		return $stmt->fetch(\PDO::FETCH_ASSOC);

	}

}
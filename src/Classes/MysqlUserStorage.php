<?php

namespace src\classes;


final class MysqlUserStorage extends PdoUserStorageAdapter{



    protected function initDB(){

        try {
            if ($this->db === null) {
                $this->db = new \PDO("mysql:dbname={$this->database};host={$this->host}", $this->user, $this->password);
            }
        }catch(PDOException $exception){

            echo "Error: " . $exception->getMessage()."\n\n";
        }
    }
}
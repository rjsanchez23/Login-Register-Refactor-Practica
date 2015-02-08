<?php
$host = "localhost";
$db_name = "practica";
$username = "root";
$password = "root";

try {
	$dbConection = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}

//to handle connection error
catch(PDOException $exception){
	echo "Connection error: " . $exception->getMessage();
}

<?php

$sql_config = array(
    'host'          =>  'localhost',
    'user'          =>  'root',
    'password'      =>  'root',
    'database'      =>  'practica',
);

// <- Or you can include that, like
$sql_config = include(__DIR__ . '/core/db_params.php');

$pdoProvider = new PDO_Provider($sql_config);

$user = new User_Login($pdoProvider); // the
<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'bambo');
define('DB_PASS', 'bambo');
define('DB_NAME', 'php_dev');


$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($conn->connect_error){
    die('Connection Failed' . $conn->connect_error);
}

// echo 'CONNECTED';

?>
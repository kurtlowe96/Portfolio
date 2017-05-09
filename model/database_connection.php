<?php

$database_user = "root";
$database_pass = "euNXQtKVWoQjGGohkm";

try {
    $db_connection = new PDO('mysql:host=localhost;dbname=portfolio', $database_user, $database_pass);
    $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $ex) {
    $connection_error = $ex->getMessage();
    include('../view/connection_error.php');
    exit();
}
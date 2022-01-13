<?php 

$dsn = "mysql";
$host = "localhost";
$port = "3306";
$dbname = "nm_reflection";
$user = "root";
$pass = "";

try {
    $db = new PDO("$dsn:host=$host;port=$port;dbname=$dbname", $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch (Exception $e) {
    echo "Unable to connect - ";
    echo $e->getMessage();
    exit;
}
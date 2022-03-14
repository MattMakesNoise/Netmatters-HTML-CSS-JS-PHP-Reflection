<?php 
//========================= LOCALHOST - UNCOMMENT BEFORE USING ON STAGIN ========================//
$dsn = "mysql";
$host = "localhost";
$port = "3306";
$dbname = "nm_reflection";
$user = "root";
$pass = "";
//========================= LIVE - UNCOMMENT BEFORE UPLOADING TO SERVER =========================//
// $dsn = "mysql";
// $host = "localhost";
// $port = "3306";
// $dbname = "matthewj_nm_reflection";
// $user = "matthewj_matthewjones";
// $pass = "9cNF76H7mg5e";

try {
    $db = new PDO("$dsn:host=$host;port=$port;dbname=$dbname", $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Unable to connect - ";
    echo $e->getMessage();
    exit;
}